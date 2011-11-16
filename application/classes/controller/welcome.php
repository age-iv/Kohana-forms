<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Front {

	public function action_index()
	{
		
		
		$this->content = View::factory('index');
		$this->news = Widget::find_all('news','date',$this->config['news_num']);
		//$this->content->bind('news',Request::factory('news/index')->execute());
		//$this->widgets[] = Request::factory('news/index');
	}
	
	public function action_feedback()
	{
		$captcha = Captcha::instance();	
		if (!empty($_POST))
		{
		
		$post = $_POST;

			//if ($post->check())
			//{
			if($captcha->valid($_POST['captcha']))
			{
				Email::connect();
				Email::send($this->config['admin_email'], array($this->config['admin_email'],__('site_name')), $_POST['subject'], $_POST['message']);
				
				$this->go_back('notice',__('feedback.send'));
			} else {
				$this->go_back('errors',__('captcha_wrong'));
			}
			//}
		}
		
		$this->content = View::factory('feedback');
		$this->content->bind('captcha',$captcha);
	}
} // End Welcome