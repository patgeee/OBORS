  <?php
    
            $connection = mysql_connect('localhost','root','');
            mysql_select_db('db-obo');

            $query = "SELECT bpApplicant_id, bp_no,year_approved,date_approved,ap_initial,ap_brgy,brgy_code,bp_orNo,or_datepaid,building_cost,building_fees,building_noStoreys,building_engineer,applicant,ap_location,tax_receiptNo,ge_datepaid,tax_ge,admin_receiptNo,admin_datepaid,admin_fine FROM bp_applicant;";

            $result = mysql_query($query);
            $count = mysql_num_rows($result);

             echo"
                    <div class=\"content\">
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"card\">
                                        <div class=\"header\">";

                                  echo "</div>
                                        <div class=\"content table-responsive table-full-width\">
                                            <table class=\"table table-hover table-striped\">
                                                <thead>

                                                    <th>BP #</th>
                                                    <th>Year Approved</th>
                                                    <th>Date Approved</th>
                                                    <th>Applicant Initial</th>
                                                    <th>Applicant's Baranagay</th>
                                                    <th>Barangay Code</th>
                                                    <th>BP OR#</th>
                                                    <th>Date Paid</th>
                                                    <th>Building Cost</th>
                                                    <th>Building Fees</th>
                                                    <th>Number of Storeys</th>
                                                    <th>Engineer</th>
                                                    <th>Applicant</th>
                                                    <th>location</th>
                                                    <th>Tax Receipt No.</th>
                                                    <th>Date Paid</th>
                                                    <th>tax GE</th>
                                                    <th>Admin_Tax Receipt No.</th>
                                                    <th>Date Paid</th>
                                                    <th>admin Fine</th>
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
                                                                      <td>$row[5]</td>
                                                                      <td>$row[6]</td>
                                                                      <td>$row[7]</td>
                                                                      <td>$row[8]</td>
                                                                      <td>$row[9]</td>
                                                                      <td>$row[10]</td>
                                                                      <td>$row[11]</td>
                                                                      <td>$row[12]</td>
                                                                      <td>$row[13]</td>
                                                                      <td>$row[14]</td>
                                                                      <td>$row[15]</td>
                                                                      <td>$row[16]</td>
                                                                      <td>$row[17]</td>
                                                                      <td>$row[18]</td>
                                                                      <td>$row[19]</td>
                                                                      <td>$row[20]</td>";
                                                                    
                                                                      
                                                                     
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
            mysql_close($connection);
        ?>