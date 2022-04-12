<style>

body {
    opacity: 1;
    /* background-size: 30%;
    background-repeat: no-repeat;
    background-image:url("./img/hcyy.png"); */
    color: #666;
    line-height: 2;
    text-align: center;
}

.container {
    max-width: 960px;
    margin: auto;
    padding: 0 30px;
}

#showcase h1 {
    line-height: 1.3;
    position: relative;
    animation: heading;
    animation-duration: 2s;
    animation-fill-mode: forwards;
}

@keyframes heading {
    0% {
        top: -50px;
    }

    100% {
        top: 200px;
        left: 10px;
    }
}

#content {
    position: relative;
    animation-name: content;
    animation-duration: 2s;
    animation-fill-mode: forwards;
}

@keyframes content {
    0% {
        left: -1000px;
    }

    100% {
        left: 0px;
    }
}

.btn {
    display: inline-block;
    text-decoration: none;
    opacity: 0;
    animation-name: btn;
    animation-duration: 1s;
    animation-fill-mode: forwards;
    transition-property: transform;
    transition-duration: 1s;
}

.btn:hover {
    transform: scale(1.2);
}

@keyframes btn {
    0% {
        opacity: 0
    }
    100% {
        opacity: 1
    }
}
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my portfolio</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header id="showcase">

<h1 id="content" class="container">
<img src="./img/hcyy.png" width="600" height="200" alt="">
</h1>
<a href="./index2.php?do=about" class="btn">
<img src="./img/button.PNG" width="600" height="500" alt="">
</a>

</header>
<br>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

</body>
</html>


    


