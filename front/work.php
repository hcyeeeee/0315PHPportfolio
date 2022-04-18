<link rel="stylesheet" href="./css/newstyle.css">
<div class="container " >
    <!-- 主標題 -->
    <?php
   $rows = $Type->all();
    foreach ($rows as $row) {
    ?>
    <div class="row ">
        <div class="col col-6 d-flex justify-content-start">
            <h3><?=$row['name']?></h3>
        </div>
    </div>


    <div class="row">
        <?php
   $AAA = $Work->all(['type'=>$row['name']]);
    foreach ($AAA as $aaa) {
    ?>

        <div class="col col-xl-3 ">
            <div class="image">
                <img src="./img/<?=$aaa['img']?>" class="imgg" style="width: 300px; height:300px;">
                <div class="mask">
                    <div class="my-5">
                        <h4><?=$aaa['name']?> <h4>

                                <h5> <?=$aaa['content']?></h5>
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