<div class="container">
    <form method="post" action="./api/aboutme.php">

<h2>作品管理</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>更新圖片</th>
                    <th>更新描述</th>
                    <th>管理</th>
               
                </tr>
            </thead>
            <tbody>
            <tr>
            <td>標題區圖片：<input type="file" name="img" ></td>
            <td><input type="check" name="text" ></td>
            <td width="10%">顯示</td>
        <td width="10%">刪除</td>

            <td class="cent">
                <input type="submit" value="修改確定">
                <input type="reset" value="重置">
            </td>
            <form action="api/add.php" method="post" enctype="multipart/form-data">
 
     
    </table>
    <div>
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>



<table width="100%">
    <!--注意每個功能的欄位顯示都不太一樣，要依題意做出調整-->
    <tr class="yel">
        <td width="80%"><?=$DB->header;?></td>
        <td width="10%">顯示</td>
        <td width="10%">刪除</td>
    </tr>
    <?php
        $rows=$DB->all();
        foreach($rows as $row){
            $checked=($row['sh']==1)?'checked':'';
    ?>
    <tr>
        <td>
            <input type="text" name="text[]" value="<?=$row['text'];?>" style="width:95%">
        </td>
        <td>
            <!--注意這個功能的顯示是可以多選的，所以type要改為checkbox，同時name屬性要加上陣列-->
            <input type="checkbox" name="sh[]" value="<?=$row['id'];?>" $checked; >
        </td>
        <td>
            <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
            <input type="hidden" name="id[]" value="<?=$row['id'];?>">
        </td>
    </tr>
    <?php
     } 
     ?>
</table>
   