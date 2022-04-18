<link rel="stylesheet" href="./css/newstyle.css">
<div class="container-fluid" id="about">

    <div class="row">
        <div class="col col-12 d-flex justify-content-center align-items-center">
            <img src="./img/<?=$Aboutme->find(1)['img'];?>" class="d-flex " width="450" height="450" alt="about me">
        </div>
        <div class="col col-12 d-flex justify-content-center align-items-center">
            <p class="display-4"><em> - About me -</em></p>
        </div>

        <div class="col col-12 d-flex justify-content-center align-items-center">

            <p class="display-5">
                <a href="mailto:auu0812@gmail.com" style="color:#222"><i
                        class="fas fa-envelope-square fa-sm"></i></a>&nbsp;
                <a href="https://github.com/hcyeeeee" style="color:#222"><i
                        class="fab fa-github-square fa-sm"></i></a>&nbsp;
                <a href="https://www.behance.net/auu08122896" style="color:#222"><i
                        class="fab fa-behance-square fa-sm"></i></a>&nbsp;
                <a href="https://issuu.com/hcyeeeee/docs/2022_portfolio" style="color:#222"><i
                        class="fas fa-pen-square fa-sm"></i></a> &nbsp;
            </p>
        </div>

    </div>
    <br><br>


    <div class="row  d-flex justify-content-center ">
        <!-- name-->
        <div class="col-12 col-md-3  ">
            <h1 class="myname">
                <?=$Aboutme->find(1)['name'];?>
            </h1> 
        </div>

        <div class="col-12 col-md-1 ">
         
        </div>

        <div class="col-12 col-md-3 ">
            <h5 >
                <?=$Aboutme->find(1)['about'];?>
            </h5>
        </div>

    </div>

    <!-- about me end -->


    <div>
        <br><br>
    </div>

    <?php include_once "experience.php"?>
    <?php include_once "skills.php"?>
    <div class="row col col-12 d-flex justify-content-center align-items-center">
        <img src="./img/line3.png" height="190px" alt="">
    </div>
</div>