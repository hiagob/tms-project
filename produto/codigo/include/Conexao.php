<?php 
	$conn = mysql_connect('localhost','root','','musica')or die(mysql_error());
	mysql_select_db('musica') or die (mysql_error());
	$coni=mysqli_connect("localhost","root","","musica");

	if (!defined('PATH_URL')) define('PATH_URL','http://localhost/ad/');
	//session_start ();
?>
