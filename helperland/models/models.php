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

    function customer_insert($table,$name,$lastname ,$email,$password,$phonenumber,$userTypeId,$currentDateTime,$isApproved)
    {
          $query1="INSERT INTO $table (FirstName,LastName,Email,Password,Mobile,userTypeId,CreatedDate,isApproved)values('$name','$lastname ','$email','$password','$phonenumber','$userTypeId','$currentDateTime','$isApproved')";
                 $result= mysqli_query($this->conn,$query1);

    }


     function serviceProvider_insert($table,$name,$lastname ,$email,$password,$phonenumber,$userTypeId,$currentDateTime,$isApproved)
     {
          $query1="INSERT INTO user(FirstName,LastName,Email,Password,Mobile,userTypeId,CreatedDate,isApproved)values('$name','$lastname ','$email','$password','$phonenumber','$userTypeId','$currentDateTime','$isApproved')";
            $result= mysqli_query($this->conn,$query1);
     }

     function CheckLogin($email,$password){
     
        $sql = "select * from user where email = '$email' and Password= '$password' ";
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


 
    function postalcode($postalcode){
        $_SESSION["postalcode"] = $postalcode;

        $qry = "SELECT * FROM `user` INNER JOIN useraddress ON user.UserId = useraddress.UserId 
                WHERE user.IsRegisteredUser=0 AND user.ZipCode = $postalcode";

  
                $result= mysqli_query($this->conn,$qry);

                if (!$result) {
                die("Query Failed" . mysqli_error($connection));
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
            $discount=$servicerequest["discount"];


            $qry = "INSERT INTO servicerequest (`ServiceRequestId`, `UserId`, `ServiceId`, `ServiceStartDate`, `ZipCode`, `ServiceFrequency`,
                    `ServiceHourlyRate`, `ServiceHours`, `ExtraHours`, `SubTotal`, `Discount`, `TotalCost`, `Comments`, `PaymentTransactionRefNo`,
                    `PaymentDue`, `JobStatus`, `ServiceProviderId`, `SPAcceptedDate`, `HasPets`, `Status`, `CreatedDate`, `ModifiedDate`,
                    `ModifiedBy`, `RefundedAmount`, `Distance`, `HasIssue`, `PaymentDone`, `RecordVersion`)
                    VALUES (NULL, $userid, $serviceid, '$service_start_date', $zipcode, NULL, $charge_per_hr,
                    $service_hr,
                    $extra_service_hr, $subtotal,  $discount, $totalcost, '$comments', NULL, '0', 
                    NULL, NULL, NULL, $pets, NULL, '$createddate', '$modifieddate', NULL, NULL, 0, NULL,
                    NULL, NULL);";
                    $result= mysqli_query($this->conn,$qry);
                    if (!$result) {
                    die("Query Failed"  .mysqli_error($this->conn));
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
            die("Query Failed" . mysqli_error($this->conn));
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


        $qry = "UPDATE user SET `Password` = '$password' WHERE UserId = $userid;";
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
}




?>
