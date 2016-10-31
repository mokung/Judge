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
			$group->save();


			    // if ( $group->save() )
       //       {
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

  public function action_status()
  {
    # code...

        $this->view = 'admin/situation/status';

                 $title = __('ddd');
        $this->template_data['title'] = $title;


        $group_id = Arr::get($_GET,'id');
        $date = Arr::get($_GET,'date');

        $this->template_data['group_id'] = $group_id;
        $this->template_data['date'] = $date;

        $order_by = array(
                'date' => Model_Base::ORDER_ASC
            );

        $result = Model_Situation::search($date,'date',$order_by,$show_all=true, 'group_id', $group_id);

         $this->template_data['oneday'] = $result;


        //get per status count
        foreach ($result as $line) {
          # code...

        }





  }


}