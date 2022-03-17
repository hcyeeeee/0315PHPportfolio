<?php

include_once "../base.php";



if(!empty($_FILES['img']['tmp_name'])){
   
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);

    
    $data=$Work->find($_POST['id']);

    $data['img']=$_FILES['img']['name'];
    $data['text']=$_POST['text'];
    //資料寫入資料表
    $Work->save($data);
}



to("../back.php?do=work");
?>