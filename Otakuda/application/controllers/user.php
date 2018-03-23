<?
class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();//繼承
		$this->load->model('users_model');//載入資料庫
		$this->load->helper('url');//載入URL 幫手
        $this->load->library("multi_menu");
        $this->load->library('session');
        //$this->multi_menu->set_items($items);
	}
	function index()
	{
		$number=0;
		$array=$this->session->all_userdata();
        foreach ($array as $key => $value)
        {
        	if($key=='Language')
        	{
        		$number++;
        	}
        }
		if ($number>0)
		{
			 $Data=$this->session->userdata('Language');
			 $this->lang->load($Data, $Data);
			 $this->load->view('login');
		}
		else
		{
			$this->load->view('login');

		}
			
	
        
       
		
	}
	function login()
	{
		$number=0;
		$array=$this->session->all_userdata();
        foreach ($array as $key => $value)
        {
        	if($key=='Language')
        	{
        		$number++;
        	}
        }
		$where=array('id'=>$this->input->post('ID'),
		              'password'=>$this->input->post('Password')
		);
		$query=$this->users_model->where_array($where,'power');
		if($query->num_rows()>0)
		{
			$data=$query->row_array();
			if($number==0)
			{
				$userdata=array(
				'username'=>$data['ID'],
				'leavel'=>$data['Leavel'],
				'Language'=>'en'
				);
			}
			else
			{
				$userdata=array(
				'username'=>$data['ID'],
				'leavel'=>$data['Leavel']
				);
			}
			$this->session->set_userdata($userdata);
			echo '<script type="text/javascript">';
            echo 'window.location.href="../?/User/main"';
            echo '</script>';
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
		$Data=$this->session->userdata('Language');
	    $this->lang->load($Data, $Data);
		$leavel=$this->session->userdata('leavel');
        $username=$this->session->userdata('username');
        if(strlen($leavel)!=0)
        {
          $this->load->view('main');
        }
        else
        {
           $this->load->view('login');
        }
		//$this->load->view('navbar');
	}
	function home()
	{
		$this->load->view('login');
	}
	function language()
	{
		 header('Content-type: application/json');
         $Data =file_get_contents('php://input');
         $Language=array('Language'=>$Data);
         $this->session->set_userdata($Language);
         echo $Data;
	}

	function Logout()
	{

	}
}
?>