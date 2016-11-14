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

          $this->flash_error("has not configed");
          $this->template_data['group_id'] = $current_user_groupid;
          $this->template_data['showconfigure'] = false;

        }else{

        $this->template_data['group_id'] = $current_user_groupid;
        $this->template_data['stagenum'] = $configDate->stage_num;
        $this->template_data['stagelevel'] = json_decode($configDate->stage_level);
        $this->template_data['levelscore'] = json_decode($configDate->level_score);
        $this->template_data['shownum'] = json_decode($configDate->show_num);
        $this->template_data['passnum'] = json_decode($configDate->pass_num);

      }

    }


//save config

    public function action_config()
    {

      $this->view = 'leader/groups/config';
      $this->template_data['levelnum'] = 5;   //难度个数

      $current_user = $this->get_current_user();

      $this->template_data['user'] = $current_user;

      $privilegeData = Model_Privilege::find_by_id($current_user->user_id);

      $current_user_groupid = $privilegeData->group_id;

      $this->template_data['current_user_groupid'] = $current_user_groupid;

      //if this group configed

      $result = Model_GroupConfig::search($current_user_groupid, "group_id");
      if($result == null)
      {


      if ( $this->request->is_post() )
        {
            // TODO: cleaned_post() caused password 'fo<ob>ar' problem
            $post = Validation::factory($this->cleaned_post())
                              ->rule('stagenum', 'not_empty');


            if ($post->check()) {

                $data = $_POST['data'];
                if(ini_get("magic_quotes_gpc")=="1"){
                    $data = stripslashes($data);
                }
                $res = json_decode($data);
                $this->template_data['data'] = $data;
                // $stagenum = $data['stagenum'];

                // $this->template_data['stagenum'] = $stagenum;

                // $stagelevel = array(1=>1,2=>2,3=>3,4=>5,5=>5);
                // $passnum = array(1=>8,2=>7,3=>5,4=>6,5=>8);
                // $levelscore = array(1=>1,2=>5,3=>10,4=>20,5=>30);
                // $shownum = array(1=>10,2=>10,3=>10,4=>10,5=>10);
                // $stagelevel = $data['stagelevel'];
                // $passnum = $data['passnum'];
                // $shownum = $data['shownum'];
                // $levelscore = $data['levelscore'];

                // $this->template_data['stagelevel'] = $stagelevel;


               $config = new Model_GroupConfig;
               $config->group_id = $current_user_groupid;
               $config->stage_num = $res->stagenum;
               $config->stage_level = $res->stagelevel;
               $config->pass_num = $res->passnum;
               $config->level_score = $res->levelscore;
               $config->show_num = $res->shownum;


               $config->save();

               $this->flash_info(__('user.edit.edit_done'));  //output sucess



            }else{
              $errors = $post->errors("User");
              $this->flash_error($errors);
            }

        }
      }else  {
        # code...
        $this->flash_error("this group configed");
        $this->action_list();
      }

        $this->template_data['title'] = __('leader.group.configure');
        // $this->action_list();
    }


}
