<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p> <h1 style="text-align:center;">新增</h1>
           <form action="./api/experience.php" method="post" enctype="multipart/form-data">
                <div class="row d-flex justify-content-center">
                   <div class="col col-8 d-flex justify-content-center">
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
      <div class="modal-footer">
      <input type="submit" value="修改確定">
                <input type="reset" value="重置">
      </div>
    </div>
  </div>
  </form>
</div>