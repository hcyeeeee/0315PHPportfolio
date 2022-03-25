<style>
.aaa {

    width: 200px;
    height: 200px;
}

.texttime {
    font-style: italic;
    font-size: 18px;
}

.bb {

    width: 40px;
    height: 40px;
}

<style>#cover {
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
}
</style>




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

<!-- 
    <h1 style="text-align:center;">新增</h1>
    <form action="./api/experience.php" method="post" enctype="multipart/form-data">
        <div class="row d-flex justify-content-center">
            <div class="col col-8 d-flex justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th> 主題：</th>
                            <th> 時間：</th>
                            <th> 內容：</th>
                            <th> 圖片上傳:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <input type="text" name="title" id="title" value=""></td>
                            <td><input type="text" name="time" id="time" value=""></td>
                            <td> <input type="text" name="text" id="text" value=""></td>
                            <td><input class="custom-file-input" type="file" name="img" id="img"></td>
                            <td><input class="text" type="hidden" name="id" id="id"></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="修改確定">
                                <input type="reset" value="重置">
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>
            </p>

        </div>
</div>
</form>
</div>



</div> -->

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

                <!-- <button name="del[]" class="btn btn-light" >X</button> -->
            </div>

            <div class="col col-2 d-flex justify-content-center ">
                <h1>
                    <?=$row['title']?><br>
                    <p class="texttime">
                        <?=$row['time']?>
                </h1>
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

    <!-- 1end -->

    <?php
}
?>