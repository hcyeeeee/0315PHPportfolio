<?php
include_once "../base.php";


if(!empty($_FILES['img']['tmp_name'])){
   
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);

    
    $data=$Aboutme->find(1);

    $data['img']=$_FILES['img']['name'];
 
    //資料寫入資料表
    $Aboutme->save($data);

}


 to("../back.php?do=about");
?>



