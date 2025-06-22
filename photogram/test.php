<pre>
  <?php
include_once 'load.php';
include_once 'includes/Database.class.php';
/*print('$_SERVER');
print_r($_SERVER);
print('$_GET');
print_r($_GET);
print('$_POST');
print_r($_POST);
include 'libs/load.php';

Database::getconnection();
Database::getconnection();
Database::getconnection();
Database::getconnection();
?>
</pre>*/

$conn=Database::getconnection();
if($conn){
  prinf("connection sucess");
}else{
printf(error);}

error_reporting(E_ALL);
ini_set('display_errors',1);