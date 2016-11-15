<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/logo.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>OBO Record System | Search Archive</title>

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
                <li  class="active">
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
                    <a class="navbar-brand" href="#">SEARCH DATA</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Account
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

                    <div class="col-md-12">
                        <div class="card">
                            <form action="" method="post">
                                <div class="header">
                                    <h1 class="title text-center">Search Archives</h1>
                                    <hr>
                                </div>
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-1">
                                            <div class="form-group">
                                                <label>Applicant</label>
                                                <input name="search" type="search"  type="text" class="form-control" placeholder="Applicant Name" id="search" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-md-offset-0">       
                                            <div class="form-group">
                                                <label>Location</label>
                                                    <input name="location" type="search"  type="text" class="form-control" placeholder="Location" id="search" autofocus>
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
                $loc=$_POST['location'];
                $query=mysql_query("select * from bp_applicant_archive where applicant like '%{$search}%' AND ap_location like '%{$loc}%'");

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
                                                                <th>BP #</th>
                                                                <th>Date Approved</th>
                                                                <th>Applicant</th>
                                                                <th>Location</th>
                                                                <th>Engineer</th>
                                                                <th>Actions</th>
                                                 
                                                                </thead>
                                                                <tbody>";
                                            while ($row = mysql_fetch_array($query)) {
                                            echo "<tr>";
                                                           //     echo "<td>".$row['applicant']."</td>";
                                                                $bp_id = $row[0]; 
                                                                echo "<tr>";
                                                                echo "<td>$row[1]</td>
                                                                      <td>$row[2]</td>
                                                                      <td>".$row['applicant']."</td>
                                                                      <td>$row[14]</td>
                                                                      <td>$row[12]</td>
                                                                      <td>
                                                                        <a style=\"font-size: 22px\" class=\"btn btn-info btn-simple btn-xs\"  href=\"bp_details.php?id=$bp_id\"><i class=\"pe-7s-note2\"></i></a>
                                                                        <a style=\"font-size: 24px\" class=\"btn btn-info btn-simple btn-xs\" href=\"edit_record.php?id=$bp_id\"><i class=\"fa fa-edit\"></i></a>
                                                                        <a style=\"font-size: 22px\" class=\"btn btn-info btn-simple btn-xs\" href=\"archive_confirm.php?id=$bp_id\"><i class=\"fa fa-archive\"></i></a>  
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
                                                                    <div class=\"header\">
                                                                        <h4 class=\"title\">Search Found</h4>";

                                                            echo "<p class=\"category\">Total records Found:</p>"; 
                                                            echo $count ;
                                  
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

                                        }
                                    else
                                        {                          //while not in use of search  returns all the values
                                             $connection = mysql_connect('localhost','root','');
                                                            mysql_select_db('db-obo');

                                                $query = "SELECT bpApplicant_id, bp_no, date_approved, applicant, ap_location, building_engineer FROM bp_applicant_archive;";
                                                $result = mysql_query($query);
                                                $data = "SELECT * FROM bp_applicant_archive ";
                                                $attribid = mysql_query($data) or die(mysql_error);
                                                $count=mysql_num_rows($attribid);

                        
                                            echo"
                                                <div class=\"content\">
                                                    <div class=\"container-fluid\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-12\">
                                                                <div class=\"card\">
                                                                    <div class=\"header\">
                                                                        <h4 class=\"title\">Archive Data</h4>";
                                                            echo "<p class=\"category\">Total records:</p>"; 
                                                            echo $count ;
                                  
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

            if(mysql_num_rows($result) > 0)
            {
                while($row = mysql_fetch_row($result))
                {
                                                            echo "<tr>";
                                                                echo "<td>$row[1]</td>
                                                                      <td>$row[2]</td>
                                                                      <td>$row[3]</td>
                                                                      <td>$row[4]</td>
                                                                      <td>$row[5]</td>";
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
            
    
            mysql_free_result($result);
          

                                           
                                        
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

   

</html>
