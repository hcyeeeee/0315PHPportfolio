<?php
include_once "../base.php";
$Aboutme->save(['id'=>1,'about'=>$_POST['about']]);
$Aboutme->save(['id'=>1,'name'=>$_POST['name']]);
$Aboutme->save(['id'=>1,'phone'=>$_POST['phone']]);
$Aboutme->save(['id'=>1,'email'=>$_POST['email']]);
$Aboutme->save(['id'=>1,'img'=>$_POST['img']]);



if(!empty($_FILES['img']['tmp_name'])){
   
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);

    
    $data=$Aboutme->find(1);

    $data['img']=$_FILES['img']['name'];
 
    //資料寫入資料表
    $Aboutme->save($data);

}


to("../back.php?do=about");
?>



