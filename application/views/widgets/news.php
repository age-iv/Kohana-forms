<?php defined('SYSPATH') or die('No direct script access.');
foreach ($news as $new) {
		echo Date::formatted_time($new->date,'m.d.Y').' '.$new->content.'<br />';
		//echo '<div>'.$new->title.'</div>';
		echo ($buttons['edit']==TRUE) ? html::anchor('news/edit/'.$new->id,__('news.edit')) : '';
		echo ' ';
		echo ($buttons['delete']==TRUE) ? html::anchor('news/delete/'.$new->id,__('news.delete')) : '';	
		echo '<br />';
}
echo ($buttons['add']==TRUE) ? html::anchor('news/add',__('news.add')) : '';