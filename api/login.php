
<?php
include_once "../base.php";

if($User->math('count','*',['acc'=>$_POST['acc'],'pw'=>$_POST['pw']])>0){
$_SESSION['login']=$_POST['acc'];
to("../index.php");
}else{
    echo "<script>";
    echo "alert('帳號或密碼錯誤');";
    echo "location.href='../home.php';";
    echo "</script>";
}
?>