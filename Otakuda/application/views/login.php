<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../../javascript/jquery.min.js"></script>
<link rel="stylesheet" href="../../bootstrap-3.3.6-dist/css/bootstrap.min.css">
<script src="../../bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<style>
body, html {
    height: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
}

.card-container.card {
    max-width: 350px;
    padding: 40px 40px;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * Card component
 */
.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btn.btn-signin {
    /*background-color: #4d90fe; */
    background-color: rgb(104, 145, 162);
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
    background-color: rgb(12, 97, 33);
}

.forgot-password {
    color: rgb(104, 145, 162);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(12, 97, 33);
}
</style>

<title><? echo $this->lang->line('title');?></title>
</head>

<body onload="Idle();">
    <? 
        $number=0;
        $array=$this->session->all_userdata();
        foreach ($array as $key => $value)
        {
            if($key=='Language')
            {
                $number++;
            }
        }

        if($number>0)
        {
            $Data=$this->session->userdata('Language');
            $html=<<<end_html
            <input type="hidden" id="Language_type" value="$Data">
end_html;
        }
        else
        {
            $html=<<<end_html
            <input type="hidden" id="Language_type" value="zh">
end_html;
        }
        echo $html;   
    ?>
<div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="../../images/avatar_2x.png" />
          <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post" action="../?/user/login">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" class="form-control" placeholder="ID" name="ID" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="Password" required>
                
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit"><? echo $this->lang->line('login');?></button>
                <select id="Language" class="selectpicker" onchange="Change_Language();">
                 <optgroup label="Language">
                 <option value='zh'>简体</option>
                 <option value='zn'>繁體</option>
                 <option value='en'>English</option>
                 </optgroup>
             </select>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>
<script type="text/javascript">
function Change_Language()
{
    var Language=document.getElementById('Language').value;
    var xmlhttp = new XMLHttpRequest();//傳送資料
                xmlhttp.onreadystatechange = function()
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                      {
                        var message=xmlhttp.responseText;
                        //
                        if(message=='zh')
                        {
                            document.getElementById('Language').selectedIndex=0;
                        }
                        else if(message=='zn')
                        {
                            document.getElementById('Language').selectedIndex=1;
                        }
                        else
                        {
                            document.getElementById('Language').selectedIndex=2;
                        }
                       window.location.href="../?/User";
                                                                 
                      }
                    };
    var url="../index.php/user/Language";
    xmlhttp.open("post", url, true);
    xmlhttp.send(Language);
}
function Idle()
{
    var Language_type= document.getElementById('Language_type').value;
    if(Language_type=='zh')
    {
        document.getElementById('Language').selectedIndex=0;
    }
    else if(Language_type=='zn')
    {
        document.getElementById('Language').selectedIndex=1;
    }
    else
    {
        document.getElementById('Language').selectedIndex=2;
    }
    
}

</script>