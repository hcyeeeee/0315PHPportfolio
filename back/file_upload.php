

<?php
if(!empty($_FILES['file']['tmp_name'])){
    $filename=md5(time());  //利用時間及md5編碼來產生一個檔名
    switch($_FILES['file']['type']){
        case "image/jpeg":
            $subname=".jpg";
        break;
        case "image/png":
            $subname=".png";
        break;
        case "image/gif":
            $subname=".gif";
        break;
    }

    //利用move_upload_file函式將檔案搬移到指定目錄下，並指定檔名
    move_upload_file($_FILES['file']['tmp_name'] , "./img/" . $filename . $subname);
}


?>