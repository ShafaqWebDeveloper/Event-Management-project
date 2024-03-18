<?php
include('../includes/connection.php');
$obj=new eventmanagement();
    $vfname=mysqli_real_escape_string($obj->mysqli,$_POST['vfname']);
    $vlname=mysqli_real_escape_string($obj->mysqli,$_POST['vlname']);
    $vemail=mysqli_real_escape_string($obj->mysqli,$_POST['vemail']);
    $vdob=mysqli_real_escape_string($obj->mysqli,$_POST['vdob']);
    $vgender=mysqli_real_escape_string($obj->mysqli,$_POST['vgender']);
    $vmobile=mysqli_real_escape_string($obj->mysqli,$_POST['vmobile']);
    $vaddress=mysqli_real_escape_string($obj->mysqli,$_POST['vaddress']);
    $vcity=mysqli_real_escape_string($obj->mysqli,$_POST['vcity']);
    $voccasion=mysqli_real_escape_string($obj->mysqli,$_POST['voccasion']);
    $vexperience=mysqli_real_escape_string($obj->mysqli,$_POST['vexperience']);
    $vachievements=mysqli_real_escape_string($obj->mysqli,$_POST['vachievements']);
    $vskills=mysqli_real_escape_string($obj->mysqli,$_POST['vskills']);
    $vpass=mysqli_real_escape_string($obj->mysqli,$_POST['vpass']);
    $vcpass=mysqli_real_escape_string($obj->mysqli,$_POST['vcpass']);
    $vstatus="pending";
    $vrole="volunteer";

    $in=$obj->insert("volunteer",array(
      "vfname"=>$vfname,
      "vlname"=>$vlname,
      "vemail"=>$vemail,
      "vdob"=>$vdob,
      "vgender"=>$vgender,
      "vmobile"=>$vmobile,
      "vaddress"=>$vaddress,
      "vcity"=>$vcity,
      "voccasion"=>$voccasion,
      "vexperience"=>$vexperience,
      "vachievements"=>$vachievements,
      "vskills"=>$vskills,
      "vpass"=>$vpass,
      "vcpass"=>$vcpass,
      "vstatus"=>$vstatus,
      "vrole"=>$vrole,
    ));
    if($in=="1"){
        $log=$obj->insert("login",array("email"=>$vemail,"password"=>$vpass,
        "role"=>$vrole));
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