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
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center">
    
   
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="d-flex justify-content-center">
            <div class="collapse navbar-collapse d-flex d-flex justify-content-center " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">



                    <!-- home -->
                    <li class="?do=index">
                        <a class="nav-link active" aria-current="page" href="#"><img src="./img/home.png" width="110"
                                height="75" class="mt-2" alt=""></a>
                        </a>
                    </li>
                    <!-- aboutme -->
                    <li class="nav-item">
                        <a class="nav-link" href="?do=about">
                            <img src="./img/about.png" width="120" height="55" class="mt-3" alt="">
                        </a>
                    </li>
                    <!-- project -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="?do=project" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            <img src="./img/project.png" width="120" height="80" alt="" class="mt-2">

                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#link-tabs"><img src="./img/illustration.png" width="100"
                                    height="20" alt=""></a>
                            <a class="dropdown-item" href="#link-tabs"><img src="./img/webdesign.png" width="100"
                                    height="20" alt=""></a>
                            <a class="dropdown-item" href="#link-tabs"><img src="./img/textiledesign.png" width="100"
                                    height="20" alt=""></a>
                        </div>
                    </li>
                    <!-- contact -->
                    <li class="nav-item">
                        <a class="nav-link" href="?do=contact"> <img src="./img/contact.png" width="170" height="65"
                                class="mt-2" alt=""></a>
                    </li>
                    <br> <br> <br>
                    <!-- login -->
                    <li class="nav-item">
                        <a href="./login.php" class="nav-link mt-1 "> <img src="./img/login.png" width="110"
                                height="75" alt=""></a>
                    </li>



                </ul>
            </div>
        </div>
        </div>
        </div>

    </nav>
    <!-- nav end -->


    <?php
        $do=$_GET["do"]??'index';
        $file='front/'.$do.".php";
        if(file_exists($file)){
            include $file;
       
        }

?>


    <!-- footer -->
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center bg-green mx-5 my-3 ">
            © 2022 Copyright All Rights Reserved Designed by &nbsp;
            <!-- <img src="./img/copyright.png" width="600px" height="40" alt=""> -->
            <img src="./img/黃莘懿.jpeg" style="width: 25px;">
        </div>
    </div>

    <!-- footer end-->



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
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
        var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel)
  
    </script>


</body>

</html>