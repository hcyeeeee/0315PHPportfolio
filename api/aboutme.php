<?php
include_once "../base.php";


if(!empty($_FILES['img']['tmp_name'])){
   
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);

    $data=$Aboutme->find(1);
    $data['img']=$_FILES['img']['name'];
    // $Aboutme->save(['id'=>1,'name'=>$_POST['name']]);
    // $Aboutme->save(['id'=>1,'phone'=>$_POST['phone']]);
    // $Aboutme->save(['id'=>1,'email'=>$_POST['email']]);
    // $Aboutme->save(['id'=>1,'about'=>$_POST['about']]);
    

    $data['name']=$_POST['name'];
    $data['phone']=$_POST['phone'];
    $data['email']=$_POST['email'];
    $data['about']=$_POST['about'];


    //資料寫入資料表
    $Aboutme->save($data);

}


 to("../back.php?do=about");
?>



