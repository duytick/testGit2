<?php
   $email= $_POST['email'];
   $password = $_POST['pwd'];

   if ($email=='Nukanuka1305@gmail.com') {
   	if ($password=='123'){
      header ("Location: ../welcome.php?email=Nhung");
      exist();
    }else
       header("Location: signin.php?error=2");
    }else{
       header ("Location: signin.php?error=1");
   }
   ?>