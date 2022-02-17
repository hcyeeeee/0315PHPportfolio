<?php

include_once "base.php";
            if(!empty($_POST)){
              if($_POST['acc']=='admin' && $_POST['pw']=='1234'){
                  $_SESSION['login']='admin';
                  to("back.php");;
              }else{
                  echo "<div class='text-center' style='color:red '>帳號或密碼錯誤</div>";
              }
          }

          if(isset($_SESSION['login'])){
            //選單列表
            //後台引入畫面
              $do=$_GET['do']??'';
              $file="back/".$do.".php";
              if(file_exists($file)){
                 to("back.php");;
              }else{
                
              }                
              //登入畫面
          }
      ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resume</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.1/css/all.min.css" integrity="sha512-9my9Mb2+0YO+I4PUCSwUYO7sEK21Y0STBAiFEYoWtd2VzLEZZ4QARDrZ30hdM1GlioHJ8o8cWQiy8IAb1hy/Hg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
   
</head>

<body>

            <h2 class="text-center font-weight-bold">登入會員</h2>
<form action="./login.php" method="post" >
    <table class='table m-auto w-auto'>
        <tr>
            <td>帳號：</td>
            <td><input type="text" name="acc" id="acc" ></td>
        </tr>
        <tr>
            <td>密碼：</td>
            <td><input type="password"  name="pw" id="pw" ></td>
        </tr>
        <tr>
            <td><input type="checkbox" class="form-check-input" id="exampleCheck1">
                   remember me
                </td>
           
        </tr>    </table>
    <div class='text-center  '>
   <button class="btn btn-dark" onclick="login()">登入</button>
   <button class="btn btn-dark" onclick="reset()">重置</button>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="?do=reg" >註冊</a>
                <a href="?do=forget">忘記密碼</a>
            </div>
</div>
        </form>