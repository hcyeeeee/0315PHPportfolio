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

<div class="container">
   
<h3 class=" mt-3">更新經歷</h3>
<hr>


<form action="./api/experience.php" method="post" enctype="multipart/form-data">
<!-- <form action="./api/experience.php?id=<?=$_GET['id'];?>" method="post" enctype="multipart/form-data"> -->


<div class="form-group  mt-2">

        <label for="exampleFormControlInput1">圖片：</label>
        <input class="custom-file-input" type="file" name="img" id="img" >
</div>   



<div class="form-group  mt-2">
  <label for="exampleFormControlInput1">主題：</label>
  <input type="text" class="form-control" name="title" id="title"  >
</div>   

  <div class="form-group  mt-2">
  <label for="exampleFormControlInput1">時間：</label>
  <input type="text" class="form-control" name="time" id="time"  >
</div>   


<div class="form-group mt-2">
  <label for="exampleFormControlSelect1">內容：</label>
  <!-- <input type="text" class="form-control" name="text" id="text" value=""> -->
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="text" id="text"></textarea>
  
</div>



  <input class="text" type="hidden" name="id" id="id">

 <br>
    
  <div>
    <input class="btn btn-dark" type="submit" value="新增">
  <input class="btn btn-light" type="reset" value="重置">
</div>
</form>
</div>