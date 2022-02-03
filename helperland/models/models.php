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
        $sql="INSERT INTO $table (Name,Email,Phonenumber,Subject,Message,CreatedOn,UploadFileName,FileName) VALUES ('$name','$email','$phonenumber','$subject','$message','$CreatedOn','$file','$target_path')";
       $result= mysqli_query($this->conn,$sql);
    }

    function customer_insert($table,$name,$lastname ,$email,$password,$phonenumber,$role,$userTypeId,$currentDateTime,$isApproved)
    {
          $query1="INSERT INTO $table (FirstName,LastName,Email,Password,Mobile,RoleId,userTypeId,CreatedDate,isApproved)values('$name','$lastname ','$email','$password','$phonenumber','$role','$userTypeId','$currentDateTime','$isApproved')";
                 $result= mysqli_query($this->conn,$query1);

    }


     function serviceProvider_insert($table,$name,$lastname ,$email,$password,$phonenumber,$role,$userTypeId,$currentDateTime,$isApproved)
     {
          $query1="INSERT INTO user(FirstName,LastName,Email,Password,Mobile,RoleId,userTypeId,CreatedDate,isApproved)values('$name','$lastname ','$email','$password','$phonenumber','$role','$userTypeId','$currentDateTime','$isApproved')";
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
        //global $connection;
        $userid = $user["userid"];
        $password = $user["password"];

        $qry = "UPDATE user SET `Password` = '$password' WHERE UserId = $userid;";
        $result = mysqli_query($this->conn, $qry);
        if (!$result) {
            die("Query Failed" . mysqli_error($connection));
        }
    }
}
?>
