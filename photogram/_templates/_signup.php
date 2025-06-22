<?
$file1=__DIR__.'/../libs/includes/User.class.php';
if(!file_exists($file1)){
  die("File not found;".$file1);
}
include_once $file1;

$signup = false;
if(isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email_address'])and isset($_POST['phone']))
{

$user = $_POST['username'];
$pass =$_POST['password'];
$email =$_POST['email_address'];
$phone=$_POST['phone'];
$result =User::signup($user,$pass,$email,$phone);

$signup=true;
}
if ($signup){

    if ($result){?>
      <div class="bg-body-tertiary p-5 rounded mt-3">
      <h1>SIGNUP  SUCCESS</h1>
      <p class="lead">PLEASE LOGIN <a href="login.php">here</a>.</p>
      

    <?php
    }
    else{
   
?>
  <div class="bg-body-tertiary p-5 rounded mt-3">
      <h1>SIGNUP  FAILED...!</h1>
      
      

</div>
<?php
}}
else{
  ?>
  </div>
 
  <main class="form-signin w-100 m-auto">
    <form method="post" action ="/photogram/signup.php">
      <img class="mb-4" src="https://www.zilliondesigns.com/blog/wp-content/uploads/3D-Logo-Design-7.jpg" alt="" width="300" height="200">
      <h1 class="h3 mb-3 fw-normal">signup here</h1>
      
      <div class="form-floating">
        <input name="username" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInputusername">Username</label>
      </div>
  
      <div class="form-floating">
        <input name="phone" type="text" class="form-control" id="floatingInput" placeholder="+91">
        <label for="floatingInput">Phone</label>
      </div>
  
      <div class="form-floating">
        <input name="email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
  
      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">Sign Up</button>
  
    </form>
  </main>


 
 
<?}

?>
  



