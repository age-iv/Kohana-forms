<?php defined('SYSPATH') or die('No direct script access.');

	echo form::open();
	echo 'date:' . form::input('date',$data->date) . '<br>';
	echo 'title:' . form::input('title',$data->title) . '<br>';
	echo 'text:' . form::textarea('content',$data->content) . '<br>';
	echo form::hidden('id',$data->id) . '<br>';
	
	echo form::submit('add','add');
	echo form::close();