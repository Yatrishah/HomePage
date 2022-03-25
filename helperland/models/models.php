<?php

class Models 
{
    function __construct()
    {
        try{
            $server="localhost";
            $db='helperland';
            $user='root';
            $password='';
            $this->conn=new mysqli($server,$user,$password,$db);
        }
        catch(Exception $e){
            die('Connection is not establish');
        }
    }
    function insert_contactUs($table,$name,$email,$phonenumber,$message,$subject,$CreatedOn,$file, $target_path )
    {
          
        //move_uploaded_file($_FILES['file']['tmp_name'], "./views/profile_img/".$target_path);
        $sql="INSERT INTO $table (Name,Email,Phonenumber,Subject,Message,CreatedOn,UploadFileName,File) VALUES 
        ('$name','$email','$phonenumber','$subject','$message','$CreatedOn','$file','$target_path')";
       $result= mysqli_query($this->conn,$sql);
    }

    function customer_insert($table,$name,$lastname ,$email,$password,$phonenumber,$userTypeId,$ZipCode,
    $currentDateTime,$isApproved)
    {
          $query1="INSERT INTO $table (FirstName,LastName,Email,Password,Mobile,userTypeId,ZipCode,CreatedDate,
          isApproved)values('$name','$lastname ','$email','$password','$phonenumber','$userTypeId','$ZipCode','$currentDateTime','$isApproved')";
                 $result= mysqli_query($this->conn,$query1);

    }


     function serviceProvider_insert($table,$name,$lastname ,$email,$password,$phonenumber,$userTypeId,$ZipCode,$currentDateTime,$isApproved)
     {
          $query1="INSERT INTO $table(FirstName,LastName,Email,Password,Mobile,userTypeId,ZipCode,CreatedDate,
          isApproved)values('$name','$lastname ','$email','$password','$phonenumber','$userTypeId','$ZipCode','$currentDateTime','$isApproved')";
            $result= mysqli_query($this->conn,$query1);
     }

     function CheckLogin($email,$password){
     
        $sql = "select * from user where email = '$email'and  Password= '$password' ";
            $result= mysqli_query($this->conn,$sql);
            return $result;

     }

      function forgotpasswordfetch($email)
    {

        //global $connection;
        $qry = "SELECT *FROM user where email = '$email'";
            $result= mysqli_query($this->conn,$qry);
        if (!$result) {     
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            $row =  mysqli_fetch_assoc($result);
            return $row["UserId"];
        }
    }

    function changepassword($user){
        $userid = $user["userid"];
        $password = $user["password"];
        $cpassword = $user["cpassword"];


        $qry = "UPDATE user SET `Password` = '$password' WHERE UserId = $userid;";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    }

    function getEmailOfServiceProvider($id)
    {

        $qry = "SELECT *FROM servicerequest WHERE ServiceRequestId = $id";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            return $result;
        }
    }
 
    function postalcode($postalcode){
        $_SESSION["postalcode"] = $postalcode;

        $qry = "SELECT * FROM `user` INNER JOIN useraddress ON user.UserId = useraddress.UserId 
                WHERE  user.ZipCode = $postalcode";

  
                $result= mysqli_query($this->conn,$qry);

                if (!$result) {
                die("Query Failed" . mysqli_error($this->conn));
                } else {
                $row =  mysqli_num_rows($result);
                if ($row > 0) {
                $city = mysqli_fetch_assoc($result);
                return $city["City"];
                } else {
                return false;
                }
                }

     }



    function insertservicerequest($servicerequest){

            $userid = $servicerequest["UserId"];
            $serviceid = $servicerequest["serviceid"];
            $service_start_date = $servicerequest["date"]." ".$servicerequest["time"].":00";
            $zipcode = $servicerequest["zipcode"];
            $service_hr = $servicerequest["totaltime"];
            $extra_service_hr=$servicerequest["extra_service_hr"];
            $totalcost = $servicerequest["totalpayment"];
            $subtotal =  $servicerequest["subtotal"];
            $charge_per_hr=$servicerequest["charge_per_hr"];
            $createddate = date("Y/m/d h:i:s");
            $modifieddate = $createddate;
            $pets = $servicerequest["pets"];
            $comments = $servicerequest["comments"];
            $providerId = $servicerequest["ServiceProviderId"];
        echo $providerId;

        if ($providerId == 0) {
            $qry = "INSERT INTO servicerequest (`ServiceRequestId`, `UserId`, `ServiceId`, `ServiceStartDate`, `ZipCode`, `ServiceFrequency`,
                    `ServiceHourlyRate`, `ServiceHours`, `ExtraHours`, `SubTotal`, `TotalCost`, `Comments`, `PaymentTransactionRefNo`,
                    `PaymentDue`, `JobStatus`, `ServiceProviderId`, `SPAcceptedDate`, `HasPets`, `Status`, `CreatedDate`, `ModifiedDate`,
                    `ModifiedBy`, `RefundedAmount`, `Distance`, `HasIssue`, `PaymentDone`, `RecordVersion`)
                    VALUES (NULL, $userid, $serviceid, '$service_start_date', $zipcode, NULL, $charge_per_hr,
                    $service_hr,
                    $extra_service_hr, $subtotal,   $totalcost, '$comments', NULL, '0', 
                    NULL, NULL, NULL, $pets, '0', '$createddate', '$modifieddate', NULL, NULL, 0, NULL,
                    NULL, NULL);";
        }
        else{
            $qry = "INSERT INTO servicerequest (`ServiceRequestId`, `UserId`, `ServiceId`, `ServiceStartDate`, `ZipCode`, `ServiceFrequency`,
            `ServiceHourlyRate`, `ServiceHours`, `ExtraHours`, `SubTotal`, `TotalCost`, `Comments`, `PaymentTransactionRefNo`,
            `PaymentDue`, `JobStatus`, `ServiceProviderId`, `SPAcceptedDate`, `HasPets`, `Status`, `CreatedDate`, `ModifiedDate`,
            `ModifiedBy`, `RefundedAmount`, `Distance`, `HasIssue`, `PaymentDone`, `RecordVersion`)
            VALUES (NULL, $userid, $serviceid, '$service_start_date', $zipcode, NULL, $charge_per_hr,
            $service_hr,
            $extra_service_hr, $subtotal, $totalcost, '$comments', NULL, '0', 
            NULL, $providerId, '$createddate', $pets, '0', '$createddate', '$modifieddate', NULL, NULL, 0, NULL,
            NULL, NULL);";  
        }
                    $result= mysqli_query($this->conn,$qry);
                    if (!$result) {
                    die("Query Failed"  .mysqli_error($this->conn));
                    
    }
    else {
        echo "Query Successfully Run";
    }

}

    function fetchservicerequestid($serviceid){


    $qry = "SELECT *FROM servicerequest WHERE ServiceId = $serviceid";
    $result= mysqli_query($this->conn,$qry);
    if (!$result) {
        die("Query Failed" . mysqli_error($this->conn));
    } else {
        $row =  mysqli_fetch_assoc($result);
        if (isset($row)) {
            return $row["ServiceRequestId"];
        }
    }
}

function insertextraservice($servicerequest){

    $servicerequestid  = $servicerequest["servicerequestid"];
    $extraservice = $servicerequest["extraservice"];

    foreach($extraservice as $value){
        $qry = "INSERT INTO servicerequestextra (`ServiceRequestExtraId`, `ServiceRequestId`, `ServiceExtraId`)
                VALUES (NULL, $servicerequestid, '$value')";
        $result =mysqli_query($this->conn,$qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    }
}

function insertuseraddress($useraddress)
    {
        
        $streetname = $useraddress["streetname"];
        $houseno =  $useraddress["houseno"];
        $postalcode = $useraddress["postalcode"];
        $city = $useraddress["city"];
        $phoneno = $useraddress["phoneno"];
        $userid = $_SESSION["UserId"];
        $usertype=$_SESSION['UserTypeId'];

        $qry = "INSERT INTO useraddress (`AddressId`, `UserId`, `AddressLine1`, `AddressLine2`, `City`, `State`, `PostalCode`, `IsDefault`,
                `IsDeleted`, `Mobile`, `Email`, `Type`) VALUES (NULL, $userid, '$streetname', '$houseno', '$city',
                 'Gujarat', 
             '$postalcode', '0', '0', '$phoneno', NULL, $usertype)";
             $result= mysqli_query($this->conn,$qry);
            if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
             }
    }

    
    function fetchuseraddress()
    {
       
        $userid = $_SESSION["UserId"];

        $qry = "SELECT *FROM useraddress WHERE UserId = $userid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            return $result;
        }
    }

    function addServiceRequestAddress($addressid){
      

        $qry = "SELECT *FROM useraddress WHERE AddressId = $addressid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            $row = mysqli_fetch_assoc($result);
            $servicerequestid = $_SESSION["servicerequestid"];
            $AddressLine1 = $row["AddressLine1"];
            $AddressLine2 = $row["AddressLine2"];

            $city = $row["City"];
            $state = $row["State"];
            $postalcode = $row["PostalCode"];
            $mobile = $row["Mobile"];
            $usertype=$_SESSION['UserTypeId'];


            
            $qry1 = "INSERT INTO servicerequestaddress (`Id`, `ServiceRequestId`, `AddressLine1`, `AddressLine2`, `City`, `State`, `PostalCode`, 
                                    `Mobile`, `Email`, `Type`)
                         VALUES (NULL, $servicerequestid, '$AddressLine1','$AddressLine2' , '$city', '$state', '$postalcode', '$mobile', NULL, $usertype)";
            $result1 = mysqli_query($this->conn, $qry1);
            if (!$result1) {
                die("Query Failed" . mysqli_error($this->conn));
            }   
        }
    }

    function fetchServiceProvider($userid){
       

        $targetuserid = [];
        $qry = "SELECT TargetUserId  FROM favoriteandblocked WHERE UserId = $userid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            while($row = mysqli_fetch_assoc($result)){
                array_push($targetuserid,$row["TargetUserId"]);
            }
        }
        return $targetuserid;
    }
    
    function fetchtargetServiceProvider($userid)
    {
      

        $blockuserid = [];
        $qry = "SELECT TargetUserId  FROM favoriteandblocked WHERE UserId = $userid AND IsBlocked = 1";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($blockuserid, $row["TargetUserId"]);
            }
        }

        $qry1 = "SELECT UserId  FROM favoriteandblocked WHERE TargetUserId = $userid AND IsBlocked = 1";
        $result1 = mysqli_query($this->conn, $qry1);
        if (!$result1) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            while ($row = mysqli_fetch_assoc($result1)) {
                array_push($blockuserid, $row["UserId"]);
            }
        }
        // return $blockuserid;

        $allproviderid = [];
        $qry1 = "SELECT UserId  FROM favoriteandblocked WHERE TargetUserId = $userid";
        $result1 = mysqli_query($this->conn, $qry1);
        if (!$result1) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            while ($row = mysqli_fetch_assoc($result1)) {
                array_push($allproviderid, $row["UserId"]);
            }
        }

        $validserviceprovider = array_diff($allproviderid,$blockuserid);
        return $validserviceprovider;
    }
    function fetchServiceProviderName($id){

        $qry = "SELECT FirstName,LastName FROM user where UserId = $id";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            $row = mysqli_fetch_assoc($result);
            $fname = $row["FirstName"];
            $lname = $row["LastName"];
            $name = "$fname "."$lname";
            return $name;
        }
    }
    function fetchcurrentservice($userid,$offset,$limit){

        $date = date("Y/m/d h:i:s");
      
        $qry = "SELECT *FROM servicerequest WHERE UserId = $userid AND ServiceStartDate >= '$date' AND 
        `Status` = 0 LIMIT $offset, $limit";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" .mysqli_error($this->conn));
        }else{
            return $result;
        }
    }

    function fetchuserdetails($userid){

        $qry = "SELECT *FROM user where UserId = $userid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
    }
    function update_datetime($id,$datetime){

        $qry = "UPDATE servicerequest SET ServiceStartDate = '$datetime' WHERE ServiceRequestId = $id";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    }

    function fetch_datetime($serviceid){

        $qry = "SELECT ServiceStartDate FROM servicerequest WHERE ServiceRequestId = $serviceid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            $row = mysqli_fetch_assoc($result);
            return $row["ServiceStartDate"];
        }
    }

    function checkserviceavailable($datetime){

        $qry = "SELECT *FROM servicerequest WHERE ServiceStartDate = '$datetime'";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            return $result;
        }
    }

    function cancelservice($serviceid,$comments){
        
        $qry = "UPDATE servicerequest SET Comments = '$comments', `Status` = 2 WHERE ServiceRequestId = $serviceid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
        else{
            return $result;}
            
    }

     function Allservicerequestdetails($servicerequestid){
      

        $qry = "SELECT *FROM servicerequest request INNER JOIN servicerequestaddress addressrequest ON 
        request.ServiceRequestId=addressrequest.ServiceRequestId 
                WHERE request.ServiceRequestId = $servicerequestid;";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            return $result;
        }
    }

    function Allextraservicedeatils($servicerequestid){
      

        $qry = "SELECT *FROM  servicerequestextra WHERE ServiceRequestId = $servicerequestid;";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            return $result;
        }
    }

    function servicerequestCustomerName($userid){
       

        $qry = "SELECT FirstName,LastName FROM  user WHERE UserId = $userid;";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            $row = mysqli_fetch_assoc($result);

            return $row["FirstName"]." ".$row["LastName"];
        }
    }
    function servicehistorydetails($userid,$offset,$limit){

       

        $qry = "SELECT *FROM servicerequest WHERE UserId = $userid AND (`Status` = 1 OR `Status` = 2)LIMIT $offset,$limit";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            return $result;
        }
    }
    function gettotalentriesdashboard($userid){
        $date = date("Y/m/d h:i:s");

        $qry = "SELECT *FROM servicerequest WHERE UserId = $userid AND ServiceStartDate >= '$date' AND `Status` = 0 ";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            $total = mysqli_num_rows($result);
            return $total;
        }
    }
    function gettotalentriesservicehistory($userid){
        

        $qry = "SELECT *FROM servicerequest WHERE UserId = $userid AND (`Status` = 1 OR `Status` = 2)";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            $total = mysqli_num_rows($result);
            return $total;
        }
    }

    function insertrating($rating){


        $serviceid = $rating["serviceid"];
        $userid = $rating["userid"];
        $serviceproviderid = $rating["serviceproviderid"];
        $feedback = $rating["feedback"];
        $timeArrivalRating = $rating["timeArrivalRating"];
        $friendlyRating = $rating["frindlyRating"];
        $qualityRating = $rating["qualityRating"];
        $date = date("Y/m/d H:i:s");
        $rating = $rating["rating"];
        
        $qry = "INSERT INTO `rating` (`RatingId`, `ServiceRequestId`, `RatingFrom`, `RatingTo`, `Ratings`, `Comments`,
         `RatingDate`, `IsApproved`, `VisibleOnHomeScreen`, `OnTimeArrival`, `Friendly`, `QualityOfService`) 
        VALUES (NULL, $serviceid, $userid, $serviceproviderid, '$rating', '$feedback', '$date', '1', '0',
         '$timeArrivalRating', '$friendlyRating',
             '$qualityRating');";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    }
    function checkratingalreadydone($serviceRequestid){

        $qry = "SELECT *FROM rating WHERE ServiceRequestId = $serviceRequestid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            if(mysqli_num_rows($result) > 0){
                return true;
            }else{
                return false;
            }           
        }
    }

    function updaterating($rating){


        $serviceid = $rating["serviceid"];
        $feedback = $rating["feedback"];
        $timeArrivalRating = $rating["timeArrivalRating"];
        $friendlyRating = $rating["frindlyRating"];
        $qualityRating = $rating["qualityRating"];
        $rating = $rating["rating"];

        $qry = "UPDATE rating  SET Ratings = '$rating',Comments = '$feedback',OnTimeArrival = '$timeArrivalRating', 
                Friendly = '$friendlyRating',QualityOfService = '$qualityRating' WHERE ServiceRequestId = $serviceid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    }
    function getAverageRating($servicerequestId){
        

        $qry = "SELECT Ratings FROM rating WHERE ServiceRequestId = $servicerequestId";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            if(mysqli_num_rows($result) > 0){
                return $result;
            }
        }
    }
    function changepassword1($user){
        $userid = $user["userid"];
        $password = $user["password"];
        //$cpassword = $user["cpassword"];


        $qry = "UPDATE user SET `Password` = '$password' WHERE UserId = $userid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    } 
    
    function updateDetails($details){
        $userid=$details["userid"];
        $fname=$details["fname"];
        $lname=$details["lname"];
        $email1=$details["email1"];
        $phonenumber=$details["phonenumber"];
        $bdate=$details['bdate'];
         $qry="UPDATE user SET FirstName='$fname',LastName='$lname',
         email='$email1',Mobile='$phonenumber',DateOfBirth='$bdate' where UserId=$userid";
          $result = mysqli_query($this->conn, $qry);
          if (!$result) {
              die("Query Failed" . mysqli_error($this->conn));
          }
    }

    function fetchAddressModal($id)
    {

        $qry = "SELECT *FROM useraddress WHERE AddressId = $id";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            return $result;
        }
    }

    function updateAddress($address)
    {
        $streetname = $address["StreetName"];
        $houseno = $address["HouseNo"];
        $postalcode =  $address["PostalCode"];
        $city = $address["City"];
        $mobile = $address["Mobile"];
        $id =  $address["addressId"];

        

        $qry = "UPDATE useraddress SET AddressLine2 = '$streetname',AddressLine1 = $houseno, PostalCode = $postalcode,
                	City = '$city', Mobile = $mobile WHERE AddressId = $id";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    }

    function deleteaddress($addressid){
       

        $qry = "DELETE FROM useraddress WHERE AddressId = $addressid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    }

    function getAllRatingOfProvider($id){
        

        $qry = "SELECT *FROM rating WHERE RatingTo = $id";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            return $result;
        }
    }
    function emailsp($id){

        $qry = "SELECT *FROM servicerequest WHERE ServiceRequestId = $id";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            return $result;
        }
    }

//  function updateServiceProviderDetails($provider)
//     {

//         $fname =  $provider["fname"];
//         $lname = $provider["lname"];
//         $email = $provider["email"];
//         $mobile = $provider["phoneno"];
//         $birthdate = $provider["birthdate"];
//         $nationality = $provider["nationality"];
//         $gender = $provider["gender"];
//         $avatar_name =  $provider["avatar_name"];
//         $streetName = $provider["streetname"];
//         $houseNo = $provider["houseno"];
//         $postalCode = $provider["postalcode"];
//         $city = $provider["city"];
//         $userid = $provider["userid"];

       

//         $qry = "UPDATE user SET FirstName = '$fname',LastName = '$lname',email = '$email',Mobile = $mobile,
//                 DateOfBirth = '$birthdate',UserProfilePicture = '$avatar_name',Gender = $gender,NationalityId = $nationality WHERE UserId = $userid";
//         $result = mysqli_query($this->conn, $qry);
//         if (!$result) {
//             die("Query Failed" . mysqli_error($this->conn));
//         }

//     }

//     function IsInsertedAddress_SP($provider){
//         $userid = $provider["userid"];

       

//         $qry = "SELECT *FROM useraddress WHERE UserId = $userid";
//         $result = mysqli_query($this->conn, $qry);
//         if (!$result) {
//             die("Query Failed" . mysqli_error($this->conn));
//         }else{
//             $no = mysqli_num_rows($result);
//             return $no;
//         }
//     }

//     function updateAddress_sp($provider){
//         $streetname = $provider["streetname"];
//         $houseno =  $provider["houseno"];
//         $postalcode = $provider["postalcode"];
//         $city = $provider["city"];
//         $phoneno = $provider["phoneno"];
//         $userid = $_SESSION["UserId"];


//         $qry = "UPDATE useraddress SET AddressLine1 = $houseno,AddressLine2 = '$streetname',PostalCode = $postalcode,
//                 City = '$city',Mobile = $phoneno WHERE UserId = $userid";
//         $result = mysqli_query($this->conn, $qry);
//         if (!$result) {
//             die("Query Failed" . mysqli_error($this->conn));
//         }
//     }

function getAddress_SP($userid){

    $qry = "SELECT *FROM useraddress WHERE UserId = $userid";
    $result = mysqli_query($this->conn, $qry);
    if (!$result) {
        die("Query Failed" . mysqli_error($this->conn));
    }else{
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
}
function getAddress_SD($servicerequestid)
    {
       

        $qry = "SELECT *FROM servicerequestaddress WHERE ServiceRequestId  = $servicerequestid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
    }

function getnewservicerequest_sp($pincode, $offset, $limit){
    

    $date = date("Y/m/d h:i:s");
    
    $qry = "SELECT *FROM servicerequest WHERE ZipCode = $pincode AND ServiceStartDate >= '$date' AND ServiceProviderId IS NULL 
   AND `Status` = 0 LIMIT $offset,$limit";
    $result = mysqli_query($this->conn, $qry);

    if (!$result) {
        die("Query Failed" . mysqli_error($this->conn));
    }else{
        return $result;
    }
}

function getServiceRequests_SP_details($id){
      $qry = "SELECT *FROM servicerequest WHERE ServiceRequestId = $id";
    $result = mysqli_query($this->conn, $qry);
    if (!$result) {
        die("Query Failed" . mysqli_error($this->conn));
    }else{
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

}
function getnewservicerequestTotalEntries_sp($pincode){

    $date = date("Y/m/d h:i:s");
    
    $qry = "SELECT *FROM servicerequest WHERE ZipCode = $pincode AND ServiceStartDate >= '$date' AND ServiceProviderId IS NULL 
   AND `Status` = 0 ";
    $result = mysqli_query($this->conn, $qry);

    if (!$result) {
        die("Query Failed" . mysqli_error($this->conn));
    }else{
        return $result;
    }
}

function setServiceProviderId($serviceid,$userid){
    $date = date("Y/m/d h:i:s");

    $qry = "UPDATE servicerequest SET ServiceProviderId = $userid,SPAcceptedDate = '$date' WHERE ServiceRequestId = $serviceid";
    $result = mysqli_query($this->conn, $qry);
    if (!$result) {
        die("Query Failed" . mysqli_error($this->conn));
    }        
}



function getUpcomingService_Sp($userid, $offset, $limit){

    $date = date("Y/m/d h:i:s");
   
    $qry = "SELECT *FROM servicerequest WHERE ServiceProviderId = $userid AND `Status` = 0 LIMIT $offset,$limit";
    $result = mysqli_query($this->conn, $qry);
    if (!$result) {
        die("Query Failed" . mysqli_error($this->conn));
    }else{
        return $result;
    }
}


    function getUpcomingServiceDetails($servicerequestId){

        $qry = "SELECT *FROM servicerequest WHERE ServiceRequestId = $servicerequestId";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
    }

    function cancelServiceRequest_SP($serviceRequestId){

        $qry = "UPDATE servicerequest SET ServiceProviderId = NULL,SPAcceptedDate = NULL WHERE ServiceRequestId = $serviceRequestId";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    }
    function completeServiceRequest_SP($serviceRequestId){

        $qry = "UPDATE servicerequest SET `Status` = 1 WHERE ServiceRequestId = $serviceRequestId";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    }
    function gettotalentries_us($userid)
    {
        

        $qry = "SELECT *FROM servicerequest WHERE ServiceProviderId = $userid AND `Status` = 0";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            return mysqli_num_rows($result);
        }
    }
    function getServiceHistory_SP($userid,$offset, $limit){
       
        // $date = date("Y/m/d h:i:s");
        
        $qry = "SELECT *FROM servicerequest WHERE ServiceProviderId = $userid AND `Status` = 1 LIMIT $offset,$limit";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            return $result;
        }
    }

    function gettotalentriesServiceHistory_Sp($userid)
    {

        // $date = date("Y/m/d h:i:s");

        $qry = "SELECT *FROM servicerequest WHERE ServiceProviderId = $userid AND `Status` = 1";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            return mysqli_num_rows($result);
        }
    }

    function updateServiceProviderDetails($provider)
    {

        $fname =  $provider["fname"];
        $lname = $provider["lname"];
        $email = $provider["email"];
        $mobile = $provider["phoneno"];
        $birthdate = $provider["birthdate"];
        $nationality = $provider["nationality"];
        $gender = $provider["gender"];
        $avatar_name =  $provider["avatar_name"];
        $streetName = $provider["streetname"];
        $houseNo = $provider["houseno"];
        $postalCode = $provider["postalcode"];
        $city = $provider["city"];
        $userid = $provider["userid"];

      

        $qry = "UPDATE user SET FirstName = '$fname',LastName = '$lname',email = '$email',Mobile = $mobile,
                DateOfBirth = '$birthdate',UserProfilePicture = '$avatar_name',Gender = $gender,NationalityId = $nationality WHERE UserId = $userid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }

    }

    function IsInsertedAddress_SP($provider){
        $userid = $provider["userid"];


        $qry = "SELECT *FROM useraddress WHERE UserId = $userid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            $no = mysqli_num_rows($result);
            return $no;
        }
    }

    function updateAddress_sp($provider){
        $streetname = $provider["streetname"];
        $houseno =  $provider["houseno"];
        $postalcode = $provider["postalcode"];
        $city = $provider["city"];
        // $phoneno = $provider["phoneno"];
        $userid = $_SESSION["UserId"];

        $qry = "UPDATE useraddress SET AddressLine1 = '$houseno',AddressLine2 = '$streetname',PostalCode ='$postalcode',
                City = '$city' WHERE UserId = $userid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    }

    
    function getServiceHistoryExport($userid)
    {
  

        // $date = date("Y/m/d h:i:s");

        $qry = "SELECT *FROM servicerequest WHERE ServiceProviderId = $userid AND `Status` = 1";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            return $result;
        }
    }

    function insertFavoriteBlock($userid, $customerId)
    {

        $qry = "SELECT *FROM favoriteandblocked WHERE TargetUserId = $customerId AND UserId = $userid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            if (mysqli_num_rows($result) == 0) {
                $qry1 = "INSERT INTO favoriteandblocked (`Id`, `UserId`, `TargetUserId`, `IsFavorite`, `IsBlocked`) 
                            VALUES (NULL, $userid, $customerId, 1, 0);";
                $result1 = mysqli_query($this->conn, $qry1);
                if (!$result1) {
                    die("Query Failed" . mysqli_error($this->conn));
                }
                $qry2 = "INSERT INTO favoriteandblocked (`Id`, `UserId`, `TargetUserId`, `IsFavorite`, `IsBlocked`) 
                VALUES (NULL, $customerId, $userid, 1, 0);";
    $result2 = mysqli_query($this->conn, $qry2);
    if (!$result2) {
        die("Query Failed" . mysqli_error($this->conn));
    }
            }
        }
    }

    function FavouriteBlockedCustomerDetails($customerId,$userid){
       

        $qry = "SELECT *FROM user u INNER JOIN favoriteandblocked f ON u.UserId = f.TargetUserId WHERE f.UserId = $userid 
                    AND f.TargetUserId = $customerId";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
    }

    function blockcustomer($favblockid){
    

        $qry = "UPDATE favoriteandblocked SET IsFavorite = 0,IsBlocked = 1 WHERE Id = $favblockid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    }
    
    function favcustomer($favblockid){

        $qry = "UPDATE favoriteandblocked SET IsFavorite = 1,IsBlocked = 0 WHERE Id = $favblockid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    }
    function getRatinglist_Sp($userid,$categoryName,$startRatingValue,$endRatingValue){
       

        $qry = "SELECT R.Comments,R.Ratings,R.RatingFrom,R.ServiceRequestId,S.ServiceId,S.ServiceStartDate,S.ServiceHours,S.ExtraHours,
                        U.FirstName,U.LastName FROM rating R INNER JOIN servicerequest S ON S.ServiceRequestId = R.ServiceRequestId 
                        INNER JOIN user U ON U.UserId = R.RatingFrom WHERE RatingTo = $userid AND Ratings >= $startRatingValue AND 
                        Ratings < $endRatingValue ORDER BY $categoryName";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            return $result;
        }
    }

    function totalRatinglist_Sp($userid, $orderby, $startRatingValue, $endRatingValue){
       
        $qry = "SELECT R.Comments,R.Ratings,R.RatingFrom,R.ServiceRequestId,S.ServiceId,S.ServiceStartDate,S.ServiceHours,S.ExtraHours,
                        U.FirstName,U.LastName FROM rating R INNER JOIN servicerequest S ON S.ServiceRequestId = R.ServiceRequestId 
                        INNER JOIN user U ON U.UserId = R.RatingFrom WHERE RatingTo = $userid AND Ratings >= $startRatingValue AND 
                        Ratings < $endRatingValue";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            return  mysqli_num_rows($result);
        }
    }
    function AcceptServiceValidation($zipcode, $userid){

        $qry = "SELECT *FROM servicerequest WHERE ZipCode = $zipcode AND `Status` = 0 AND ServiceProviderId = $userid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            return $result;
        }
    }
    function fetchserviceprovideremail($zipcode)
    {
        $serviceprovideremail = [];
        $qry = "SELECT email FROM user where `ZipCode` = $zipcode AND UserTypeId = 2";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($serviceprovideremail, $row["email"]);
                echo $row["email"];
            }
        }
        return $serviceprovideremail;
    }
   
    function fetchAllServiceRequestDetails($condition){
      

        $qry = "SELECT S.Status,S.ServiceRequestId,S.ServiceId,S.ServiceStartDate,S.TotalCost,S.ServiceHours,S.ExtraHours,
                   S.ServiceProviderId,S.UserId,U.email  FROM servicerequest S LEFT JOIN user U on S.UserId = 
                   U.UserId WHERE $condition;";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            return $result;
        }
    }

    function fetchTotalServiceRequestDetails($condition)
    {

        $qry = "SELECT * FROM servicerequest S LEFT JOIN user U on S.UserId = U.UserId WHERE $condition;";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            return $result;
        }
    }
    function fetchAllServiceRequestDetails_Options($condition){
      

        $qry = "SELECT S.Status,S.ServiceRequestId,S.ServiceId,S.ServiceStartDate,S.TotalCost,S.ServiceHours,S.ExtraHours,
                   S.ServiceProviderId,S.UserId,U.email  FROM servicerequest S LEFT JOIN user U on S.UserId = 
                   U.UserId WHERE $condition;";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            return $result;
        }
    }
   
    function getAllUserDetails($condition,$offset,$limit)
    {

        $qry = "SELECT *FROM user WHERE $condition LIMIT $offset,$limit";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            return $result;
        }
    }
    function fetchtotalRecord_UM(){

        $condition = $_POST["reason"];
        $result = $this->modal->getAllUserDetails_UM($condition);
  
        echo mysqli_num_rows($result);
     }

    function getAllUserDetails_UM($condition)
    {

        $qry = "SELECT *FROM user WHERE $condition ORDER BY FirstName";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            return $result;
        }
    }

    function updateServiceAddress($address)
    {
        $streetName = $_POST["streetName"];
        $houseNo = $_POST["houseNo"];
        $zipcode = $_POST["Zipcode"];
        $city = $_POST["City"];
        $id = $_POST["serviceid"];
       


        $qry = "UPDATE servicerequestaddress SET AddressLine1 = '$houseNo',AddressLine2 = '$streetName',City = '$city'
                    ,PostalCode = '$zipcode' WHERE ServiceRequestId = $id";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    }

    function UpdateActiveStatus($userid, $activestatus){

        $qry = "UPDATE user SET IsActive = $activestatus WHERE UserId = $userid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    }
    function updatedatetimeservice($id, $datetime)
    {
       

        $qry = "UPDATE servicerequest SET ServiceStartDate = '$datetime' WHERE ServiceRequestId = $id";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    }



    function getFavBlockCustomerList($userid)
    {
   

        $qry = "SELECT *FROM favoriteandblocked WHERE UserId = $userid ";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            return $result;
        }
    }

    function getFavBlockCustomerListtotal($userid)
    {
      

        $qry = "SELECT *FROM favoriteandblocked WHERE UserId = $userid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            return mysqli_num_rows($result);
        }
    }



    function setOrRemoveFav($favblockId)
    {

        $qry = "SELECT *FROM favoriteandblocked WHERE Id = $favblockId";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
    }

    function setUnfavourite($favblockId)
    {

        $qry = "UPDATE favoriteandblocked SET IsFavorite = 0 WHERE Id = $favblockId";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    }

    function setfavourite($favblockId)
    {

        $qry = "UPDATE favoriteandblocked SET IsFavorite = 1 WHERE Id = $favblockId";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    }

    function totalcleaningbyProvider($userid, $serviceproviderid)
    {

        $qry = "SELECT *FROM servicerequest WHERE UserId = $userid AND ServiceProviderId = $serviceproviderid AND `Status` = 1";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            return mysqli_num_rows($result);
        }
    }

    function averageratingSp($userid, $serviceproviderid)
    {

        $qry = "SELECT *FROM rating WHERE RatingFrom = $userid AND RatingTo = $serviceproviderid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        } else {
            return $result;
        }
    }

    
    function updateRefundedValue($id,$refundedAmount){


        $qry = "UPDATE servicerequest SET RefundedAmount = $refundedAmount WHERE ServiceRequestId = $id";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }
    }

    
    function getallevents($userid){

        $qry = "SELECT *FROM servicerequest WHERE ServiceProviderId = $userid";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($this->conn));
        }else{
            return $result;
        }
    }
}




?>
 