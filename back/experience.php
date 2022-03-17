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
</style>



<p>
<div class="container">
    <h1 style="text-align:center;">新增</h1>
    <form action="./api/experience.php" method="get" enctype="multipart/form-data">
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


<!-- 1end -->

<?php
}
?>