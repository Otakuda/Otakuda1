<?
class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();//繼承
		$this->load->model('users_model');//載入資料庫
		$this->load->helper('url');//載入URL 幫手
		$this->load->model("menu_model", "menu");
        $items = $this->menu->all();
        //載入menu_libary
        $this->load->library("multi_menu");
        $this->multi_menu->set_items($items);
	}
	function index()
	{
		$this->load->view('login');
	}
	function login()
	{
		$where=array('id'=>$this->input->post('account'),
		              'passward'=>$this->input->post('password')
		);
		$query=$this->users_model->where_array($where,'power');
		if($query->num_rows()>0)
		{
			$this->main();
		}
		else
		{
			$errormessage="帳號密碼錯誤";
			echo "<script>alert('$errormessage');</script>";
			$this->home();
		}
	
	}
	function main()
	{
		$this->load->view('main');
		$this->load->view('navbar');
	}
	function home()
	{
		$this->load->view('login');
	}
}
?>