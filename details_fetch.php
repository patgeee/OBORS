<?php
    $view_id = $_GET['id'];   
    
    $connection = mysql_connect('localhost','root','');
    mysql_select_db('db-obo');

    $query = "SELECT bp.bpApplicant_id,bp.bp_no, bp.year_approved, bp.date_approved, bp.ap_initial, bp.ap_brgy, code.code, bp.bp_orNo, 
            bp.or_datepaid, bp.building_cost, bp.building_fees, bp.building_noStoreys, bp.building_engineer,bp.applicant,
            bp.ap_location,bp.tax_receiptNo, bp.ge_datepaid, bp.tax_ge, bp.admin_receiptNo, bp.admin_datepaid, bp.admin_fine 
            FROM bp_applicant AS bp INNER JOIN brgy_code AS code ON bp.FKbrgy_code = code.code_id WHERE bp.bpApplicant_id = '$view_id';";

    $result = mysql_query($query);

    if(mysql_num_rows($result) > 0){
        
        while($row = mysql_fetch_array($result)){
            
            $bp_no = $row['bp_no'];
            $year = $row['year_approved'];
            $date = $row['date_approved'];
            $init = $row['ap_initial'];
            $brgy = $row['ap_brgy'];
            $code = $row['code'];
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
