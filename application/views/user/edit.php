<?php defined('SYSPATH') or die('No direct script access.');

	echo form::open();
	echo 'username:' . form::input('username',$user->username) . '<br>';
	echo 'email:' . form::input('email',$user->email) . '<br>';
	echo 'password:' . form::password('password') . '<br>';
	echo 'password confirm:' . form::password('password_confirm') . '<br>';
	echo form::select('role',array('user'=>'user','admin'=>'admin'),$user->role) . '<br>';
	echo form::submit('create','save');
	echo form::close();