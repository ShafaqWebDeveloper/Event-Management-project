<?php
include('../includes/connection.php');
$obj=new eventmanagement();
    $pfname=mysqli_real_escape_string($obj->mysqli,$_POST['pfname']);
     $plname=mysqli_real_escape_string($obj->mysqli,$_POST['plname']);
    $pemail=mysqli_real_escape_string($obj->mysqli,$_POST['pemail']);
    $pdob=mysqli_real_escape_string($obj->mysqli,$_POST['pdob']);
    $pgender=mysqli_real_escape_string($obj->mysqli,$_POST['pgender']);
    $pmobile=mysqli_real_escape_string($obj->mysqli,$_POST['pmobile']);
    $paddress=mysqli_real_escape_string($obj->mysqli,$_POST['paddress']);
    $pcity=mysqli_real_escape_string($obj->mysqli,$_POST['pcity']);
    $pexperience=mysqli_real_escape_string($obj->mysqli,$_POST['pexperience']);
    $pachievements=mysqli_real_escape_string($obj->mysqli,$_POST['pachievements']);
    $pskills=mysqli_real_escape_string($obj->mysqli,$_POST['pskills']);
    $ppartners=mysqli_real_escape_string($obj->mysqli,$_POST['ppartners']);
    $ppass=mysqli_real_escape_string($obj->mysqli,$_POST['ppass']);
    $pcpass=mysqli_real_escape_string($obj->mysqli,$_POST['pcpass']);
    $pstatus="pending";
    $prole="planner";
    $in=$obj->insert("planner",array(
      "pfname"=>$pfname,
      "plname"=>$plname,
      "pemail"=>$pemail,
      "pdob"=>$pdob,
      "pgender"=>$pgender,
      "pmobile"=>$pmobile,
      "paddress"=>$paddress,
      "pcity"=>$pcity,
      "pexperience"=>$pexperience,
      "pachievements"=>$pachievements,
      "pskills"=>$pskills,
      "ppartners"=>$ppartners,
      "ppass"=>$ppass,
      "pcpass"=>$pcpass,
      "pstatus"=>$pstatus,
      "prole"=>$prole,
    ));
    if($in=="1"){
        $log=$obj->insert("login",array("email"=>$pemail,"password"=>$ppass,
        "role"=>$prole));
        if($log=="1"){
            echo "data inserted";
        }else{
            echo "not inserted in login";
        }
    }
    else{
        echo "not inserted in both";
    }

?>