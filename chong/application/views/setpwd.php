<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body>
<form  method="post" action="<?= base_url(); ?>index.php/Setpwd_C/add_users">
    <h1>填写资料</h1>
    <span> Name :</span>
    <input type="text" name="username" id="user_name" required>


    <span> Password :</span>
    <input type="text" name="password" id="password" required maxlength="8">
    <input type="submit" name="submit" id="set">

    <input type="hidden" name="phone" id="phone" value="<?=$phone?>">

</form>
