<?php

//echo @$_POST['text'];
mysql_connect('localhost','root','');
mysql_select_db('ajax');

if(isset($_POST['text']))
{
	$text = $_POST['text'];
	if(!empty($text))
	{
		$query = "INSERT INTO `names` VALUES('','".mysql_real_escape_string($text)."')";
		if($query_run = mysql_query($query))
		{
			echo 'Success. Data Inserted';
		}
		else
		{
			echo 'failed';
		}
	}
	else
	{
		echo 'cant be empty';
	}
}


?>