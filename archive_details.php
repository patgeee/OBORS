<?php include('unarchive_fetch.php');?>
<?php include('session.php');?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/logo.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>OBO Record System | Archive </title>

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

    <!--mdl-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="#2B2E33" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <img src="assets/img/title.png" alt="title" style="width:237px;height:61px;top:10px; padding:0; margin:0;">
            </div>

            <ul class="nav">
                <li>
                    
                    <a href="home.php">
                       <i class="fa fa-home" aria-hidden="true"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <i class="fa fa-tachometer" aria-hidden="true"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="database.php">
                        <i class="fa fa-database" aria-hidden="true"></i>
                        <p>Database</p>
                    </a>
                </li>
                <li>
                    <a href="search.php">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <p>Search</p>
                    </a>
                </li>
                <li>
                    <a href="add.php">
                       <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        <p>Add</p>
                    </a>
                </li>
                <li class="active">
                    <a href="archive.php">
                        <i class="fa fa-archive" aria-hidden="true"></i>
                        <p>Archive</p>
                    </a>
                </li>
                <li>
                    <a href="import.php">
                        <i class="fa fa-upload" aria-hidden="true"></i>
                        <p>Import</p>
                    </a>
                </li>
                <li>
                    <a href="export.php">
                       <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                        <p>Export</p>
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
                    <a class="navbar-brand" href="#">ARCHIVED RECORDS | VIEW RECORD</a>
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
                              <ul class="dropdown-menu">
                                <li><a href="view_prof.php">View Profile</a></li>
                                <li><a href="edit_prof.php">Edit Profile</a></li>
                                <li><a href="user_accts.php">User Accounts</a></li>
                                <li class="divider"></li>
                                <li><a href="add_user.php">Add User</a></li>
                              </ul>
                        </li>
                        <li class="dropdown">
                            <a href="login.php">
                                <i class="fa fa-sign-out"></i>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <?php
            $view_id = $_GET['id'];   
            
            $connection = mysql_connect('localhost','root','');
            mysql_select_db('db-obo');

            $query = "SELECT * FROM bp_applicant_archive WHERE bpApplicant_id = '$view_id';";

            $result = mysql_query($query);

            echo "<div class=\"content\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">";

            if(mysql_num_rows($result) > 0){
                
                while($row = mysql_fetch_array($result)){

                                echo"<div class=\"col-md-6\">
                                        <div class=\"card card-user\">
                                            <div class=\"image\">
                                                <img src=\"assets/img/sidebar-2.jpg\" alt=\"...\"/>
                                            </div>
                                            <div class=\"content\">
                                            <div class=\"author\">
                                                <a href=\"#\">
                                                    <img class=\"avatar border-gray\" src=\"assets/img/faces/face-0.jpg\" alt=\"...\"/>
                                                    <h4 class=\"title\">
                                                        <b>$row[applicant]</b><br>
                                                        <small>$row[ap_initial]</small>
                                                    </h4>    
                                                </a>
                                             </div>
                                             <hr>
                                            <br>";
                                echo"   <p class=\"description text-justify col-md-offset-3\">
                                            <b>BP #:&nbsp&nbsp</b> $row[bp_no]<br>
                                            <b>Date Approved: &nbsp&nbsp</b> $row[date_approved]<br>
                                            <b>Year Approved: &nbsp&nbsp</b> $row[year_approved]<br>
                                            <b>Location: &nbsp&nbsp</b> $row[ap_location]<br>
                                            <b>Barangay: &nbsp&nbsp</b> $row[ap_brgy] <br>
                                            <b>Code: &nbsp&nbsp</b> $row[brgy_code]<br>
                                            <b>OR #: &nbsp&nbsp</b> $row[bp_orNo]<br>
                                            <b>Date Paid: &nbsp&nbsp</b> $row[or_datepaid]
                                        </p>
                                     </div>";
                                echo "<div class=\"mdl-card__menu\">
                                            <a href=\"unarchive_confirm.php?id=$unarc_id\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-button--primary\" id=\"unarchive\">
                                                <i class=\"material-icons mdl-color-text--white\">unarchive</i>
                                            </a>
                                            <div class=\"mdl-tooltip\" for=\"archive\"><strong>UNARCHIVE</strong></div>
                                            </div>  
                                        </div>       
                                      </div>";
                                echo "<div class=\"col-md-6\">
                                          <div class=\"card\">
                                            <div class=\"content\">
                                                <div class=\"header\">
                                                    <h4 class=\"title text-center\"><b>Building</b><br>
                                                </div>
                                                <hr>
                                                <br>
                                                <p class=\"description text-justify col-md-offset-4\"> 
                                                    <b>Engineer: &nbsp&nbsp</b> $row[building_engineer]<br>
                                                    <b>Building Cost: &nbsp&nbsp</b> $row[building_cost]<br>
                                                    <b>Fees: &nbsp&nbsp</b> $row[building_fees]<br>
                                                    <b>Number of Storeys: &nbsp&nbsp</b> $row[building_noStoreys]
                                                </p>
                                             </div> 
                                           </div>       
                                       </div>";
                                echo "<div class=\"col-md-6\">
                                         <div class=\"card\">
                                            <div class=\"content\">
                                                <div class=\"header\">
                                                    <h4 class=\"title text-center\"><b>Fines and Taxes</b><br>
                                                </div>
                                                <hr>
                                                <br>
                                                <p class=\"description text-justify col-md-offset-3\">
                                                    <b>Tax Receipt #: &nbsp&nbsp</b> $row[tax_receiptNo]<br>
                                                    <b>General Engineering Tax: &nbsp&nbsp</b> $row[tax_ge]<br>
                                                    <b>General Engineering Date Paid: &nbsp&nbsp</b> $row[ge_datepaid]<br>
                                                    <b>Admin Fine Receipt #: &nbsp&nbsp</b> $row[admin_receiptNo]<br>
                                                    <b>Admin Fine: &nbsp&nbsp</b> $row[admin_fine]<br>
                                                    <b>Admin Date Paid: &nbsp&nbsp</b> $row[admin_datepaid]
                                                </p>
                                                </div> 
                                           </div>       
                                       </div>";           
                }
            }

            echo "</div> 
               </div>       
            </div>";

            mysql_free_result($result);
            mysql_close($connection);
        ?>

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

    </div>
</div>


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
