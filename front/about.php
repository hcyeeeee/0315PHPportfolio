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
    font-size: 46px;
    color: #222;
}
</style>
<!-- about me -->

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
            <a href="mailto:auu0812@gmail.com" style="color:#222"><i class="fas fa-envelope-square fa-sm"></i></a>&nbsp;
            <a href="https://github.com/hcyeeeee" style="color:#222"><i class="fab fa-github-square fa-sm"></i></a>&nbsp;
            <a href="https://github.com/hcyeeeee" style="color:#222"><i class="fab fa-behance-square fa-sm"></i></a>&nbsp;
            <a href="https://github.com/hcyeeeee" style="color:#222"><i class="fab  fa-behance-square fa-sm"></i></a> &nbsp;
        </p>
        </div>

    </div>
    <br><br>

    <div class="row justify-content-center align-items-center">
        <!-- name-->
        <div class="col col-6 d-flex justify-content-center align-items-center">
            <h1 class="myname">
                <?=$Aboutme->find(1)['name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </h1> &nbsp;
            <!-- about-->

            <div class="col-6">
                
                <?=$Aboutme->find(1)['about'];?>
                
            </div>
        </div>
    </div>
 
</div>
<!-- about me end -->


<div>
    <br><br><br><br>
</div>

<?php include_once "skills.php"?>
<?php include_once "experience.php"?>
</div>


