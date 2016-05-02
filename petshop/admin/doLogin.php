<?php 
require_once '../include.php';
// session_start();
$username=$_POST['username'];
$password=$_POST['password'];
// $verify = $_POST['verify'];
// $verify1= $_SESSION;

// if($verify==$verify1){

    if ($password=='123456'){
        alertMes("登陆成功","index.php");
    }else{
        alertMes("登录失败","login.php");
    }
    
// }else {
//       alertMes("��֤��������µ�½","");
// }