<?php

include_once "../base.php";



if(!empty($_FILES['img']['tmp_name'])){
   
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);

    $data=$Work->find($_POST);
 
    $data['img']=$_FILES['img']['name'];
    $data['id']=$_POST['id'];
    $data['name']=$_POST['name'];
    $data['content']=$_POST['content'];
    $data['link']=$_POST['link'];
    $data['type']=$_POST['type'];
    //資料寫入資料表
    $Work->save($data);

   
}

// UPDATE `work` SET `name` = 'vvvv', `link` = 'v', `content` = 'v' WHERE `work`.`id` = 10

to("../back.php?do=work");
?>