<?php
include_once "../base.php";
?>

<div class="container">

    <h3>更新基本資料</h3>
  



    <form action="./api/aboutme.php" method="post" enctype="multipart/form-data">
        <div class="container-fluid" id="about">

<div class="form-group">
<img src="./img/<?=$Aboutme->find(1)['img'];?>" width="100" height="100"
                                        style="border:3px solid black">
        <label for="exampleFormControlInput1">大頭貼：</label>
        <input class="custom-file-input" type="file" name="img" id="img" >
</div>   

<br>

<div class="form-group">
    <label for="exampleFormControlInput1">名字：</label>
    <input type="text" class="form-control" name="name" id="name" value="<?=$Aboutme->find(1)['name'];?>" >
  </div>   

  <br>

  <div class="form-group">
    <label for="exampleFormControlInput1">信箱：</label>
    <input type="text"  class="form-control" name="email" value="<?=$Aboutme->find(1)['email'];?>">
  </div>  


  <br>

  <div class="form-group">
    <label for="exampleFormControlInput1">聯絡電話：</label>
    <input type="text"  class="form-control" name="phone" value="<?=$Aboutme->find(1)['phone'];?>">
  </div>  

  <br>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">關於我：</label>
   
    <textarea  cols="30" rows="6" class="form-control" type="text" name="about" value="<?=$Aboutme->find(1)['about'];?>"></textarea>

  </div>


  
  <input type="hidden" name="id" >

 <br>

    
  <div><input type="submit" value="更新">
  <input type="reset" value="重置"></div>
</form>
</div>