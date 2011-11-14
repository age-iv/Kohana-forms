<?php defined('SYSPATH') or die('No direct script access.');

	echo form::open();
	echo 'subject:' . form::input('subject') . '<br>';
	echo 'text:' . form::textarea('message') . '<br>';

	echo form::submit('send','send');
	echo form::close();