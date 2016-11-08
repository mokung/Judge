<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Problem extends Controller_Base
{
    public function action_index()
    {
        $this->view = 'problem/userlist';
        $this->action_list();
    }


    /*
    author : zhang zexiang
    function : stage problem list
    date : 2016.11.5 09:57
     */
    public function action_list()
    {
        $this->view = 'problem/userlist';
        $title = __('haha');
        $this->template_data['title'] = $title;


         $current_user = $this->get_current_user();
         $current_user_group = $current_user->group_id;
         $current_user_stage = $current_user->stage;


         //if this user group has configed

         $current_user_group_config = Model_GroupConfig::find_by_id($current_user_group);
         if($current_user_group_config){

            $stage_num = $current_user_group_config->stage_num;
            $stage_level = unserialize($current_user_group_config->stage_level);
            $pass_num = unserialize($current_user_group_config->pass_num);
            $show_num = unserialize($current_user_group_config->show_num);

            $current_problem_level = $stage_level[$current_user_stage];
            $current_show_num = $show_num[$current_user_stage];

            $this->template_data['current_problem_level'] = $current_problem_level;

            $current_problem = Model_UsersProblem::find_current_problem($current_user->user_id, $current_user_stage);

            $num = count($current_problem);

            $this->template_data['current_problem_level'] = $current_problem;

            if($num == 0){

                $problemlist = $this->action_generate($current_problem_level,$current_show_num, $current_user, $current_user_group_config,$current_problem);

            }else{

                $all_stage_problem = array();

                foreach ($current_problem as $key) {
                    # code...
                    array_push($all_stage_problem,Model_Problem::find_by_id($key));
                }
                $this->template_data['num'] = $all_stage_problem;
            }

         }else{
            $this->flash_error("this group no confige !");
         }

    }

    /*
    author : zhang zexiang
    funtion : random generate current problem list
    date : 2016.11.6 22:50
    */


   public function action_generate($current_problem_level,$current_show_num,$current_user, $current_user_group_config,$current_problem)
   {
        $all_leve_problem = Model_UsersProblem::find_level_problem($current_problem_level);
        $this->template_data['all_leve_problem'] = $all_leve_problem[0]['title'];
        $current_user_stage = $current_user->stage;


        $num = count($all_leve_problem);
        $this->template_data['num'] = $num;

        $stage_level = unserialize($current_user_group_config->stage_level);


        $diff = array();


        foreach ($stage_level as $key => $value) {
            # code...
            if($current_user_stage > $key)
            {
                if($value == $current_problem_level)
                {
                    $diff_tmp = array();
                    $diff_tmp = Model_UsersProblem::find_current_problem($current_user->user_id, $key);

                    foreach ($diff_tmp as $key) {
                        # code...
                        array_push($diff, $key['problem_id']);
                    }
                }
            }
        }




        $current_problem_array = array();
        foreach ($all_leve_problem as $key) {
            # code...
            array_push($current_problem_array, $key['problem_id']);

        }


        $left_level_problem = array_diff($current_problem_array,$diff);
        $this->template_data['left_level_problem'] = $left_level_problem;



        if($num < $current_show_num)    // if all this level problem number < need to show number
        {




        } else{
                // $problemlist = Model_UsersProblem::UniqueRandomNumbersWithinRange(0,$num-1,$current_show_num);

                $problemlist = array_rand($left_level_problem,$current_show_num);

            array_multisort($problemlist);
            $this->template_data['num'] = $problemlist;
        }

        $problem_array = array();
        $problem_id_array = array();

        foreach ($problemlist as $key) {
            # code...
            array_push($problem_array, $all_leve_problem[$key]);
            array_push($problem_id_array, $all_leve_problem[$key]['problem_id']);

            $users_problem = new Model_UsersProblem;
            $users_problem->user_id = $current_user->user_id;
            $users_problem->problem_id = $all_leve_problem[$key]['problem_id'];
            $users_problem->stage = $current_user->stage;

            $users_problem->save();

        }


        $this->template_data['num'] = $problem_id_array;

   }

   /*
   author : zhang zexiang
   funtion : next stage show
   date : 2016.11.8 08:50
   */

  public function next_stage()
  {
    $current_user = $this->get_current_user();
    $current_user_group = $current_user->group_id;
    $current_user_stage = $current_user->stage;

    //count this user this stage pass number
  }

    // public function action_list()
    // {
    //     $default_page = Session::instance()->get('volume', 1);
    //     // get user last volume
    //     $current_user = $this->get_current_user();
    //     if ( $current_user )
    //     {
    //         $default_page = $current_user->get_last_volume();
    //     }

    //     $page = $this->request->param('id', $default_page);
    //     // save current volume
    //     Session::instance()->set('volume', $page);

    //     $total_volumes = Model_Problem::number_of_volume();

    //     $page = e::adjust_scope($page, $total_volumes);

    //     $this->template_data['problemlist'] = Model_Problem::problems_for_volume($page);

    //     $title = __('problem.list.problem_set_:id', array(':id' => $page));
    //     $this->template_data['title'] = $title;

    //     $this->template_data['page'] = $page;
    //     $this->template_data['pages'] = $total_volumes;
    // }

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
