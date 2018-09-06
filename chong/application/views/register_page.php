<head>
    <meta charset="UTF-8">
<!--    <script src="--><?//= base_url() ?><!--js/regiser.js"></script>-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/register.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

</head>

<body>

<form id="phone_validate" action="<?=base_url();?>register/Phone_Login" method="post">
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active">申请账户</li>
        <li>设定密码</li>
        <li>完成</li>
    </ul>

    <fieldset>
        <h2 class="fs-title">注册账号</h2>
        <h3 class="fs-subtitle">第一步</h3>
        <input type="text" name="phone" id="phone" required placeholder="手机号码">
        <input type="text" name="code" id="code" placeholder="输入验证号">
        <input type="button" class="btn btn-default" id="phone_validation" onclick="Send()" value="免费发送验证码" >
        <input type="submit" name="submit" id="pass" class="next action-button" value="下一步">

        <a href="<?= base_url(); ?>welcome">有账号？</a>

    </fieldset>

</form>
</body>
<script type="text/javascript">


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
