<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Index</title>

</head>
<body>
<?php echo form_open('Welcome/add_phone');?>
<table>
    <tr>
        <td>Phone :</td>
        <td><input type="text" name="phone" required></td>
    </tr>
    <tr>
        <td>Code :</td>
        <td><input type="text" name="recode">
            <input type="hidden" name="code" value="<?php  echo(rand(000000,999999));?>" ></td>
        <td><input type="submit" name="add" value="免费发送验证码" id="" /></td>
    </tr>
    <input type="submit" name="submit" action="<?= base_url(); ?>Welcome/doLogin">
</table>

<script type="text/javascript">


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
    document.getElementById("btn").onclick=function(){time(this);}
</script>
</body>
</html>