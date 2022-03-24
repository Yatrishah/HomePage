<?php
session_start();

    $output = "
    <h3>Customer Service History</h3>
    <table>
    <tr>
    <th>Service Id</th>
    <th>Service Date</th>
    <th>Service Provider</th>
    <th>Payment</th>
    <th>Status</th>
    </tr>
    ";

    $conn = mysqli_connect("localhost","root","","helperland");

    if(!$conn){
        die("Error while connecting to database");
    }

    $userid = $_SESSION['UserId'];

    $sql =  "SELECT * FROM servicerequest WHERE UserId = $userid AND (`Status` = 1 OR `Status` = 2)";

    $res = mysqli_query($conn,$sql);

    if($res){

        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_array($res)){
                $status = "";
                if($row['Status'] == 1){
                    $status = "Completed";
                }
                else{
                    $status = "Cancelled";
                }

                $date = new DateTime($row['ServiceStartDate']);
                $result = $date->format('Y-m-d H:i:s');

                $output .="
                <tr>
                <td>".$row['ServiceId']."</td>
                <td>".$result."</td>
                <td>".$row['ServiceProviderId']."</td>
                <td>".$row['TotalCost']."</td>
                <td>".$status."</td>                
                </tr>
                ";
            }

            header('Content-Type:application/xlsx');

            header('Content-Disposition:attachment;filename=Customer Service History.xls');

            $output .= "</table>";
            echo $output;


        }
        else{
            echo "No data found";
        }

    }

	


?>