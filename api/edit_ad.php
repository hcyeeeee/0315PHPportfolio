<?php include_once "../base.php";

//依照表單POST傳來的id欄位，使用find自訂函式來取得廣告圖片的紀錄
$Aboutme->save($_POST['img']);

//判斷是否有做圖片上傳的動作
if(!empty($_FILES['name']['tmp_name'])){

    //取得圖片名稱
    $filename=$_FILES['name']['name'];

    //搬移上傳的圖片檔至指定的目錄下
    move_uploaded_file($_FILES['name']['tmp_name'],'./img/'.$filename);
}


//根據是否有上傳檔片來決定要執行那一項更新指令
// if(isset($filename)){
//     save('aboutme',['img'=>$img],['id'=>$_POST['id']]);
// }else{
//     save('aboutme',['img'=>$img]);
// }

//更新完成，導向回廣告頁
// to("../back/?do=ad");

?>