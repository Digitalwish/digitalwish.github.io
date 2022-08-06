<?php


if(isset($_POST['email'])) {
 
    
    $email_to = "hi@digitalwish.pt";
    $email_subject = "Contacto via form";
 
    function died($error) {
        echo '<body style="background-image: url(/images/bg/programingemb.jpg);">';
        echo "<div style='text-align:center;margin-top:200px;font-size: 70px'> We are very sorry, but there were error(s) found with the form you submitted.</div> ";
        echo "<div style='text-align:center;font-size:30px;'>These errors appear below.<br /><br /></div>";
        echo "<div style='text-align:center;color:white;font-size:20px'>".$error."<br /><br />";
        echo "<div style='text-align:center;color:black'>Please go back and fix these errors.<br /><br /></div>";
        echo "<div style='text-align:center;color:black:font-size:50px;'><a href=http://www.digitalwish.pt\\>Digital Wish</a>";
        echo "<script type='text/javascript'>alert('submitted Fail!')</script>";
        die();
    }


 
 
    // validaçoes
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comment'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comment']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Informacoes da form.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// email headers (senao da bug)
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
if (@mail($email_to, $email_subject, $email_message, $headers))
{
          echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}
?>

 
<?php
 
}
?>