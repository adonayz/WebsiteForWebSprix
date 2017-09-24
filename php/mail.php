<?php
if(isset($_POST['name'])){
  $name = $_POST['name'];
}
if(isset($_POST['email'])){
  $email = $_POST['email'];
}
if(isset($_POST['subject'])){
  $subject = $_POST['subject'];
}
if(isset($_POST['message'])){
  $message = $_POST['message'];
}
$formcontent=" From: $name \n Message: $message";
$recipient = "info@websprix.com";
$mailheader = "From: $email \r\n";
// mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// echo "Message sent!";
if (mail($recipient, $subject, $formcontent, $mailheader)) {
 	echo "<script>
		alert('Your message has been sent successfully.');
		window.location.href='index.html';
		</script>";
 } 
 else{
 	echo "<script>
		alert('Your message has not been sent. Please try again.');
		window.location.href='index.html';
		</script>";
 }
// header("Location: index.html");
// exit();
?>
