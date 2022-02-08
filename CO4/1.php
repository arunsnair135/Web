
Conversation opened. 2 messages. All messages read. 

Skip to content
Using Gmail with screen readers
Meet
New meeting
Join a meeting
Hangouts
9 of 73
case
Arun S Nair
	
	AttachmentsWed, Jan 5, 3:51 PM
 
Arun S Nair <arunsnair135@gmail.com>
	
AttachmentsSat, Jan 29, 8:30 PM (10 days ago)
	
to dongeevarghese44


---------- Forwarded message ---------
From: Arun S Nair <arunsnair135@gmail.com>
Date: Wed, Jan 5, 2022 at 3:51 PM
Subject: case
To: <adharshhari003@gmail.com>, <shibilimohammed45@gmail.com>




Attachments area
	
	
	

<?php
if(isset($_POST['submit'])){
   $username=$_POST['username'];
   $password=$_POST['password'];
   $uppercase = preg_match('@[A-Z]@', $password);
   $lowercase = preg_match('@[a-z]@', $password);
   $number    = preg_match('@[0-9]@', $password); 
   
    if($username=="")
     {
      echo "Please fill the username";
     }
    if( $password=="" && strlen($password)<8) 
    {
     
      echo "please fill 8 letter pasword";
      
    }
    else if(!$uppercase || !$lowercase || !$number )  {
      echo "Your password is  not strong!!!";
      //return false;
    }
    else
    {
        echo "Password is strong";
    }

  
  }
 ?>
<!DOCTYPE html>
<html>
<body>
<form action="" method="POST">  
Username: <input type="text" name="username"><br />  
Password: <input type="password" name="password"><br />   
<input type="submit" value="Login" name="submit" />  
</form>  
</body>
</html>

php login crct.txt
Displaying php login crct.txt.
