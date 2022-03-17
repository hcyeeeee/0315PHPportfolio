<div class="container">

<div class="col-12 d-flex bg-dark ">
                   <div class="col-2 text-light">
                id
                </div>
         
                <div class="col-2 mb-1">
                    <label for="name" class="form-label text-light">Name:</label>
                   
                </div>

                <div class="col-2 mb-1">
                    <label for="phone" class="form-label text-light">Phone:</label>
                   
                </div>

                <div class="col-2 mb-1">
                    <label for="email" class="form-label text-light">Email</label>
                   
                </div>

                <div class="col-2 mb-1">
                    <label for="comment" class="form-label text-light ">留言</label>
                    
                </div>
        </div>



<hr>

<?php
$rows = $Contact->all();
foreach ($rows as $row) {

    ?>
    
     <div class="col-12 d-flex">
                   <div class="col-2">
                   
                    <?=$row['id']?><br>
                </div>
         
                <div class="col-2 mb-1">
                    <?=$row['name']?><br>
                </div>

                <div class="col-2 mb-1">
                    <?=$row['phone']?>
                </div>

                <div class="col-2 mb-1">
                    <?=$row['email']?>
                </div>

                <div class="col-2 mb-1">
                    <?=$row['comment']?>
                </div>
        </div>

        <?php }?>

</div>





