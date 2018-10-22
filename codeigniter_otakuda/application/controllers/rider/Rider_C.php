<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rider_C extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //load the required helpers and libraries

        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->database();
        $this->load->model('rider_M');
    }

    public function index()
    {
        $this->load->view('driver/rider_register');

    }

    public function rider_login()
    {
        $rider_email = $this->input->post('rider_email');
        $rider_password = md5($this->input->post('rider_password'));

        $rider_login = $this->rider_M->rider_login($rider_email, $rider_password);

        if ($rider_login == TRUE) {

            $data = $this->rider_M->display_rider_detail($rider_email);

            $riderdata = array(

                'rider_name' => $data[0]['rider_name'],
                'rider_email' => $data[0]['rider_email'],
                'logged_in' => TRUE,
                'rider_id' => $data[0]['rider_id'],
                'rider_nric' => $data[0]['rider_nric'],
                'phone' => $data[0]['phone'],

            );
            $this->session->set_userdata($riderdata);

            redirect(base_url() . 'rider/Driver_index');
        } else {

            echo "<script type=\"text/javascript\">
                   alert(\"Name Available\");
                   </script>";

            redirect(base_url() . 'rider/driver_login');
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
            'rider_name' => $rider_name,
            'rider_email' => $rider_email,
            'rider_password' => md5($rider_password),
            'rider_nric' => $rider_nric,
            'created_date' => date('Y-m-d H:i:s'),
            'days' => $days,
            'month' => $month,
            'year' => $year,
            'phone' => $phone,
            'area' => $area,
            'city' => $city,
            'address1' => $address1,
            'address2' => $address2,
            'address3' => $address3,
            'zip' => $zip,
            'state' => $state,
            'gender' => $gender,
            'race' => $race,
            'religion' => $religion,
            'driving_licence' => $driving_licence,
            'driving_licence_class' => $driving_licence_class

        );
        $rider_detail = $this->rider_M->add_rider($data);

        $rate=array(
            'rider_id'=>$rider_detail,
            'rate_mark'=>'0',
            'number_of_times'=>'0'
        );
        $rider_rate=$this->rider_M->add_rate($rate);

        $Iphoto = $this->input->post('ic_img');
        $ic_photo = explode(",", $Iphoto);

        if (!empty($ic_photo)) {
            foreach ($ic_photo as $ic) {
                $ic_name = 'IcAndLessen_image_' . $rider_detail . "_" . rand(9999, 999999) . '_' . date('Ymd_His');
                $ic_name_mime_type = substr($ic, (strpos($ic, '.') ?: -1) + 1);
                $ic_folder = "ic_image/";
                $ic_image = $ic_folder . $ic_name . '.' . $ic_name_mime_type;
                $icDataPhoto = array(
                    'rider_id' => $rider_detail,
                    'ic_photo' => $ic_image
                );
                $photoIc = $this->rider_M->add_icPhoto($icDataPhoto);
                $ic_temp_file = "temp_lic/" . $ic;
                rename($ic_temp_file, $ic_image);
            }
        }

//        $Lphoto = $this->input->post('lessen_img');
//        $lessen_photo = explode(",", $Lphoto);
//
//        if (!empty($lessen_photo)) {
//            foreach ($lessen_photo as $lessen) {
//                $lessen_name = 'lessen_image_' . $rider_detail . "_" . rand(9999, 999999) . '_' . date('Ymd_His');
//                $lessen_name_mime_type = substr($lessen, (strpos($lessen, '.') ?: -1) + 1);
//                $lessen_folder = "lessen_image/";
//                $lessen_image = $lessen_folder . $lessen_name . '.' . $lessen_name_mime_type;
//                $lessenDataPhoto = array(
//                    'rider_id' => $rider_detail,
//                    'lessen_photo' => $lessen_image
//                );
//                $photoLessen = $this->rider_M->add_lessenPhoto($lessenDataPhoto);
//                $lessen_temp_file = "temp_lic/" . $lessen;
//                rename($lessen_temp_file, $lessen_image);
//            }
//        }
        echo '<script language="javascript">';
        echo 'alert("注册成功，我们会在3-5天内联络你")';  //not showing an alert box.
        echo '</script>';
        redirect('rider/driver_login');

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

    public function upload()
    {
        if (!empty($_FILES)) {
            $config["upload_path"] = "temp_lic";
            $config["allowed_types"] = "gif|jpg|png|jpeg";
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload("file")) {
                echo "failed to upload file(s)";
            } else {
                echo $_FILES['file']['name'];
            }
        }
    }

    public function remove()
    {
        $file = $this->input->post("file");
        if ($file && file_exists("temp_lic" . "/" . $file)) {
            unlink("temp_lic" . "/" . $file);
        }
    }
}
