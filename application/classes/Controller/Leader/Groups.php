<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Leader_Groups extends Controller_Leader_Base{


  /*
  author : zhang zexiang
  function : group config
  date : 2016.11.3 14:15
   */

// show configed message

    public function action_list()
    {
        $this->view = 'leader/groups/list';
        $this->template_data['title'] = __('leader.group.configure');
        $this->template_data['levelnum'] = 5;   //难度个数

        $current_user = $this->get_current_user();

        $this->template_data['user'] = $current_user;

        $privilegeData = Model_Privilege::find_by_id($current_user->user_id);

        $current_user_groupid = $privilegeData->group_id;



        $configDate = Model_GroupConfig::find_by_id($current_user_groupid);

        if($configDate == null){

          $this->flash_error(__('leader.group.configure.no_configure'));
          $this->template_data['group_id'] = $current_user_groupid;
          $this->template_data['showconfigure'] = false;
          $this->template_data['stagenum'] = null;
          $this->template_data['levelscore'] = 0;

          $this->action_config();


        }else{
        $this->template_data['showconfigure'] = true;
        $this->template_data['group_id'] = $current_user_groupid;
        $this->template_data['stagenum'] = $configDate->stage_num;
        $this->template_data['stagelevel'] = json_decode($configDate->stage_level);
        $this->template_data['levelscore'] = json_decode($configDate->level_score);
        $this->template_data['shownum'] = json_decode($configDate->show_num);
        $this->template_data['passnum'] = json_decode($configDate->pass_num);

      }

    }




    public function action_config()
    {

      $this->view = 'leader/groups/config';
      $this->template_data['levelnum'] = 5;   //难度个数
      $this->template_data['default_problem'] = 10;   //默认题目个数
      $this->template_data['default_passed'] = 8;   //默认通过的题数
      $this->template_data['default_score'] = array(1, 2, 5, 10, 30);   //默认通过的题数

      //count numbers of each level problems
      $num1 = Model_Problem::count(array('level' => 1,'defunct'=>"N"));
      $num2 = Model_Problem::count(array('level' => 2,'defunct'=>"N"));
      $num3 = Model_Problem::count(array('level' => 3,'defunct'=>"N"));
      $num4 = Model_Problem::count(array('level' => 4,'defunct'=>"N"));
      $num5 = Model_Problem::count(array('level' => 5,'defunct'=>"N"));

      $this->template_data['num1'] = $num5;
      $this->flash_info(__('all problems number: 1->'.$num1.' ---- 2->'.$num2.' ---- 3->'.$num3.' ---- 4->'.$num4.' ---- 5->'.$num5));

      $current_user = $this->get_current_user();

      $this->template_data['user'] = $current_user;

      $privilegeData = Model_Privilege::find_by_id($current_user->user_id);

      $current_user_groupid = $privilegeData->group_id;

      $this->template_data['current_user_groupid'] = $current_user_groupid;

      //if this group configed

      $result = Model_GroupConfig::search($current_user_groupid, "group_id");

      // $data = $_POST['data'];


      if($result == null)
      {


      if ( $this->request->is_post() )
        {
            $post = Validation::factory($this->cleaned_post())
                              ->rule('stagenum', 'not_empty');

            // if ($post->check()){

                $data = $_POST['data'];
                $this->template_data['data1'] = $data;
                if(ini_get("magic_quotes_gpc")=="1"){
                    $data = stripslashes($data);
                }
                $res = json_decode($data);
                $this->template_data['data'] = $res;

               $config = new Model_GroupConfig;
               $config->group_id = $current_user_groupid;
               $config->stage_num = $res->stagenum;
               $config->stage_level = (json_encode($res->stagelevel));
               $config->pass_num = (json_encode($res->passnum));
               $config->level_score = (json_encode($res->levelscore));
               $config->show_num = (json_encode($res->shownum));


               $config->save();

               $this->flash_info(__('user.edit.edit_done'));  //output sucess




              $errors = $post->errors("User");
              $this->flash_error($errors);

              // $this->action_list();


        }
      }else  {
        # code...
        $this->flash_error(__('leader.group.configure.configured'));
        $this->action_list();
      }

        $this->template_data['title'] = __('leader.group.configure');
        // $this->action_list();
    }

    /*
    author : zhang zexiang
    function : group status graph
    data : 2016.11.15
     */

    public function action_status (){
      $leader = $this->get_current_user();
      $group_id = $leader['group_id'];
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

      // $alldata["stage_num"] =  $group_config_stages;

      $this->response->body(json_encode($alldata));

    }

}
