<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Config extends Controller_Front {
	
	public function action_index()
	{
		if($this->a2->allowed('config','edit'))
		{
			if (!empty($_POST))
			{
			$post = $_POST;
			
			$database = new Config_Database;
			foreach ($post as $key => $value) {
				$write_array[$key] = $value;
			}
			$database->write( 'main' , $post['key'] , $write_array );
			$this->go_back('notice',__('config.save'));
			}
			
			$this->content = View::factory('index');
			$this->content->bind('config',$this->config);
		} else {
			$this->go_home('errors',__('user.permissions_dennied'));
		}
	}
}