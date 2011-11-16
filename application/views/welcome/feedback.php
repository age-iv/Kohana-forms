<?php defined('SYSPATH') or die('No direct script access.');

	echo form::open();
	echo 'subject:' . form::input('subject') . '<br>';
	echo 'text:' . form::textarea('message') . '<br>';
	echo $captcha->render(TRUE).'<br />';
	echo form::input('captcha') . '<br>';
	

	echo form::submit('send','send');
	echo form::close();