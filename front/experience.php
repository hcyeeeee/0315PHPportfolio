<link rel="stylesheet" href="./css/newstyle.css">


<div class="container experience">

    <div class="row col col-12 d-flex justify-content-center align-items-center">
        <img src="./img/line3.png" height="190px" alt="">
    </div>
    <div class="row  d-flex justify-content-center ">
        <div class="col col-12 d-flex justify-content-center ">
            <p class="display-4 ml-0 "><em> - Experiences -</em></p>
        </div>
    </div>
    <br><br><br><br><br>



    <?php
        $rows=$Experience->all();
        foreach($rows as $key => $row){ 
        if($key%2==0){
        ?>

    <div class="row d-flex justify-content-center ">

        <div class="col-12 col-md-3 ">
            <h3><?= $row['title']?></h3>
            <h5><?= $row['time']?></h5>
            <br>
            <p><?= $row['text']?></p>
        </div>
        <div class=" col-md-1 d-flex  justify-content-start">
            <!-- adding pic...... -->
        </div>
        <div class="img-col col-12 col-md-3 d-flex justify-content-start">
            <img src="./img/<?= $row['img']?>" alt="" class="imgg col " height="270px" width="270px">
        </div>
    </div>


    <br><br>

    <?php
        }else{
        ?>


    <div class="row justify-content-center d-none d-md-flex">
        <div class="img-col col-12 col-md-3 d-flex justify-content-start">
            <img src="./img/<?= $row['img']?>" alt="" class="imgg col " height="270px" width="270px">
        </div>
        <div class="col-md-1 d-flex justify-content-start">
            <!-- adding pic...... -->
        </div>
        <div class="col-12 col-md-3 ">
            <h3><?= $row['title']?></h3>
            <h5><?= $row['time']?></h5>
            <br>
            <p><?= $row['text']?></p>
        </div>
    </div>


<!-- small時顯示 -->
    <div class="row d-md-none d-flex justify-content-center ">

        <div class="col-12 col-md-3 ">
            <h3><?= $row['title']?></h3>
            <h5><?= $row['time']?></h5>
            <br>
            <p><?= $row['text']?></p>
        </div>
        <div class=" col-md-1 d-flex  justify-content-start">
            <!-- adding pic...... -->
        </div>
        <div class="img-col col-12 col-md-3 d-flex justify-content-start">
            <img src="./img/<?= $row['img']?>" alt="" class="imgg col " height="270px" width="270px">
        </div>
    </div>

    <br><br>

    <?php
        }}
        ?>
</div>

<script>





</script>