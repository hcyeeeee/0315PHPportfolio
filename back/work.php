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
    border-radius: 5px;
}
</style>


<div class="container">
    <!-- 主標題 -->
    <?php
   $rows = $Type->all();
    foreach ($rows as $row) {
    ?>
    <div class="row">
        <div class="col col-6 " style="font-weight:bold">
            <h3><?=$row['name']?></h3>
        </div>

        <!-- 新增 -->
        <div id="cover" style="display:none; ">
            <div id="coverr">
                <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
                    onclick="cl(&#39;#cover&#39;)">X</a>
                <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
            </div>
        </div>


        <div class="col col-6 " style=" text-align:right">
            <button onclick="op('#cover','#cvr','modal/work.php')" class="btn btn-dark">新增作品</button>

        </div>

    

    <?php
   $AAA = $Work->all(['type'=>$row['name']]);

    foreach ($AAA as $aaa) {
    ?>




    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="image">
            <img src="./img/<?=$aaa['img']?>" style="width: 300px; height:300px;">
            <div class="mask">
                <p class="my-5"><?=$aaa['content']?></p>
                <button onclick="op('#cover','#cvr','modal/edit_work.php?id=<?=$aaa['id'];?>')"
                    class="btn btn-dark">編輯作品</button>
                <br> <br>
                <a class="btn btn-light" href="./api/del_work.php?id=<?=$aaa['id']?>">刪除作品</a>

            </div>
        </div>
    </div>



    <?php
    }
    ?>

    <?php
       }
    ?>
</div>
</div>
<!-- 2end -->







<script>
function op(x, y, url) {
    $(x).fadeIn()

    if (y)
        $(y).fadeIn()

    if (y && url)
        $(y).load(url)
}

function cl(x) {
    $(x).fadeOut();
}
</script>