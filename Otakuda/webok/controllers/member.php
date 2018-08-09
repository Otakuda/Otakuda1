<?
class Member extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$thi->load->helper('url');
	}
	function index()
	{
		$this->load->view('member');
	}

}
?>