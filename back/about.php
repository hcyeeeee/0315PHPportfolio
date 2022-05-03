<style>
#cover {
    width: 100%;
    height: 100%;
    position: fixed;
    z-index: 5;
    background: rgba(51, 51, 51, 0.4);
    top: 0px;
    left: 0px;
    overflow: auto;
}

#coverr {
    width: 70%;
    min-width: 300px;
    max-width: 800px;
    height: 90%;
    min-height: 300px;
    position: absolute;
    z-index: 5;
    background: #ffffff;
    top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;
    margin: auto;
    overflow: auto;
    border-radius: 10px;
}



</style>




<div class="container" id="about">
<div class="row">
    <!-- 新增 -->
    <div id="cover" style="display:none; ">
         <div id="coverr">
             <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                 onclick="cl(&#39;#cover&#39;)">X</a>
             <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
         </div>
     </div>
    
    
     <div class="col col-12 " style=" text-align:center">
         <button onclick="op('#cover','#cvr','modal/about.php')" class="btn btn-dark">編輯個人資料</button>
    
     </div>
     </div>
    <div class="row">
        <div class="col col-12 d-flex justify-content-center align-items-center">
            <img src="./img/<?=$Aboutme->find(1)['img'];?>" class="d-flex " width="300" height="300" alt="about me">
        </div>
        <div class="col col-12 d-flex justify-content-center align-items-center">
            <p class="display-5"><em> - About me -</em></p>
        </div>

        <div class="col col-12 d-flex justify-content-center align-items-center">

             <p class="display-5">
                <a href="mailto:auu0812@gmail.com" style="color:#222"><i class="fas fa-envelope-square"></i></a>&nbsp;
                 <a href="https://github.com/hcyeeeee" style="color:#222"><i class="fab fa-github-square"></i></a>&nbsp;
                 <a href="https://www.behance.net/auu08122896" style="color:#222"><i class="fab fa-behance-square"></i></a>&nbsp;
                 <a href="https://issuu.com/hcyeeeee/docs/2022_portfolio" style="color:#222"><i class="fas fa-pen-square"></i></a> &nbsp; 
                </p>
    </div>
    <br><br>

    <div class="row mb-5">
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
        </div>

        <?php

include_once "./front/footer.php";
?>

