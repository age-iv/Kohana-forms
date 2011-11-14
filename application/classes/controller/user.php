<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Front {
	
	public function action_index()
	{
		if($this->a2->allowed('user','read'))
		{
			$this->content = '<p>'.html::anchor('user/register','Add user').'</p>';
			$this->content .= '<p>'.html::anchor('user/list','List users').'</p>';
			
		} else {
			$this->go_home('errors', __('user.register_off'));
		}
	}
	
	public function action_list()
	{
		if($this->a2->allowed('user','read'))
		{
			$this->content = View::factory('list');
			$model = ORM::factory('user')
					->order_by('username')
					->find_all();
			$this->content->bind('users',$model);
		} else {				
			$this->go_home('errors',__('user.permissions_dennied'));
		}

	}
	
	public function action_register()
	{
		if($this->a2->allowed('register','edit')||$this->config['register']==TRUE)
		{
			if (!empty($_POST))
			{
			$post = $_POST;
	
			// Create a new user
			$user = ORM::factory('user')
				->values($post);
				if ($user->check())
				{
					$user->save();
				}
			}
			$this->content = View::factory('register');
			
			if($this->a2->allowed('user','edit'))
			{
				$this->content->disabled = FALSE;
			} else {
				$this->content->disabled = TRUE;
			}
			
		} else {
			$this->go_home('errors', __('user.register_off'));
		}
	}

	public function action_edit()
	{
		if($this->a2->allowed('user','edit'))
		{
			$user = ORM::factory('user',$this->request->param('id'));
			
			if (!empty($_POST))
			{
			$post = $_POST;
				if ($post['password'] == '')
				{
					$post['password'] = $user->password;
				}
				
				if ($user->check())
				{
					$user->values($post)
						->save();
					$this->go_back('notice',__('user.save'));
				}
			}
			
			$this->content = View::factory('edit')
							->bind('user',$user);
			
		} else {
			$this->go_home('errors', __('user.permissions_denied'));
		}
	}

	public function action_delete()
	{
		if($this->a2->allowed('user','delete'))
		{
			if($this->user->id == $this->request->param('id'))
			{
				$this->auth->logout();
				$this->user = NULL;
			}
			$user = ORM::factory('user',$this->request->param('id'))
				->delete();
					$this->go_back('notice',__('user.delete'));
			
		} else {
			$this->go_home('errors', __('user.permissions_denied'));
		}
	}
}