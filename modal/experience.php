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

<!-- 
<div class="container">

  
        <h1 style="text-align:center;">新增</h1>
        <form action="./api/experience.php" method="post" enctype="multipart/form-data">
            <div class="row d-flex justify-content-center">
                <div class="col col-8 d-flex justify-content-center">
                    <table>
                        <thead>
                            <tr>
                         
                                <th> 內容：</th>
                                <th> 圖片上傳:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                          
                                <td> <input type="text" name="text" id="text" value=""></td>
                                <td><input class="custom-file-input" type="file" name="img" id="img"></td>
                                <td><input class="text" type="hidden" name="id" id="id"></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="修改確定">
                                    <input type="reset" value="重置">
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>
                </p>

            </div>
    </div>
    </form>



</div>

 -->

<div class="container">
   
<h3>更新經歷</h3>
<hr>


<form action="./api/experience.php" method="post" enctype="multipart/form-data">
<!-- <form action="./api/experience.php?id=<?=$_GET['id'];?>" method="post" enctype="multipart/form-data"> -->


<div class="form-group">

        <label for="exampleFormControlInput1">圖片：</label>
        <input class="custom-file-input" type="file" name="img" id="img" >
</div>   



<div class="form-group">
  <label for="exampleFormControlInput1">主題：</label>
  <input type="text" class="form-control" name="title" id="title"  >
</div>   
<!-- <div class="form-group">
<label for="exampleFormControlInput1">圖片：</label>
<input class="custom-file-input" type="file" name="img" id="img" >
</div>    -->

  <div class="form-group">
  <label for="exampleFormControlInput1">時間：</label>
  <input type="text" class="form-control" name="time" id="time"  >
</div>   


<div class="form-group">
  <label for="exampleFormControlSelect1">內容：</label>
  <!-- <input type="text" class="form-control" name="text" id="text" value=""> -->
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="text" id="text"></textarea>
  
</div>



  <input class="text" type="hidden" name="id" id="id">

 
    
  <div><input type="submit" value="新增">
  <input type="reset" value="重置"></div>
</form>
</div>