<div class="container">
    <form method="post" action="./api/work.php">

        <h2><?=$Work->find(1)['name'];;?></h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>更新圖片</th>
                    <th>更新描述</th>
                    <th>顯示</th>
                    <th>刪除</th>
                    

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>標題區圖片：<input type="file" name="img"></td>
                    <td width="45%"><input type="text" name="comment" value="<?=$Work->find(1)['comment'];?>"></td>
                    <td class="cent"> <input type="radio" name="sh" value="<?=$row['id'];?>" $checked;></td>
                    <td class="cent">  <input type="checkbox" name="del[]" value=""></td>

                  
                   
                    <td class="cent">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                    <form action="api/add.php" method="post" enctype="multipart/form-data">


        </table>
     
    </form>


