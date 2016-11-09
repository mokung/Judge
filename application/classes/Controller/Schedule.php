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

        $order_by = array(
                'in_date' => Model_Base::ORDER_DESC
            );

        $result = Model_Situation::inject(date("Y-m-d"),'in_date',$order_by,$show_all=true);

         $this->template_data['oneday'] = $result;

         $pages = 3;
         $this->template_data['pages'] = $pages;

         $page = 3;
         $this->template_data['page'] = $page;



         $title = __('ddd');
        $this->template_data['title'] = $title;

        //process date --> from solution
        //get user_id , during_time

        $oneday_user_id = Model_Situation::get_oneday_userid($result);

        $this->template_data['oneday_user_id'] = $oneday_user_id;

        foreach ($oneday_user_id as $key => $value) {

            $oneday_user_detail = Model_Situation::get_oneday_userdetail($key);

            $situation = new Model_Situation;
            # code...
            $situation->user_id = $key;
            $situation->date = date('Y-m-d H:i:s');
            $situation->group_id = $oneday_user_detail->group_id;
            $situation->submited = $oneday_user_detail->submit;
            $situation->score = $oneday_user_detail->score;
            $situation->staged = $oneday_user_detail->stage;
            $situation->during_time = (json_encode($value));
            // $situation->during_time = unserialize($situation->during_time);
            $situation->defunct = "N";

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
