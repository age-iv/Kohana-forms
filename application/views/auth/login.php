<?php defined('SYSPATH') or die('No direct script access.');

	echo form::open();
	echo 'username:' . form::input('username') . '<br>';
	echo 'password:' . form::password('password') . '<br>';
	echo 'remember me:' . form::checkbox('remember',TRUE) . '<br>';
	echo form::submit('login','login');
	echo form::close();