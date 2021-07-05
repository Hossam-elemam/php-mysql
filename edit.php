<?php
include "conniction.php";

  $UserId = $_POST['UserId'];
  $username = filter_var($_POST['username'] , FILTER_SANITIZE_STRING) ;
  $email    = filter_var($_POST['email'] , FILTER_SANITIZE_EMAIL);
  $password =  sha1($_POST['password']) ;

  
      $con-> query("UPDATE users SET username = '".$username."', email = '".$email."', password = '".$password."' where UserId = '".$UserId."'") ;
    
    
  // End Check

?>