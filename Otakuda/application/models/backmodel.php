<?php
Class backmodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
        $this->load->database();
        $this->load->helper('url');
	}
	function count_table($string)//計算幾筆分頁
	{
		
		$query=$this->db->query($string);
		$totalpage=$query->num_rows();
		//$count=ceil($totalpage/100);
		$count=$totalpage/10;
	
		if($count>=1)
		{
		$html='<table  border="0"  ><tr>';
		$html.='<td style="height:10px;width:50px;" align="center" valign="middle" bgcolor="#999999"><a href=http://localhost/index.php/Test/count_table><p>上一頁</p></a></td>';
		for($i=1;$i<=$count;$i++)
		{
			$html.='<td style="height:10px;width:50px;" align="center" valign="middle" bgcolor="#999999"><a href=http://localhost/index.php/Test/count_table>'.$i.'</a></td>';
		}
		$html.='<td style="height:10px;width:50px;" align="center" valign="middle" bgcolor="#999999"><a href=http://localhost/index.php/Test/count_table><p>下一頁</p></a></td>';
	    		
		}
		else
		{
		 $html="";	
		}
		return $html;
	}
	function find_data_all($string,$sql_count,$page)
	{
		//..................................計算數量
		$count=$this->db->query($sql_count);
		foreach ($count->result_array() as $count_row)
		{
			$totalpage="{$count_row['number']}";//totalpage			
		}

		//.............................
		$perpage=30;//每頁顯示2筆
		$laypage=ceil($totalpage/$perpage);
		$start=($page-1)*$perpage;//起始頁面

		//.............................執行資料庫語法
		$string.=" limit {$start},{$perpage}";
		$data=$this->db->query($string);//執行資料庫語法



		//.......................................
		$number=$data->num_rows();
		$i=$j=0;
		 $html_table="<table  style='border:3px #000000  solid;padding:5px;' rules='all' cellpadding='5';><tr>";
		$col=array('日期','出貨日期','序號','流程卡號','ETI_NO','序號','數量','標籤數','已清洗','已出貨','箱號','機型','工單','清洗次數','客戶編號','特殊編碼');
		$count=count($col);
		for($j=0;$j<$count;$j++)
		{
          $html_table.="<th>{$col[$j]}</th>";
		}
		$html_table.='<tr>';
		foreach($data->result_array() as $row)
		{
			if($i%2==0) $html_table.= '<tr bgcolor="#99FFCC"  >';  // 雙數行加灰底
            else $html_table.= '<tr>';

             
           $html_table.= "<td align='center'>{$row['receivedate']}</td>";
           $html_table.= "<td align='center'>{$row['outdate']}</td>";
           $html_table.= "<td align='center'>{$row['no']}</td>";
           $html_table.= "<td align='center'>{$row['FLOWCARD_NO']}</td>";
           $html_table.= "<td align='center'>{$row['ETI_NO']}</td>";
           $html_table.= "<td align='center'>{$row['SEQNO']}</td>";
           $html_table.= "<td align='center'>{$row['QTY']}</td>";
           $html_table.= "<td align='center'>{$row['LABEL_CNT']}</td>";
           $html_table.= "<td align='center'>{$row['WASHQTY']}</td>";
           $html_table.= "<td align='center'>{$row['OUTQTY']}</td>";
           $html_table.= "<td align='center'>{$row['box']}</td>";
           $html_table.= "<td align='center'>{$row['machine']}</td>";
           $html_table.= "<td align='center'>{$row['workorder']}</td>";
           $html_table.= "<td align='center'>{$row['Iniwashtime']}</td>";
           $html_table.= "<td align='center'>{$row['cust_seqno']}</td>";
           $html_table.= "<td align='center'>{$row['special_code']}</td>";
           $i++;
            
	   }
	   $html_table.='</tr></table>';

	   $Cont=array($html_table,1,$laypage);
        return $Cont;


	}
		
			
}
?>