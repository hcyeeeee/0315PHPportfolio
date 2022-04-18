<link rel="stylesheet" href="./css/newstyle.css">
<div class="container" id="contact">
    <div class="row d-flex justify-content-center">
        <div class="col-md-5  ">
        <div><br><br><br></div>
            <h1 class="display-1"><em>contact me </em></h1>
            <p>
            <h5>Currently seeking new opportunities for web design
                <br>
                Please leave your message or contact me by:
            </h5>
            <br>
            <h5>Phone:0<?=$Aboutme->find(1)['phone'];?></h5>
            <h5>Email:<?=$Aboutme->find(1)['email'];?></h5>
        </div>


        <div class=" col-md-5">
            <div><br><br><br></div>
            <form action="./api/contact.php" method="post">

                <div class=" mb-1">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class=" mb-1">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone">
                </div>

                <div class=" mb-1">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>

                <div class=" mb-1">
                    <label for="comment" class="form-label ">留言</label>
                    <textarea row="6" type="text" class="form-control" name="comment" id="comment"
                        placeholder="留下些什麼．．．"></textarea>
                </div>


                <div class=" mb-5 mt-3">
                    <button type="submit" class="btn btn-dark">送出</button>
                </div>
            </form>
        </div>
    </div>
</div>