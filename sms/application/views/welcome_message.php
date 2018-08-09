<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<form  method="post" action="<?= base_url(); ?>index.php/Welcome/doLogin" >
<main id="main">
    <section id="left">
        <div id="head">
            <h1>登入页面</h1>
            <p>简单，容易，快速</p>
        </div>

    </section>
    <section id="right">
        <h1>登入账号</h1>
        <form action="#">
            <div id="form-card" class="form-field">
                <label for="cc-number">Phone :</label>
               <input type="text" name="phone" id="phone " required>
            </div>



            <div id="form-sec-code" class="form-field">
                <label for="sec-code">Password :</label>
                <input type="text" name="password" id="password" required>
            </div>

            <input type="submit" name="submit" id="login">
            <a href="<?= base_url() ?>index.php/Register_C">没账号？</a>
    </section>
</main>

</form>
</body>