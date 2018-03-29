<?php

class Auth extends Ci_Controller
{
	

	public function login()
	{
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required|min_length[5]');
			if ($this->form_validation->run()== TRUE) {



				$this->db->select('password');
$this->db->from('users');
$this->db->where(array('username'=>$username,'password'=>$password));
$query = $this->db->get();
$user = $query->row();


if ($username->password) {
	$this->session->set_flashdata("success","you are login already");

	$_SESSION['user_logged']=TRUE;
	$_SESSION['username']= $user->username;

	redirect("user/register");
}else{

	$this->session->set_flashdata("error","no register");
	redirect("auth/register","refresh");
}
				# code...
			}
		$this->load->view('login');
	}


	public function register()
	{
		if (isset($_POST['register'])) {
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required|min_length[5]');
			$this->form_validation->set_rules('password1','Repeat Password','required|min_length[5]|matches[password]');
			 
             };
			

			if ($this->form_validation->run() == TRUE) {
				echo "form validated";

				$data = array(
                      'username'=>$_POST['username'],
                      'email'=>$_POST['email'],
                      'password'=>md5($_POST['password']),
                    
                      'created_date'=>date('Y-m-d'),
                      

				);
				# code...
				$this->db->insert('users',$data);
				
				redirect("auth/login","refresh");
			}else{
				
             };
             $this->load->view('register');
			
			# code...
		
		//load view
		
	}


}

	

?> 