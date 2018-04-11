<?
class Member extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('member_model');

	}
	function index()
	{
		$this->load->view('member');
	}
	function login()
	{
		$where=array('id'=>$this->input->post('account'),
		              'passward'=>$this->input->post('password')
		);
		$query=$this->member_model->find($where,'power');
		
		if($query['Leavel']=='admin')
		{
			$this->manager();
		}
		else
		{
			$errormessage="權限不足";
			echo "<script>alert('$errormessage');</script>";
			$this->home();
		}
	}
	function  manager()
	{ 
		$data['query']=$this->member_model->all('power');
		$this->load->view('management',$data);
	}
	function home()
	{
		$this->load->view('member');
	}

	 function DelUser($id){
        $array = array('index'=>$id);
        $this->member_model->del($array,'power');
        redirect(site_url().'/member/manager');
    }

    function AddUser(){
        $all = $this->input->post();
        $this->member_model->add($all,'power');
        redirect(site_url().'/member/manager');
    }

      function ModifyUser($id){
        $array = array('index'=>$id);
        $data['query'] = $this->member_model->where_array($array,'power');
        $this->load->view('ModifyUser',$data);
    }

    function UserModify(){
        $array = array('index'=>$this->input->post('index'));
        $all = $this->input->post();
        $this->member_model->where_update($array,$all,'power');
        redirect(site_url().'/member/manager');
    }
}
?>