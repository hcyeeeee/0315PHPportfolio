<?php
include_once "../base.php";
// $Contact->save(['comment'=>$_POST['comment']]);
// $Contact->save(['name'=>$_POST['name']]);
// $Contact->save(['phone'=>$_POST['phone']]);
// $Contact->save(['email'=>$_POST['email']]);

$Contact->save($_POST);

to("./index.php?do=contact");

?>