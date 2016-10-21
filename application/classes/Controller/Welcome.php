<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		// $sql = "select * from options";
  //       $result = DB::query(Database::SELECT,$sql)-> execute()->as_array();
		// $session = Session::instance();
		// $session->set("Desmond","66");
		// //$session->set("username","11");
        //setcookie("haha", "aa", time()-3600);
		Cookie::set("haha","judge5");
		echo Cookie::get("haha");

		$this->response->body('hello, world!');
	}

} // End Welcome
