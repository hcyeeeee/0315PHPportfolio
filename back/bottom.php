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
                
                <th> <textarea row="6" type="text" class="form-control"  name="bottom" value="<?=$Bottom->find(1)['bottom'];?>"></textarea></th>
            </tr>

            <td class="cent">
                <input type="submit" value="修改確定">
                <input type="reset" value="重置">
            </td>
        </table>
    </form>
</div>