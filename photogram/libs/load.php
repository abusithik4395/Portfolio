
<?php
$file2=__DIR__.'/includes/Session.class.php';
if(!file_exists($file2)){
  die("File not found;".$file2);
}
include_once $file2;

Session::start();

$file_user=__DIR__.'/includes/User.class.php';
if(!file_exists($file_user)){
  die("File not found;".$file_user);
}
include_once $file_user;

$file=__DIR__.'/includes/Database.class.php';
if(!file_exists($file)){
  die("File not found;".$file);
}
include_once $file;





function load_template($name)
{ 
 
   include $_SERVER ['DOCUMENT_ROOT'] ."/photogram/_templates/$name.php";
   ///home/abubakarofficial4395/htdocs
}


function validate_credentials($username , $password)
{

    if ($username=="abubakarofficial4395@gmail.com" and $password=="7200144395"){
    return true;
}else {
return false;    
    } 

}