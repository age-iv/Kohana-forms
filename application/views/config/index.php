<?php defined('SYSPATH') or die('No direct script access.');
	echo form::open();
	echo __('config.site_name') . form::input('site_name',$config['site_name']) . '<br>';
	echo __('config.template') . form::input('template',$config['template']) . '<br>';
	echo __('config.register') . form::radio('register',1,$config['register']==1 ? TRUE : FALSE). form::radio('register',0,$config['register']==0 ? TRUE : FALSE) . '<br>';
	echo __('end_date') . form::input('end_date',$config['end_date']) . '<br>';
	echo __('news_num') . form::input('news_num',$config['news_num']) . '<br>';
	echo __('admin_email') . form::input('admin_email',$config['admin_email']) . '<br>';
	echo form::hidden('key','common') . '<br>';
	echo form::submit('submit',__('save'));
	echo form::close();