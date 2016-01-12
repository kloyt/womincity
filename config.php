<?php
	$hostname="localhost"; 
	$login="root"; 
	$pwd="";
	$db_name="comments"; 
	
	$con = @mysql_connect($hostname, $login, $pwd) or die("Error! connect-database");
	mysql_select_db($db_name, $con) or die ("Error! select-database");
?>