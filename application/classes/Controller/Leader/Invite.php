<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Leader_Invite extends Controller_Leader_Base
{

    /*

    generate invitation code and save to database


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

            // $time = $time*60;   //change miniutes to second

            $group_id = Model_Groups::find_by_id($group);

            if ($group_id) {

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



     public function action_new()
    {
        $this->view = 'Invitationcode/test';
        $code = new Model_InvitationCode;
        $this->template_data['problem'] = $problem;
        $this->template_data['title'] = __('admin.problem.edit.new_problem');



    }



 public function action_edit($pid = null)
    {
        if ( ! $pid )
            $pid = $this->request->param('id', null);

        if ( $pid )
        {
            $problem = Model_Problem::find_by_id($pid);
            if ( ! $problem )
                throw new Exception_Page(__('common.problem_not_found'));
        } else {
            $problem = new Model_Problem;
        }

        if ( $this->request->is_post() )
        {
            $post = $this->cleaned_post();
            $problem->update($post);

            $problem->spj = Model_Problem::JUDGE_NORMAL;
            if (array_key_exists('spj', $post))
                $problem->spj = Model_Problem::JUDGE_SPECIAL;
            $problem->save();
        }
        $this->template_data['title'] =
            __('admin.problem.edit.edit_:id_:name',
                array(':id' => $problem['problem_id'],
                      ':name' => $problem['title']));
        $this->template_data['problem'] = $problem;
    }



    public function action_index()
    {
        $this->view = 'leader/invite/list';
        $this->action_list();
    }

    // public function action_list()
    // {
    //     $page = $this->request->param('id', 1);

    //     $filter = array();
    //     $orderby = array(
    //         Model_InvitationCode::$primary_key => Model_Base::ORDER_DESC
    //     );
    //     $problem_list = Model_InvitationCode::find($filter, $page, OJ::per_page, $orderby);

    //     $this->template_data['pages'] = ceil(intval(Model_InvitationCode::count($filter)) / OJ::per_page);
    //     $this->template_data['problem_list'] = $problem_list;
    //     $this->template_data['title'] = __('user.register.invitation');
    // }

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


    public function action_show()
    {
        // initial
        $pid = $this->request->param('id', null);

        $problem = Model_Problem::find_by_id($pid);
        $current_user = $this->get_current_user();

        if ( $problem AND $problem->can_user_access($current_user) )
        {
            //TODO: is defunct problem can access?
            $this->template_data['title'] = $problem['title'];
            $this->template_data['problem'] = $problem;
        } else {
            throw new Exception_Page(__('common.problem_not_found'));
        }
    }

    public function action_submit()
    {
        $current_user = $this->check_login();

        if ( $this->request->is_post() ) {
            $pid = $this->get_post('pid');
            $cid = $this->get_post('cid', null);
            $cpid = $this->get_post('cpid', -1);

            // if no pid, then it should be contest

            // if contest id set, then this submit a contest problem
            if ( $cid AND $cpid !== -1)
            {
                $contest = Model_Contest::find_by_id($cid);
                if ( $contest AND $contest->can_user_access($current_user) )
                {
                    $problem = $contest->problem($cpid);
                    if ( !$problem )
                    {
                        throw new Exception_Page(__('common.problem_not_found'));
                    }
                } else {
                    throw new Exception_Page(__('common.contest_not_found'));
                }
            } else {
                // so is normal submit
                $problem = Model_Problem::find_by_id($pid);

                if ( ! $problem OR !$problem->can_user_access($current_user) )
                {
                    throw new Exception_Page(__('common.problem_not_found'));
                }
            }

            $last_submission = $current_user->get_last_submission();
            if ($last_submission) {
                $d_start = strtotime($last_submission);
                $d_end = time();
                $limitation = OJ::get_submit_time();
                if ($d_end - $d_start < $limitation) {
                    throw new Exception_Page(__('common.too_quick_:sec', array(':sec' => $limitation)));
                }
            }

            $source_code = $this->get_raw_post('source');
            $lang = $this->get_post('language');

            $solution = Model_Solution::create($current_user, $problem, $lang, $source_code);

            if ( $cid )
            {
                // set contest info
                $solution->contest_id = $cid;
                $solution->num = $cpid;
            }
            $solution->save();

            // set user favorite language
            $current_user->language = $lang;
            $current_user->save();

            $this->redirect('/status');
            return;
        } else {
            $pid = $this->request->param('id', null);
            $this->template_data['pid'] = OJ::clean_data($pid);
        }

        $this->template_data['cid'] = $this->get_query('cid', null);
        $this->template_data['cpid'] = $this->get_query('pid', null);

        $this->template_data['default_lang'] = $current_user->language;

        $this->template_data['title'] = __('problem.submit.submit_code');
    }

    public function action_summary()
    {
        // init
        $problem_id = $this->request->param('id');
        $problem = Model_Problem::find_by_id($problem_id);
        $page = $this->get_query('page', 1);
        $per_page = OJ::per_page;

        $current_user = $this->get_current_user();

        if ( ! $problem OR ! $problem->can_user_access($current_user) )
            throw new Exception_Page(__('common.problem_not_found'));

        $this->template_data['problem_id'] = $problem_id;
        $this->template_data['start_rank'] = $per_page * ($page - 1);
        $this->template_data['summary'] = $problem->summary();
        $this->template_data['total'] = ceil($this->template_data['summary']['submit_user'] / $per_page);
        $this->template_data['solutions'] = $problem->best_solution($page-1, $per_page);

        $this->template_data['title']
            = __('problem.summary.summary_of_:id', array(':id' => $problem_id));

    }

    public function action_search()
    {
        // init
        $text = $this->get_query('text');
        $area = $this->get_query('area');

        if ($text === NULL) {
            // TODO: add better handler
            $this->action_list();
        }

        // TODO: validation
        $list = Model_Problem::search($text, $area);

        $this->template_data['area'] = $area;
        $this->template_data['search_text'] = $text;
        $this->template_data['problemlist'] = $list;
        $this->template_data['title']
            = __(':text_search_result', array(':text' => $text));
    }

} // End Welcome
