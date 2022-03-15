        <!-- experince -->
        <div class="container">
            <div class="row  d-flex justify-content-center ">
                <div class="col col-12 d-flex justify-content-center ">
                    <p class="display-4 ml-0 "><em> - Experience -</em></p>
                </div>
                <div>
            <br><br><br>
        </div>


        <?php
                // $rows=$Experience->all();
                // foreach($rows as $row){
                   
                ?>
            
               <h1>新增</h1>
           <form action="./api/experience.php" method="post" enctype="multipart/form-data">
                <div class="row  d-flex justify-content-center ">
                <table>
                <thead>
                        <tr>
                            <th> 主題：</th>
                            <th> 時間：</th>
                            <th> 內容：</th>
                            <th> 圖片上傳:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <input type="text" name="title" id="title" value="" ></td>
                        <td><input type="text" name="time" id="time" value=""></td>
                        <td> <input type="text" name="text" id="text" value=""></td>
                        <td><input class="custom-file-input" type="file" name="img" id="img"></td>
                                
                   
               <td>
               <input type="submit" value="修改確定">
                <input type="reset" value="重置">
               </td>
               </tr>
               
                </tbody>

                </table>   
                </form>
              
<!--
                <div class="col-md-3 m-auto">
    <img src="../img/" style='width:250px;border:3px solid black'>
<form action="./api/upload2.php" method="post" enctype="multipart/form-data">
<br>
    <div class='custom-file mx-auto d-block mb-2'>
        <label for="upload" class='custom-file-label'></label>
        <input class="custom-file-input" type="file" name="img" id="img">
    </div>
    <div class="mx-auto text-center mt-2 input-group mb-2">
        <label class='input-group-prepend input-group-text' for='intro'>說明：</label>
        <input class='form-control' type="text" name="text" id="text" value="">
    </div>
    <div class="mx-auto mb-2">
        <input type="hidden" name="id" value="">
        <input type="submit" value="上傳" class="btn btn-primary">
    </div>
</form>
</div> -->

<br><br><br>
<br><br><br>


<h1>預覽</h1>

            <?php
            include_once "./front/experience2.php"?>