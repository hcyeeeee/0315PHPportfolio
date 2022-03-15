<div class="container">
    <form method="post" action="./api/aboutme.php" enctype="multipart/form-data">

<h2>個人資料修改</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>名字</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>about</th>
                    <th>圖片上傳</th>
                </tr>

            </thead>
            <tr>

                <th><input type="text" name="name" value="<?=$Aboutme->find(1)['name'];?>"></th>
                <th><input type="text" name="email" value="<?=$Aboutme->find(1)['email'];?>"></th>
                <th><input type="text" name="phone" value="<?=$Aboutme->find(1)['phone'];?>"></th>
                <th><input type="text" name="about" value="<?=$Aboutme->find(1)['about'];?>"></th>
                <th><input type="file" name="img" value="<?=$Aboutme->find(1)['img'];?>"></th>

            </tr>

            <td class="cent">
                <input type="submit" value="修改確定">
                <input type="reset" value="重置">
            </td>
    </form>
</div>