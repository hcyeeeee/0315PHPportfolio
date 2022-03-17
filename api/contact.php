<?php
include_once "../base.php";

echo $Contact->save($_POST);


to("../index2.php?do=contact");


?>