<?php
 
 include"config.php";

   if(isset($_POST['register'])){
       $name = $_POST['name'];
       $email = $_POST['email'];
       $pass= $_POST['pass'];
       $cpass =$_POST['cpass'];
   
   
   $sql = "INSERT INTO register(name,email,pass,cpass) VALUES ('$name','$email','$pass','$cpass')";
   $result = $conn->query($sql);

   if($result == TRUE){
       echo"New record created successfully";
   }
   else{
       echo"Error:".$sql . "<br>" . $conn->error;
   }
   $conn->close();
}
?>
