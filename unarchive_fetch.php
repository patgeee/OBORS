<?php
	$unarc_id = $_GET['id'];

	$connection = mysql_connect('localhost','root','');
    mysql_select_db('db-obo');

    $query = "SELECT * FROM bp_applicant_archive WHERE bpApplicant_id = '$unarc_id';";

    $result = mysql_query($query);

    if(mysql_num_rows($result) > 0){
        
        while($row = mysql_fetch_array($result)){
            $bp_id = $row['bpApplicant_id'];
        	$bp_no = $row['bp_no'];
            $year = $row['year_approved'];
            $date = $row['date_approved'];
            $init = $row['ap_initial'];
            $brgy = $row['ap_brgy'];
            $code = $row['brgy_code'];
            $or_no = $row['bp_orNo'];
            $or_date = $row['or_datepaid'];
            $cost = $row['building_cost'];
            $fees = $row['building_fees'];
            $numStor = $row['building_noStoreys'];
            $engineer = $row['building_engineer'];
            $applicant = $row['applicant'];
            $location = $row['ap_location'];
            $tax_rNo = $row['tax_receiptNo'];
            $ge_date = $row['ge_datepaid'];
            $ge_tax = $row['tax_ge'];
            $admin_rNo = $row['admin_receiptNo'];
            $admin_date = $row['admin_datepaid'];
            $adminFine = $row['admin_fine'];

        }
    }


    mysql_free_result($result);
    mysql_close($connection);    	

?>