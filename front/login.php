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

<style>
    .container-fluid{
        　background-image:url('../img/del3.png');
       
    }
    </style>



    <!-- login -->

    <div class="container-fluid ">
        <div class="login-bg">
            <div class="row">
                <div class="col col-12 d-flex justify-content-center mt-5">
                    <img class="login" src="./img/login.png" height="130px" width="200px" alt="">
                </div>
            </div>
            <form action="./login.php" method="post">
                <div class="row d-flex justify-content-center">
                    <div class="col col-3">
                        <div class="form-group d-block">
                            <label for="account">Account</label>
                            <input type="text" class="form-control" name="acc" id="acc">
                        </div>
                            <div class="form-group d-block">
                                <label for="Password">Password</label>
                                <input type="password" class="form-control" name="pw" id="pw">
                            </div>


                            <div class="form-group form-check mt-2 d-block">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">remember me</label>
                            </div>

                            <button class="btn btn-dark" onclick="login()">登入</button>
                            <button class="btn btn-dark" onclick="reset()">重置</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="?do=reg">註冊</a>
                            <a href="?do=forget">忘記密碼</a>
                    </div>
                </div>
            </form>

            <br>
            <br>
            <br>
            <br>
            <br>

        </div>
    </div>
    
</body>