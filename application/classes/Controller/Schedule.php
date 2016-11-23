<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @author: freefcw
 * Date: 1/1/14
 * Time: 3:05 PM
 */

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
        // $last_day_date = date('Y-m-d',strtotime("yesterday"));
        $last_day_date = date('Y-m-d');


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
            # code...
            array_push($all_user_id_array, $key['user_id']);
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
            $situation->submited = 0;
            $situation->score = 0;
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
}
