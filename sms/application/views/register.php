<head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script></head>
<body>
<form id="phone_validate" action="<?= base_url(); ?>index.php/Register_C/Phone_Login" method="post">

   <div  class="form-group">
    <table class="form-group">

        <h1>注册账号</h1>
        <tr>
            <td>Phone :</td>
            <td><input type="text" name="phone" id="phone" required></td>
        </tr>
        <tr>
            <td>Code :</td>
            <td>
                <input type="text" name="code" id="code"></td>
            <td><a name="add" class="btn btn-default" id="phone_validation">免费发送验证码</a></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" id="pass"></td>
        </tr>
        <tr>
            <td><a href="<?= base_url(); ?>index.php/welcome">有账号？</a></td>
        </tr>

    </table>
   </div>
</form>
</body>
<script type="text/javascript">
    $(document).on('click','#phone_validation', function(e){
        e.preventDefault();
        let phone = $("#phone").val();
        $.post("../index.php/Register_C/add_phone",
            {
                phone: phone
            }, function (response) {
            });
    });


    /*function validate(){

     var  = document.getElementById('phone').value;
     var xhttp = new XMLHttpRequest();
     var Data=[phone];
     xhttp.onreadystatechange = function() {
     if (this.readyState == 4 && this.status == 200) {
     // Typical action to be performed when the document is ready:
     var message = xmlhttp.responseText;
     if (message == "password sucess")
     {
     alert("成功";)
     var wait=120;
     function time(o) {
     if (wait == 0) {
     o.removeAttribute("disabled");
     o.value="免费获取验证码";
     wait = 60;
     } else {

     o.setAttribute("disabled", true);
     o.value=wait+"秒后可以重新发送";
     wait--;
     setTimeout(function() {
     time(o)
     },
     1000)
     }
     }
     document.getElementById("btn").onclick=function(){time(this);
     }else
     {
     var wait=60;
     function time(o) {
     if (wait == 0) {
     o.removeAttribute("disabled");
     o.value="免费获取验证码";
     wait = 60;
     } else {

     o.setAttribute("disabled", true);
     o.value=wait+"秒后可以重新发送";
     wait--;
     setTimeout(function() {
     time(o)
     },
     1000)
     }
     }
     document.getElementById("btn").onclick=function(){time(this);
     }

     }
     };

     }
     }*/



</script>
