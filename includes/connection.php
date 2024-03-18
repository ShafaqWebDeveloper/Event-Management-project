<?php
session_start();
class eventmanagement{
private $servern="localhost";
private $usern="root";
private $pass="";
private $dbn="eventmang";
private $con;
private $res;
public $mysqli;
public function __construct(){
    $this->mysqli=mysqli_connect($this->servern,$this->usern,$this->pass,$this->dbn);
    if($this->mysqli){
    $this->con=true;
    // echo "connected";
    }
    else{
        echo "not connected";
    }
}
// ------------------------------------insert---------------------------------------
public function insert($tab,$ar=array()){
    $keys=implode(",",array_keys($ar));
    $val=implode("','",$ar);
    $sql="INSERT INTO $tab ($keys) VALUES ('$val')";
    if($this->mysqli->query($sql)){
        // echo "inserted";
        return 1;
    }
    else{
        return 0;
    }
}
// ------------------------------------read----------------------------------
public function select($tab,$col="*",$where=null,$order=null,$limit=null){
    $sql="SELECT $col FROM $tab";
    if($where!=null){
        $sql=$sql." WHERE $where";
    }
    if($order!=null){
        $sql=$sql." ORDER BY $order";
    }
    if($limit!=null){
        $sql=$sql." LIMIT 0, $limit";
    }
    $query=$this->mysqli->query($sql);
    if($query){
        $this->res=$query->fetch_all(MYSQLI_ASSOC);
        return $this->res;
    }
    else{
        echo "no selected";
    }
}

// -------------------------------------------delete------------------------------

public function delete($table,$where=null){
    $sql="DELETE FROM $table";
    if($where!=null){
        $sql=$sql." WHERE $where";
    }
    if($this->mysqli->query($sql)){
        return 1;
    }
}
// -------------------------------update---------------------------------------
public function selectone($table,$col="*",$where=null){
    $sql="SELECT $col FROM $table";
    if($where!=null){
        $sql=$sql." WHERE $where";
    }
    $query=$this->mysqli->query($sql);
    if($query){
        $this->res=$query->fetch_array(MYSQLI_ASSOC);
        return $this->res;
    }else{
        echo "not selected";
    }
}
public function update($table,$val=array(),$where=null,$limit=null,$order=null){
  $arr=array();
  foreach($val as $key=>$data){
    $arr[]="$key='$data'";
  }
  $a=implode(',',$arr);
  $u="UPDATE $table SET " .$a. " WHERE $where";
  if($this->mysqli->query($u)){
    return 1;
  }
}
// ------------------------------------------------destruct-------------------------
public function __destruct(){
    if($this->con){
        if($this->mysqli->close()){
            $this->con=false;
            // echo "connection closed";
            return true;
        }
        else{
            return false;
        }
    }
}
}
$obj=new eventmanagement();
?>