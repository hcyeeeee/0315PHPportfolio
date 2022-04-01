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
<!-- experince -->

<div class="container ">
    <div class="row  d-flex justify-content-center ">
        <div class="col col-12 d-flex justify-content-center ">
            <p class="display-4 ml-0 "><em> - Experience -</em></p>
        </div>
        <div>
            <br><br><br><br>
        </div>

        <?php
                $rows=$Experience->all();
                foreach($rows as $row){ 
                ?>
        <div class="row  d-flex justify-content-center ">
            <div class="col col-4 d-flex  ">
                <h1><?= $row['title']?>
                    <br>
                    <p class="texttime"><?= $row['time']?>
                </h1>
                <p><?= $row['text']?>
                <p>
            </div>
            <div class="col col-4 d-flex justify-content-start aaa">
                <img src="./img/<?= $row['img']?>" alt="" height="200px" width="280px">
            </div>
        </div>
        <div>
            <br><br><br><br>
        </div>
        <?php
                }
                ?>