<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Driver_login extends CI_Controller
{
    public function index()
    {
        $this->load->view('driver/driver_login');

    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('driver/driver_login');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */