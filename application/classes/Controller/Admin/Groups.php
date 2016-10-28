<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Groups extends Controller_Admin_Base{
 public function action_index()
    {
      $this->template_data['title'] = __('New group');
        $this->view = 'admin/groups/index';
    }

  public function action_create(){

      $group_id  = $_GET['id'];
      $group =  new Model_Groups;
      $group->group_id = $group_id;
       $group->time_created = e::format_time();
      $group->defunct = Model_Groups::DEFUNCT_NO;
      $group->save();


        // $this->template_data['title'] = $group_id;
       //$this->redirect('/admin/groups/index');
            // } else {
              $this->template_data['title'] = $group['group_id'];
              // $this->flash_error(__('common.error'));
           // }
    // $this->template_data['id'] =$group_id;


  }

  public function action_del()
    {
        // ban it forever, just mark it
        $user_id = $_GET['id'];

        $user = Model_Groups::find_by_id($user_id);
        $user->defunct = Model_User::DEFUNCT_YES;
        $user->save();

        //TODO: use ajax
        $this->action_index();
    }


}