<?php
include('../includes/connection.php');
$o=new eventmanagement();
$bname=mysqli_real_escape_string($o->mysqli,$_POST['bname']);
$bemail=mysqli_real_escape_string($o->mysqli,$_POST['bemail']);
$bmobile=mysqli_real_escape_string($o->mysqli,$_POST['bmobile']);
$boccasion=mysqli_real_escape_string($o->mysqli,$_POST['boccasion']);
$bsdate=mysqli_real_escape_string($o->mysqli,$_POST['bsdate']);
$bstime=mysqli_real_escape_string($o->mysqli,$_POST['bstime']);
$bedate=mysqli_real_escape_string($o->mysqli,$_POST['bedate']);
$betime=mysqli_real_escape_string($o->mysqli,$_POST['betime']);
$bvenue=mysqli_real_escape_string($o->mysqli,$_POST['bvenue']);
$bcity=mysqli_real_escape_string($o->mysqli,$_POST['bcity']);
$bdes=mysqli_real_escape_string($o->mysqli,$_POST['bdes']);
$in=$o->insert("booking",array(
"bname"=>$bname,
"bemail"=>$bemail,
"bmobile"=>$bmobile,
"boccasion"=>$boccasion,
"bsdate"=>$bsdate,
"bstime"=>$bstime,
"bedate"=>$bedate,
"betime"=>$betime,
"bvenue"=>$bvenue,
"bcity"=>$bcity,
"bdes"=>$bdes,
));
if($in){
    echo 1;
}else{
    echo 2;
}

?>