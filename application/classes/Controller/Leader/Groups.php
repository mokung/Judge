<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Leader_Groups extends Controller_Leader_Base{


  /*
  author : zhang zexiang
  function : group config
  date : 2016.11.3 14:15
   */

//show configed message

    public function action_list()
    {
        $this->view = 'leader/groupconfig/list';
        $this->template_data['title'] = __('user.register.user_register');


        $current_user = $this->get_current_user();

        $this->template_data['user'] = $current_user;

        $privilegeData = Model_Privilege::find_by_id($current_user->user_id);

        $current_user_groupid = $privilegeData->group_id;



        $configDate = Model_GroupConfig::find_by_id($current_user_groupid);

        $this->template_data['group_id'] = $current_user_groupid;
        $this->template_data['stagenum'] = $configDate->stage_num;
        $this->template_data['stagelevel'] = $configDate->stage_level;
        $this->template_data['levelscore'] = $configDate->level_score;
        $this->template_data['levelnum'] = $configDate->pass_num;



    }


//save config
//
    public function action_config()
    {

      $this->view = 'leader/groupconfig/register';

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

                $stagenum = $post['stagenum'];

                $this->template_data['stagenum'] = $stagenum;

                $stagelevel = [1=>1,2=>2,3=>3,4=>4,5=>5];

                $this->template_data['stagelevel'] = $stagelevel;

                $levelnum = [1=>18,2=>18,3=>18,4=>15,5=>10];
                $levelscore = [1=>1,2=>10,3=>30,4=>50,5=>100];


                $config = new Model_GroupConfig;
               $config->group_id = $current_user_groupid;
               $config->stage_num = $stagenum;
               $config->stage_level = json_encode($stagelevel);
               $config->level_score = json_encode($levelscore);
               $config->pass_num = json_encode($levelnum);

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

        $this->template_data['title'] = __('leader.config.group');
        $this->action_list();
    }


}
