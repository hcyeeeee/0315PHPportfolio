<div class="container">

    <table class="table">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th>Name:</th>
                <th>Phone:</th>
                <th>Email:</th>
                <th>留言</th>
                <th>管理</th>
            </tr>
        </thead>


        <?php
$rows = $Contact->all();
foreach ($rows as $row) {

    ?>
        <tbody>
            <tr>

                <td> <?=$row['id']?></td>
                <td><?=$row['name']?></td>
                <td> <?=$row['phone']?></td>
                <td> <?=$row['email']?></td>
                <td> <?=$row['comment']?></td>
                <td> <a class="btn btn-light" href="./api/del_contact.php?id=<?=$row['id']?>">刪除</a></td>
            </tr>
        </tbody>

        <?php }?>
</table>
</div>