<h2 class="text-center font-weight-bold">登入會員</h2>

    <table class='table m-auto w-auto'>
        <tr>
            <td>帳號：</td>
            <td><input type="text" name="acc" id="acc" ></td>
        </tr>
        <tr>
            <td>密碼：</td>
            <td><input type="password"  name="pw" id="pw" ></td>
        </tr>
        <tr>
            <td><input type="checkbox" class="form-check-input" id="exampleCheck1">
                   remember me
                </td>
           
        </tr>
        
     
    </table>
    <div class='text-center'>
   <button onclick="login()">登入</button>
   <button onclick="reset()">重置</button>
                <a href="?do=reg" >註冊</a>
                <a href="?do=forget">忘記密碼</a>
            </div>
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

                        location.href='back/index.php'

                    }else{

                        location.href="index.php"

                    }
                }
            })
        }
    })       
}</script>