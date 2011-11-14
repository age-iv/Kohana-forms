<?php defined('SYSPATH') or die('No direct script access.');

	echo form::open();
	echo 'date:' . form::input('date',date('Y-d-m')) . '<br>';
	echo 'title:' . form::input('title') . '<br>';
	echo 'text:' . form::textarea('content') . '<br>';

	echo form::submit('add','add');
	echo form::close();