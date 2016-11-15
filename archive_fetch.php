<?php
	$arc_id = $_GET['id'];

	$connection = mysql_connect('localhost','root','');
    mysql_select_db('db-obo');

    $query = "SELECT * FROM xcel_member WHERE mem_no = '$arc_id';";

    $result = mysql_query($query);

    if(mysql_num_rows($result) > 0){
        
        while($row = mysql_fetch_array($result)){
            $bp_id = $row['mem_no'];
        	$xcel_id = $row['xcel_id'];
            $lastname = $row['lastname'];
            $firstname = $row['firstname'];
            $initial = $row['initial'];
            $yearlevel = $row['yearlevel'];
            $cityadd = $row['cityadd'];
            $homeadd = $row['homeadd'];
            $contactnumber = $row['contactnumber'];
            $emailadd = $row['emailadd'];
            $bday = $row['bday'];
            $sports = $row['sports'];
            $skills = $row['skills'];
            $points = $row['points'];

        }
    }


    mysql_free_result($result);
    mysql_close($connection);    	

?>