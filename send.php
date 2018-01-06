<?php

if (isset($_POST['email'])) {


   // echo var_dump($_POST);


   $name = isset($_POST['name']) ? $_POST['name'] : "";
   $phone = isset($_POST['phone']) ? $_POST['phone'] : "";
   $email = isset($_POST['email']) ? $_POST['email'] : "";
   $message = isset($_POST['message']) ? $_POST['message'] : "";


   $mail = "sales@uniteddiagnostics.org";

   $mail_user_content = "<h3>Contact Form</h3>";
   $mail_user_content .= "<strong>Name : </strong> $name" . "<br/>";
   $mail_user_content .= "<strong>Contact Number : </strong> $phone " . "<br/>";
   $mail_user_content .= "<strong>Email Id : </strong> $email" . "<br/>";
   $mail_user_content .= "<strong>Message : </strong> $message" . "<br/>";
   
   
   $user_mail_content = "Dear $name, <br/> Thank you for your interest. We will get back to you soon. <br/><br/>
   -Regards <br/>
   <a href='http://ideabricks.in/'><img src='http://ideabricks.in/images/bricks-logo.png' width='200' /></a>";

   if ($name != "" && $email != "") {
       $headers = "From: United Diagonestic - Get in Touch Form <no-reply@ideabricks.in>" . "\r\n";
       $headers.= "Bcc: info@gmail.com \r\n";
       $headers.= "MIME-Version: 1.0\r\n";
       $headers.= "Content-Type: text/html;
           charset = utf-8\r\n";
       $headers.= "X-Priority: 1\r\n";
       $mail_admin = mail($mail, "Contact Form", $mail_user_content, $headers);
       $mail_user = mail($email, "United Diagonestic", $user_mail_content, $headers);
       if ($mail_admin) {
           echo 1;
       } else {
           echo 0;
       }
   }
}
?>