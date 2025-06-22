<?php
include 'libs/load.php';

$user = "abusithik";
$pass = "abusithik";
$result=null;
if(Session::get('is_loggedin')){
print("ALREADY LOGGEDIN ,$userdata[username]\n");
$result  = $userdata;
}else{

printf("NO SESSION FOUND,PLEASE LOGIN NOW\n");
$result = User ::login($user , $pass);
}


$result = User::login($user , $pass);
if ($result) {
    echo"login successs ,$result[username]\n";
    Session::set ('is_loggedin',true);
    Session::set('Session_user',$result);
}else{
    echo "login failed\n";
}

