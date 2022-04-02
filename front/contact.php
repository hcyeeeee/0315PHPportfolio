<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-5">
            <br>
            <br>
            <br>
            <br>
            <h1 class="display-1"><em>contact me </em></h1>
            <p>
            <h5>Currently seeking new opportunities;

            </h5>

            <h5>Phone:0
                <?=$Aboutme->find(1)['phone'];?>
            </h5>
            <h5>Email:
                <?=$Aboutme->find(1)['email'];?>
            </h5>
        </div>


        <div class="col-5">
            <div><br><br><br><br></div>
            <form action="./api/contact.php" method="post" >

                <div class="col-10 mb-1">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="col-10 mb-1">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone">
                </div>

                <div class="col-10 mb-1">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>

                <div class="col-10 mb-1">
                    <label for="comment" class="form-label ">留言</label>
                    <textarea row="6" type="text" class="form-control" name="comment" id="comment" placeholder="留下些什麼．．．"></textarea>
                </div>


                <div class="col-5 mb-5 mt-3">
                    <button type="submit" class="btn btn-dark">送出</button>
                </div>
            </form>
        </div>



    </div>
</div>
