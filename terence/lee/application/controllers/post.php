 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Post extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Post_M');
    }

    public function index() {
        $this->load->view('map');
    }
    public function skeyword(){
     $key = $this->input->post('title');
     $data['posts'] = $this->Post_M->search($key);
     $this->load->view('map',$data);
    }
    
    
    
}