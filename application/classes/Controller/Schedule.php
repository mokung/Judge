<?php defined('SYSPATH') or die('No direct script access.');
// /**
//  * @author: freefcw
//  * Date: 1/1/14
//  * Time: 3:05 PM
//  */

class Controller_Schedule extends Controller_Base
{



    //run per one day
    public function action_inject()
    {
// $this->view = 'situation/list';
        $this->view = 'schedule/inject';

        //get message from solution
        // $result = Model_Situation::oneday_message_from_solution();
        //
        $last_day_date = date('Y-m-d',strtotime("yesterday"));
        // $last_day_date = date('Y-m-d');


        if(Model_Situation::check_exists($last_day_date)!=null){
             $title = __('ee');
            $this->template_data['title'] = $title;
            return ;
        }

        $this->template_data['last_day_date'] = $last_day_date;

        $order_by = array(
                'in_date' => Model_Base::ORDER_DESC
            );

        $result = Model_Situation::inject($last_day_date,'in_date',$order_by,$show_all=true);

         $this->template_data['oneday'] = $result;

         $pages = 3;
         $this->template_data['pages'] = $pages;

         $page = 3;
         $this->template_data['page'] = $page;



         $title = __('ddd');
        $this->template_data['title'] = $title;

        //process date --> from solution
        //get user_id , during_time

        $rr = Model_Situation::get_oneday_userid($result);

        $oneday_user_id = $rr[0];
        $all_user_id_array = $rr[1];    //all user_id commit on that day

        //put the root and leader to this array

        $all_privilege = Model_Privilege::permission_of_user_id();

        foreach ($all_privilege as $key) {

            $current_user = Model_User::find_by_id($key['user_id']);

            if(Model_Privilege::user_is_root_leader($current_user)){

                  array_push($all_user_id_array, $key['user_id']);
             }
        }


        $this->template_data['oneday_user_id'] = $all_privilege;

        foreach ($oneday_user_id as $key => $value) {

            $oneday_user_detail = Model_Situation::get_oneday_userdetail($key);

            $situation = new Model_Situation;
            # code...
            $situation->user_id = $key;
            $situation->date = $last_day_date;
            $situation->group_id = $oneday_user_detail->group_id;
            $situation->submited = $oneday_user_detail->submit;
            $situation->score = $oneday_user_detail->score;
            $situation->staged = $oneday_user_detail->stage;
            $situation->during_time = (json_encode($value));
            // $situation->during_time = unserialize($situation->during_time);
            // $situation->defunct = "N";

            $situation->save();
        }

        $all_user_id = Model_User::get_all_users();

        $all_userid_array = array();

        foreach ($all_user_id as $key) {
            # code...
            array_push($all_userid_array, $key['user_id']);
        }

        $do_nothing_user_id = array_diff($all_userid_array,$all_user_id_array);

        $this->template_data['oneday_user_id'] = $oneday_user_id;


        foreach ($do_nothing_user_id as $key) {
            # code...
            $oneday_user_detail = Model_Situation::get_oneday_userdetail($key);

            $situation = new Model_Situation;
            # code...
            $situation->user_id = $key;
            $situation->date = $last_day_date;
            $situation->group_id = $oneday_user_detail->group_id;
            $situation->submited = $oneday_user_detail->submit;
            $situation->score = $oneday_user_detail->score;
            $situation->staged = $oneday_user_detail->stage;
            $situation->during_time = json_encode(array());
            // $situation->during_time = unserialize($situation->during_time);
            // $situation->defunct = "N";

            $situation->save();

        }
    }



    public function action_source()
    {
        $user = $this->check_login();

        $sid = $this->request->param('id');
        $solution = Model_Solution::find_by_id($sid);
        $cinfo = Model_CInfo::for_solution($sid);
        $rinfo = Model_RInfo::for_solution($sid);

        if ( $solution and $solution->allow_view_code($user) )
        {
            $this->template_data['title'] = __('solution.source.solution_detail');
            $this->template_data['solution'] = $solution;
            $this->template_data['cinfo'] = $cinfo;
            $this->template_data['rinfo'] = $rinfo;
        } else {
            throw new Exception_Page(__('common.solution_detail_not_found'));
        }
    }

    public function action_status()
    {
        // init
        $page = $this->get_query('page', 1);
        if ($page < 1) $page = 1;

        $pid = $this->get_query('pid', null);
        $uid = $this->get_query('uid', null);
        $cid = $this->get_query('cid', null);
        $language = $this->get_query('language', null);
        $result = $this->get_query('result', null);

        $per_page = OJ::per_page;

        $filter = array(
            'problem_id' => $pid,
            'user_id' => $uid,
            'contest_id' => $cid,
            'language' => $language,
            'result' => $result,
        );

        $filter = $this->clear_data($filter,  array(-1, '', null));

        $orderby = array(
            Model_Solution::$primary_key => Model_Base::ORDER_DESC
        );

        $status = Model_Solution::find($filter, $page, $per_page, $orderby);

        $total = Model_Solution::count($filter);

        // view
        $this->template_data['title'] = __('solution.status.status');
        $this->template_data['list']  = $status;
        $this->template_data['total'] = ceil($total / $per_page);

        if ( $cid )
        {
            $contest = Model_Contest::find_by_id($cid);
            if ( ! $contest )
            {
                $this->go_home();
            }

            $this->template_data['cid']     = $cid;
            $this->template_data['contest'] = $contest;
            $this->template_data['title']   = "{$contest['title']} - Status";
        }
    }

    /*
     author : zhangzexiang
     functiont : add mysql data of user_status by solustion
     date : 2016-11-24
     info : just used once , and it's awful , don't want to see second
      */

        public function action_record()
        {


            $this->view = 'schedule/inject';
            $this->template_data['title']   = "ddddd";


            if(Model_Situation::user_day_data(date("Y-m-d", strtotime("2016-08-16")),"ZhangZexiang") != null){
                return 0;
            }


            $all_user = Model_User::get_all_users();


            $date=null;
            $submited=0;
            $score=0;
            $staged=1;
            $pass_acount = 0;
            $during_time=array();

            $set = array();


            foreach ($all_user as $user) {
                # code...




                $user_all_solution = Model_Solution::user_all_solution($user->user_id);
                $user_group_config = Model_GroupConfig::find_by_id($user->group_id);

                if($user->group_id == null || $user->stage == null || $user_group_config == null){
                    continue;
                }



                foreach ($user_all_solution  as $key) {
                    # code...

                    $user_day_data = Model_Situation::user_day_data(date("Y-m-d", strtotime($key->in_date)),$user->user_id);


                     Model_Situation::dd(array("date"=>date("Y-m-d", strtotime($key->in_date)),"user_id"=>$user->user_id));

                    if( $user_day_data != null){

                        $mycache = new Memcache;
                        $mycache->connect('127.0.0.1', 11211);

                        $aaa = $mycache->get($user->user_id);
                        $date=date("Y-m-d", strtotime($key->in_date));
                        $submited=$aaa["submited"];
                        $score=$aaa["score"];
                        $staged=$aaa["staged"];
                        $pass_acount = $aaa["pass_acount"];
                        $during_time=$aaa["during_time"];

                        $sub = $user_day_data->submited+1;

                        $submited = $sub;

                        //update  score
                        $problem = Model_Problem::find_by_id($key->problem_id);


                        if($problem != null){


                        $problem_level = $problem->level;
                        $problem_score_json = json_decode($user_group_config->level_score,true);
                        $problem_score = $problem_score_json[$problem_level];

                        $pass_num_json = json_decode($user_group_config->pass_num,true);
                        $pass_num = $pass_num_json[$staged];
                        $stage_num = $user_group_config->stage_num;

                        if($key->result == 4){
                            $sco = $user_day_data->score + $problem_score;
                            $pass_acount++ ;
                            $score = $sco;
                        }else{
                            $sco = $user_day_data->score;

                            $score = $sco;

                        }

                        //update stage
                        if($pass_acount >= $pass_num && $staged <= $stage_num-1){
                            $sta = $user_day_data->staged + 1;
                            $pass_acount = 0;

                            $staged = $sta;
                        }else{
                            $sta = $user_day_data->staged;
                            $staged = $sta;
                        }

                        //update during_time
                        // $during_time =json_decode($user_day_data->during_time,true);
                        array_push($during_time,date("H:i:s", strtotime($key->in_date)));



                        $user_status = new Model_Situation;

                        $user_status->user_id = $user->user_id;
                        $user_status->date = date("Y-m-d", strtotime($key->in_date));
                        $user_status->group_id = $user->group_id;

                        $user_status->submited = $submited;
                        $user_status->score = $score;
                        $user_status->staged = $staged;
                        $user_status->during_time = json_encode($during_time);

                        $user_status->save();

                        $mycache = new Memcache;
                        $mycache->connect('127.0.0.1', 11211);

                        $mycache->set($user->user_id, array("submited"=>$submited,"score"=>$score,"staged"=>$staged,"pass_acount"=>$pass_acount,"during_time"=>$during_time), 0, 120);





                        }

                    }else{

                        if(!array_key_exists($user->user_id, $set))
                        {


                           // array_push($set,$user->user_id);
                           $set[$user->user_id] = 1;

                           $mycache = new Memcache;
                           $mycache->connect('127.0.0.1', 11211);

                            $mycache->set($user->user_id, array("submited"=>0,"score"=>0,"staged"=>1,"pass_acount"=>0,"during_time"=>array()), 0, 120);

                        }

                           $mycache = new Memcache;
                           $mycache->connect('127.0.0.1', 11211);
                        $aaa = $mycache->get($user->user_id);
                        $date=date("Y-m-d", strtotime($key->in_date));
                        $submited=$aaa["submited"];
                        $score=$aaa["score"];
                        $staged=$aaa["staged"];
                        $pass_acount = $aaa["pass_acount"];
                        $during_time=array();





                        $user_status = new Model_Situation;

                        $user_status->user_id = $user->user_id;
                        $user_status->date = date("Y-m-d", strtotime($key->in_date));
                        $user_status->group_id = $user->group_id;

                        $user_status->submited = $submited+1;
                        $submited = $user_status->submited;
                        // $user_status->score = $score;
                        // $user_status->staged = $staged;
                        // $user_status->during_time = $during_time;


                        //update  score
                        //

                        $problem = Model_Problem::find_by_id($key->problem_id);

                        if($problem != null && $problem->level != null){

                        $problem_level = $problem->level;
                        $problem_score_json = json_decode($user_group_config->level_score,true);
                        $problem_score = $problem_score_json[$problem_level];

                        $pass_num_json = json_decode($user_group_config->pass_num,true);
                        $pass_num = $pass_num_json[$staged];

                        $stage_num = $user_group_config->stage_num;

                        if($key->result == 4){
                            $user_status->score =  $score + $problem_score;
                            $pass_acount++ ;
                            $score = $user_status->score;
                        }else{
                            $user_status->score =  $score;
                            $score = $user_status->score;
                        }

                        //update stage
                        if($pass_acount >= $pass_num && $staged <= $stage_num-1){
                            $user_status->staged = $staged + 1;
                            $pass_acount = 0;
                            $staged = $user_status->staged;
                        }else{
                            $user_status->staged = $staged;
                            $staged = $user_status->staged;
                        }

                        array_push($during_time,date("H:i:s", strtotime($key->in_date)));

                        $user_status->during_time = json_encode($during_time);


                        $user_status->save();

                        $mycache = new Memcache;
                        $mycache->connect('127.0.0.1', 11211);

                        $mycache->set($user->user_id, array("submited"=>$submited,"score"=>$score,"staged"=>$staged,"pass_acount"=>$pass_acount,"during_time"=>$during_time), 0, 120);

                    }

                }
            }
        }

             $this->template_data['cid']     = $user_all_solution;
    }



        public function action_fix(){

            $this->view = 'schedule/inject';
            $this->template_data['title']   = "ddddd";


            if(Model_Situation::user_day_data(date("Y-m-d", strtotime("2016-11-25")),"spidermandl") != null){
                return 0;
            }

            $all_user = Model_User::get_all_users();


            foreach ($all_user as $user) {
                # code...




                $user_all_solution = Model_Solution::user_all_solution($user->user_id);
                $user_group_config = Model_GroupConfig::find_by_id($user->group_id);

                if($user->group_id == null || $user->stage == null || $user_group_config == null){
                    continue;
                }

                $start_day = date("Y-m-d", strtotime("2016-07-01"));
                $mycache = new Memcache;
                $mycache->connect('127.0.0.1', 11211);

                $aaa = array("time" => $start_day , "initial_sub" => 0,"initial_sco" => 0,"initial_sta" => 1);

                $mycache->set($user->user_id,$aaa,0,100);



                for ($i=1; $i<=148; $i++) {

                    $dd = $mycache->get($user->user_id);

                    # code...
                    $user_day_data = Model_Situation::user_day_data(date("Y-m-d", strtotime($dd["time"])),$user->user_id);

                    if($user_day_data == null){

                        $user_status = new Model_Situation;

                        $user_status->user_id = $user->user_id;
                        $user_status->date = date("Y-m-d", strtotime($dd["time"]));
                        $user_status->group_id = $user->group_id;

                        $user_status->submited = $dd["initial_sub"];
                        $user_status->score = $dd["initial_sco"];
                        $user_status->staged = $dd["initial_sta"];
                        $user_status->during_time = json_encode(array());

                        $user_status->save();

                    }else{

                        $dd = $mycache->get($user->user_id);

                        $sub = $user_day_data->submited;
                        $sco = $user_day_data->score;
                        $sta = $user_day_data->staged;

                        $mycache = new Memcache;
                        $mycache->connect('127.0.0.1', 11211);
                        $bbb = array("time" => $dd["time"] , "initial_sub" => $sub,"initial_sco"=> $sco,"initial_sta" => $sta);

                        $mycache->set($user->user_id,$bbb,0,100);

                    }

                    $mycache = new Memcache;
                    $mycache->connect('127.0.0.1', 11211);

                    $xx= $mycache->get($user->user_id);

                    $dd = $mycache->get($user->user_id);

                    $start_day1 = strtotime("+1 day", strtotime($dd["time"]));
                    $start_day  =  date("Y-m-d",$start_day1);



                    $sub = $dd["initial_sub"];
                    $sco = $dd["initial_sco"];
                    $sta = $dd["initial_sta"];



                    $bbb = array("time" => $start_day , "initial_sub" => $sub,"initial_sco" => $sco,"initial_sta" => $sta);

                    $mycache->set($user->user_id,$bbb,0,100);

                }

        }


        }

        public function action_chageStage(){

            $this->view = 'schedule/inject';
            $this->template_data['title']   = "ddddd";

            $all_user = Model_User::get_all_users();


            foreach ($all_user as $user) {

                $user_day_data = Model_Situation::user_day_data(date("Y-m-d", strtotime("2016-09-28")),$user->user_id);

                if($user_day_data!=null){

                $stage = $user_day_data->staged;

                $user->stage = $stage;

                $user->save();

                }

            }

            $this->template_data['title']   = "ddddd";


        }




}
