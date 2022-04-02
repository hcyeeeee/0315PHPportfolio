<style>
.aaa {
    width: 300px;
    height: 300px;
}

.texttime {
    font-style: italic;
    font-size: 20px;
}
</style>

<div class="container">
    <div class="row  d-flex justify-content-center ">
        <div class="col col-12 d-flex justify-content-center ">
            <p class="display-4 ml-0 "><em> - Experience -</em></p>
        </div>
    </div>
    <br><br><br><br><br>

    <?php
        $rows=$Experience->all();
        foreach($rows as $row){ 
        ?>

    <div class="row d-flex justify-content-center ">
       
    <div class="col col-3 ">
            <h2><?= $row['title']?></h2>
            <h5><?= $row['time']?></h5>
            <br>
            <p><?= $row['text']?></p>
        </div>
        <div class="col col-1 d-flex justify-content-start">
           adding pic......
        </div>
        <div class="col col-4 d-flex justify-content-start">
            <img src="./img/<?= $row['img']?>" alt="" height="200px" width="300px">
        </div>
    </div>


    <br><br><br><br>

<?php
        }
        ?>
</div>