<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rider_C extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        //load the required helpers and libraries

        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();
        $this->load->model('rider_M');
        $this->load->model('pic_model');
    }

    public function index()
    {
        $this->load->view('driver/rider_register');

    }
    public function rider_login()
    {
        $rider_email = $this->input->post('rider_email');
        $rider_password =  ($this->input->post('rider_password'));

        $rider_login = $this->rider_M->rider_login($rider_email, $rider_password);

        if ($rider_login== TRUE)
          {

                $data = $this->rider_M->display_rider_detail($rider_email);

                $riderdata = array(

                    'rider_name' => $data[0]['rider_name'],
                    'rider_email' => $data[0]['rider_email'],
                    'logged_in' =>TRUE,
                    'rider_id'=>$data[0]['rider_id'],
                    'rider_nric' => $data[0]['rider_nric'],
                    'phone' => $data[0]['phone'],

                );
                $this->session->set_userdata($riderdata);

              redirect(base_url().'rider/Driver_index');
          }else{

            echo "<script type=\"text/javascript\">
                   alert(\"Name Available\");
                   </script>";

            redirect(base_url().'rider/welcome');
        }
    }

    public function add_rider()
    {

        $rider_name = $this->input->post('rider_name');
        $rider_email = $this->input->post('rider_email');
        $rider_password = $this->input->post('rider_password');



            $this->data['rider_name'] = $rider_name;
            $this->data['rider_email'] = $rider_email;
            $this->data['rider_password'] = $rider_password;


            $this->load->view('driver/quiz_game', $this->data);

        }


    public function add_rider_cont()
    {
        $rider_name = $this->input->post('rider_name');
        $rider_email = $this->input->post('rider_email');
        $rider_password = $this->input->post('rider_password');
        $rider_nric = $this->input->post('rider_nric');
        $days = $this->input->post('days');
        $month = $this->input->post('month');
        $year = $this->input->post('year');
        $phone = $this->input->post('phone');
        $area = $this->input->post('area');
        $city = $this->input->post('city');
        $address1 = $this->input->post('address1');
        $address2 = $this->input->post('address2');
        $address3 = $this->input->post('address3');
        $zip = $this->input->post('zip');
        $state = $this->input->post('state');
        $gender = $this->input->post('gender');
        $race = $this->input->post('race');
        $religion = $this->input->post('religion');
        $driving_licence = $this->input->post('driving_licence');
        $driving_licence_class = $this->input->post('driving_licence_class');

        $data = array(
            'rider_name'=> $rider_name,
            'rider_email'=> $rider_email,
            'rider_password'=> md5($rider_password),
            'rider_nric'=> $rider_nric,
            'days'=> $days,
            'month'=> $month,
            'year'=> $year,
            'phone'=> $phone,
            'area'=> $area,
            'city'=> $city,
            'address1'=> $address1,
            'address2'=> $address2,
            'address3'=> $address3,
            'zip'=> $zip,
            'state'=> $state,
            'gender'=> $gender,
            'race'=> $race,
            'religion'=> $religion,
            'driving_licence'=> $driving_licence,
            'driving_licence_class'=> $driving_licence_class

        );

        $this->rider_M->add_rider($data);
        //set file upload settings
        $config['upload_path']          = APPPATH. '../assets/uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('pic_nric') &&  $this->upload->do_upload('pic_lesen')){
            $error = array('error' => $this->upload->display_errors());
            echo '<script language="javascript">';
            echo 'alert("必须放照片")';  //not showing an alert box.
            echo '</script>';


        }else{

            //file is uploaded successfully
            //now get the file uploaded data
            $upload_data = $this->upload->data();

            //get the uploaded file name
            $data['pic_nric'] = $upload_data['file_name'];
            $data['pic_lesen'] = $upload_data['file_name'];
            //store pic data to the db
            $this->pic_model->store_pic_data($data);

            echo '<script language="javascript">';
            echo 'alert("注册成功，我们会在3-5天内联络你")';  //not showing an alert box.
            echo '</script>';



        }

    }




    public function start_read()
    {
        $rider_name = $this->input->post('rider_name');
        $rider_email = $this->input->post('rider_email');
        $rider_password = $this->input->post('rider_password');



        $this->data['rider_name'] = $rider_name;
        $this->data['rider_email'] = $rider_email;
        $this->data['rider_password'] = $rider_password;

        $this->load->view('driver/testing', $this->data);
    }

    public function finish_read()
    {
        $rider_name = $this->input->post('rider_name');
        $rider_email = $this->input->post('rider_email');
        $rider_password = $this->input->post('rider_password');



        $this->data['rider_name'] = $rider_name;
        $this->data['rider_email'] = $rider_email;
        $this->data['rider_password'] = $rider_password;

        $this->load->view('driver/quiz_game', $this->data);

    }

    public function rider_next()
    {
        $rider_name = $this->input->post('rider_name');
        $rider_email = $this->input->post('rider_email');
        $rider_password = $this->input->post('rider_password');



        $this->data['rider_name'] = $rider_name;
        $this->data['rider_email'] = $rider_email;
        $this->data['rider_password'] = $rider_password;

        $this->load->view('driver/rider_register_cont', $this->data);
    }





}
