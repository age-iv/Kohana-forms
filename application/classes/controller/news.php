<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller_Front {

	public function action_index()
	{
	}
	
	public function action_add()
	{
		if($this->a2->allowed('news','add'))
		{
			if (!empty($_POST))
			{
			$post = $_POST;
	
			$news = ORM::factory('news')
				->values($post);
				if ($news->check())
				{
					$news->create();
					$this->go_back('notice',__('news.save'));
				}
			}
			$this->content = View::factory('add');
			
		} else {
			$this->go_home('errors', __('user.permissions_denied'));
		}
	}
	
	public function action_edit()
	{
		if($this->a2->allowed('news','edit'))
		{
			$news = ORM::factory('news')
					->where('id','=',$this->request->param('id'))
					->find();
					
			if (!empty($_POST))
			{
			$post = $_POST;			
				
			
				if ($news->check())
				{
					$news->values($_POST)
						->save();
					$this->go_back('notice',__('news.save'));
				}
			}
			$this->content = View::factory('edit');
			$this->content->bind('data',$news);
		} else {
			$this->go_home('errors', __('user.permissions_denied'));
		}
	}
	
	public function action_delete()
	{
		if($this->a2->allowed('news','delete'))
		{
			
			$news = ORM::factory('news',$this->request->param('id'))
				->delete();
					$this->go_back('notice',__('news.delete'));
			
		} else {
			$this->go_home('errors', __('user.permissions_denied'));
		}
	}
}