<style>

.image {
    position: relative;
    margin: 10px;
    padding: auto;
    width: 300px;
    height: 300px;
}

.mask {
    position: absolute;
    background: white;
    width: 300px;
    height: 300px;
    left: 0;
    top: 0;
    opacity: 0;
    color: black;
    font-size: 20px;
    text-align: center;
}

.mask:hover {
    transition: 1.5s;
    opacity: 1;
}

.carousel-item {
    height: 650px;
}

.my-5 {
    box-sizing: border-box;
}

* {
    box-sizing: border-box;
}

body {
    margin: 0;
}

.header {
    text-align: center;
    padding: 32px;
}

.row {
    display: -ms-flexbox;
    /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap;
    /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
    -ms-flex: 25%;
    /* IE10 */
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
    width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
    .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
}

.imgg{
    border-radius: 10px;
}
</style>



<div class="container col-11" id="work">
    <!-- 主標題 -->
    <?php
   $rows = $Type->all();
    foreach ($rows as $row) {
    ?>
    <div class="row ">
        <div class="col col-6 " style="font-weight:bold">
            <h3><?=$row['name']?></h3>
        </div>

    </div>
    <div class="row">
        <?php
   $AAA = $Work->all(['type'=>$row['name']]);

    foreach ($AAA as $aaa) {
    ?>




        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="image">
                <img src="./img/<?=$aaa['img']?>" class="imgg" style="width: 300px; height:300px; ml-5; mr-1;">
                <div class="mask">
                    <div class="my-5">
                    <h4><?=$aaa['name']?> <h4>
                        
                       <h5> <?=$aaa['content']?></h5>
                       <br>
                        <a href="<?=$aaa['link']?>" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>



    <?php
    }
    ?>
    <hr>
    <?php 
    }
    ?>
 
    </div>
</div>

</body>
</html>



