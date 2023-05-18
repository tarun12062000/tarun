<?php
   $server = "localhost";
   $username = "root";
   $password ="";
 

   $con = mysqli_connect ($server ,$username ,$password);
   if(!$con){
    die ("connection to this database is failed due to" .mysqli_connect_error());
   }
   // echo "success connecting to db ";
   
   $name = $_POST['name'];
   $gender = $_POST['gender'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   
 
   $sql ="INSERT INTO `tour` (`name`, `gender`, `phone`, `email`, `date`) VALUES 
   ('$name', '$gender', '$phone', '$email', current_timestamp());";
   
   echo $sql;
   
   

?>