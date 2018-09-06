<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://ajax.microsoft.com/ajax/jQuery/jquery-1.7.2.min.js"></script>
<!--<link rel="stylesheet" type="text/css" href="--><?//=base_url()?><!--css/setpwd.css">-->
<style>
    /*custom font*/
    @import url(https://fonts.googleapis.com/css?family=Montserrat);
    /*basic reset*/
    * {margin: 0; padding: 0;}
    html {
        height: 100%;
        background:
                linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));
    }
    body {
        font-family: montserrat, arial, verdana;
    }

    #pwd {
        width: 400px;
        margin: 50px auto;
        text-align: center;
        position: relative;
    }

    .high{color:green}
    .medium{color:yellow}
    .low{color:red}

    #pwd fieldset {
        background: white;
        border: 0 none;
        border-radius: 3px;
        box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
        padding: 20px 30px;
        box-sizing: border-box;
        width: 80%;
        margin: 0 10%;

        /*stacking fieldsets above each other*/
        position: relative;
    }
    /*Hide all except first fieldset*/
    #pwd fieldset:not(:first-of-type) {
        display: none;
    }
    /*inputs*/
    #pwd input, #pwd textarea {
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 13px;
    }
    /*buttons*/
    #pwd .action-button {
        width: 100px;
        background: #27AE60;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 1px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }
    #pwd .action-button:hover, #pwd .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
    }
    /*headings*/
    .fs-title {
        font-size: 15px;
        text-transform: uppercase;
        color: #2C3E50;
        margin-bottom: 10px;
    }
    .fs-subtitle {
        font-weight: normal;
        font-size: 13px;
        color: #666;
        margin-bottom: 20px;
    }
    /*progressbar*/
    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        /*CSS counters to number the steps*/
        counter-reset: step;
    }
    #progressbar li {
        list-style-type: none;
        color: white;
        text-transform: uppercase;
        font-size: 9px;
        width: 33.33%;
        float: left;
        position: relative;
    }
    #progressbar li:before {
        content: counter(step);
        counter-increment: step;
        width: 20px;
        line-height: 20px;
        display: block;
        font-size: 10px;
        color: #333;
        background: white;
        border-radius: 3px;
        margin: 0 auto 5px auto;
    }
    /*progressbar connectors*/
    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: white;
        position: absolute;
        left: -50%;
        top: 9px;
        z-index: -1; /*put it behind the numbers*/
    }
    #progressbar li:first-child:after {
        /*connector not needed before the first step*/
        content: none;
    }
    /*marking active/completed steps green*/
    /*The number of the step and the connector before it = green*/
    #progressbar li.active:before,  #progressbar li.active:after{
        background: #27AE60;
        color: white;
    }

</style>
<body>
<form  id="pwd" method="post" action="<?= base_url(); ?>index.php/Setpwd_C/add_users">
    <ul id="progressbar">
        <li class="active">申请账户</li>
        <li class="active">设定密码</li>
        <li>完成</li>
    </ul>
    <fieldset>
        <h2 class="fs-title">设置账号</h2>
        <h3 class="fs-subtitle">第二步</h3>
        <input type="text" name="username" id="user_name" required placeholder="用户名字">
        <input type="text" name="password" id="password" required maxlength="8" onkeyup="showStrength(this.value)"
               required placeholder="密码">
        <span id="passwordStrength"></span><br/>
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" name="submit" id="set" class="next action-button">
        <input type="hidden" name="phone" id="phone" value="<?=$phone?>" >
    </fieldset>
    <fieldset>
        <h2 class="fs-title">注册成功</h2>
        <h3 class="fs-subtitle">现在可以开始登入你的账号</h3>

        <a href="<?= base_url(); ?>welcome">有账号？</a>
    </fieldset>

</form>
<script>
    function getPasswordStrength(password){
        var strength=0;
        $([/.{6,}/,/[0-9]+/,/[a-z]+/,/[A-Z]+/,/[^0-9a-zA-Z]+/]).each(function(i,o){
            if(o.test(password)) strength++;
        });
        return strength;
    }

    function showStrength(password) {
        var strength = getPasswordStrength(password);
        var status = strength < 3 ? 'low' : (strength < 5 ? 'medium' : 'high');
        var desc = strength < 3 ? '强度很低' : (strength < 5 ? '中等强度' : '高强度');
        $('#passwordStrength').attr('class',status).html(desc);

    }

    </script>
