<style>
.aaa {
    width: 300px;
    height: 300px;
}

.texttime {
    font-style: italic;
    font-size: 20px;
}

.imgg {
    border-radius: 10px;
}

@media screen and (max-width: 768px) {
    .col{
  display: flex;
  flex-flow: wrap;
  flex-direction:column;
}
.img-col {
    display: flex;
  flex-flow: wrap;
  flex-direction:column;
  width:0%;
  height:0%;
}

}
</style>


<div class="container">

    <div class="row col col-12 d-flex justify-content-center align-items-center">
        <img src="./img/line3.png" height="190px" alt="">
    </div>
    <div class="row  d-flex justify-content-center ">
        <div class="col col-12 d-flex justify-content-center ">
            <p class="display-4 ml-0 "><em> - Experience -</em></p>
        </div>
    </div>
    <br><br><br><br><br>



    <?php
        $rows=$Experience->all();
        foreach($rows as $key => $row){ 
        if($key%2==0){
        ?>

    <div class="row d-flex justify-content-center ">

        <div class="col col-3 ">
            <h3><?= $row['title']?></h3>
            <h5><?= $row['time']?></h5>
            <br>
            <p><?= $row['text']?></p>
        </div>
        <div class="col col-1 d-flex justify-content-start">
            <!-- adding pic...... -->
        </div>
        <div class="img-col col-3 d-flex justify-content-start">
            <img src="./img/<?= $row['img']?>" alt="" class="imgg col " height="270px" width="270px">
        </div>
    </div>


    <br><br>

    <?php
        }else{
        ?>


    <div class="row d-flex justify-content-center ">

        <div class="img-col col-3 d-flex justify-content-start">
            <img src="./img/<?= $row['img']?>" alt="" class="imgg col" height="270px" width="270px">
        </div>
        <div class="col col-1 d-flex justify-content-start">
            <!-- adding pic...... -->
        </div>
        <div class="col col-3 ">
            <h3><?= $row['title']?></h3>
            <h5><?= $row['time']?></h5>
            <br>
            
            <p><?= $row['text']?></p>
           
        </div>
    </div>

    <br><br>

    <?php
        }}
        ?>
</div>
