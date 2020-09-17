<?php
if(isset($_POST['submit'])) {
   $to = 'name@domain.com' ;     //put your email address on which you want to receive the information
   $subject = 'Message from the website';   //set the subject of email.
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $message = "<table><tr><td>Name:</td><td>".$_POST['name']."</td></tr>
   			   <tr><td>Company:</td><td>".$_POST['company']."</td></tr>
               <tr><td>E-Mail:</td><td>".$_POST['email']."</td></tr>
               <tr><td>Telefon:</td><td>".$_POST['phone']."</td></tr>
               <tr><td>Mesaj:</td><td>".$_POST['message']."</td>
               </tr></table>" ;
   mail($to, $subject, $message, $headers);
   header('Location: ../contact-working.php'); //put the page you want to display after the send button is clicked
}
?>