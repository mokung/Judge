<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Problem extends Controller_Base
{


    public function before()
    {
        parent::before();

        $this->current_user = $this->check_login();
    }

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
    public function action_listuser()
    {
        $this->view = 'problem/userlist';
        $title = __('problem.list.problem_set_:id', array(':id' => 1));
        $this->template_data['title'] = $title;
        $current_user = $this->get_current_user();

        $stage = Arr::get($_GET,'stage');

        $this->template_data['stages'] = $current_user->stage;
        $this->template_data['stage'] = $stage;

        $current_problem = Model_UsersProblem::find_current_problem($current_user->user_id, $stage);


        if($stage == null || ($stage<($current_user->stage) && count($current_problem)==0 )){



         $current_user_group = $current_user->group_id;
         $current_user_stage = $current_user->stage;

         if($stage != null){
         if($stage<($current_user->stage) && count($current_problem) == 0){

            $current_user_stage = $stage;
         }
     }


         //if this user group has configed

         $current_user_group_config = Model_GroupConfig::find_by_id($current_user_group);
         if($current_user_group_config){

            $stage_num = $current_user_group_config->stage_num;
            $stage_level = json_decode($current_user_group_config->stage_level,true);
            $pass_num = json_decode($current_user_group_config->pass_num,true);
            $show_num = json_decode($current_user_group_config->show_num,true);

            $current_problem_level = $stage_level[$current_user_stage];
            $current_show_num = $show_num[$current_user_stage];

            $this->template_data['current_problem_level'] = $current_problem_level;
            $this->template_data['stage'] = $current_user_stage;

            $current_problem = Model_UsersProblem::find_current_problem($current_user->user_id, $current_user_stage);

            $num = count($current_problem);

            $this->template_data['current_problem_level'] = $current_problem;

            if($num == 0){

                $problemlist = $this->action_generate($current_problem_level,$current_show_num, $current_user, $current_user_group_config,$current_problem,$current_user_stage);

                $current_problem = Model_UsersProblem::find_current_problem($current_user->user_id, $current_user_stage);

                $all_stage_problem = array();

                foreach ($current_problem as $key) {
                    # code...
                    array_push($all_stage_problem,Model_Problem::find_by_id($key));
                }
                $this->template_data['num'] = $all_stage_problem;


            }else{

                $all_stage_problem = array();

                if($current_show_num != $num){
                    $supp = $current_show_num-$num;
                    $supp_id = $this->action_supplement($supp, $current_problem, $current_problem_level,$current_show_num,$current_user);

                    foreach ($supp_id as $key) {
                        # code...
                         array_push($all_stage_problem,Model_Problem::find_by_id($key));
                    }
                }

                foreach ($current_problem as $key) {
                    # code...
                    array_push($all_stage_problem,Model_Problem::find_by_id($key));
                }

                array_multisort($all_stage_problem);
                $this->template_data['num'] = $all_stage_problem;
            }

         }else{
            $this->flash_error(__('common.group_noconfigure'));
         }


     }else {

         # code...
         $current_problem = Model_UsersProblem::find_current_problem($current_user->user_id, $stage);

         if(count($current_problem) > 0)
         {

            $all_stage_problem = array();

            foreach ($current_problem as $key) {
                # code...
                array_push($all_stage_problem,Model_Problem::find_by_id($key));
            }
            $this->template_data['num'] = $all_stage_problem;

         }else {
             # code...
             $this->flash_error(__('user.profile.not_reach_nextstage'));

             $this->go_home();
         }

     }



    }

    /*
    author : zhang zexiang
    funtion : random generate current problem list
    date : 2016.11.6 22:50
    */


   public function action_generate($current_problem_level,$current_show_num,$current_user, $current_user_group_config,$current_problem,$current_user_stage)
   {
        $all_leve_problem = Model_UsersProblem::find_level_problem($current_problem_level);
        $this->template_data['all_leve_problem'] = $all_leve_problem[0]['title'];
        // $current_user_stage = $current_user->stage;


        $num = count($all_leve_problem);
        // $this->template_data['num'] = $num;

        $stage_level = json_decode($current_user_group_config->stage_level,true);


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
            $this->flash_error(__('user.profile.no_enough_problem'));
            $this->view = 'problem/userlist_insufficient';

            return 0;


        } else{
                // $problemlist = Model_UsersProblem::UniqueRandomNumbersWithinRange(0,$num-1,$current_show_num);
            try{
                $problemlist = array_rand($left_level_problem,$current_show_num);
            }catch(Exception $e){

                 $this->flash_error(__('user.profile.no_enough_problem'));
                 $this->view = 'problem/userlist_insufficient';
                 return 0;
            }

            array_multisort($problemlist);
            // $this->template_data['num'] = $problemlist;


   }




        $problem_array = array();
        $problem_id_array = array();

        foreach ($problemlist as $key) {
            # code...
            array_push($problem_array, $all_leve_problem[$key]);
            array_push($problem_id_array, $all_leve_problem[$key]);

            $users_problem = new Model_UsersProblem;
            $users_problem->user_id = $current_user->user_id;
            $users_problem->problem_id = $all_leve_problem[$key]['problem_id'];
            $users_problem->stage = $current_user_stage;

            $users_problem->save();

        }

   }

   /*
   author : zhang zexiang
   funtion : next stage show
   date : 2016.11.8 08:50
   */

  public function action_nextstage()
  {
    // $this->view = 'problem/next';
    $current_user = $this->get_current_user();
    $current_user_group = $current_user->group_id;
    $current_user_stage = $current_user->stage;
    $current_user_group_config = Model_GroupConfig::find_by_id($current_user_group);

    //this tage pass problem numbers
    $pass_numbers = 0;
    $current_problem = Model_UsersProblem::find_current_problem($current_user->user_id, $current_user_stage);

    $all_stage_problem = Model_UsersProblem::find_current_problemlist($current_problem);

    foreach ($all_stage_problem as $key) {
        # code...
        if(e::pass_status($key)=='passed'){
            $pass_numbers++;
        }
        $this->template_data['num1'] = e::pass_status($key);
    }



    $ccc = json_decode($current_user_group_config->pass_num,true);
    $current_stage_pass_num = $ccc[$current_user_stage];


    if($current_user_stage < $current_user_group_config->stage_num && $pass_numbers >=  $current_stage_pass_num)
    {
        $current_user->stage = $current_user_stage+1;
        $current_user->save();

    }else{

    }

    if($pass_numbers < $current_stage_pass_num){
        $this->flash_error(__('user.profile.cannot_pass',array(':pass'=>$pass_numbers,':total'=>$current_stage_pass_num)));
    }


    $this->action_listuser();

    //count this user this stage pass number
  }


  /*
  author : zhang zexiang
  funtion : supplement problem by group config when Y defunct
  date : 2016.11.23 09:55

  $supp : config show num - current num
  */

  public function action_supplement($supp, $current_problem, $current_problem_level,$current_show_num,$current_user){


    $all_leve_problem = Model_UsersProblem::find_level_problem($current_problem_level);
    $num = count($all_leve_problem);

    $all_leve_problem_array = array();
    foreach ($all_leve_problem as $key) {
        # code...
        array_push($all_leve_problem_array, $key['problem_id']);
    }

    $current_problem_array = array();
    foreach ($current_problem as $key) {
        # code...
        array_push($current_problem_array, $key["problem_id"]);
    }

    $left_level_problem = array_diff($all_leve_problem_array,$current_problem_array);

    $problemlist = array_rand($left_level_problem,$supp);


    if(sizeof($problemlist)==1){

        $users_problem = new Model_UsersProblem;
        $users_problem->user_id = $current_user->user_id;
        $users_problem->problem_id = $left_level_problem[$problemlist];
        $users_problem->stage = $current_user->stage;

        $users_problem->save();

        return array($left_level_problem[$problemlist]);
    }

    $end = array();
    foreach ($problemlist as $key) {
        # code...
        array_push($end, $left_level_problem[$key]);


        $users_problem = new Model_UsersProblem;
        $users_problem->user_id = $current_user->user_id;
        $users_problem->problem_id = $left_level_problem[$key];
        $users_problem->stage = $current_user->stage;

        $users_problem->save();

    }

    return $end;
    // return $problemlist = array_rand($left_level_problem_array,$supp);
    //




  }





    public function action_list()
    {

        $current_user = $this->get_current_user();
        if($current_user == null || $current_user->is_admin() || $current_user->is_leader() )
        {


        $this->view = 'problem/list';
        $default_page = Session::instance()->get('volume', 1);
        // get user last volume

        if ( $current_user )
        {
            $default_page = $current_user->get_last_volume();
        }

        $page = $this->request->param('id', $default_page);
        // save current volume
        Session::instance()->set('volume', $page);

        $total_volumes = Model_Problem::number_of_volume();

        $page = e::adjust_scope($page, $total_volumes);

        $this->template_data['problemlist'] = Model_Problem::problems_for_volume($page);

        $title = __('problem.list.problem_set_:id', array(':id' => $page));
        $this->template_data['title'] = $title;

        $this->template_data['page'] = $page;
        $this->template_data['pages'] = $total_volumes;

    }else {
        # code...
        $this->action_listuser();

    }
    }

    public function action_show()
    {
        // initial
        $pid = $this->request->param('id', null);

        $problem = Model_Problem::find_by_id($pid);
        $current_user = $this->get_current_user();


        //if this user is not lead or root , he not allow to see all problem
        if(Model_Privilege::permission_of_user($current_user->user_id)==null){

            $all_problem_id = Model_UsersProblem::find_current_all_problem_id($current_user->user_id);



            $problem_id = array();
            foreach ($all_problem_id as $key) {
                # code...
                array_push($problem_id, $key["problem_id"]);
            }

            // $this->template_data['ddd'] = $problem_id;

            if(!in_array($pid, $problem_id)){
                $this->action_list();
            }

        }



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
        $current_group = $current_user['group_id'];
        if ( ! $problem OR ! $problem->can_user_access($current_user) )
            throw new Exception_Page(__('common.problem_not_found'));

        $this->template_data['problem_id'] = $problem_id;
        $this->template_data['start_rank'] = $per_page * ($page - 1);
        $this->template_data['summary'] = $problem->summary();
        $this->template_data['total'] = ceil($this->template_data['summary']['submit_user'] / $per_page);
        $this->template_data['solutions'] = $problem->best_solution($current_group,$page-1, $per_page);

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
