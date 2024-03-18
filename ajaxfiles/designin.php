<?php
include('../includes/connection.php');
$obj=new eventmanagement();
    $gfname=mysqli_real_escape_string($obj->mysqli,$_POST['gfname']);
    $glname=mysqli_real_escape_string($obj->mysqli,$_POST['glname']);
    $gemail=mysqli_real_escape_string($obj->mysqli,$_POST['gemail']);
    $gdob=mysqli_real_escape_string($obj->mysqli,$_POST['gdob']);
    $ggender=mysqli_real_escape_string($obj->mysqli,$_POST['ggender']);
    $gmobile=mysqli_real_escape_string($obj->mysqli,$_POST['gmobile']);
    $gaddress=mysqli_real_escape_string($obj->mysqli,$_POST['gaddress']);
    $gcity=mysqli_real_escape_string($obj->mysqli,$_POST['gcity']);
    $gorder=mysqli_real_escape_string($obj->mysqli,$_POST['gorder']);
    $gdes=mysqli_real_escape_string($obj->mysqli,$_POST['gdes']);
    $gcompany=mysqli_real_escape_string($obj->mysqli,$_POST['gcompany']);
    $gcolor=mysqli_real_escape_string($obj->mysqli,$_POST['gcolor']);
    $gcontent=mysqli_real_escape_string($obj->mysqli,$_POST['gcontent']);
    $gdesigns=mysqli_real_escape_string($obj->mysqli,$_POST['gdesigns']);
    $gstatus="pending";
    $gpass=mysqli_real_escape_string($obj->mysqli,$_POST['gpass']);
    $grole="graphic designer";

    $in=$obj->insert("gdesigner",array(
      "gfname"=>$gfname,
      "glname"=>$glname,
      "gemail"=>$gemail,
      "gdob"=>$gdob,
      "ggender"=>$ggender,
      "gmobile"=>$gmobile,
      "gaddress"=>$gaddress,
      "gcity"=>$gcity,
      "gorder"=>$gorder,
      "gdes"=>$gdes,
      "gcompany"=>$gcompany,
      "gcolor"=>$gcolor,
      "gcontent"=>$gcontent,
      "gdesigns"=>$gdesigns,
      "gstatus"=>$gstatus,
      "gpass"=>$gpass,
      "grole"=>$grole,
    ));
    if($in=="1"){
        $log=$obj->insert("login",array("email"=>$gemail,"password"=>$gpass,
        "role"=>$grole));
        if($log=="1"){
            echo 1;
        }else{
            echo 2;
        }
    }
    else{
        echo 3;
    }

?>