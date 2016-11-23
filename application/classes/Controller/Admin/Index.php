<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Index extends Controller_Admin_Base
{

    public function action_index()
    {
        $this->template_data['title'] = __('admin.index.index.dashboard');

        $user = $this->get_current_user();

        $mycache = new Memcache;
        $mycache->connect('127.0.0.1', 11211);
        $allcode = Model_InvitationCode::getMemcacheKeys($mycache);

        //process : get detail data from memocache by all key
        $current_user_code = array();

        foreach ($allcode as $key) {
            if(strpos($key,$user->user_id) == 0)
            {
                $mycache = new Memcache;
                $mycache->connect('127.0.0.1', 11211);

                array_push($current_user_code, $mycache->get($key));
            }
        }
        $this->template_data['allcode'] =$current_user_code;




        //show all group id

        $all_group_id = Model_Groups::find_all_groupid();

        $this->template_data['all_group_id'] = $all_group_id;


    }

    public function action_rejudge()
    {
        if ( $this->request->is_post() ) {
            $type = $this->get_post('type');
            $id = intval($this->get_post('typeid'));

            if ($type == 'PROBLEM') {
                $problem = Model_Problem::find_by_id($id);
                if ( $problem )
                {
                    $problem->rejudge();
                    $this->flash_info(__('common.rejudge_:problem',
                        array(':problem' => $problem->problem_id)));
                }
            } else if ($type == 'SOLUTION') {
                $solution = Model_Solution::find_by_id($id);
                if ( $solution )
                {
                    $solution->rejudge();
                    $this->flash_info(__('common.rejudge_:runid',
                        array(':runid' => $solution->solution_id)));
                }
            }
        }
        $this->redirect('/admin/');
    }



    /*
    author : zhang zexiang
    function : generate invitation code and save to database
    */

    public function action_code()
        {


            $user = $this->get_current_user();
            $this->template_data['user'] = $user;



            $this->view = 'admin/index/index';
            $title = "code";
            $this->template_data['title'] = $title;


            $group = Arr::get($_GET,'id');
            $type = Arr::get($_GET,'type');
            $limit = Arr::get($_GET,'num');
            $time = Arr::get($_GET,'time');

            $time = $time*60;   //change miniutes to second

            $group_id = Model_Groups::find_by_id($group);

            if ($group_id) {

                if(Model_GroupConfig::find_by_id($group)==null && $type == 1){
                    $this->flash_info(__('admin.index.group_not_configured'));
                    $this->action_index();
                    return;
                }


                      //generate hashcode(invitationcode) by date
                $incode = Model_InvitationCode::generateRandomString(6);


                 //test
                $this->template_data['code'] = $incode;
                $this->template_data['group_id'] = Arr::get($_GET,'id');
                $this->template_data['type'] = Arr::get($_GET,  'type');
                $this->template_data['limit'] = Arr::get($_GET,'num');
                $this->template_data['time'] = Arr::get($_GET,'time');



                $mycache = new Memcache;
                $mycache->connect('127.0.0.1', 11211);

                //memcache key
                $memkey = $user->user_id.$incode;

                //memcache value
                $data = array('code' => $incode, 'group_id' => $group, 'type' => $type, 'num' => $limit, 'time' => $time, 'cereatetime' =>date("Y-m-d H:i:s") );

                // Save the data to cache, with an id of test_id and a lifetime of 10 minutes

               $mycache->set($memkey, $data, 0, $time);

                $this->template_data['code'] =$incode;


            }else{
                $this->flash_error(array(__('common.group_not_exist')));
            }

            $all_group_id = Model_Groups::find_all_groupid();

            $this->template_data['all_group_id'] = $all_group_id;

            $this->action_index();

        }

    public function action_list()
        {

            $user = $this->get_current_user();

           $mycache = new Memcache;
           $mycache->connect('127.0.0.1', 11211);


           $allcode = Model_InvitationCode::getMemcacheKeys($mycache);

           $current_user_code = array();

           foreach ($allcode as $key) {
               if(strpos($key,$user->user_id) !== false)
                {
                    $mycache = new Memcache;
                    $mycache->connect('127.0.0.1', 11211);
                   array_push($current_user_code, json_encode($mycache->get($key)));
                }

            }

               $mycache = new Memcache;
               $mycache->connect('127.0.0.1', 11211);

           // $this->template_data['allcode'] =json_encode($allcode);
           $this->response->body(json_encode($current_user_code));


        }




}
