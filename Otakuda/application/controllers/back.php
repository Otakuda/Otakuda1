<?php
class Back extends CI_Controller 
{
	function __constructer()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('backmodel');
		$this->load->database();
		$this->load->model('users_model');
		$this->load->library('session');
	}

	function index()
	{
		$data['laypagee']=0;
		$data['page']=0;
		$data['html_table']="";
		$data['string']="";
		$this->load->view('back',$data);
	}
	function find()
	{
		$table='receivedetail';
		$start=$this->input->post('start');//從 view  取出資料(日期開始)
		$end=$this->input->post('end');//從 view  取出資料(日期結束)

		$flowcard=$this->input->post('flowcard_no');//從 view  取出資料
		$seqno=$this->input->post('seqno');//從 view  取出資料
		$workorder=$this->input->post('workorder');//從 view  取出資料 
        if(strlen($start)>0 && strlen($end)>0)//確認資料不為空
        {
        $string="select receivehead.receivedate,receivehead.outdate,receivedetail.* from receivedetail
                 left join receivehead on receivehead.flowcard_no=receivedetail.flowcard_no
                 where receivedate between '{$start}' and '{$end}' ";//執行資料庫語法
        $string.=$this->check($flowcard,$seqno,$workorder);//確認資料順序
        $count="select count(receivehead.receivedate) as `number` from receivedetail
                 left join receivehead on receivehead.flowcard_no=receivedetail.flowcard_no
                 where receivedate between '{$start}' and '{$end}' ";//;計算數量totalpage
        $count.=$this->check($flowcard,$seqno,$workorder);//確認資料順序
		
		
		$this->load->model('backmodel');//載入model
		//$query=$this->backmodel->count_table($string);//計算數量		
		$Cont=$this->backmodel->find_data_all($string,$count,1);//$html_table=''
		$data['laypage']=$Cont[2];
		$data['page']=$Cont[1];
		$data['html_table']=$Cont[0];
		$data['string']=$string;
		$this->load->view('back',$data);
	    }
	    else
	    {
	    	$errormessage="日期為必填欄位";
			echo "<script>alert('$errormessage');</script>";
		    $data['laypage']=10;
		    $data['page']=1;
		    $data['html_table']="";
		    $data['string']="";
		    $this->load->view('back',$data);
	    }
		//取得資料
	
	}
	
	function jump($page)
	{
		$this->load->model('backmodel');//載入model
		//$query=$this->backmodel->count_table($string);//計算數量		
		$Cont=$this->backmodel->find_data_all($string,$count,$page);//$html_table=''
		$data['laypage']=$Cont[2];
		$data['page']=$page;
		$data['html_table']=$Cont[0];
		$data['string']=$string;
		$this->load->view('back',$data);
		
	}
	function check($flowcard,$seqno,$workorder) // the function check the string 
	{
		
		$query=array($flowcard,$seqno,$workorder);//建立陣列
		$col=array("receivedetail.flowcard_no","seqno","workorder");//產生欄位陣列
		$string="";
		for($i=0;$i<=2;$i++)
		{
			
			
				if(strlen($query[$i])>0)
			  {
				$string.=" and ". $col[$i]."="."'".$query[$i]."'";//concat the string
			  }
		    

			
		}

		return $string;//Delete the string the first "and"

	}
	
}
?>