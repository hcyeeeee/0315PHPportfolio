<?php include_once "../base.php";


// to("../back.php?do=admin");


//使用find自訂函式取得指定id的圖片紀錄
$aa=$Work->find($_GET['id']);


//使用del()自訂函式來刪除指定id的圖片紀錄
$Work->del($aa);

//刪除作業完畢，導向回廣告管理頁面

to("../back.php?do=work");
?>