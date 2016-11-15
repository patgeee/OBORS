<?php

$con=mysql_connect('localhost', 'root', '');
$db=mysql_select_db('db-obo');


if(isset($_POST['submit'])){    //trigger button click

  $search=$_POST['Applicant_Name'];

  $query=mysql_query("select * from bp_applicant where applicant like '%{$Applicant_Name}%'  ");

if (mysql_num_rows($query) > 0) {
  while ($row = mysql_fetch_array($query)) {
    echo "<tr><td>".$row['applicant']."</td><td></td><td>";
  }
}else{
    echo "No employee Found<br><br>";
  }

}else{                          //while not in use of search  returns all the values
  $query=mysql_query("select * from bp_applicant");

  while ($row = mysql_fetch_array($query)) {
    echo "<tr><td>".$row['applicant']."</td><td></td><td>";
  }
}

mysql_close();
?>