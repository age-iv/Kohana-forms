<?php defined('SYSPATH') or die('No direct script access.');

	echo form::open();
	echo 'username:' . form::input('username') . '<br>';
	echo 'email:' . form::input('email') . '<br>';
	echo 'password:' . form::password('password') . '<br>';
	echo 'password confirm:' . form::password('password_confirm') . '<br>';
	echo $disabled==TRUE ? form::hidden('role','user') : 'role:' . form::select('role',array('user'=>'user','admin'=>'admin')) . '<br>';
	echo form::submit('create','create');
	echo form::close();