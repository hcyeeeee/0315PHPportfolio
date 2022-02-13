<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.1/css/all.min.css"
        integrity="sha512-9my9Mb2+0YO+I4PUCSwUYO7sEK21Y0STBAiFEYoWtd2VzLEZZ4QARDrZ30hdM1GlioHJ8o8cWQiy8IAb1hy/Hg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">


</head>




<body>
    <div class="container-fluid">
        <!-- nav -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="col col-6  ">
                <a class="navbar-brand" href="#"><img src="./img/logo.jpg" width="250" height="150" alt=""></a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- 側邊按鈕 -->
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="col col-6 mr-5">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <!-- home -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.html"><img src="./img/home.png"
                                    width="110" height="75" class="mt-2" alt=""></a>
                            </a>
                        </li>
                        <!-- aboutme -->
                        <li class="nav-item">
                            <a class="nav-link" href="#about">
                                <img src="./img/about.png" width="120" height="55" class="mt-3" alt="">
                            </a>
                        </li>
                        <!-- project -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-expanded="false">
                                <img src="./img/project.png" width="120" height="80" alt="" class="mt-2">

                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#link-tabs"><img src="./img/illustration.png" width="100"
                                        height="20" alt=""></a>
                                <a class="dropdown-item" href="#link-tabs"><img src="./img/webdesign.png" width="100"
                                        height="20" alt=""></a>
                                <a class="dropdown-item" href="#link-tabs"><img src="./img/textiledesign.png"
                                        width="100" height="20" alt=""></a>
                            </div>
                        </li>
                        <!-- contact -->
                        <li class="nav-item">
                            <a class="nav-link"> <img src="./img/contact.png" width="170" height="70" class="mt-1"
                                    alt=""></a>
                        </li>
                        <br> <br> <br>
                        <!-- login -->
                        <li class="nav-item">
                            <a href="./login.html" class="nav-link mt-1 "> <img src="./img/login.png" width="110"
                                    height="75" alt=""></a>
                        </li>


                        <!--  -->
                </div>
            </div>
    </div>

    <!-- nav end -->

    <!-- login -->

    <div class="container-fluid ">

<div class="login-bg"  >
        <div class="row">
            <div class="col col-12 d-flex justify-content-center mt-5">
                <img class="login" src="./img/login.png" height="130px"  width="200px" alt="">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col col-4">
                <div class="form-group d-flex">
                    <label for="account">Account</label>
                </div>
                <div>
                <input type="text" class="form-control" id="account" aria-describedby="emailHelp">
               
                </div>

                <div class="form-group d-block">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="Password">
                </div>
                <div class="form-group form-check mt-2 d-block">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">remember me</label>
                </div>
               
                <a href="?do=login" class="btn btn-dark rounded mt-2">登入</a>
                <a href="?do=reg" class="btn btn-dark rounded mt-2">註冊</a>
               
                <?php
        $do=$_GET["do"]??'main';
        $file='front/'.$do.".php";
        if(file_exists($file)){
            include $file;
        }else{
            //echo "檔案不存在";
            include "front/main.php";
        }


        ?>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            </div>
        </div>
</div>
    </div>
   
 


    <!-- footer -->
    <div class="container-fluid">
        <div class=" d-flex justify-content-center fixed-bottom  " width="50px">
            © 2021 Copyright All Rights Reserved Designed by &nbsp; <img src="./img/黃莘懿.jpeg" style="width: 25px;">
        </div>
    </div>

    <!-- footer end-->






    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>

    <!-- tabs js -->
    <script>
        $(document).ready(function () {
            $(".nav-tabs a").click(function () {
                $(this).tab('show');
            });
        });
        var tabEl = document.querySelector('button[data-bs-toggle="tab"]')
        tabEl.addEventListener('shown.bs.tab', function (event) {
            event.target // newly activated tab
            event.relatedTarget // previous active tab
        })
    </script>


</body>

</html>