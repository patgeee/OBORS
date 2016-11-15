<?php
include('session-1.php');
?>

<!doctype html>
<html lang="en">
<head>

 <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/logo.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/log.oico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>OBO Record System | IMPORT</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


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
                    <a class="navbar-brand" href="#">IMPORT FILE</a>
                </div>
         
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php echo $login_session; ?>
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
                    <form method="post" name="upload_excel" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2 class="title text-center">Import Comma Separated Value (*.csv)</h2>
                                    <h5 class="text-center">Max: 500 entries</h5>
                                    <br>
                                    <br>
                                </div>                              

                                <div class="places-buttons">
                                    <div class="row">
                                        <div class="control-group">
                                            <div class="col-md-2 col-md-offset-4">
                                                <div class="controls">
                                                    <input type="file" name="csv_data" id="file">
                                                    <br>
                                                </div>
                                            </div>    
                                        </div>
                                   
                                        <div class="col-md-2 col-md-offset-1">
                                            <button type="submit" id="submit" name="Import" value='import' class="btn btn-info btn-block">IMPORT</button>
                                        </div>
                                    </div>    
                                </div>
                            </div>    
                        </div>
                    </form>
                    <?php
                                    include_once 'db.php';
                                    if(isset($_POST['Import'])){
                                        if($_FILES['csv_data']['name']){
                                            $arrFileName = explode('.',$_FILES['csv_data']['name']);
                                                if($arrFileName[1] == 'csv'){
                                                     $handle = fopen($_FILES['csv_data']['tmp_name'], "r");
                                                     fgets($handle); 
                                                        while (($data = fgetcsv($handle, 10000, ",")) !== FALSE) {
                                                            $item1 = mysqli_real_escape_string($db,$data[1]);
                                                            $item2 = mysqli_real_escape_string($db,$data[2]);
                                                            $item3 = mysqli_real_escape_string($db,$data[3]);
                                                            $item4 = mysqli_real_escape_string($db,$data[4]);
                                                            $item5 = mysqli_real_escape_string($db,$data[5]);
                                                            $item6 = mysqli_real_escape_string($db,$data[6]);
                                                            $item7 = mysqli_real_escape_string($db,$data[7]);
                                                            $item8 = mysqli_real_escape_string($db,$data[8]);
                                                            $item9 = mysqli_real_escape_string($db,$data[9]);
                                                            $item10 = mysqli_real_escape_string($db,$data[10]);
                                                            $item11 = mysqli_real_escape_string($db,$data[11]);
                                                            $item12 = mysqli_real_escape_string($db,$data[12]);
                                                            $item13 = mysqli_real_escape_string($db,$data[13]);

                                                           
                                                        //    $item20 = mysqli_real_escape_string($db,$data[19]);


                                                    $import="INSERT into xcel_member(xcel_id,firstname,lastname,initial,yearlevel,cityadd,homeadd,contactnumber,emailadd,bday,sports,skills,points) values('$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13')";

                                                ini_set('max_execution_time', 60);
                                                mysqli_query($db,$import);
                                            }
                                        fclose($handle);
                                       
                                        include'import-notif.php';
                                    }
                                    else if($arrFileName[1] != 'csv'){
                                          include'decline.php';
                                      }
                                  
                                      
        }
    }
    
?>
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

                        <li>
                            <a href="#">
                                Contact Us !
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

</html>
