<?php
include("../includes/connection.php");
$o=new eventmanagement();
$message=mysqli_real_escape_string($o->mysqli,$_POST['message']);
$name=mysqli_real_escape_string($o->mysqli,$_POST['name']);
$email=mysqli_real_escape_string($o->mysqli,$_POST['email']);
$subject=mysqli_real_escape_string($o->mysqli,$_POST['subject']);
$in=$o->insert("contact",array(
"message"=>$message,
"name"=>$name,
"email"=>$email,
"subject"=>$subject,
));
if($in){
    echo 1;
}
else{
    echo 2;
}
?>