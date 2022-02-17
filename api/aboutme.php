<?php
include_once "../base.php";
$Aboutme->save(['id'=>1,'about'=>$_POST['about']]);
$Aboutme->save(['id'=>1,'name'=>$_POST['name']]);
$Aboutme->save(['id'=>1,'phone'=>$_POST['phone']]);
$Aboutme->save(['id'=>1,'email'=>$_POST['email']]);
to("../back.php?do=aboutme");


?>