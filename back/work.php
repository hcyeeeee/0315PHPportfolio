<div class="container">


<form method="post"  action="api/edit.php?do=poedit">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="10%">作品縮圖</td>
                    <td width="10%">作品名稱</td>
                    <td width="10%">作品網址</td>
                    <td width="10%">網址</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                   
                </tr>
                                <tr>
                    <td width="45%">
                        <img src="./img/2ne1" style="width:100px;height:128px">
                    </td>
                    <td>
                        <input type="text" name="name[]" value="カレンダー">
                    </td>
                    <td>
                        <input type="text" name="href[]" value="http://220.128.133.15/s1100409/">
                    </td>
                    <td>
                        0
                    </td>
                    <td>
                        <input type="checkbox" name="sh[]" value="1" checked>
                    </td>
                    <td>
                        <input type="checkbox" name="del[]" value="1">

                        <input type="hidden" name="id[]" value="1">
                    </td>
                  

                </tr>
                            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px">
                        <input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/poedit.php?table=poedit&#39;)" 
                              value="新增作品">
                    </td>
                    <td class="cent">
                        
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
    </div>