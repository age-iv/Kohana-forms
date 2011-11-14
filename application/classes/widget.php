<?php defined('SYSPATH') or die('No direct script access.');
class Widget
{

	public static function find_all($name,$order,$limit=5)
	{
		$widget = ORM::factory($name)
				->order_by($order,'desc')
				->limit($limit)
				->find_all();
		View::$view_path = NULL;
		$a2 = A2::instance('a2');
		if($a2->allowed($name,'read')) { $privilege = ''; }
		if($a2->allowed($name,'add')) { $privilege = 'add'; }
		if($a2->allowed($name,'edit')) { $privilege = 'edit'; }
		if($a2->allowed($name,'delete')) { $privilege = 'delete'; }
				
		$view = View::factory('widgets/'.$name)->bind($name,$widget);
		switch ($privilege) 
		{
			case 'delete': $buttons = array('add'=>TRUE, 'edit'=>TRUE, 'delete'=>TRUE); break;
			case 'edit' : $buttons = array('add'=>TRUE, 'edit'=>TRUE, 'delete'=>FALSE); break;
			case 'add'	: $buttons = array('add'=>TRUE, 'edit'=>FALSE, 'delete'=>FALSE); break;
			default	:	$buttons = array('add'=>FALSE, 'edit'=>FALSE, 'delete'=>FALSE); break;
		}
			$view->bind('buttons',$buttons);	
		return $view;
	}

	public static function find_one($name,$id)
	{
		$widget = ORM::factory($name)
				->where('id','=',$id)
				->find();
		View::$view_path = NULL;
		$a2 = A2::instance('a2');
		if($a2->allowed($name,'read')) { $privilege = ''; }
		if($a2->allowed($name,'add')) { $privilege = 'add'; }
		if($a2->allowed($name,'edit')) { $privilege = 'edit'; }
		if($a2->allowed($name,'delete')) { $privilege = 'delete'; }
				
		$view = View::factory('widgets/'.$name.'_one')->bind($name,$widget);
		switch ($privilege) 
		{
			case 'delete': $buttons = array('edit'=>TRUE, 'delete'=>TRUE); break;
			case 'edit' : $buttons = array('edit'=>TRUE, 'delete'=>FALSE); break;
			case 'add'	: $buttons = array('edit'=>FALSE, 'delete'=>FALSE); break;
			default	:	$buttons = array('edit'=>FALSE, 'delete'=>FALSE); break;
		}
			$view->bind('buttons',$buttons);	
		return $view;
	}
	
	public static function widget_static($name,$options=array())
	{
		View::$view_path = NULL;
		$view = View::factory('widgets/'.$name.'_static')->bind($name,$options);
		return $view;
	}
}