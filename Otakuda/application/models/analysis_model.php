<?php
class analysis_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
        $this->load->database();
        $Data=$this->session->userdata('Language');
        $this->lang->load($Data, $Data);
	}
	function showdatabase()
	{
		$query=<<<end_html
		SELECT `Schema`,`machine` FROM server.ip_table;
end_html;
		$query = $this->db->query($query);
		return $query;
	}
	function search_Lot_number_Receipe($database,$option_class,$start,$end)
	{
		$final_array=[];
		$data=[];
		$html="<select id='Option_Select'  style='width:150px; font-size:20px;'>";
		if($database=='All')
		{			
			$query = $this->db->query("show databases like '%drm%'");
			foreach ($query->result_array() as $row)
          {
            
            array_push($data,$row['Database (%drm%)']);
          }
          for($i=0;$i<count($data);$i++)
          {
          	$data2=$data[$i];
$sql=<<<end_html
SELECT distinct Recipe_Name FROM $data2.recipes_list where `Recipe_index` in
 (SELECT distinct Recipe_Index FROM $data2.recipes_lot_info where `Test_Time` between '$start' and '$end');
end_html;
               $query=$this->db->query($sql);//  solve the loop
             //..............................................
               foreach($query->result_array() as $key=>$row)
		     {
		     	if(in_array($row['Recipe_Name'], $final_array))
		     	{

		     	}
		     	else
		     	{
			    array_push($final_array, $row['Recipe_Name']);
			    }
             }
             
             
		  }
		  //.......................................輸出
		  for($i=0;$i<count($final_array);$i++)
             {
             	$html.="<option value=".$final_array[$i].">";
		        $html.=$final_array[$i]."</option>";
             }

		}
//.....................................................................
		else
		{

		if($option_class=='lot_number')
		{
			$sql=<<<end_html
SELECT distinct `Lot_number` FROM $database.recipes_lot_info where `Test_Time` between '$start' and '$end';
end_html;
         $query=$this->db->query($sql);
        foreach($query->result_array() as $key=>$row)
		{
			$html.="<option value=".$row['Lot_number'].">";
		    $html.=$row['Lot_number']."</option>";
        }
		}
		else
		{
			$sql=<<<end_html
SELECT distinct Recipe_Name FROM $database.recipes_list where `Recipe_index` in
 (SELECT distinct Recipe_Index FROM $database.recipes_lot_info where `Test_Time` between '$start' and '$end');
end_html;

		$query=$this->db->query($sql);
        foreach($query->result_array() as $key=>$row)
		{
			$html.="<option value=".$row['Recipe_Name'].">";
		    $html.=$row['Recipe_Name']."</option>";
        }
		}
		}
		return $html;
		// echo count($data);
	}
	function Get_Database_to_Machine($database)
	{
		$sql="Select machine from server.ip_table where `Schema`='$database' limit 1";
		$query=$this->db->query($sql);
        $machine="";
		foreach ($query->result_array() as $row)
		{
			$machine=$row['machine'];
		}
		return $machine;
	}
	function Get_table_header()
	{
		$col_head=array(
         $this->lang->line('Diameter')//'外徑'
        ,$this->lang->line('Edge_Wear')//'圓角'
        ,$this->lang->line('Chips')//'缺口深度'
        ,$this->lang->line('Overlap')//'重疊'
        ,$this->lang->line('Vertical Open')//'垂直分開'
        ,$this->lang->line('Honizontal Open')//'水平分開'
        ,$this->lang->line('Chisel_Point')//'偏心'
        ,$this->lang->line('Flare')//'大頭'
        ,$this->lang->line('Negative')//'小頭'
        ,$this->lang->line('offset')//'大小面'
        ,$this->lang->line('Hook')//'內弧勾狀'
        ,$this->lang->line('Layback')//'外弧凸肚'
        ,$this->lang->line('Web_Thickness')//'心厚'
        ,$this->lang->line('Taper')//'最小心厚'
        ,$this->lang->line('Polish')//'鑽尖磨耗'
        ,$this->lang->line('Cutting_Lip')//'切削刃長'
        ,$this->lang->line('Linear')//'中心線'
        ,$this->lang->line('CLD')//'長短刃'
        ,$this->lang->line('Cut')//'過切'
        ,$this->lang->line('Cut_Differ')//'過切差異'
        ,$this->lang->line('CLCA')//'割出'
        ,$this->lang->line('AxisPolishNG')//'中心研磨不足'
        ,$this->lang->line('Scratch')//'刀痕'
        ,$this->lang->line('Shape NG')//'刀形不良'
    );
    return $col_head;
	}
	function  resolution_NG($database,$option_class,$option,$start,$end)
	{
		$data=[];
		$final_array=[];
		//$Yield=array('外徑','圓角','缺口深度','重疊','水平分開','偏心','大頭','小頭','內弧勾狀','外弧凸狀','心厚','最小心厚','鑽針磨耗','切削刃長','中心線','長短刃','過切差異','割出','中心研磨不足','刀痕','刀形不良');
		$Yield=$this->Get_table_header();//取得欄位名稱
		$machine=$this->Get_Database_to_Machine($database);
		if($database=='All')
		{
			$query = $this->db->query("show databases like '%drm%'");//選出全部資料庫
			foreach ($query->result_array() as $row)
           {
            array_push($data, $row['Database (%drm%)']);
           }
          //.......................用迴圈取資料BY Database
          for($i=0;$i<count($data);$i++)
            {
          	$data2=$data[$i];
$sql=<<<end_html
Select `Total`,`Lot_number`,`NGs` from $data2.analysis where Lot_number in  
(SELECT Lot_number FROM $data2.recipes_lot_info where Recipe_Index in (Select Recipe_Index from $data2.recipes_list where Recipe_Name='$option' ))
end_html;
            $query=$this->db->query($sql);
			foreach ($query->result_array() as $row)
			{
				(int)$NGs=explode(",",$row['NGs']);//string to array
	            array_unshift($NGs,$this->Get_Database_to_Machine($data2),$option,$row['Lot_number'],$row['Total']);// add array element
	            array_push($final_array, $NGs);//build 2d array
			
			}	
			    			
		    }

		}
		else
		{
			if($option_class=='lot_number')
			{
				$sql=<<<end_html
SELECT `Total`,analysis.`lot_number`,Recipe_Name,NGs FROM $database.analysis 
left join $database.recipes_lot_info
on 
$database.analysis.`lot_number`=$database.recipes_lot_info.`lot_number`
left join $database.recipes_list
on
$database.recipes_list.`Recipe_Index`=$database.recipes_lot_info.`Recipe_Index`
 where $database.analysis.`lot_number`='$option'  group by `lot_number`;;
end_html;
$query=$this->db->query($sql);
foreach($query->result_array() as $key=>$row)
{
	$NGs=explode(",",$row['NGs']);
	array_unshift($NGs,$this->Get_Database_to_Machine($database),$row['Recipe_Name'],$row['lot_number'],$row['Total']);
	array_push($final_array, $NGs);	
}

			}
			else
			{
				
				$sql=<<<end_html
Select `Total`,`Lot_number`,`NGs` from $database.analysis where Lot_number in  
(SELECT Lot_number FROM $database.recipes_lot_info where Recipe_Index in (Select Recipe_Index from $database.recipes_list where Recipe_Name='$option' ))
end_html;
$query=$this->db->query($sql);
foreach($query->result_array() as $key=>$row)
{
	$NGs=explode(",",$row['NGs']);
	array_unshift($NGs,$this->Get_Database_to_Machine($database),$option,$row['Lot_number'],$row['Total']);
	array_push($final_array, $NGs);
}

		
	}
	
  }

  return $final_array;
 }
function  resolution_Reshape_NGs($database,$option_class,$option,$start,$end)
	{
		$data=[];
		$final_array=[];
		//$Yield=array('外徑','圓角','缺口深度','重疊','水平分開','偏心','大頭','小頭','內弧勾狀','外弧凸狀','心厚','最小心厚','鑽針磨耗','切削刃長','中心線','長短刃','過切差異','割出','中心研磨不足','刀痕','刀形不良');
		$Yield=$this->Get_table_header();
		if($database=='All')
			
		{
			$query = $this->db->query("show databases like '%drm%'");//選出全部資料庫
			foreach ($query->result_array() as $row)
           {
            array_push($data, $row['Database (%drm%)']);
           }
          //.......................用迴圈取資料BY Database
          for($i=0;$i<count($data);$i++)
            {
          	$data2=$data[$i];
$sql=<<<end_html
Select `Total`,`Lot_number`,`Reshape_NGs` from $data2.analysis where Lot_number in  
(SELECT Lot_number FROM $data2.recipes_lot_info where Recipe_Index in (Select Recipe_Index from $data2.recipes_list where Recipe_Name='$option' ))
end_html;
            $query=$this->db->query($sql);
			foreach ($query->result_array() as $row)
			{
				(int)$Reshape_NGs=explode(",",$row['Reshape_NGs']);//string to array
	            array_unshift($Reshape_NGs,$this->Get_Database_to_Machine($data2),$option,$row['Lot_number'],$row['Total']);// add array element
	            array_push($final_array, $Reshape_NGs);//build 2d array
			
			}	
			    			
		    }

		}
		else
		{
			if($option_class=='lot_number')
			{
				$sql=<<<end_html
SELECT `Total`,analysis.`lot_number`,Recipe_Name,Reshape_NGs FROM $database.analysis 
left join $database.recipes_lot_info
on 
$database.analysis.`lot_number`=$database.recipes_lot_info.`lot_number`
left join $database.recipes_list
on
$database.recipes_list.`Recipe_Index`=$database.recipes_lot_info.`Recipe_Index`
 where $database.analysis.`lot_number`='$option'  group by `lot_number`;
end_html;
$query=$this->db->query($sql);
foreach($query->result_array() as $key=>$row)
{
	$Reshape_NGs=explode(",",$row['Reshape_NGs']);
	array_unshift($Reshape_NGs,$this->Get_Database_to_Machine($database),$row['Recipe_Name'],$row['lot_number'],$row['Total']);
	array_push($final_array, $Reshape_NGs);	
}

			}
			else
			{
				
				$sql=<<<end_html
Select `Total`,`Lot_number`,`Reshape_NGs` from $database.analysis where Lot_number in  
(SELECT Lot_number FROM $database.recipes_lot_info where Recipe_Index in (Select Recipe_Index from $database.recipes_list where Recipe_Name='$option' ))
end_html;
$query=$this->db->query($sql);
foreach($query->result_array() as $key=>$row)
{
	$Reshape_NGs=explode(",",$row['Reshape_NGs']);
	array_unshift($Reshape_NGs,$this->Get_Database_to_Machine($database),$option,$row['Lot_number'],$row['Total']);
	array_push($final_array, $Reshape_NGs);
}

		
	}
	
  }
 
  return $final_array;
 }
   function resolution_Yield($database,$option_class,$option,$start,$end)
   {
   	$data=[];
   	$final_array=[];
   	if($database=='All')
   	{
   		$query = $this->db->query("show databases like '%drm%'");//選出全部資料庫
			foreach ($query->result_array() as $row)
           {
            array_push($data, $row['Database (%drm%)']);
           }
          //.......................用迴圈取資料BY Database
          for($i=0;$i<count($data);$i++)
            {
          	$data2=$data[$i];
$sql=<<<end_html
Select analysis.`lot_number`,Round(3600/(round(sum(Cycle_Time),2)/OK),2) as Product,Yield,Reshape_Rate,Ring_Yield from $data2.test_data
left join $data2.analysis
on analysis.`lot_number` =test_data.`lot_number`
 group by analysis.`lot_number` having analysis.`lot_number` in
(SELECT Lot_number FROM $data2.recipes_lot_info where Recipe_Index in (Select Recipe_Index from $data2.recipes_list where Recipe_Name='$option' ))
end_html;
            $query=$this->db->query($sql);
			foreach ($query->result_array() as $row)
			{
				$out_array=array($row['lot_number'],$row['Product'],$row['Yield'],$row['Reshape_Rate'],$row['Ring_Yield']);
	            array_unshift($out_array,$this->Get_Database_to_Machine($data2),$option);// add array element
	            array_push($final_array, $out_array);//build 2d array
			
			}	
			    			
		    }

   	}
   	else
   	{
   		if($option_class=='lot_number')
   		{
   			$sql=<<<end_html
SELECT analysis.`lot_number`,Round(3600/(round(sum(Cycle_Time),2)/OK),2) as Product,Recipe_Name,Yield,Reshape_Rate,Ring_Yield FROM $database.analysis 
left join $database.recipes_lot_info
on 
$database.analysis.`lot_number`=$database.recipes_lot_info.`lot_number`
left join $database.recipes_list
on
$database.recipes_list.`Recipe_Index`=$database.recipes_lot_info.`Recipe_Index`
left join $database.test_data
on analysis.`lot_number` =test_data.`lot_number`
 where $database.analysis.`lot_number`='$option' group by `lot_number`;
end_html;
            $query=$this->db->query($sql);
            foreach($query->result_array() as $key=>$row)
            {
            	$out_array=array($row['lot_number'],$row['Product'],$row['Yield'],$row['Reshape_Rate'],$row['Ring_Yield']);
	            array_unshift($out_array,$this->Get_Database_to_Machine($database),$row['Recipe_Name']);// add array element
	            array_push($final_array, $out_array);//build 2d array
            }

   		}
   		else
   		{

				$sql=<<<end_html
Select analysis.`lot_number`,Round(3600/(round(sum(Cycle_Time),2)/OK),2) as Product,Yield,Reshape_Rate,Ring_Yield from $database.test_data
left join $database.analysis
on analysis.`lot_number` =test_data.`lot_number`
 group by analysis.`lot_number` having analysis.`lot_number` in
(SELECT Lot_number FROM $database.recipes_lot_info where Recipe_Index in (Select Recipe_Index from $database.recipes_list where Recipe_Name='$option' ))
end_html;
                $query=$this->db->query($sql);
                foreach($query->result_array() as $key=>$row)
                {
                	$out_array=array($row['lot_number'],$row['Product'],$row['Yield'],$row['Reshape_Rate'],$row['Ring_Yield']);
	                array_unshift($out_array,$this->Get_Database_to_Machine($database),$option);// add array element
	                array_push($final_array, $out_array);//build 2d array
                }


   		}

   	}

  return $final_array;
   }
   function Adjustment($final_array)
   {
   	 for($i=0;$i<count($final_array);$i++)
	{   
		$sum=0;
		for($k=0;$k<(sizeof($final_array,1)/sizeof($final_array))-6;$k++)
		{
			$sum=(int)$final_array[$i][$k+3]+$sum;
			
		}
		for($j=0;$j<(sizeof($final_array,1)/sizeof($final_array))-6;$j++)
		{
			if($j>2 && $sum>0)
			{
				$final_array[$i][$j]=round(((int)$final_array[$i][$j]*100/$sum),2);
			}
		}
	}
	return $final_array;
   }
   

}