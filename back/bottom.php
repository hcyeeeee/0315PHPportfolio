<div class="container">
    <form method="post" action="./api/bottom.php">

        <h2>頁尾版權修改</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>頁尾版權資料:</th>

                </tr>

            </thead>
            <tr>

                <th> <input type="text" name="bottom" value="<?=$Bottom->find(1)['bottom'];?>"></th>


            </tr>

            <td class="cent">
                <input type="submit" value="修改確定">
                <input type="reset" value="重置">
            </td>
    </form>
</div>