<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Index extends Controller_Admin_Base
{

    public function action_index()
    {
        $this->template_data['title'] = __('admin.index.index.dashboard');


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

        $this->redirect('/admin/');

    }


    /*

    generate invitation code and save to database


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

        $group_id = Model_Groups::find_by_id($group);

        if ($group_id) {


            if ($limit>=1) {
                  //generate hashcode(invitationcode) by date
        $incode = Model_InvitationCode::generateRandomString(6);


//test
        $this->template_data['code'] = $incode;
        $this->template_data['group_id'] = Arr::get($_GET,'id');
        $this->template_data['type'] = Arr::get($_GET,  'type');
        $this->template_data['limit'] = Arr::get($_GET,'num');


        //save new invitation code to database --> invitation
        $code = new Model_InvitationCode;

        $code->group_id = $group;
        $code->invited_code = $incode;
        $code->type = $type;
        $code->num = $limit;
        $code->createtime = date('Y-m-d H:i:s');

        $code->save();

        // $this->action_list();
        $this->template_data['code'] = $incode;
            }

        }else{
            $this->flash_error(array(__('common.group_not_exist')));
        }
        $all_group_id = Model_Groups::find_all_groupid();

        $this->template_data['all_group_id'] = $all_group_id;

    }


}
