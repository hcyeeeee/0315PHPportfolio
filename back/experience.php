<style>
.aaa {

    width: 200px;
    height: 200px;
}

.texttime {
    font-style: italic;
    font-size: 20px;
}

.bb {

    width: 40px;
    height: 40px;
}

#cover {
    width: 100%;
    height: 100%;
    position: fixed;
    z-index: 5;
    background: rgba(51, 51, 51, 0.4);
    top: 0px;
    left: 0px;
    overflow: auto;
    border-radius: 10px;
}

#coverr {
    width: 70%;
    min-width: 300px;
    max-width: 800px;
    height: 70%;
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



<p>
<div class="container">

    <!-- 新增 -->
    <div id="cover" style="display:none; ">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                onclick="cl(&#39;#cover&#39;)">X</a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
    </div>


    <div class="col col-6 " style=" text-align:right">
        <button onclick="op('#cover','#cvr','modal/experience.php')" class="btn btn-dark">新增經歷</button>

    </div>

    <br><br><br><br>

    <h1 style="text-align:center;">預覽</h1>
    <?php
$rows = $Experience->all();
foreach ($rows as $row) {

    ?>
    <div class="container">
        <div class="row d-flex justify-content-center  ">

            <div class="col col-1 mr-1 bb">
                <a class="btn btn-light" href="./api/del.php?id=<?=$row['id']?>">刪除</a>

            </div>

            <div class="col col-2 d-flex justify-content-center ">
                <h2>
                    <?=$row['title']?><br>
                    <p class="texttime">
                        <?=$row['time']?>
                </h2>
            </div>

            <div class="col col-4 d-flex justify-content-center  ">
                <p>
                    <?=$row['text']?>
                <p>
                    <br><br>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>


            <div class="col col-3 d-flex justify-content-start aaa">
                <img src="./img/<?=$row['img']?>" alt="">
            </div>

        </div>
    </div>
    </div>
<br>
    <!-- 1end -->

    <?php
}
?>