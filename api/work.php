<?php
include_once "../base.php";
$Work->save(['id'=>1,'comment'=>$_POST['comment']]);
$Work->save(['id'=>1,'name'=>$_POST['name']]);
$Work->save(['id'=>1,'intro'=>$_POST['intro']]);
$Work->save(['id'=>1,'sh'=>$_POST['sh']]);

to("../back.php?do=work");



?>