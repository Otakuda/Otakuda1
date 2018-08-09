<?php
class Set_M extends CI_Model
{
	function __construct()
	{
		parent::__construct();
        $this->load->database();
	}
	function get_data()
	{
		$html="";
		$sql=<<<end_html
		SELECT `index`,`Schema`,`machine` FROM server.ip_table;
end_html;
$query=$this->db->query($sql);

foreach ($query->result_array() as $key => $row) {
	$index=$row['index'];
	$machine=$row['machine'];
	$html.="<tr><td>".$row['index']."</td>";
	$html.="<td>".$row['Schema']."</td>";
	$html.="<td><input type='text' style='width=100px;text-align:center;' id='M_$index' value='$machine'</td>";
    $html.="<td><button type='button' onclick='Edit($index)'>".$this->lang->line('Edit')."</button></td>";
    $html.="<td><button type='button' onclick='Delete($index)'>".$this->lang->line('Delete')."</button></td></tr>";
}
return $html;
	}

	function Edit($index,$Content)
    {
    	$sql=<<<end_html
  Update `server`.ip_table set machine='$Content' where `index`='$index';
end_html;
$query=$this->db->query($sql);
return "更新成功";
    }

    function Search($name)
    {
    	
    	$html="";
    	$sql=<<<end_html
    	SELECT `index`,`Schema`,`machine` FROM server.ip_table where `Schema`='$name';
end_html;
$query=$this->db->query($sql);

foreach ($query->result_array() as $key => $row) {
	$index=$row['index'];
	$machine=$row['machine'];
	$html.="<tr><td>".$row['index']."</td>";
	$html.="<td>".$row['Schema']."</td>";
	$html.="<td><input type='text' style='width=100px;text-align:center;' id='M_$index' value='$machine'</td>";
    $html.="<td><button type='button' onclick='Edit($index)'>".$this->lang->line('Edit')."</button></td>";
    $html.="<td><button type='button' onclick='Delete($index)'>".$this->lang->line('Delete')."</button></td></tr>";
}
return $html;
    }


    function countpage()
    {
    	$sql=<<<end_html
		SELECT count(`index`) as number FROM server.ip_table;
end_html;
$query=$this->db->query($sql);

foreach ($query->result_array() as $key => $row) {
	$totalpage=$row['number'];
}
if($totalpage<10)
{
	$message=1;
}
elseif ($totalpage>10 && $totalpage%10==0) {
	$message=$totalpage/10;
}
else
{
	$message=round($totalpage/10)+1;
}
return $message;
    }



    function jump($page)
    {
    	
    	$start=($page-1)*10;
    	$html="";
    	$sql=<<<end_html
    	SELECT `index`,`Schema`,`machine` FROM server.ip_table where `Schema`='$name'
    	limit $start,10 ;
end_html;
$query=$this->db->query($sql);

foreach ($query->result_array() as $key => $row) {
	$index=$row['index'];
	$machine=$row['machine'];
	$html.="<tr><td>".$row['index']."</td>";
	$html.="<td>".$row['Schema']."</td>";
	$html.="<td><input type='text' style='width=100px;text-align:center;' id='M_$index' value='$machine'</td>";
    $html.="<td><button type='button' onclick='Edit($index)'>修改</button></td></tr>";
}
return $html;
    	
    }

    function Delete($index)
    {
    	$sql=<<<end_html
		Delete from server.ip_table where `index`='$index';
end_html;
       $query=$this->db->query($sql);

       return "OK";
    }

}