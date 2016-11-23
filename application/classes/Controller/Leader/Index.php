<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Leader_Index extends Controller_Leader_Base{

    public function action_index()
    {
        $this->template_data['title'] = __('admin.index.index.dashboard');
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

    public function action_rescore()
    {
        $user_list = Model_User::get_all_users();
        foreach($user_list as $u){
           if($u->is_admin()){//管理员不参与评比
		$u->score = 0;
		$u->save();
		continue;
	   }
           $solutions = $u->ids_of_problem_accept();
	   $point = 0;
           foreach($solutions as $s){
		if($s->problem_id<1000){
		    $point += 1;
		    continue;
                }
                if($s->problem_id<10000){
		    $point += 10;
                    continue;
		}

		if($s->problem_id<100000){
		    $point += 40;
                    continue;
		}
           }
           $u->score = $point - $u->punish;
           $u->save();
        }

        $this->redirect('/leader/');

    }


    /*
    author : zhang zexiang
    function : generate invitation code and save to database
    */
    public function action_code()
        {

            $user = $this->get_current_user();
            $this->template_data['user'] = $user;

            $this->view = 'leader/index/index';
            $title = "code";
            $this->template_data['title'] = $title;

            // $group = Arr::get($_GET,'id');
            $group = $user->group_id;
            // $type = Arr::get($_GET,'type');
            $type = 1;  //for leader type is 1

            $limit = Arr::get($_GET,'num');
            $time = Arr::get($_GET,'time');

            $time = $time*60;   //change miniutes to second

            // $time = $time*60;   //change miniutes to second

            $group_id = Model_Groups::find_by_id($group);


            // if this group not config , then don't allow to generate inveitation code
            if ($group_id) {

                if(Model_GroupConfig::find_by_id($group)==null){
                    $this->flash_info(__('leader.group.configure.no_configure'));
                    return;
                }

                      //generate hashcode(invitationcode) by date
                $incode = Model_InvitationCode::generateRandomString(6);


                 //test
                $this->template_data['code'] = $incode;
                // $this->template_data['group_id'] = Arr::get($_GET,'id');
                // $this->template_data['type'] = Arr::get($_GET,  'type');
                // $this->template_data['limit'] = Arr::get($_GET,'num');
                // $this->template_data['time'] = Arr::get($_GET,'time');

                $mycache = new Memcache;
                $mycache->connect('127.0.0.1', 11211);

                //memcache key
                $memkey = $user->user_id.$incode;

                //memcache value
                $data = array('code' => $incode, 'group_id' => $group, 'type' => $type, 'num' => $limit, 'time' => $time, 'cereatetime' =>date("Y-m-d H:i:s")  );

                // Save the data to cache, with an id of test_id and a lifetime of 10 minutes
                $mycache->set($memkey, $data, 0, $time);

                // $this->action_list();


                $allcode = Model_InvitationCode::getMemcacheKeys($mycache);

                $current_user_code = array();

                foreach ($allcode as $key) {
                    if(strpos($key,$user->user_id) == 0)
                    {
                        array_push($current_user_code, $key);
                    }

                    $this->template_data['code'] =$current_user_code;
                }

                $this->template_data['code'] =$incode;




            }else{
                $this->flash_error(array(__('common.group_not_exist')));
            }

            $all_group_id = Model_Groups::find_all_groupid();

            $this->template_data['all_group_id'] = $all_group_id;

            // $this->action_index();

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

           // $this->template_data['code'] = $current_user_code;
           // $this->template_data['title'] = 'code';

       $this->response->body(json_encode($current_user_code));


    }


}
