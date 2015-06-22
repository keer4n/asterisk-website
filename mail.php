<?php
// the message
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];


// use wordwrap() if lines are longer than 70 characters


// send email
echo "a";

mail('asterisks2015@gmail.com',$name+"-"+$email,$message);
echo "b";

header('Location: index.html');
echo "jhvgjhf";
exit;
?>