<div class="container">
    <form method="post" action="./api/aboutme.php">

<h2>作品管理</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>圖片</th>
                    <th>描述</th>
                    <th>上架</th>
                    <th>管理</th>
                </tr>

            </thead>
            <tr>

                <th><input type="text" name="name" value="<?=$Aboutme->find(1)['name'];?>"></th>
                <th><input type="text" name="email" value="<?=$Aboutme->find(1)['email'];?>"></th>
                <th><input type="text" name="phone" value="<?=$Aboutme->find(1)['phone'];?>"></th>
                <th><input type="text" name="about" value="<?=$Aboutme->find(1)['about'];?>"></th>

            </tr>

            <td class="cent">
                <input type="submit" value="修改確定">
                <input type="reset" value="重置">
            </td>
    </form>
</div>