<?php
session_start();

    $output = "
    <h3>Service Provider History</h3>
    <table>
    <tr>
    <th>Service Id</th>
    <th>Service Date</th>
    </tr>
    ";

    $conn = mysqli_connect("localhost","root","","helperland");

    if(!$conn){
        die("Error while connecting to database");
    }

    $userid = $_SESSION['UserId'];

    $sql = "SELECT *FROM servicerequest WHERE ServiceProviderId = $userid AND `Status` = 1";

    $res = mysqli_query($conn,$sql);

    if($res){

        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_array($res)){
               

                $date = new DateTime($row['ServiceStartDate']);
                $result = $date->format('Y-m-d H:i:s');

                $output .="
                <tr>
                <td>".$row['ServiceId']."</td>
                <td>".$result."</td>
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