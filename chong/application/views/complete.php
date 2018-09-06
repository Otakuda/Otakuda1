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
<form id="phone_validate">
    <ul id="progressbar">
        <li class="active">申请账户</li>
        <li class="active">设定密码</li>
        <li class="active">完成</li>
    </ul>

    <fieldset>
    <h2 class="fs-title">注册成功</h2>
    <h3 class="fs-subtitle">现在可以开始登入你的账号</h3>
        <img src="<?= base_url() ?>images/check.png" alt="IMG" width="250vh" height="200vh"></img>
    <a href="<?= base_url() ?>login_page.php"> 返回登入</a>
</fieldset>
</form>
</body>
