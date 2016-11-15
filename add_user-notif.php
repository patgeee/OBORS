<?php include('session.php');?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/logo.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>OBO Record System | Database </title>

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


    <!--MDL-->
    <link rel="stylesheet" type="text/css" href="mdl/mdl-icons/material-icons.css">
    <link rel="stylesheet" type="text/css" href="mdl/mdl/material.min.css">
    <link rel="stylesheet" type="text/css" href="mdl/mdl-selectfield/mdl-selectfield.min.css">
    <script src="mdl/mdl/material.min.js" type="text/javascript"></script>
    <script src="mdl/mdl-selectfield/mdl-selectfield.min.js" type="text/javascript"></script>

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
                <li>
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
                    <a class="navbar-brand" href="#">User Accounts</a>
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
                            <a href="logout.php">
                                <i class="fa fa-sign-out"></i>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <!--add_user.php-->

        <?php
            $connection = mysql_connect('localhost','root','');
            mysql_select_db('db-obo');

            //var POST values
            if(isset($_POST['submit'])){
                //building permit
                $username = mysql_real_escape_string($_POST['uname']);
                $password = mysql_real_escape_string($_POST['pword']);
                $password = md5($password);
                $first_name = mysql_real_escape_string($_POST['fname']);
                $last_name = mysql_real_escape_string($_POST['lname']);
                $birth_date = mysql_real_escape_string($_POST['bdate']);
                $address = mysql_real_escape_string($_POST['add']);
                $email_add = mysql_real_escape_string($_POST['email']);
                $landline = mysql_real_escape_string($_POST['land']);
                $mobile = mysql_real_escape_string($_POST['mob']);

                $query = "INSERT INTO login(last_name,first_name,birth_date,address,email_add,landline,mobile_num,username,password) VALUES('$last_name','$first_name','$birth_date','$address','$email_add','$landline','$mobile','$username','$password');";

                $result = mysql_query($query);

            }

            mysql_close($connection);
        ?>

        <?php
    
            $connection = mysql_connect('localhost','root','');
            mysql_select_db('db-obo');

            $query = "SELECT * FROM login;";

            $result = mysql_query($query);
            $count = mysql_num_rows($result);

             echo"
                    <div class=\"content\">
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"card\">
                                        <div class=\"header\">
                                            <h4 class=\"title\">User Accounts</h4>";
                                            echo "<p class=\"category\">Total users: </p>";
                                            echo $count;  
                                  echo "</div>
                                        <div class=\"content table-responsive table-full-width\">
                                            <table class=\"table table-hover table-striped\">
                                                <thead>
                                                    <th>username</th>
                                                    <th>firstname</th>
                                                    <th>lastname</th>
                                                    <th>email address</th>

                                                    </thead>
                                                    <tbody>";

             if(mysql_num_rows($result) > 0)
            {
                while($row = mysql_fetch_row($result))
                {                               
                    $id = $row[0];
                    echo "<tr>";
                        echo "<td>$row[8]</td>
                        <td>$row[2]</td>
                        <td>$row[1]</td>
                        <td>$row[5]</td>";

                        if ($row[8] == $login_session)
                        {


                        echo"<td style=\"padding-top: 8px !important; padding-bottom: 8px !important;\">
                        <button type=\"button\" rel=\"tooltip\" title=\"View Profile\" class=\"btn btn-info btn-simple btn-xs\">
                        <a href=\"user_details.php?id=$id\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-button--primary\" id=\"details\">
                        <i class=\"mdl-color-text--cyan pe-7s-note2\"></i> </a>
                        </button>";
                        }
                        else
                        {
                        echo"<td style=\"padding-top: 8px !important; padding-bottom: 8px !important;\">
                        <button type=\"button\" rel=\"tooltip\" title=\"View Profile\" class=\"btn btn-info btn-simple btn-xs\">
                        <a href=\"user_details.php?id=$id\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-button--primary\" id=\"details\">
                        <i class=\"mdl-color-text--cyan pe-7s-note2\"></i> </a>
                        </button>";
                                                                    
                        echo "<button type=\"button\" rel=\"tooltip\" title=\"Delete User\" class=\"btn btn-info btn-simple btn-xs\">
                        <a href=\"delete_confirm.php?id=$id\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-button--primary\" id=\"Delete User\">
                        <i class=\"mdl-color-text--cyan fa fa-trash-o\"></i> </a>
                        </button>
                        </td>";
                        echo "</tr>";
                        }
                                                        
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

    <script type="text/javascript"> 
        $(document).ready(function(){
            demo.initChartist();
            $.notify({
                icon: 'pe-7s-bell',
                message: "New User has been added successfully"
            },{
                type: 'info',
                timer: 4000
            });  
        });
    </script>
    
    
</html>

