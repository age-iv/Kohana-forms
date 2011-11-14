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
		if (!empty($_POST))
		{
		$post = $_POST;

			//if ($post->check())
			//{
				Email::connect();
				Email::send('ageev_m@isuct.ru', array('ageev_m@isuct.ru',__('site_name')), $_POST['subject'], $_POST['message']);
				
				$this->go_back('notice',__('feedback.send'));
			//}
		}
		$this->content = View::factory('feedback');
	}
} // End Welcome