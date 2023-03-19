<?php
$username = $_POST['signinusername'];
$password = $_POST['signinpassword'];

 
 function checkUser(){
 $jsonitem = file_get_contents("users.json");
 $data = json_decode($jsonitem, true);
 $success = false;
      foreach ($data as $key){
          echo $key['Username'];
     if($username == $key['Username']){
         if($password == $key['Password']){
             $success = true;
         }
     }
 }
 if($success == true){
   echo "Signed in";
 }else{
   echo "Failed";
 }
 }
checkUser();
?>