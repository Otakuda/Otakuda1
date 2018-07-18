<?php

/**
 * Created by PhpStorm.
 * User: 張柏榆
 * Date: 2018/5/20
 * Time: 下午 09:41
 */

class SMS
{
    protected $_ID;
    protected $_Password;
    protected $_url;

    private function  Set_ID($ID)
   {
      $this->_ID=$ID;
   }
   public  function  Get_ID()
   {
       return $this->_ID;
   }
   private function Set_Password($Password)
   {
       $this->_Password=$Password;
   }
   private function  Set_url($url)
   {
       $this->_url=$url;
   }
   public function Set($ID,$Password,$url)
   {
       $this->Set_ID($ID);
       $this->Set_Password($Password);
       $this->Set_url($url);
   }

   public function  Send($phone,$content)
  {
      $string=sprintf("http://api.message.net.tw/send.php?id=%s&Password.php=%s&tel=%s&msg=%s&mtype=p&encoding=%s",
          $this->_ID,$this->_Password,$phone,$content,'utf8');
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $string);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_POST, 1);
      echo $result = curl_exec($ch);
  }

}