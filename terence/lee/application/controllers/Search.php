<?php
class Search extends CI_Controller {

    
     public function searchf()
{
    $this->load->model('Mymodel');
    $search = $this->input->post('search');
    $data['users'] =  $this->Mymodel->search($search);
    $this->load->view('map',$data);
}
}

