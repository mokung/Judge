<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Sample extends Controller_Base {

	public function action_index()
	{
        $session = Session::instance();
        //$session->set("Desmond","33");

        if ( $this->get_current_user() ) {
            $this->go_home();
        }
        $ss = Session::instance();
        if ( $this->request->is_post() ) {
            $login_times = $ss->get('login_times', 0);
            $ss->set('login_times', $login_times + 1);
            if ( $login_times > 1 )
            {
                if ( $this->check_captcha() )
                {
                	$this->do_login();
                }
            } else {
                $this->do_login();
            }
            $this->flash_error(__('common.login_error'));
            $this->redirect('user/login');
        }
         $this->template_data['title'] = __('user.login.user_login');
         $this->template_data['username'] = $this->get_post('username');


        // if ($this->request->is_post()){
        //     // Post has no data
        //     var_dump($_SERVER['REQUEST_METHOD']);
        // }
        // $this->template_data['title'] = __('user.list.user_rank');
	}


    protected function do_login()
    {
        $username = $this->get_post('username');
        $password = $this->get_post('pwd');

        if ( Auth::instance()->login($username, $password, true) ) {
            // go back url
            $ss = Session::instance();
            $url = $ss->get_once('return_url');
            if ( ! $url )
            {
                $this->go_home();
            } else {
                $this->redirect($url);
            }
        }
    }


    protected function check_captcha()
    {
        $captcha_mode = Model_Option::get_option('captcha_mode', false);
        if ( $captcha_mode == false ) return true;

        if ( $captcha_mode == 'recaptcha' )
        {
            $private_key = Model_Option::get_option('captcha_private_key', false);
            $path = Kohana::find_file('vendor', 'recaptcha-php-1.11/recaptchalib');
            require_once $path;

            $challenge = Arr::get($_POST, 'recaptcha_challenge_field');
            $response = Arr::get($_POST, 'recaptcha_response_field');

            $resp = recaptcha_check_answer($private_key, $_SERVER["REMOTE_ADDR"], $challenge, $response);
            if ( $resp->is_valid ) {
                return true;
            }
            if (is_local_request()) {
                return true;
            }

            $this->flash_error($resp->error);
            return false;
        }
        if ( $captcha_mode == 'local')
        {
            $challenge = Arr::get($_POST, 'code', false);
            $code = Session::instance()->get('captcha');

            if ( strtolower($code) == strtolower($challenge) )
            {
                return true;
            }
            $this->flash_error(__('common.captcha_error'));
            return false;
        }
        return true;
    }

} // End Welcome