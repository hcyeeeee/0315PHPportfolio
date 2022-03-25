


<div class="container">
   
<h3>新增作品</h3>
<hr>



<form action="./api/work.php" method="post" enctype="multipart/form-data">


<div class="form-group">
    <label for="exampleFormControlInput1">名稱：</label>
    <input type="text" class="form-control" name="name" id="name" >
  </div>   

        
    <div class="form-group">
    <label for="exampleFormControlInput1">圖片：</label>
    <input class="custom-file-input" type="file" name="img" id="img">
  </div>   


    <div class="form-group">
    <label for="exampleFormControlInput1">連結：</label>
    <input type="text" class="form-control" name="link" id="link" >
  </div>   


 
  <div class="form-group">
    <label for="exampleFormControlSelect1">主題分類</label>
    <select class="form-control" id="exampleFormControlSelect1" name="type"  >

      <option name="1">graphic design</option>
      <option name="2">web design</option>
      <option name="3">textile design</option>
     
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content" id="content"></textarea>
  </div>

  <div><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>
</div>