<?php
/**
 * Created by PhpStorm.
 * User: 張柏榆
 * Date: 2018/5/20
 * Time: 下午 10:09
 */
include_once "SMS.php";



$Sms=new SMS();
$Sms->Set('0926911696','1qaz2wsx',"http://api.message.net.tw");
$Sms->Send('$phone','$code');