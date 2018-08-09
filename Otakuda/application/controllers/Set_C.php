<?
class Set_C extends CI_Controller
{
	function __construct()
	{
		parent::__construct();//繼承
		$this->load->model('users_model');//載入資料庫
		$this->load->helper('url');//載入URL 幫手
        $this->load->library("multi_menu");
        $this->load->library('session');
        $this->load->model('Set_M');
		$this->load->database();
        $Data=$this->session->userdata('Language');

        $this->lang->load($Data, $Data);
        //$this->multi_menu->set_items($items);
	}
	function index()
	{
		$data['area']=$this->Set_M->get_data();
		$this->load->view('Set');
	}

    function Edit($index,$Content)
    {
    	$Content=urldecode($Content);
    	$message=$this->Set_M->Edit($index,$Content);
    	echo $message;
    }
    function Initialize()
    {
    	$message=$this->Set_M->get_data();
    	echo $message;
    }

    function Search($name)
    {
    	$message=$this->Set_M->Search($name);
    	echo $message;
    }

    function countpage()
    {
    	$message=$this->Set_M->countpage();
    	echo $message;
    }
    function jump($page)
    {
    	$message=$this->Set_M->jump($page);
    	echo $message;
    }

    function Delete($index)
    {
        $message=$this->Set_M->Delete($index);
        echo $message;
    }
}