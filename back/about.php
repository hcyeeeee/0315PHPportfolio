

<form action="./api/aboutme.php" method="post" enctype="multipart/form-data">
<div class="container-fluid" id="about">

<div class="row">
<div class="col col-12 d-flex justify-content-center align-items-center">
        <table>
                <thead>
                        <tr>
                            <th> 頭貼：</th><br>

                          
                            <th> 名字：</th>
                            <th> 信箱：</th>
                            <th> 電話：</th>
                            <th> 關於我：</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            <img src="./img/<?=$Aboutme->find(1)['img'];?>" width="100" height="100" style="border:3px solid black">
                           <br>
                        <input type="file" name="img" value="<?=$Aboutme->find(1)['img'];?>"></td>
                <input class="btn btn-dark" type="hidden" value="img" >
                        <td><input type="text" name="name" value="<?=$Aboutme->find(1)['name'];?>"></td>
                <td><input type="text" name="email" value="<?=$Aboutme->find(1)['email'];?>"></td>
                <td><input type="text" name="phone" value="<?=$Aboutme->find(1)['phone'];?>"></td>
                <td><input type="text" name="about" value="<?=$Aboutme->find(1)['about'];?>"></td>
                <td>
               <input type="submit" value="修改確定">
                <input type="reset" value="重置">
                        </td>
            </tr>     
                      
                     
                </tbody>

                </table>   


</div>
</div>
</form>


<div class="container-fluid" id="about">

    <div class="row">
        <div class="col col-12 d-flex justify-content-center align-items-center">
            <img src="./img/<?=$Aboutme->find(1)['img'];?>" class="d-flex " width="450" height="450" alt="about me">
        </div>
        <div class="col col-12 d-flex justify-content-center align-items-center">
            <p class="display-5"><em> - About me -</em></p>
        </div>

        <div class="col col-12 d-flex justify-content-center align-items-center">

             <p class="display-5">
                <i class="fas fa-envelope-square"></i>&nbsp;
                <i class="fab fa-github-square"></i>&nbsp;
                <i class="fab fa-behance-square"></i>&nbsp;
                <i class="fab fa-instagram-square"></i> &nbsp; 
                </p>
        </div>

    </div>
    <br><br>

    <div class="row">
        <div class="col col-12 d-flex justify-content-center align-items-center">
            <div class="col col-6 d-flex justify-content-center align-items-center">
                <h2 class="myname">
                    <?=$Aboutme->find(1)['name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </h2> &nbsp;
                <div class="col-6">
                    <?=$Aboutme->find(1)['about'];?>
                </div>
            </div>


        </div>

<!-- 


