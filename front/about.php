<style>
    .aaa {

        width: 408px;

        height: 300px;
    }

    .texttime {
        font-style: italic;
        font-size: 18px;
    }

    .myname {
        font-size: 80px;
        color: #222;
    }
</style>
<!-- about -->

<div class="container-fluid" id="about">

    <div class="row">
        <div class="col col-12 d-flex justify-content-center align-items-center">
            <img src="./img/<?=$Aboutme->find(1)['img'];?>" class="d-flex " width="450" height="450" alt="about me">
        </div>
        <div class="col col-12 d-flex justify-content-center align-items-center">
            <p class="display-5"><em> - About me -</em></p>
        </div>

        <div class="col col-12 d-flex justify-content-center align-items-center">
            </p>
            <!-- <p class="display-5">
                <i class="fas fa-envelope-square"></i>&nbsp;
                <i class="fab fa-github-square"></i>&nbsp;
                <i class="fab fa-behance-square"></i>&nbsp;
                <i class="fab fa-instagram-square"></i> &nbsp; -->
        </div>

    </div>
    <br><br>

    <div class="row">
        <div class="col col-12 d-flex justify-content-center align-items-center">
            <div class="col col-6 d-flex justify-content-center align-items-center">
                <h2 class="myname">
                    <?=$Aboutme->find(1)['name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </h2> &nbsp;
                <div class="col-6">
                    <?=$Aboutme->find(1)['about'];?>
                </div>
            </div>


        </div>

<!-- 
        <img class="line" src="./img/line3.png" width="" height="200" alt=""> -->
    </div>
    <div>

   

        <!-- skills -->
        <div>
            <br><br><br><br>
        </div>
        <div class="container">
            <div class="row  d-flex justify-content-center ">
                <div class="col col-12 d-flex justify-content-center ">
                    <p class="display-5 ml-0 "><em> - My Skills -</em></p>
                </div>
                <!-- <div class="col col-12 d-flex justify-content-center">
        <p><img src="./line3.png"  alt=""></p>
    </div> -->

                <!-- <div class="col col-2 text-center" style="background-image: url(./skills.png);"> -->
                <div class="skillscol col col-2 text-center mt-5">
                    <h2 class="card-title">
                        <img src="./img/del2.png" class="skills" height="60px" width="140px" alt="">
                    </h2>
                    <br>
                    <h5>AI</h5>
                    <h5>PS</h5>
                    <h5>InDesign</h5>

                </div>
                <div class="skillscol col col-2 text-center mt-5">
                    <h2 class="card-title"> <img class="skills" src="./img/del4.png" height="60px" width="140px" alt="">
                    </h2>
                    <br>
                    <h5>Html</h5>
                    <h5>Css</h5>
                    <h5>Javascript</h5>
                    <h5>jquery</h5>
                </div>
                <div class="skillscol col col-2 text-center mt-5">
                    <h2 class="card-title"><img class="skills" src="./img/del3.png" height="60px" width="140px" alt="">
                    </h2>
                    <br>
                    <h5>PHP</h5>
                    <h5>MySQL</h5>

                </div>
                <div class="skillscol col col-2 text-center mt-5">
                    <h2 class="card-title"><img class="skills2" src="./img/del5.png" height="70px" width="180px" alt="">
                    </h2>
                    <br>
                    <h5>pattern design</h5>
                    <h5>weaving</h5>
                    <h5>knitting</h5>
                </div>

            </div>


        </div>

        <div>
            <br><br><br><br>
        </div>
        <hr>

        <?php include_once "experience2.php"?>
        <!-- about me end-->
      