<div class="container-fluid" id="about">

    <div class="row">
        <div class="col col-12 d-flex justify-content-center align-items-center">
            <!-- 資料庫的圖片 -->
            <!-- <img src="./img/me.png" class="d-flex " width="450" height="450" alt="about me"> -->
            <img src="../img/<?=$Aboutme->find(1)['img'];?>" width="200" height="200" style="border:3px solid black">
<br><br>
            <form action="./api/aboutme.php" method="post" enctype="multipart/form-data">
                檔案：<input type="file" name="img" value="<?=$Aboutme->find(1)['img'];?>">

                <input class="btn btn-dark" type="hidden" value="img" >
                <input class="btn btn-dark" type="submit" value="更新圖片">
        </div>


        <!-- <div class="row">
        <div class="col col-12 d-flex justify-content-center align-items-center">
          <h3>name</h3>
         
          <h3>about</h3>
          
                <input class="btn btn-dark" type="submit" value="修改確定">
                <input class="btn btn-dark" type="reset" value="重置">
        </div>


   
    <input type="text" name="about"cols="30" rows="10" value="<?=$Aboutme->find(1)['about']?>">
            </td>
            <td>
                <input type="submit" value="修改確定">
                <input type="reset" value="重置">
            </td>
            </tr> -->




            <div class="col col-12 d-flex justify-content-center align-items-center">
            <div class="col col-6 d-flex justify-content-center align-items-center">
      
                <div class="col-6">
                <input type="text" name="name"cols="50" rows="50" value="<?=$Aboutme->find(1)['name']?>">
                    <!-- <?=$Aboutme->find(1)['name'];?> -->
                </div>
                <div class="col-6">
                <input type="text" name="about"cols="30" rows="10" value="<?=$Aboutme->find(1)['about']?>">
                    <!-- <?=$Aboutme->find(1)['about'];?> -->
                </div>
                <input type="submit" value="修改確定">
                <input type="reset" value="重置">
            </div>


                </div>
                </form>



