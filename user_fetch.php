<?php
	include ('session-2.php');

	//$user_id = $_GET['id'];

	$connection = mysql_connect('localhost','root','');
    mysql_select_db('db-obo');

    $query = "SELECT * FROM login WHERE id = '';";

    $result = mysql_query($query);


    mysql_close($connection);    	

?>