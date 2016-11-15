<?php include('edit_fetch.php');?>
<?php include('session.php');?>

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
               
                <li class="active">
                    <a href="database.php">
                        <i class="fa fa-sitemap" aria-hidden="true"></i>
                        <p>Organization Members</p>
                    </a>
                </li>
                <li>
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
                    <a class="navbar-brand" href="#">Organization Members | Edit Member Records</a>
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

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <form name="submit" action="edit_record-notif.php" method="POST">
                    <div class="col-md-6 ">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Members Profile</h4>
                            </div>
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>XCEL ID</label>
                                                <input type="text" class="form-control" placeholder="XCEL ID Number #" name="xcel_id" id="xcel_id" required value="<?php echo $xcel_id; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="lastname" name="lastname" id="lastname" required value="<?php echo $lastname; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="firstname" name="firstname" id="firstname" required value="<?php echo $firstname; ?>">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Middle Initials</label>
                                                <input type="text" class="form-control" placeholder="M.I" name="initial" id="initial" required value="<?php echo $initial; ?>">
                                            </div>
                                        </div>
                                         <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Year  Level</label>
                                                <input type="text" class="form-control" placeholder="Year Level" name="yearlevel" id="yearlevel" required value="<?php echo $yearlevel; ?>">
                                            </div>
                                        </div>
                                          <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Contact Number</label>
                                                <input type="text" class="form-control" placeholder="Contact Number" name="contactnumber" id="contactnumber" required value="<?php echo $contactnumber; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                            </div>
                                        </div>
                                    </div>
                                 
                                    </div>

                                    <div class="row">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Sports</label>
                                                <input type="text" class="form-control" placeholder="Sports" name="sports" id="sports" required value="<?php echo $sports; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                 <label>Skills and Interest</label>
                                                <input type="text" class="form-control" placeholder="skills and interest" name="skills" id="skills" required value="<?php echo $skills; ?>">
                                            </div>
                                        </div>

                                         <div class="col-md-3">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                            </div>
                                        </div>



                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label></label>
                                        </div>    
                                    </div>                                 
                                </div>
                        </div>
                    </div>  



                      <div class="col-md-6 ">
                        <div class="card">
                            <div class="header">
                                
                            </div>
                                <div class="content">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>City Address</label>
                                                <input type="text" class="form-control" placeholder="City Address" name="cityadd" id="cityadd" required value="<?php echo $cityadd; ?>">
                                            </div>
                                        </div>
                                         <div class="col-md-12">
                                            <div class="form-group">
                                                 <label>Home Address</label>
                                                <input type="text" class="form-control" placeholder="Home Address" name="homeadd" id="homeadd" required value="<?php echo $homeadd; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                 <label>Email Address</label>
                                                <input type="text" class="form-control" placeholder="Email Address" name="emailadd" id="emailadd" required value="<?php echo $emailadd; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                         <div class="form-group">
                                                <label>Birth Date</label>
                                                <input type="date" class="form-control" placeholder="mm/dd/yyyy" name="bday" id="bday" required value="<?php echo $bday; ?>">
                                        </div>
                                       
                                            
                                        </div>
                                    </div>

                                    <div class="row">
                                    
                                         <div class="col-md-3">
                                            <div class="form-group">
                                                 <label>Points Garner</label>
                                                <input type="text" class="form-control" placeholder="Points" name="points" id="points" required value="<?php echo $points; ?>">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label></label>
                                        </div>    
                                    </div>                                 
                                </div>
                        </div>
                    </div>    


                    <!--BUTTON-->
                    <div class="places-buttons">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" name="submit" value="Submit" class="btn btn-info btn-block">UPDATE RECORD</button>
                                </div>
                            </div>
                    </div>
                    </form>
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

