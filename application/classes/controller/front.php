<?php defined('SYSPATH') or die('No direct access.');
/**
 * PostInstall package
 *
 * @package	Kohana PostInstall package
 * @author	Age
 * @see	
 * @copyright	2011 © Age
 */
class Controller_Front extends Kohana_Controller_Template {
	
	/**
	 * @var	string	Path to template, e.g. 'template/default'
	 */
	public $template='';
	
	public $view_path = NULL;
	public $config = NULL;
	/**
	 * @var object Variables for user
	 */
	public $user = NULL;
	public $a2 = NULL;
	public $privilege = NULL;
	public $auth = NULL;
	
	public $scripts = NULL;
	public $styles = NULL;
	public $title = NULL;
	public $header = NULL;
	public $login = NULL;
	public $usermenu = NULL;
	public $news = NULL;
	public $content = NULL;
	public $footer = NULL;
	
	
	public function before() {
		
		
		$this->config = Kohana::$config->load('main.common');
		$this->template = 'templates'.DIRECTORY_SEPARATOR.$this->config['template'];
		
		//$this->template->bind('news',$this->widgets);
//		$this->template = 'templates/default';
		Cookie::$salt = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		parent::before();
		
		
		$this->a2 = A2::instance('a2');
		$this->auth = $this->a2->a1;

		$this->user = $this->a2->get_user();
		
		$this->scripts = array();
		$this->styles = array();
		$this->title = $this->config['site_name'];
		$this->header = Widget::widget_static('header',array('site_name'=>$this->config['site_name']));
		$this->login = $this->user_info();
		$this->news = '';
		$this->content = '';
		$this->footer = Widget::widget_static('footer',array('site_name'=>''));
		
		if (is_null($this->view_path)) {
			View::$view_path = $this->request->controller();
		} else {
			View::$view_path = $this->view_path;			
		}
		/*$tmp = new Layout;
		$this->news = $tmp->show();
		*/
		if( $this->user )
		{
			$this->usermenu = html::anchor('user',__('manage users')). ' ';
			$this->usermenu .= html::anchor('config',__('configuration'));
		}	
	}
	
	public function after() {
		View::$view_path = NULL;
		
		if ($this->auto_render)
		{
			//$this->response = $this->template;
			// Get the media route
			$media = Route::get('media');

			// Add styles
			$styles = array(
				$media->uri(array('file' => 'css/print.css'))  => 'print',
				$media->uri(array('file' => 'css/screen.css')) => 'screen',
				$media->uri(array('file' => 'css/jquery-ui.css')) => 'screen',
			);

			// Add scripts
			$scripts = array(
				$media->uri(array('file' => 'js/jquery.min.js')),
			//	$media->uri(array('file' => 'js/jquery.mobile.min.js')),
				$media->uri(array('file' => 'js/jquery-ui.min.js')),
			);
		}	
			$this->template->scripts = Arr::merge($scripts, $this->scripts);
			$this->template->styles = Arr::merge($styles, $this->styles);
			$this->template->title = $this->title;
			$this->template->header = $this->header;
			$this->template->login = $this->login;
			$this->template->usermenu = $this->usermenu;
			$this->template->news = $this->news;
			$this->template->content = $this->content;
			$this->template->footer = $this->footer;
		parent::after();
	}
	
	
	public function user_info()
	{
		if( $this->user )
		{
			$s =  '<b>'.$this->user->username.'</b> ' . html::anchor('auth/logout',__('auth.logout'));
		}
		else
		{
			$s = html::anchor('auth/login',__('auth.login')) . ' ' .($this->config['register']==1 ? html::anchor('user/register', __('user.register')) : '');
		}
		return $s;
	}
	
/**
 * Redirect to home page
 * @param	string	Type of message. May be: errors, notice, success, warn $type 
 * @param	string
 */
	public function go_home($type='notice',$message='') {
		$url = Route::url('default', NULL, TRUE);
		if ($message!=='') {
			Message::set($type,$message);
		}
		$this->go($url);
	}

/**
 * Redirect to previous page
 * @param	string	Type of message. May be: errors, notice, success, warn $type 
 * @param	string
 */
	public function go_back($type='notice',$message='') {
		Valid::url($this->request->referrer());
		if ( $message!=='') {
			Message::set($type,$message);
		}		
		$this->go($this->request->referrer());
	}

/**
 * Redirect to previous page 
 * @param	string
 * @param	string	Type of message. May be: errors, notice, success, warn 
 * @param	string
 */
	public function redirect($url,$type='notice',$message='')
	{
		if ($message!=='')	{
			Message::set($type,$message);
		}
		$this->go($url);
	}
	
/*
 * Private redirect
 */
	private function go($url) {
		$this->request->redirect($url);
	}
}
