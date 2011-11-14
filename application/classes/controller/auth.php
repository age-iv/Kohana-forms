<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Front {

	public function action_index()
	{

		// show user info
		echo $this->user_info();

		// show blogs
		echo '<hr>';
	}

	public function action_login()
	{
		if($this->user) //cannot create new accounts when a user is logged in
			$this->go_home('notice','auth.you_logged_in');

		$post = Validation::factory($_POST)
			->rule('username', 'not_empty')
			//->rule('username', array('min_length',array(4)))
			//->rule('username', array('max_length',array(127)))
			->rule('password', 'not_empty');

		if($post->check())
		{
			if($this->auth->login($post['username'],$post['password'], !empty($post['remember'])))
			{
				$this->go_back('notice','auth.you_logged_in');
			}
		}
		//show form
		$this->content = View::factory('login');
	}

	public function action_logout()
	{
		$this->auth->logout();
		$this->user = NULL;
		$this->go_back();
	}

} // End Welcome
