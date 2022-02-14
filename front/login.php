    <!-- login -->

    <div class="container-fluid ">

<div class="login-bg"  >
        <div class="row">
            <div class="col col-12 d-flex justify-content-center mt-5">
                <img class="login" src="./img/login.png" height="130px"  width="200px" alt="">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col col-4">
                <div class="form-group d-flex">
                    <label for="account">Account</label>
                </div>
                <div>
                <input type="text" class="form-control" id="account" aria-describedby="emailHelp">
               
                </div>

                <div class="form-group d-block">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="Password">
                </div>
                <div class="form-group form-check mt-2 d-block">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">remember me</label>
                </div>
               <div>
                <a href="?do=login" class="btn btn-dark rounded mt-2">登入</a>
                <a href="?do=reg" class="btn btn-dark rounded mt-2">註冊</a>
              
                <a href="?do=forget">忘記密碼</a> | 
                <a href="?do=reg">尚未註冊</a>
</div>


<script>
function reset(){
    $("#acc,#pw").val("")
}

function login(){
    let user={
                acc:$("#acc").val(),
                pw:$("#pw").val(),
            }
    
    $.post("api/chk_acc.php",{acc:user.acc},(chk)=>{

        if(parseInt(chk)==0){

            alert("查無帳號")
            reset()

        }else{

            $.post("api/chk_pw.php",user,(chk)=>{

                if(parseInt(chk)==0){

                    alert("密碼錯誤")
                    reset()

                }else{

                    if(user.acc=='admin'){

                        location.href='back.php'

                    }else{

                        location.href="index.php"

                    }
                }
            })
        }
    })       
}</script>