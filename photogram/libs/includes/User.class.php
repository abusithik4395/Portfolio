<?php


class User {
  private $conn;
  private $username;

    public static function signup($user,$pass,$email,$phone){
        $options=['cost' => 8,];

        $pass= password_hash($pass,PASSWORD_BCRYPT,$options);
        $conn = Database::getconnection();
        
    
        $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone number`, `active`)
        VALUES ('$user', '$pass', '$email', '$phone',  '1');";
        $result = false;
     
       
         try{
          $query=$conn->query($sql);
          
          if($query){return true;
          }else{
            throw new Exception("Error executing query:" . $conn->error);
          }
         }catch(Exception $e){
          echo"Caught exception:" . $e->getMessage()."<br>";
        
         }
        }
         
        public static function login ($user,$pass) {

          $pass= md5(strrev(md5($pass)));
          $query= "SELECT * FROM `auth` WHERE `username` = '$user'";
          $conn = Database::getconnection();
          
          $result=$conn->query($query);
        
           if($result->num_rows == 1){
            $row=$result->fetch_assoc();

            if (password_verify($pass,$row['password'])){

           // if ($row['password'] == $pass){
              return $row;

            }else{
              echo"password missmatch";
              return false;
            }

          }else{
            echo"user not found\n";
            return false;
          }   
        }



        public function __construct ($username){
          $this->conn = Database :: getconnection();
          $this->conn->query();
          $this->username = $username;
  
  
      }
          public function setBio()
          {
  
  
          }
          public function getbio(){
  
  
          }
          public function setAvatar(){
  
  
          }
          public function getAvatar(){
  
  
          }

}
