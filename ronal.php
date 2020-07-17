<?php
$Name=$_POST['Name'];
$visitor_email=$_POST['Email'];
$Weight=$_POST['Weight'];
$Height=$_POST['Height'];
$Pack=$_POST['Pack'];
$Something you want to add-on=$_POST['Something you want to add-on'];
$email_from='ronalraj2002@gmail.com';
$email_subject="enrollment";
$email_body=" User Name:$Name.\n".
              "User Email:$visitor_email.\n.".
                 "User Weight:$Weight.\n".
                   "User Height:$Height.\n".
                      "User Pack:$Pack.\n".
                          "User Something you want to add-on:$Something you want to add-on.\n";
$to="rajronal018@gmail.com"
$headers ="from: $email_from\r\n";
$headers ="Reply-To: $vistor_email\r\n";
mail($to,$email_subject,$email_body,$headers)
header("Location: enroll.html");
?>                