<?php
  $name=$_POST['name'];
  $vistor_email=$_POST['email'];
  $message =$_POST['message'];
  
  
  $email_from='eleni.morava38@gmail.com';
 
  $email_subject="hello";
  
  $email_body = "User name: $name.\n".
                 "User Email:  $vistor_email.\n".
                    "User Message:  $message.\n";
   $to:"elenimorava6@gmail.com";
   
   $headers ="From: $email.from \r\n";
   $headers ="Reply to: $vistor_email \r\n";
   
   mail($to,$email_subject,$email_body,$headers);
   header("Location: index.html");
                    

?>
