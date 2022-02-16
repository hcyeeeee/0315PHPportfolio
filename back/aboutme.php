<div class="container">
<form action="api/aboutme.php?main=<?=$_GET['id'];?>" 
      method="post" 
     enctype="multipart/form-data">
               
               <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>關於我</th>
                            <th>個人資料</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>about</th>
                        </tr>
                       

                    </thead>
                    <tbody>
                        <tr>
                        <td><input type="text" name="name[]" value="<?=$Aboutme['name'];?>"></td>
                        <td><input type="text" name="name[]" value="<?=$Aboutme['name'];?>"></td>
                        <td><input type="text" name="name[]" value="<?=$Aboutme['name'];?>"></td>
                        <td><input type="text" name="name[]" value="<?=$Aboutme['name'];?>"></td>
                        <td><input type="text" name="name[]" value="<?=$Aboutme['name'];?>"></td>
                        </tr>
                        


                        
                    </tbody>
                </table>
            </div>