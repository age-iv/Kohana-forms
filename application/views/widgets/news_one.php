<?php defined('SYSPATH') or die('No direct script access.');
		echo '<div>'.Date::formatted_time($news->date,'d.m.Y').'</div>';
		echo '<div>'.$news->title.'</div>';
		echo '<div>'.$news->content.'</div>';
		echo ($buttons['edit']==TRUE) ? html::anchor('news/edit/'.$news->id,__('news.edit')) : '';
		echo ' ';
		echo ($buttons['delete']==TRUE) ? html::anchor('news/delete/'.$news->id,__('news.delete')) : '';