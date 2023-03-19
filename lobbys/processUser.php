<?php

// configuration
    function createNewUser(){
    $id = date("Ymd") . date("hisa") . rand(0, 9). rand(0, 9). rand(0, 9). rand(0, 9). rand(0, 9). rand(0, 9). rand(0, 9). rand(0, 9). rand(0, 9). rand(0, 9);
    $email = $_POST['email'];
    $userName = $_POST['userName'];
    $passWord = $_POST['passWord'];
    $todaysDate = date("Y.m.d");
    $live = "F";
    $current_data = file_get_contents('users.json');
	$array_data = json_decode($current_data, true);
    $extra =[
            'Email' => $email,
            'id' => $id,
            'Username'=> $userName,
            'Password' => $passWord,
            'DateCreated' => $todaysDate,
            "isLive" => $live
    ];
	$array_data[] = $extra;
	$final_data = json_encode($array_data);
    file_put_contents('users.json', $final_data);
    }
    
    function checkUsedEmail(){
      $jsonitem = file_get_contents("users.json");
      $data = json_decode($jsonitem, true);
      $freeEmail = true;
      foreach ($data as $key){
        if($email == $key['Email']){
         $freeEmail = false;
        }
      }
      if($freeEmail == true){
        echo "Account Created";
        createNewUser();
      }else{
        echo "Cannot Use this Email"; 
      }
 }
 
    checkUsedEmail();
?>