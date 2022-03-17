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
   
   
   
<a href="?do=modal"><button>新增</button></a>

                



      <!-- experince -->
      <!-- <div class="container">
            <div class="row  d-flex justify-content-center ">
                <div class="col col-12 d-flex justify-content-center ">
                  
                </div>
                <div>
            <br><br><br><br>
        </div>
      -->
<!-- input -->

       
                <!--1  -->
                <!-- <div class="row   d-flex justify-content-center ">
                    <div class="col "> -->
                    <!-- <h1>Web Design <br> -->
                    <!-- <p>  主題：<input type="text" name="title" id="title" value="" > </p>
                    <p class="texttime">時間：<input type="text" name="time" id="time" value=""></p> 
                   <p>內容 <input type="text" name="text" id="text" value=""><p> 
                           
                    <div class="col col-3 d-flex justify-content-start aaa"> -->
                   
                    <!-- <img src="./img/code.jpg" alt=""> -->
                    <!-- <td><input class="custom-file-input" type="file" name="img" id="img"></td>
                    </div>
                </div> -->
               <!-- 1end -->
                <!-- <div>
            <br>
            <hr>
        </div>
 



<br><br><br>
<br><br><br> -->


<h1 style="text-align:center;">預覽</h1>

              <!-- experince -->
            
            <br><br><br><br>
      
     
        <?php
                $rows=$Experience->all();
                foreach($rows as $row){
                   
                ?>
   <div class="container">
 <div class="row d-flex justify-content-center  ">
                  
     <div class="col col-1 mr-1 bb">
     <input type="button" name="del[]" onclick="del()" class="btn btn-light" value="x"></input>
     <!-- <button name="del[]" class="btn btn-light" >X</button> -->
</div>

<div class="col col-2 d-flex justify-content-center ">
<h1><?= $row['title']?><br>
<p class="texttime"><?= $row['time']?></h1>
 </div>
                    
 <div class="col col-4 d-flex justify-content-center  ">
 <p><?= $row['text']?> <p> 
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;
</div>
                         
                    
<div class="col col-3 d-flex justify-content-start aaa">
<img src="./img/<?= $row['img']?>" alt="" >
</div>

 </div>
 </div>
               
              
               <!-- 1end -->

        <?php
                }
                ?>
   