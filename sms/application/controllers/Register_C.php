<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_C extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //load the required helpers and libraries


        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('Phone_M');
        $this->load->model('Login_M');
    }

    public function index()
    {
        $this->load->view('register');
    }

    public function add_phone()
    {

        $phone = $this->input->post('phone');
        $code = $this->input->post('code');


        $data = array(
            'phone' => $phone,
            'code' => rand(100000,999999),
            'created_date' => date('Y-m-d H:i:s')
        );

        $phone_data = $this->Phone_M->add($data);



        /*if ($phone_data){


            include_once "SMS.php";
            $Sms=new SMS();
            $Sms->Set('0926911696','1qaz2wsx',"http://api.message.net.tw");
            $Sms->Send($phone,$code);

        }else{

        }*/




    }

    public function Phone_Login()
    {
        //get the input fields from login form
        $phone = $this->input->post('phone');
        $code = $this->input->post('code');

        //send the code pass to query if the user is present or not
        $check_code = $this->Login_M->check_code($phone,$code);

        if ($check_code){

            $this->data['phone'] = $phone;
            $this->data['code'] = $code;
            $this->load->view('setpwd',$this->data);
        }else{
            echo "你输入的验证号错误";


        }}
    /*function validation{

        header('content-type:application/json');
        $Data = json_decode(file_get_contents('php://input'));
        $phone= $Data[0];
        $code='123';
        echo "Password.php success";

    }*/
}
