<?php 
session_start();

require("../class/Admin.php");
require("../../config.php");
$request=$_REQUEST;

$admin=new Admin($conn);
if($request['type']=="ADMIN"){
  $result=json_decode($admin->Login($request),true);
 
  if($result['rows']==1){

    $_SESSION['user_id']=$result['data'][0]['id'];
    header('Location: ../dashboard.php');
  }else{
   $_SESSION['message']="Invalid Credentials";
   header('Location: ../index.php');
  }

}
?>