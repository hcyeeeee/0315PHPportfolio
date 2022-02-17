<?php
include_once "base.php";

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
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<style>
    *{
  margin: 0px;
  padding: 0px;
}

body{
  
  background-image:  url('./img/bg2.jpg');;
  background-color: #fff;
  background-size: 30%;
  color: black;
  line-height: 2;
  text-align: center;
}

.container{
  max-width: 960px;
  margin: auto;
  padding: 0 30px;
}

#showcase{
  height: 300px;
}

#showcase h1{
  font-size: 50px;
  line-height: 1.3;
  position: relative;
  animation: heading;
  animation-duration: 2s;
  animation-fill-mode: forwards;
}

@keyframes heading{
  0% {top: -50px;}
  100% {top: 200px;}
}

#content {
  position: relative;
  animation-name: content;
  animation-duration: 2s;
  animation-fill-mode: forwards;
}

@keyframes content{
  0% {left: -1000px;}
  100% {left: 0px;}
}

.btn{
    display: inline-block;
    color: #111;
    text-decoration: none;
    padding: 1rem 2rem;
    border: #111 1px solid;
    border-radius: 30%;
    margin-top: 40px;
    opacity: 0;
    animation-name: btn;
    animation-duration: 1s;
    animation-delay: 1s;
    animation-fill-mode: forwards;
    transition-property: transform;
    transition-duration: 1s;
  }

.btn:hover{
  transform: rotateY(360deg);
}

@keyframes btn {
  0%{opacity: 0}
  100%{opacity: 1}
}
</style>


  <body>
    <header id="showcase">
      <h1>Hello,I'm Hcy</h1>
    
      <!-- <img src="./img/logo.jpg" alt=""> -->
    </header>
    <div id="content" class="container">
     web design , pattern design , textile design....
    </div>
    <a href="./index2.php" class="btn">Read More</a>
    <div class=""><br><br><br><br><br></div>
  </body>



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