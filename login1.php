<div class="container">
            <div class="d-flex justify-content-center">
                <a class="navbar-brand" href="#"><img src="./img/logo.jpg" width="250" height="150" alt=""></a>
            </div>
            </div>
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
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?do=index"><img src="./img/home.png" width="110"
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
    <!-- nav end -->


               
                 <?php
        $do=$_GET["do"]??'login';
        $file='front/'.$do.".php";
        if(file_exists($file)){
            include $file;
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