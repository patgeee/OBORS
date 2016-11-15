<!doctype html>
<html lang="en">
<head>

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
  
   <?php
    
            $connection = mysql_connect('localhost','root','');
            mysql_select_db('db-obo');

            $num_rec_per_page=100;
            
            if (isset($_GET["page"])) { 
                $page  = $_GET["page"]; 
            } else { 
                $page=1; 
            }; 

            $start_from = ($page-1) * $num_rec_per_page; 
            
            $sql = "SELECT * FROM xcel_member LIMIT $start_from, $num_rec_per_page"; 
            $rs_result = mysql_query ($sql); //run the query

            $query = "SELECT mem_no,xcel_id,firstname,lastname,initial,yearlevel,cityadd,homeadd,contactnumber,emailadd,bday,sports,skills,points FROM xcel_member LIMIT $start_from, $num_rec_per_page";
            $result = mysql_query($query);

            $query1 = "SELECT xcel_id, lastname, firstname, initial,yearlevel,points FROM xcel_member;";
            $result1 = mysql_query($query1);
            $count1 = mysql_num_rows($result1);

            echo"
                    <div class=\"content\">
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"card\">
                                        <div class=\"header\">
                                            <h2 class=\"title text-center\">Organization Members</h2>";                
                                            echo "<h5 class=\"text-center\">Total Members : $count1</h5>";
                                        
                                        echo "</div>
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
                                                    while ($row = mysql_fetch_row($result)) { 
                                                        $bp_id = $row[0];  
                                                        ?>                       
                                                        <tr>
                                                            <td><?php echo $row[1]; ?></td>
                                                            <td><?php echo $row[2]; ?></td>   
                                                            <td><?php echo $row[3]; ?></td> 
                                                            <td><?php echo $row[4]; ?></td>  
                                                            <td><?php echo $row[13]; ?></td>   
                                                             
                                                            <?php echo"<td style=\"padding-top: 8px !important; padding-bottom: 8px !important;\">
                                                                        <a href=\"bp_details.php?id=$bp_id\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-button--primary\" id=\"details\">
                                                                            <i class=\"mdl-color-text--cyan pe-7s-note2\"></i>
                                                                        </a>
                                                                        <a href=\"edit_record.php?id=$row[0]\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-button--primary\" id=\"edit\">
                                                                            <i class=\"mdl-color-text--cyan fa fa-edit\"></i>
                                                                        </a>
                                                                        <a href=\"archive_confirm.php?id=$row[0]\" class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect mdl-button--primary\" id=\"archive\">
                                                                            <i class=\"mdl-color-text--cyan fa fa-archive\"></i>
                                                                        </a>
                                                                      </td>"; ?>
                                                        </tr>
                                                    <?php }; ?>
                                                 
                                                    </table>
                                                    <?php 
                                                    $sql = "SELECT * FROM xcel_member"; 
                                                    $rs_result = mysql_query($sql); //run the query
                                                    $total_records = mysql_num_rows($rs_result);  //count number of records
                                                    $total_pages = ceil($total_records / $num_rec_per_page); 
                                                echo"</tbody>      
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> ";  
                                
                                    echo "<div class=\"container\"> ";
                                    echo "<ul class=\"pagination\"> ";
                                    echo "<li><a href='database.php?page=1'>".'|<'."</a></li> ";
                                    for ($i=1; $i<=$total_pages; $i++) { 
                                        echo "<li><a href='database.php?page=".$i."'>".$i."</a></li> "; 
                                    }; 
                                    echo "<li><a href='database.php?page=$total_pages'>".'>|'."</a></li> ";
                                
                                   
                                    
                                  
                            echo" </div>

                        
                    </div>
                  ";
            
    
            mysql_free_result($result);
            mysql_close($connection);
        ?>



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
                icon: 'fa fa-check-circle-o',
                message: "Successfully imported"
            },{
                type: 'info',
                timer: 4000
            });  
        });
    </script>


    

</html>
