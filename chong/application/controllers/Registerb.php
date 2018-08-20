<?php

class Registerb extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //load the required helpers and libraries
        $this->load->helper('url');
        $this->load->library(['form_validation', 'session']);
        $this->load->database();

        //load our Register model here
        $this->load->model('RegisterbModel', 'registerb');
        $this->load->model('User_M');
    }

    //registration form page
    public function index()
    {

        $this->load->view('registerb_page');
    }

    //register validation and logic
    public function doRegister()
    {


        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $hphone = $this->input->post('hphone');
        $email = $this->input->post('email');
        $address = $this->input->post('address');
        $lat = $this->input->post('lat');
        $lng = $this->input->post('lng');
        $password = md5($this->input->post('password'));


        $data = array(
            'name' => $name,
            'phone' => $phone,
            'hphone' => $hphone,
            'email' => $email,
            'address' => $address,
            'lat' => $lat,
            'lng' => $lng,
            'password' => $password,
            'date_time' => date('Y-m-d H:i:s'),

        );
        $this->registerb->add_user($data);
        $this->User_M->update_shop_level($phone);

        $image_folder = "uploads/";
        $image_name = 'Shop_banner_' . (rand() * 5) . '_aaa';
        $config['file_name'] = $image_name;
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);

        if (isset($_FILES['shopPhoto']) && !empty($_FILES['shopPhoto']['name'])) {
            if (!$this->upload->do_upload('shopPhoto')) {
                $this->form_validation->set_message('shopPhoto', $this->upload->display_errors());
                return FALSE;
            } else {
                $image_data = $this->upload->data();
                $image_name_mime_type = substr($image_data['file_name'], (strpos($image_data['file_name'], '.') ?: -1) + 1);
                $data['file_name'] = $image_folder . $image_name . "." . $image_name_mime_type;
                $insert_data = $this->registerb->add_user($data);

                //if data inserted then set the success message and redirect to login page
                if ($insert_data) {
                    $this->load->view('header2');
                    $this->load->view('trader');


                    //if the above validation fails, redirect to register page
                    //with vaildation_errors();
                    if ($this->form_validation->run() == FALSE) {
                        //set the validation errors in flashdata (one time session)
                        $this->session->set_flashdata('errors', validation_errors());
                        redirect(base_url() . 'registerb');
                    } else {
                        //if not get the input values
                        $name = $this->input->post('name');
                        $phone = $this->input->post('phone');
                        $hphone = $this->input->post('hphone');
                        $email = $this->input->post('email');
                        $address = $this->input->post('address');
                        $lat = $this->input->post('lat');
                        $lng = $this->input->post('lng');
                        $password = md5($this->input->post('password'));


                        $data = [
                            'name' => $name, 'phone' => $phone, 'hphone' => $hphone, 'email' => $email, 'address' => $address,
                            'lat' => $lat, 'lng' => $lng, 'password' => $password,
                            'date_time' => date('Y-m-d H:i:s')
                        ];

                        $image_folder = "uploads/";
                        $image_name = 'Shop_banner_' . (rand() * 5) . '_aaa';
                        $config['file_name'] = $image_name;
                        $config['upload_path'] = './uploads/';
                        $config['allowed_types'] = 'gif|jpg|png|jpeg';
                        $this->load->library('upload', $config);

                        if (isset($_FILES['shopPhoto']) && !empty($_FILES['shopPhoto']['name'])) {
                            if (!$this->upload->do_upload('shopPhoto')) {
                                $this->form_validation->set_message('shopPhoto', $this->upload->display_errors());
                                return FALSE;
                            } else {
                                $image_data = $this->upload->data();
                                $image_name_mime_type = substr($image_data['file_name'], (strpos($image_data['file_name'], '.') ?: -1) + 1);
                                $data['file_name'] = $image_folder . $image_name . "." . $image_name_mime_type;
                                $insert_data = $this->registerb->add_user($data);

                                //if data inserted then set the success message and redirect to login page
                                if ($insert_data) {
                                    $this->session->set_flashdata('msg', 'Successfully Register, Login now!');
                                    redirect(base_url() . 'loginb');
                                }
                                return FALSE;

                            }
                            return FALSE;
                        }

                        //pass the input values to the register model

                    }
                }


            }
        }
    }
}

