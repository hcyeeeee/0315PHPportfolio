

<style>
    .aaa {

        width: 300px;
        height: 300px;
    }

    .texttime {
        font-style: italic;
        font-size: 18px;
    }

  
    </style>
        <!-- experince -->
        <div class="container">
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
                <!--1  -->
                <div class="row   d-flex justify-content-center ">
                    <div class="col col-2 d-flex  ">
                    <!-- <h1>Web Design <br> -->
                    <h1><?= $row['title']?><br>
                    <!-- <p class="texttime">2021.Sep-&nbsp;
                            &nbsp;&nbsp;2022.Mar</p></h1> -->
                            <p class="texttime"><?= $row['time']?></h1>
                   
                   
                    </div>
                    <div class="col col-6 d-flex justify-content-center  ">
                      
                        
                        <!-- <p>織品系四年課程
                            大學四年在織品系培養出審慎的美感意識、色彩敏銳度，以及對流行趨勢的掌握度、設計思維。 我認爲上述能力對於網頁設計是很重要的能力。
                        <p> -->
                             <p><?= $row['text']?>
                        <p> 
                            <br><br>&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="col col-3 d-flex justify-content-start aaa">
                   
                    <!-- <img src="./img/code.jpg" alt=""> -->
                              <img src="./img/<?= $row['img']?>" alt="" >
                    </div>
                </div>
               <!-- 1end -->
                <div>
            <br><br><br><br>
        </div>
        <?php
                }
                ?>
   