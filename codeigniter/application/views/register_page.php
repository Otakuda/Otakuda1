<head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" >
</head>
<body>
<form id="phone_validate" action="<?= base_url(); ?>Register/Phone_Login" method="post">

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
                <td><input type="button" class="btn btn-default" id="phone_validation" onclick="Send()" value="免费发送验证码" ></td>
                <!--            <td>-->
                <!--                <input type="text" id="chance" value="0"></td>-->
            </tr>
            <tr>
                <td><input type="submit" name="submit" id="pass"></td>
            </tr>
            <tr>
                <td><a href="<?= base_url(); ?>welcome">有账号？</a></td>
            </tr>

        </table>
    </div>
</form>
</body>
<script type="text/javascript">
    //    $(document).on('click','#phone_validation', function(e){
    //        e.preventDefault();
    //        let phone = $("#phone").val();
    //
    //        $.post("../index.php/Register_C/add_phone",
    //            {
    //                phone: phone
    //
    //            }, function (response) {
    //            let data = jQuery.parseJSON(response);
    //               if(data['status'] == "fail"){
    //
    //               } else {
    //
    //               }
    //            });
    //    });

    function Send()/*  search database from server*/
    {

        var phone = document.getElementById("phone").value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {

            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                SetTime();

            }

        };
        xmlhttp.open("Post", "Register/add_phone", true);
        xmlhttp.send(phone);// JavaScript Document
    }
    function SetTime(){

        var _that=document.getElementById("phone_validation");
        var count=2;
        var timer=null;
        _that.disabled=true;
        _that.value="还剩"+count+"秒才发送";
        timer=setInterval(function(){
            if(count>0){
                count=count-1;
                _that.value="还剩"+count+"秒才发送";
            }
            else{
                _that.disabled=false;
                _that.value="免费发送验证码";
                count=60;
                clearInterval(timer)
            }
        },1000)

    }

</script>
