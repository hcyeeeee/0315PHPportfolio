<?php
include_once "../base.php";

echo $Experience->save($_POST);

if(!empty($_FILES['img']['tmp_name'])){
    // 路徑有問題
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);

    
    $data=$Experience->find($_POST['id']);

    $data['img']=$_FILES['img']['name'];
    $data['title']=$_POST['title'];
    $data['time']=$_POST['time'];
    $data['text']=$_POST['text'];



    //資料寫入資料表
    $Experience->save($data);
}


to("../back.php?do=experience");
?>