<?php defined('SYSPATH') or die('No direct script access.');
	echo '<script>';
		echo '$(function() {';
			echo '$( "#accordion" ).accordion();';
		echo '});';
	echo '</script>';

$options=array('size'=>5);

	echo form::open();
	
	echo '<div id="accordion">';
    echo '<h3><a href="#">'.__('dep.table1').'</a></h3>';
    echo '<div>';
		echo '<table>';
		echo '<tr>';
			echo '<th rowspan="2">'.__('dep.table1_1').'</th>';
			echo '<th rowspan="2">'.__('dep.table1_2').'</th>';
			echo '<th rowspan="2">'.__('dep.table1_3').'</th>';
			echo '<th>'.__('dep.table1_4').'</th>';
			echo '<th></th>';
			echo '<th></th>';
			echo '<th>'.__('dep.table1_7').'</th>';
			echo '<th>'.__('dep.table1_8').'</th>';
			echo '<th>'.__('dep.table1_9').'</th>';
		echo '</tr>';
		echo '<tr>';
			echo '<th>'.__('dep.table1_4').'</th>';
			echo '<th>'.__('dep.table1_5').'</th>';
			echo '<th>'.__('dep.table1_6').'</th>';
			echo '<th>'.__('dep.table1_7').'</th>';
			echo '<th>'.__('dep.table1_8').'</th>';
			echo '<th>'.__('dep.table1_9').'</th>';
		echo "</tr>";
		echo '<tr>';
			echo '<td>'. form::input('table1_1',NULL,$options) . '</td>';
			echo '<td>'. form::input('table1_2',NULL,$options) . '</td>';
			echo '<td>'. form::input('table1_3',NULL,$options) . '</td>';
			echo '<td>'. form::input('table1_4',NULL,$options) . '</td>';
			echo '<td>'. form::input('table1_5',NULL,$options) . '</td>';
			echo '<td>'. form::input('table1_6',NULL,$options) . '</td>';
			echo '<td>'. form::input('table1_7',NULL,$options) . '</td>';
			echo '<td>'. form::input('table1_8',NULL,$options) . '</td>';
			echo '<td>'. form::input('table1_9',NULL,$options) . '</td>';
		echo '</tr>';
		echo '</table>';
	echo '</div>';

    echo '<h3><a href="#">'.__('dep.table2').'</a></h3>';
    echo '<div>';
		echo '<div style="float:left;">'.__('dep.table2_1') .'<br />'. form::input('date',date('Y-d-m'),$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table2_2') .'<br />'. form::input('title',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table2_3') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table2_4') .'<br />'. form::input('content',NULL,$options) . '</div>';
    echo '</div>';
	
	echo '<h3><a href="#">'.__('dep.table3').'</a></h3>';
    echo '<div>';
		echo '<div style="float:left;">'.__('dep.table3_1') .'<br />'. form::input('date',date('Y-d-m'),$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table3_2') .'<br />'. form::input('title',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table3_3') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table3_4') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table3_5') .'<br />'. form::input('content',NULL,$options) . '</div>';
    echo '</div>';
	
	echo '<h3><a href="#">'.__('dep.table4').'</a></h3>';
    echo '<div>';
		echo '<div style="float:left;">'.__('dep.table4_1') .'<br />'. form::input('date',date('Y-d-m'),$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table4_2') .'<br />'. form::input('title',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table4_3') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table4_4') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table4_5') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table4_6') .'<br />'. form::input('content',NULL,$options) . '</div>';
    echo '</div>';
	
	echo '<h3><a href="#">'.__('dep.table5').'</a></h3>';
    echo '<div>';
		echo '<div style="float:left;">'.__('dep.table5_1') .'<br />'. form::input('date',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table5_2') .'<br />'. form::input('title',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table5_3') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table5_4') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table5_5') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table5_6') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table5_7') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table5_8') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table5_9') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table5_10') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table5_11') .'<br />'. form::input('content',NULL,$options) . '</div>';
    echo '</div>';
	
	echo '<h3><a href="#">'.__('dep.table6').'</a></h3>';
    echo '<div>';
		echo '<div style="float:left;">'.__('dep.table6_1') .'<br />'. form::input('date',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table6_2') .'<br />'. form::input('title',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table6_3') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table6_4') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table6_5') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table6_6') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table6_7') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table6_8') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table6_9') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table6_10') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table6_11') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table6_12') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table6_13') .'<br />'. form::input('content',NULL,$options) . '</div>';
		echo '<div style="float:left;">'.__('dep.table6_14') .'<br />'. form::input('content',NULL,$options) . '</div>';
    echo '</div>';
	
	
	
	echo '</div>';


	

	echo form::hidden('year',date('Y')) . '<br>';
	
	echo form::submit('add','add');
	echo form::close();