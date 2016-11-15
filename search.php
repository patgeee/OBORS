<?php
include('session-1.php');
?>
<!doctype html>
<html lang="en">
<head>
<style>
h1 {
     font-size:6.2em;
     font-weight:500; 
    }


</style>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>XCEL</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
        .scanner-laser{
            position: absolute;
            margin: 40px;
            height: 30px;
            width: 30px;
        }
        .laser-leftTop{
            top: 0;
            left: 0;
            border-top: solid red 5px;
            border-left: solid red 5px;
        }
        .laser-leftBottom{
            bottom: 0;
            left: 0;
            border-bottom: solid red 5px;
            border-left: solid red 5px;
        }
        .laser-rightTop{
            top: 0;
            right: 0;
            border-top: solid red 5px;
            border-right: solid red 5px;
        }
        .laser-rightBottom{
            bottom: 0;
            right: 0;
            border-bottom: solid red 5px;
            border-right: solid red 5px;
        }
    </style>


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <img src="assets/img/logo.png" alt="title" style="width:61px;height:61px;top:10px; padding:0; margin:0;">
                
            </div>

            <ul class="nav">
                <li >
                    
                    <a href="home.php">
                       <i class="fa fa-home" aria-hidden="true"></i>
                        <p>Home</p>
                    </a>
                </li>
               
                <li >
                    <a href="database.php">
                        <i class="fa fa-sitemap" aria-hidden="true"></i>
                        <p>Organization Members</p>
                    </a>
                </li>
                <li class="active">
                    <a href="search.php">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <p>Search Member</p>
                    </a>
                </li>
                <li>
                    <a href="add.php">
                       <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        <p>Add Member</p>
                    </a>
                </li>
                <li>
                    <a href="archive.php">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                        <p>Archive Member</p>
                    </a>
                </li>
                <li>
                    <a href="import.php">
                        <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                        <p>Import Data</p>
                    </a>
                </li>
                <li>
                    <a href="export.php">
                       <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                        <p>Export Data</p>
                    </a>
                </li>
                
                <li class="active-pro">
                    <a href="help.php">
                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                        <p>HELP</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">SEARCH DATA</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php echo $login_session ?>
                                    <b class="caret"></b>
                              </a>
                              <?php
                                    $connection = mysql_connect('localhost','root','');
                                    mysql_select_db('db-obo');

                                    $query = "SELECT * FROM login;";
                                    $result = mysql_query($query);

                                    if(mysql_num_rows($result) > 0){
                                        while($row = mysql_fetch_row($result)){
                                            $viewUser_id = $row[0]; 
                                            
                                            echo"<ul class=\"dropdown-menu\">
                                                    <li><a href=\"view_prof.php?id=$viewUser_id\">View Profile</a></li>
                                                    <li><a href=\"edit_prof.php?id=$viewUser_id\">Edit Profile</a></li>
                                                    <li><a href=\"user_accts.php\">User Accounts</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"add_user.php\">Add User</a></li>
                                                  </ul>";
                                        }
                                    }

                                    mysql_free_result($result);
                                    mysql_close($connection);              
                                ?>
                        </li>
                        <li class="dropdown">
                            <a href="logout.php">
                                <i class="fa fa-sign-out"></i>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <form action="" method="post">
                                <div class="header">
                                    <h1 class="title text-center">Search Member</h1>
                                    <hr>
                                </div>


                                <div id="QR-Code" class="container" style="width:100%">
                <div class="panel panel-primary">
                <div class="panel-heading" style="display: inline-block;width: 100%;">
                    <h4 style="width:50%;float:left;">XCEL ID Scanner</h4>
                    <div style="width:50%;float:right;margin-top: 5px;margin-bottom: 5px;text-align: right;">
                    <select id="cameraId" class="form-control" style="display: inline-block;width: auto;"></select>
                    <button id="save" data-toggle="tooltip" title="Image shoot" type="button" class="btn btn-info btn-sm disabled"><span class="glyphicon glyphicon-picture"></span></button>
                    <button id="play" data-toggle="tooltip" title="Play" type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-play"></span></button>
                    <button id="stop" data-toggle="tooltip" title="Stop" type="button" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-stop"></span></button>
                    <button id="stopAll" data-toggle="tooltip" title="Stop streams" type="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-stop"></span></button>
                </div>
            </div>
                            <center>
                            <div class="well" style="position: relative;display: inline-block;">
                                <canvas id="qr-canvas" width="320" height="240"></canvas>
                                <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
                                <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
                                <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
                                <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
                            </div>
                            </center>
                     <div class="col-md-6" style="text-align: center;">

                     <?php //result ?>
                   
                        <div class="well" style="position: relative;display: inline-block;">
                            <img id="scanned-img" src="" width="100" height="100">
                        </div>
                        <div class="caption">
                            <h3>Scanned result</h3>
                            <p id="scanned-QR"></p>
                        </div>
                    <
                </div>
                    
                    </div>
                    </div>
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-1">
                                            <div class="form-group">
                                                <label>XCEL ID Number</label>
                                                <input name="search" type="search"  type="text" class="form-control" placeholder="XCEL #" id="search" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-md-offset-0">       
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                    <input name="lastname" type="search"  type="text" class="form-control" placeholder="Last Name" id="search" autofocus>
                                            </div>
                                        </div>
                                        <div class="places-buttons">
                                            <div class="class=col-md-4">
                                                <div class="col-md-2">
                                                    <label></label>
                                                    <button type="submit" name="button"  class="btn btn-info btn-block">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
        <?php

            $con=mysql_connect('localhost', 'root', '');
            $db=mysql_select_db('db-obo');

            if(isset($_POST['button'])){    //trigger button click
                
                $search=$_POST['search'];
                $lastname=$_POST['lastname'];
                $query=mysql_query("select * from xcel_member where xcel_id like '%{$search}%' AND lastname like '%{$lastname}%'");

                if (mysql_num_rows($query) > 0) {
                                        
                    include "search_notif.php";
                    
                    $count=mysql_num_rows($query);

                                        echo"
                                                <div class=\"content\">
                                                    <div class=\"container-fluid\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-12\">
                                                                <div class=\"card\">
                                                                    <div class=\"header text-center\">
                                                                        <h3 class=\"title\">Search Found</h3>";
                                                            echo "      <p class=\"category\">Total records found: $count</p>"; 
                                                            echo "  </div>
                                                    <div class=\"content table-responsive table-full-width\">
                                                        <table class=\"table table-hover table-striped\">
                                                            <thead>
                                                                <th>XCEL ID</th>
                                                                <th>Lastname</th>
                                                                <th>Firstname</th>
                                                                <th>Year Level </th>
                                                                <th>Points</th>
                                                 
                                                                </thead>
                                                                <tbody>";
                                            while ($row = mysql_fetch_array($query)) {
                                            echo "<tr>";
                                                           //     echo "<td>".$row['applicant']."</td>";
                                                                $bp_id = $row[0]; 
                                                                echo "<tr>";
                                                                echo "
                                                                      <td>".$row['xcel_id']."</td>
                                                                      <td>".$row['lastname']."</td>   
                                                                      <td>".$row['firstname']."</td>
                                                                      <td>".$row['yearlevel']."</td>  
                                                                      <td>".$row['points']."</td>   
                                                                      <td>
                                                                        <a href=\"bp_details.php?id=$bp_id\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-button--primary\" id=\"details\">
                                                                            <i class=\"mdl-color-text--cyan pe-7s-note2\"></i>
                                                                        </a>
                                                                        <a href=\"edit_record.php?id=$bp_id\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-button--primary\" id=\"edit\">
                                                                            <i class=\"mdl-color-text--cyan fa fa-edit\"></i>
                                                                        </a>
                                                                        <a href=\"archive_confirm.php?id=$bp_id\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-button--primary\" id=\"archive\">
                                                                            <i class=\"mdl-color-text--cyan fa fa-archive\"></i>
                                                                        </a>  
                                                                      </td>";
                                                            echo "</tr>";

                                                      


                                            echo "</tr>";




                                        }

                                    }

                          
                                    else
                                        {
                                            include "noSearch.php";
                                             $count=mysql_num_rows($query);

                                        echo"
                                                <div class=\"content\">
                                                    <div class=\"container-fluid\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-12\">
                                                                <div class=\"card\">
                                                                    <div class=\"header text-center\">
                                                                        <h3 class=\"title\">Search Found</h3>";

                                                            echo "<p class=\"category\">Total records Found: $count</p>"; 
                                                            
                                  
                                            echo "</div>
                                                    <div class=\"content table-responsive table-full-width\">
                                                        <table class=\"table table-hover table-striped\">
                                                            <thead>
                                                                <th>BP #</th>
                                                                <th>Date Approved</th>
                                                                <th>Applicant</th>
                                                                <th>Location</th>
                                                                <th>Engineer</th>
                                                 
                                                                </thead>
                                                                <tbody>";
                                           
                                        }

                                        
                                            echo "</div>
                                                    <div class=\"content table-responsive table-full-width\">
                                                        <table class=\"table table-hover table-striped\">
                                                                <tbody>";

            
            {
                {
                                                            echo "<tr>";
                                                               
                                                            echo "</tr>";
                                                        
                }
   
            }

             echo"
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";     
            
    
            
          

                                           
                                        
                                        }

                                            mysql_close();
                                    ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="dev.php">
                                Meet the Developers
                            </a>
                        </li>

                      
                       
                    </ul>
                </nav>
                <p class="copyright pull-right">
                <font size="1">
                    &copy; Office of the City Building Officials Record System 2016   | <a href="http://ccs.xu.edu.ph">Xavier University - Ateneo de Cagayan , College of Computer Studies</a> 
                </p>
                </font>
            </div>
        </footer>

</body>



    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/qrcodelib.js"></script>
<script type="text/javascript" src="js/WebCodeCam.js"></script>
<script type="text/javascript" src="js/main.js"></script>

   

</html>
