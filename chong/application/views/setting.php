<style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}

        /* Button used to ppen the contact form - fixed at the bottom of the page */
        .open-button {
            background-color: #555;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            position: fixed;
            bottom: 23px;
            right: 28px;
            width: 280px;
        }

        /* The popup form - hidden by default */
        .form-popup {
            display: none;
            position: fixed;
            bottom: 0;
            right: 15px;
            border: 3px solid #f1f1f1;
            z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }

        /* Full-width input fields */
        .form-container input[type=text], .form-container input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

        /* When the inputs get focus, do something */
        .form-container input[type=text]:focus, .form-container input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit/login button */
        .form-container .btn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom:10px;
            opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
            background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover, .open-button:hover {
            opacity: 1;
        }
    </style>

</head>

<div id="react">
    <div class="page index" data-reactroot="">
        <div class="setting-container">
            <div class="clearfix">
                <div style="float:left">
                    <div class="orders-link-box">
                        <div class="link-group">
                            <p class="title"><a href="<?= base_url(); ?>information">我的状态</a></p>
                            <p class="title"><a href="">我的订单</a></p>
                            <ul class="link-ul">
                                <li><a href="">全部订单</a><i class="icon-right"></i></li>
                                <li><a href="">待付款</a><i class="icon-right"></i></li>
                                <li><a href="2">待使用</a><i class="icon-right"></i></li>
                                <li><a href="">待评价</a><i class="icon-right"></i></li>
                                <li><a href="">退款/售后</a><i class="icon-right"></i></li></ul></div>
                        <div class="link-group">
                            <p class="title"><a href="">我的收藏</a></p>
                            <ul class="link-ul">
                                <li><a href="">收藏的商家</a><span class="num"></span></li></ul></div>
                        <div class="link-group">
                            <p class="title"><a href="">我的评价</a></p>
                            <ul class="link-ul">
                                <li><a href="">待评价</a><span class="num"></span><i class="icon-right"></i></li>
                                <li><a href="">已评价</a><span class="num"></span><i class="icon-right"></i></li></ul></div>
                        <div class="link-group">
                            <p class="title"><a href="">个人信息</a></p>
                            <ul class="link-ul">
                                <li>
                                    <a href="">账户设置</a>
                                    <span class="num"></span>
                                    <i class="icon-right"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="download-app">
                        <div class="qrcode-box">
                            <img src="//s1.meituan.net/bs/fe-web-meituan/60ac9a0/img/download-qr.png" alt="下载APP">
                            <p class="app-name">APP手机版</p>
                            <p class="sl">
                                <span class="red">1元起</span>
                                <span class="gary">吃喝玩乐</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="setting-content">
                    <div class="head">
                        <p class="title">个人信息</p>
                        <p class="des">账户设置</p></div>
                    <div class="item clearfix">
                        <div class="field-name">
                            <span>头像</span></div>
                        <div class="field-value">
                            <img src="" alt="" class="head-img"></div>
                        <div class="upload-container">
                            <div class="btn-upload">
                                <button class="btn-change">修改</button>
                                <input type="file" accept="image/*" name="" class="ipt-file">
                                <div class="dialog-container fadeOut">
                                    <div class="dialog-box">
                                        <div class="dialog-head clearfix">

                                            <p class="dialog-close">
                                                <img src="" alt=""></p></div>
                                        <div class="dialog-body">
                                            <div class="clip-board-container clearfix">
                                                <div class="clip-board" style="width:300px;height:300px">
                                                    <div class="clip-content">
                                                        <div class="complete">
                                                            <div></div></div>
                                                    </div>
                                                    <canvas class="clip-end-preview" width="400" height="400"></canvas></div>
                                                <canvas class="clipped-img"></canvas></div></div>
                                    </div></div></div></div></div>
                    <div class="item clearfix">
                        <div class="field-name">
                            <span>昵称</span>
                        </div>
                        <div class="field-value">
                            <span class="value"><?php echo $this->session->userdata('username') ?></span></div>

                        <button class="btn-change change-birthday" onclick="openForm()"  value="修改">修改</button>

                        <div class="form-popup" id="myForm">
                            <form action="<?= base_url(); ?>Setting/update_user_name" method="post">
                               <h2>更改名字</h2>
                                <input type="hidden" id="user_id" name="user_id" value="<?php echo $this->session->userdata('user_id') ?>"/>
                                <input type="text" id="edit_name" name="edit_name"/>

                                <input type="submit" name="submit" id="edit" class="btn-change change-nickname"
                                />
                            </form> <button  class="btn cancel" onclick="closeForm()">Close</button>
                        </div>
                    </div>
                    <div class="item clearfix">
                        <div class="field-name">
                            <span>生日</span></div>
                        <div class="field-value">
                            <span class="value">您还没有设置生日</span></div>
                        <button class="btn-change change-birthday">修改</button></div>
                    <div class="item clearfix">
                        <div class="field-name">
                            <span>手机号码</span>
                        </div>
                        <div class="field-value">
                            <br/>
                            <span class="value"><?php echo $this->session->userdata('phone') ?></span></div>

                        <button class="btn-change change-birthday" onclick="openForm()"  value="换绑">换绑</button>
                        <form action="<?= base_url(); ?>Setting/update_phone_number" method="post">
                            <input type="hidden" id="phone" name="phone"
                                   value="<?php echo $this->session->userdata('phone') ?>"/>
                            <input type="text" id="edit_phone" name="edit_phone"/>

                            <input type="submit" name="edit_phonenum" id="edit_phonenum" class="btn-change change-nickname"
                            />
                            </form>
                        </div>
                    </div>

                    <div class="item clearfix">
                        <div class="field-name">
                            <span>登录密码</span></div>
                        <div class="field-value">
                            <span class="value">安全强度：弱</span></div>
                        <button class="btn-change change-pwd">修改</button>
                    </div>
                </div>
        </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>


<link rel="stylesheet" type="text/css" href="../css/com_footer1.css">
<footer class="com-footer">
    <div class="footer-content">
        <div class="footer-link clearfix">
            <div class="footer-column">
                <dl>
                    <dt>用户帮助</dt>
                    <dd><a rel="nofollow" href="" target="_blank">我们承诺</a></dd>
                    <dd><a rel="nofollow" href="" target="_blank">购物保障</a></dd>
                    <dd><a rel="nofollow" href="" target="_blank">申请退款</a></dd>
                    <dd><a rel="nofollow" href="" target="_blank">查看密码</a></dd>
                    <dd><a rel="nofollow" href="" target="_blank">常见问题</a></dd>
                    <dd><a rel="nofollow" href="" target="_blank">用户协议</a></dd>
                    <dd><a rel="nofollow" href="" target="_blank">隐私政策</a></dd>
                    <dd> <a rel="nofollow" href="" target="_blank">反诈骗公告</a></dd></dl></div>
            <div class="footer-column">
                <dl>
                    <dt>商家合作</dt>
                    <dd><a rel="nofollow" href="" target="_blank">美食商家入驻(非外卖)</a></dd>
                    <dd><a href="" target="_blank">外卖开店申请</a></dd>
                    <dd><a rel="nofollow" href="" target="_blank">酒店商家入驻</a></dd>
                    <dd><a rel="nofollow" href="" target="_blank">境内度假商家入驻</a></dd></dl></div>

            <div class="footer-column">
                <dl>
                    <dt>消费者服务热线</dt>
                    <dd>外卖消费者： <a rel="nofollow" href="tel:10109777" target="_blank">xxxxxx</a></dd><dd>猫眼消费者： <a rel="nofollow" href="tel:10105335" target="_blank">xxxxxx</a></dd><dd>其他消费者： <a rel="nofollow" href="tel:10107888" target="_blank">xxxxxx</a></dd></dl>
            </div>
        </div>
    </div>
    </div>
</footer>
</body>
</html>
<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>
