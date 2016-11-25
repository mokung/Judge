<?php defined('SYSPATH') or die('No direct script access.');

/*
作者：wenkang
create group
group list
*/


class Controller_Admin_Groups extends Controller_Admin_Base{

 public function action_index()
    {
    	$this->template_data['title'] = __('New group');
        $this->view = 'admin/groups/list';
        $this->action_list();

    }





//新建组
	public function action_create(){

			$group_id = $_GET['id'];
      if ($group_id) {
        $group = Model_Groups::find_by_id($group_id);
              if (!$group) {
                $group =  new Model_Groups;
                $group->group_id = $group_id;

                $group->save();

            }else{
              $this->flash_error(array(__('common.group_exist')));
            }

      }else{
        $this->flash_error(array(__('common.groupname_null')));
      }

      $this->redirect('admin/groups/');

	}

//组列表
  public function action_list(){
      // $page = $this->request->param('page', 1);
    $page = $this->get_query('page', 1);
      $orderby = array(
            //'solved' => Model_Base::ORDER_DESC,
            'group_id' => Model_Base::ORDER_ASC,
        );

      $filter = array();

      $groups = Model_Groups::find($filter, $page, OJ::per_page, $orderby);
      $total = Model_Groups::count($filter);
      $this->template_data['title'] = __('admin.group.list.group_list');
      $this->template_data['groups'] = $groups;
      $this->template_data['page'] = $page;
      $this->template_data['total'] = $total;
      $this->template_data['total_page'] = ceil($total / OJ::per_page);
      $this->template_data['per_page'] = OJ::per_page;

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

    /*
    author : zhang zexiang
    function : group status graph
    data : 2016.11.15
     */

    public function action_status (){

      $this->view = 'admin/situation/testSubmited';
      $group_id = Arr::get($_GET,'id');
      $date = Arr::get($_GET,'date');

      $this->template_data['id'] = $group_id;
      $this->template_data['date'] = $date;

       $title = __('ddd');
      $this->template_data['title'] = $title;

      $group_config = Model_GroupConfig::find_by_id($group_id);


      if($group_id==null || $group_config==null){
        return 0;
      }


      $group_config_stages = $group_config->stage_num;

      $this->template_data['group_config_stages'] = $group_config_stages;



      $order_by = array(
              'date' => Model_Base::ORDER_ASC
          );

      $result = Model_Situation::search($date,'date',$order_by,$show_all=true, 'group_id', $group_id);

      $this->template_data['result'] = $result;

      $alldata = array();
      $eachday = array();

      foreach ($result as $key) {

          # code...
        $time = date("Y-m-d",strtotime($key->date));

        if (array_key_exists($time, $alldata)) {

          $oldstage = $alldata[$time];

          if(array_key_exists($key->staged, $oldstage)){

            $oldstage[$key->staged] = $oldstage[$key->staged]+1;

          }else{

            $oldstage[$key->staged] = 1;
          }

          ksort($oldstage);
          $alldata[$time] = $oldstage;

        }else{

          $alldata[$time] = array($key->staged => 1);

        }

      }
      $alldata["stage_num"] =  $group_config_stages;


      $this->response->body(json_encode($alldata));

      $this->template_data['result'] = $result;



    }


}
