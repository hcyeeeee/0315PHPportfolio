<h2 class="text-center font-weight-bold">註冊會員</h2>

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
            <td>確認密碼：</td>
            <td><input type="password"  name="pw2" id="pw2" ></td>
        </tr>
        <tr>
            <td>電子郵件：</td>
            <td><input type="text" name="email" id="email" ></td>
        </tr>
        <tr>
            <td>姓名：</td>
            <td><input type="text" name="name" id="name" ></td>
        </tr>
        
      
    </table>
    <div class='text-center'>
    <button onclick="reg()">註冊</button>
    <button onclick="reset()">重置</button> 
</div>



<script>
    function reset(){
    $("#acc,#pw,#pw2,#email").val("")
}

function reg(){
let regs={
        'acc':$("#acc").val(),
        'pw':$("#pw").val(),
        'pw2':$("#pw2").val(),
        'email':$("#email").val(),
        'name':$("#name").val(),
        }

if(regs.acc == '' || regs.pw=='' || regs.pw2=='' || regs.email=='' || regs.name==''){

    alert("不得空白")

}else{

    if(regs.pw!=regs.pw2){

        alert("密碼錯誤")

    }else{

        $.post('api/chk_acc.php',{acc:regs.acc},(chk)=>{

            if(parseInt(chk)==1){

                alert("帳號重覆")

            }else{
                
                delete regs.pw2;
                $.post('api/reg.php',regs,()=>{
                    alert("註冊完成，歡迎加入")
                    location.href='./login.php'
                })
            }
        })
    }
} 

}
</script>