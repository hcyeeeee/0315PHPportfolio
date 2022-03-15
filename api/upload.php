<?php

include_once "../base.php";



if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);

    //先取出該筆資料
    $data=$Work->find($_POST['id']);

    //更新img欄位的內容
    $data['img']=$_FILES['img']['name'];
    $data['text']=$_POST['text'];
    //資料寫入資料表
    $Work->save($data);
}


// $Work->save('text'=>$_POST['text']]);
// $Work->save(['img'=>$_POST['img']]);
// $Work->save(['sh'=>$_POST['sh']]);

to("../back.php?do=work");
?>