<?php
	include('session-1.php');
?>
<?php

   // $user_id = $_GET['id'];
    
	$connection = mysql_connect('localhost','root','');
    mysql_select_db('db-obo');

    $query = "SELECT * FROM login WHERE username= '$login_session';";

    $result = mysql_query($query);

    if(mysql_num_rows($result) > 0){
        
        while($row = mysql_fetch_assoc($result)){
            $last_name = $row['last_name'];
            $first_name = $row['first_name'];
            $birth_date = $row['birth_date'];
            $address = $row['address'];
            $email_add = $row['email_add'];
            $landline = $row['landline'];
            $mobile_num = $row['mobile_num'];
            $username = $row['username'];
        }
    }


    mysql_free_result($result);
    mysql_close($connection);    	

?>