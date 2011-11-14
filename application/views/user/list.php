<?php defined('SYSPATH') or die('No direct script access.');
echo '<table width="60%" border="1">';
	echo '<th>'.__('user.username').'</th>';
	echo '<th>'.__('user.role').'</th>';
	echo '<th>'.__('user.logins').'</th>';
	echo '<th></th>';
foreach ($users as $user) {
		echo '<tr>';
			echo '<td>'.html::anchor('user/edit/'.$user->id,$user->username).'</td>';
			echo '<td>'.$user->role.'</td>';
			echo '<td>'.$user->logins.'</td>';
			echo '<td>'.html::anchor('user/delete/'.$user->id,__('user.delete')).'</td>';
		echo '</tr>';	
}
echo '</table>';