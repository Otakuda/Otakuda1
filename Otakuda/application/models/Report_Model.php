<?php
class Report_model extends CI_Model
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
    $sql=<<<end_html
    SELECT `Schema`,`machine` FROM server.ip_table;
end_html;
		$query = $this->db->query($sql);
		return $query;
	}
	function Search_lot_number($database,$start,$end)
	{
		$sql=<<<end_html
SELECT distinct `Lot_number` FROM $database.recipes_lot_info where `Test_Time` between '$start' and '$end';
end_html;
        $query=$this->db->query($sql);
        return $query;

	}
	function Initial_again_error()
	{
		$html=<<<end2_html
    <table class="table table-bordered" >
<thead>
  <tr>
      <td class="table_f_td">狀態</td>
      <td class="table_s_td">總數</td>     
  </tr>
</thead>
<tbody>
end2_html;
$again_error_header=array('外徑','圓角','缺口深度','重疊','垂直分開','水平分開','偏心','大頭','小頭','大小面','內弧勾狀'
         ,'外弧凸狀','心厚','最小心厚','鑽針磨耗','切削刃長','中心線','長短刃','過切','過切差異','割出','中心研磨不足','刀痕','刀形不良');
 for($i=0;$i<count($again_error_header);$i++)
       {
          $html.="<tr><td class='table_f_td'>".$again_error_header[$i]."</td><td class='table_s_td'>"."<input type='text' style='text-align:center;width:50PX;border:none;background-color:#CCC;' id="."'".$again_error_header[$i]."'"." value="."'"."0"."'"."</td></tr>";
       }
      
return $html;
	}
  function Initial_OK()
	{
    $Item=$this->lang->line('Item');
    $Number=$this->lang->line('Number');
    $OK_header=$this->Get_OK_Header();

		$html=<<<end_html
		 <table class="table table-bordered" >
  
      <tr>
        <th class="table_f_td">$Item</td>
        <th class="table_s_td">$Number</td>
      </tr>
end_html;
      
      for($i=0;$i<count($OK_header);$i++)
      {
        $header=$OK_header[$i];
        $html.=<<<end_html
        <tr>
            <td class="table_f_td">$header</td>
            <td class="table_s_td"></td>
        </tr>
end_html;
      }

      $html.="</table>";

return $html;
	}

  function Get_OK_Header()
  {
         $OK_header=
         array(
          $this->lang->line('Yield'),
          $this->lang->line('Total'),
          $this->lang->line('OK'),
          $this->lang->line('Length_NG'),
          $this->lang->line('Twist_NG'),
          $this->lang->line('UC_NG'),
          $this->lang->line('Inspect_Total'),
          $this->lang->line('Inspect_NG'),
          $this->lang->line('Reshape_Rate'),
          $this->lang->line('Reshape_Total'),
          $this->lang->line('Depth_NG'),
          $this->lang->line('Push_NG'),
          $this->lang->line('Total'),
          $this->lang->line('Top_NG'));

         return $OK_header;
  }
  function Get_again_header()
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
    ,$this->lang->line('Ring_Depth')//'補環深度'
    ,$this->lang->line('Top_Angle')//'鑽尖角'
    ,$this->lang->line('UC_Length')//'UC'
    );
    return $col_head;
  }
	function Search_again_error($database,$lot_number)
	{
$string="";//下SQL語法
$sql=<<<end_html
SELECT NGs FROM $database.analysis where `lot_number`='$lot_number';
end_html;
        $query=$this->db->query($sql);

        foreach($query->result_array() as $key=>$row)
		   {
			     $string=$row['NGs'];
       }

       $again_error_header=$this->Get_again_header();
       $State=$this->lang->line('State');
       $Total=$this->lang->line('Total');

		 $html=<<<end2_html
		<table class="table table-bordered" >
<thead>
  <tr>
      <td class="table_f_td">$State</td>
      <td class="table_s_td">$Total</td>     
  </tr>
</thead>
<tbody>
end2_html;

         $NGs=explode(',',$string);//字串轉陣列
		 
         
		 if(count($NGs)==24)//判斷是否有資料
		 {
         for($i=0;$i<count($again_error_header);$i++)//如果有就擷取陣列
         {
         	$html.="<tr><td class='table_f_td'>".$again_error_header[$i]."</td><td class='table_s_td'>"."<input type='text' style='text-align:center;width:50PX;border:none;background-color:#CCC;' id="."'".$again_error_header[$i]."'"." value="."'".$NGs[$i]."'"."</td></tr>";
         }
         $html.="</tbody></table>";
		 }
		 else
		 {
			 for($i=0;$i<count($again_error_header);$i++)
         {
         	$html.="<tr><td class='table_f_td'>".$again_error_header[$i]."</td><td class='table_s_td'>"."<input type='text' style='text-align:center;width:50PX;border:none;background-color:#CCC;' id="."'".$again_error_header[$i]."'"." value="."'"."0"."'"."</td></tr>";
         }
         $html.="</tbody></table>";
	     }
         echo $html;
      
	}
  function Search_again_chart($database,$lot_number)
  {
      $string="";//下SQL語法
$sql=<<<end_html
SELECT NGs FROM $database.analysis where `lot_number`='$lot_number';
end_html;
        $query=$this->db->query($sql);
        foreach($query->result_array() as $key=>$row)
       {
          $string=$row['NGs'];
       }
    
         echo $string;
      
  }

  function Get_Chart_Header()
  {
    $col_head=$this->Get_again_header();
     return json_encode($col_head);
  }
   function Report_again ($database,$lot_number)
  {
$string="";//下SQL語法
$sql=<<<end_html
SELECT NGs FROM $database.analysis where `lot_number`='$lot_number';
end_html;
        $query=$this->db->query($sql);
        foreach($query->result_array() as $key=>$row)
    {
      $string=$row['NGs'];
    }
    
         return $string;
      
  }
  function Search_ok($database,$lot_number)
  {
    $string="";//下SQL語法
$sql=<<<end_html
Select 
concat(Yield,"%") as Yield,
Total,
OK,
Length_NG,
Twist_NG,
UC_NG,
Inspect_Total,
Inspect_NG,
concat(round(Reshape_Rate,2),"%") as Reshape_Rate,
Reshape_Total,
Reshape_NG,
concat(Ring_Yield,"%") as Ring_Yield,
Ring_Total,
Depth_NG,
Push_NG,
concat(Total_Yield,"%") as  Total_Yield,
Top_NG
from $database.analysis where `lot_number`='$lot_number';
end_html;
        $query=$this->db->query($sql);
        
        //*****Unicode
        $OK_header=$this->Get_OK_Header();
        $State=$this->lang->line('State');
        $Total=$this->lang->line('Total');
        //******

$html=<<<end2_html
    <table class="table table-bordered" >
<thead>
  <tr>
      <td class="table_f_td">$State</td>
      <td class="table_s_td">$Total</td>     
  </tr>
</thead>
<tbody>
end2_html;

        foreach($query->result_array() as $key=>$row)
        {
          $data=array($row['Yield'],$row['Total'],$row['OK'],$row['Length_NG'],$row['Twist_NG'],
           $row['UC_NG'],$row['Inspect_Total'],$row['Inspect_NG'],$row['Reshape_Rate'],$row['Reshape_Total'],
           $row['Depth_NG'],$row['Push_NG'],$row['Total_Yield'],$row['Top_NG'] );
        }
      if(count($data) > 0)//判斷是否有資料
     {
         for($i=0;$i<count($data);$i++)//如果有就擷取陣列
         {
          $html.="<tr><td class='table_f_td'>".$OK_header[$i]."</td><td class='table_s_td'>".$data[$i]."</td></tr>";
         }
         $html.="</tbody></table>";
     }
     else
     {
       for($i=0;$i<count($OK_header);$i++)
         {
          $html.="<tr><td class='table_f_td'>".$OK_header[$i]."</td><td class='table_s_td'>0</td></tr>";
         }
         $html.="</tbody></table>";
       }
         echo $html;

  }
  function Search_All($database,$lot_number)
  {
    $Item=$this->lang->line('Item');//Test_number
    $In_Length=$this->lang->line('In_Length');//進料總長
    $Out_Length=$this->lang->line('Out_Length');//出料總長
    $In_Diameter=$this->lang->line('In_Diameter');//進料外徑
    $Cycle_time=$this->lang->line('Cycle_time');//循環時間
    $Yield_quty=$this->lang->line('Yield_quty');//再研次數
    $html=<<<end_html
    <table>
    <tr>
    <th>$Item</th>
    <th>$In_Length</th>
    <th>$Out_Length</th>
    <th>$In_Diameter</th>
    <th>$Cycle_time</th>
    <th>$Yield_quty</th>
end_html;
    $judge_col=$this->judge_col($database,$lot_number);
    $addcol=$this->addcol($judge_col);
    $col_head=$this->col_head($judge_col);
    for($i=0;$i<count($col_head)-8;$i++)
    {
      $html.="<th>".$col_head[$i]."</th>";
    }
    $html.="</tr>";
    $sql=<<<end_html
    select 
    Test_Number as '0',In_Length as '1',Out_Length as '2',In_Diameter as '3',Cycle_Time as '4',
    Reshape as '5' $addcol from $database.test_data where `lot_number`='$lot_number';
end_html;
$query=$this->db->query($sql);
$i=0;

    foreach ($query->result_array() as $key => $row) 
    {
        $html.="<td >"."<a ondblclick='openwindow(".$row[0].");'>".$row[0]."</a></td>";
        for($i=1;$i<(sizeof($row)-3);$i++)
        {
          $html.="<td>".$row[$i]."</td>";        
           
        }          
              
        $html.="</tr>";
    }
          
    $html.="</tr></table>"; 
    return $html;     
      
      
  }
 function find_detail($database,$lot_number,$test_number)
 {
  $sql=<<<end_html
Select Test_Number from $database.test_data where lot_number='$lot_number';
end_html;
 $query=$this->db->query($sql);
 $html="<select onchange='change_lot_number()' size=22 id='test_number' multiple>";

  foreach($query->result_array() as $key=>$row)
  {
    if($row['Test_Number']==$test_number)
    {
    $html.="<option  style='font-size:24px;alignment-adjust:central;' value=".$row['Test_Number']." selected>".$row['Test_Number']."</option>";
    }
    else
    {
    $html.="<option style='font-size:24px' value=".$row['Test_Number'].">".$row['Test_Number']."</option>";
    }

  }
   $html.="</select>";
   return $html;
 }
  function find_detail_test_number($database,$lot_number,$test_number)
  {
//find the test_data;..............................
$sql=<<<end_html
Select In_Length,Out_Length,In_Diameter,Cycle_Time,Ring_Depth,Top_Angle,UC_Length
from $database.test_data where `lot_number`='$lot_number' and `test_number`=$test_number;
end_html;
$data=$this->db->query($sql);
// Unicode
$diameter=$this->lang->line('Diameter');
$Work_time=$this->lang->line('Work_time');
$In_Length=$this->lang->line('In_Length');
$Out_Length=$this->lang->line('Out_Length');
$Ring_Depth=$this->lang->line('Ring_Depth');
$Top_Angle=$this->lang->line('Top_Angle');
$UC_Length=$this->lang->line('UC_Length');
//

$html=<<<end2_html

<table >
<thead>
  <tr>
      <th class='mea_h'>$diameter</th>
      <th class='mea_h'>$Work_time</th>
      <th class='mea_h'>$In_Length</th>
      <th class='mea_h'>$Out_Length</th>      
  </tr>
</thead>
<tbody>
end2_html;

foreach ($data->result_array() as $key => $row)
{
   $html.="<tr><td  align='center'  class='mea_m'>".$row['In_Diameter']."</td>";
   $html.="<td class='mea_m' align='center'>".$row['Cycle_Time']."</td>"; 
   $html.="<td class='mea_m' align='center'>".$row['In_Length']."</td>";
   $html.="<td class='mea_m' align='center'>".$row['Out_Length']."</td></tr>";
   $html.="<tr><td class='mea_h' align='center'>$Ring_Depth</td>";
   $html.="<td class='mea_h' align='center'>$Top_Angle</td>";
   $html.="<td class='mea_h' align='center'>$UC_Length</td></tr>";
   $html.="<tr><td class='mea_m'  align='center'>".$row['Ring_Depth']."</td>";
   $html.="<td class='mea_m'  align='center'>".$row['Top_Angle']."</td>";
   $html.="<td class='mea_m'  align='center'>".$row['UC_Length']."</td></tr>";
}
$html.="</tbody></table>";
return $html;

  }
  function find_Receipes($database,$lot_number,$test_number)
  {
    //............find all test_data
     $sql=<<<end_html
Select * from $database.test_data where `lot_number`='$lot_number' and `test_number`=$test_number limit 1;
end_html;
$data=$this->db->query($sql);
foreach ($data->result_array() as $key => $row)
{
$Index=$row['Index'];
$Lot_Number=$row['Lot_Number'];
$Test_Number=$row['Test_Number'];
$Test_Time=$row['Test_Time'];
$Diameter=$row['Diameter'];
$Diameter_Result=$row['Diameter_Result'];
$Edge_Wear=$row['Edge_Wear'];
$Edge_Wear_Result=$row['Edge_Wear_Result'];
$Chips=$row['Chips'];
$Chips_Result=$row['Chips_Result'];
$Overlap=$row['Overlap'];
$Overlap_Result=$row['Overlap_Result'];
$Vertical_Open=$row['Vertical_Open'];
$Vertical_Open_Result=$row['Vertical_Open_Result'];
$Horizontal_Open=$row['Horizontal_Open'];
$Horizontal_Open_Result=$row['Horizontal_Open_Result'];
$Chisel_Point=$row['Chisel_Point'];
$Chisel_Point_Result=$row['Chisel_Point_Result'];
$Flare=$row['Flare'];
$Flare_Result=$row['Flare_Result'];
$Negative=$row['Negative'];
$Negative_Result=$row['Negative_Result'];
$Offset=$row['Offset'];
$Offset_Result=$row['Offset_Result'];
$Hook=$row['Hook'];
$Hook_Result=$row['Hook_Result'];
$Layback=$row['Layback'];
$Layback_Result=$row['Layback_Result'];
$Web_Thickness=$row['Web_Thickness'];
$Web_Thickness_Result=$row['Web_Thickness_Result'];
$Taper=$row['Taper'];
$Taper_Result=$row['Taper_Result'];
$Polish=$row['Polish'];
$Polish_Result=$row['Polish_Result'];
$Cutting_Lip=$row['Cutting_Lip'];
$Cutting_Lip_Result=$row['Cutting_Lip_Result'];
$Linear=$row['Linear'];
$Linear_Result=$row['Linear_Result'];
$CLD=$row['CLD'];
$CLD_Result=$row['CLD_Result'];
$Cut=$row['Cut'];
$Cut_Result=$row['Cut_Result'];
$Cut_Differ=$row['Cut_Differ'];
$Cut_Differ_Result=$row['Cut_Differ_Result'];
$CLCA=$row['CLCA'];
$CLCA_Result=$row['CLCA_Result'];
$AxisPolishNG=$row['AxisPolishNG'];
$AxisPolishNG_Result=$row['AxisPolishNG_Result'];
$Scratch=$row['Scratch'];
$Scratch_Result=$row['Scratch_Result'];
$ShapeNG=$row['ShapeNG'];
$ShapeNG_Result=$row['ShapeNG_Result'];
$In_Length=$row['In_Length'];
$In_Length_Result=$row['In_Length_Result'];
$Out_Length=$row['Out_Length'];
$Out_Length_Result=$row['Out_Length_Result'];
$In_Diameter=$row['In_Diameter'];
$Cycle_Time=$row['Cycle_Time'];
$Ring_Depth=$row['Ring_Depth'];
$Ring_Depth_Result=$row['Ring_Depth_Result'];
$Top_Angle=$row['Top_Angle'];
$Top_Angle_Result=$row['Top_Angle_Result'];
$UC_Length=$row['UC_Length'];
$UC_Length_Result=$row['UC_Length_Result'];
$Reshape=$row['Reshape'];
}

    //.....................................................................................................find recipe_index
    $sql="Select  Recipe_index  from `$database`.recipes_lot_info where `lot_number`='$lot_number' and `Start_Number`<=$test_number and `End_Number` >=$test_number limit 1;";
    $data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Recipe_index=$row['Recipe_index'];
    }
    if(empty($Recipe_index))
    {
       $sql="Select  Recipe_index  from `$database`.recipes_lot_info where `lot_number`='$lot_number'  limit 1;";
    $data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Recipe_index=$row['Recipe_index'];
    }
    }


    $html="<table border=1><tr ><th class='th'>".$this->lang->line('Item')."</th><th class='th'>".$this->lang->line('Tolerance')."</th><th class='th'>".$this->lang->line('value')."</th><th class='th'>".$this->lang->line('Unit')."</th><tr>";

    //...................................................................find recipes_01_diameter
$sql=<<<end_html
SELECT concat(`Up_Limit`,`Spec_Format`,`Low_Limit`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit'  FROM $database.recipes_01_diameter
where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Diameter_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Diameter')."</td>";//外徑
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Diameter."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Diameter_Result==1)
     {
      $html.="<tr><td class='ng'>".$this->lang->line('Diameter')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Diameter."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
        //...................................................................find recipes_02_edge_wear
    $sql=<<<end_html
SELECT concat(`Spec_Format`,`Tolerance`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_02_edge_wear where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Edge_Wear_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Edge_Wear')."</td>";//圓角
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Edge_Wear."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Edge_Wear_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('Edge_Wear')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Edge_Wear."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
    //...................................................................find recipes_03_chips
     $sql=<<<end_html
SELECT concat(`Spec_Format`,`Tolerance`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_03_chips where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Chips_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Chips')."</td>";//缺口深度
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Chips."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Chips_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('Chips')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Chips."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
     //...................................................................find recipes_04_overlap
     $sql=<<<end_html
SELECT concat(`Spec_Format`,`Tolerance`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_04_overlap where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Overlap_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Overlap')."</td>";//重疊 
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Overlap."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Overlap_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('Overlap')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Overlap."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
         //...................................................................find recipes_05_vertical_open
     $sql=<<<end_html
SELECT concat(`Spec_Format`,`Tolerance`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_05_vertical_open where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Vertical_Open_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Vertical Open')."</td>";// 垂直分開
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Vertical_Open."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Vertical_Open_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('Vertical Open')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Vertical_Open."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
  //...................................................................find recipes_06_horizontal_open
     $sql=<<<end_html
SELECT concat(`Spec_Format`,`Tolerance`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_06_horizontal_open where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Horizontal_Open_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Honizontal Open')."</td>";// 水平分開
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Horizontal_Open."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Horizontal_Open_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('Honizontal Open')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Horizontal_Open."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
//...................................................................find recipes_07_chisel_point
     $sql=<<<end_html
SELECT concat(`Spec_Format`,`Tolerance`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_07_chisel_point where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Chisel_Point_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Chisel_Point')."</td>";//偏心
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Chisel_Point."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Chisel_Point_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('Chisel_Point')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Chisel_Point."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
    //...................................................................find recipes_08_flare
     $sql=<<<end_html
SELECT concat(`Spec_Format`,`Tolerance`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_08_flare where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Flare_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Flare')."</td>";//大頭
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Flare."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Flare_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('Flare')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Flare."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
//...................................................................find recipes_09_negative
     $sql=<<<end_html
SELECT concat(`Spec_Format`,`Tolerance`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_09_negative where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Negative_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Negative')."</td>";//小頭
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Negative."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Negative_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('Negative')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Negative."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
    //...................................................................find recipes_10_offset
     $sql=<<<end_html
SELECT concat(`Spec_Format`,`Tolerance`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_10_offset where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Offset_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('offset')."</td>";// 大小面
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Offset."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Offset_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('offset')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Offset."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
    //...................................................................find recipes_11_hook
     $sql=<<<end_html
SELECT concat(`Spec_Format`,`Tolerance`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_11_hook where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Hook_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Hook')."</td>";//內弧勾狀
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Hook."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Hook_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('Hook')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Hook."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
    //...................................................................find recipes_12_layback
     $sql=<<<end_html
SELECT concat(`Spec_Format`,`Tolerance`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_12_layback where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Layback_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Layback')."</td>"; //外弧凸肚
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Layback."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Layback_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('Layback')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Layback."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
//...................................................................find recipes_13_web_thickness
     $sql=<<<end_html
SELECT concat(`Up_Limit`,`Spec_Format`,`Low_Limit`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_13_web_thickness where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Web_Thickness_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Web_Thickness')."</td>"; // 心厚
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Web_Thickness."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Web_Thickness_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('Web_Thickness')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Web_Thickness."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
    
//...................................................................find recipes_14_taper
     $sql=<<<end_html
SELECT concat(`Up_Limit`,`Spec_Format`,`Low_Limit`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_14_taper where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Taper_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Taper')."</td>"; // 最小心厚
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Taper."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Taper_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('Taper')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Taper."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
    //...................................................................find recipes_16_cutting_lip
     $sql=<<<end_html
SELECT concat(`Spec_Format`,`Standard_Value`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_16_cutting_lip where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Cutting_Lip_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Cutting_Lip')."</td>";// 切削刃長
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Cutting_Lip."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Cutting_Lip_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('Cutting_Lip')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Cutting_Lip."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
//...................................................................find recipes_17_linear
     $sql=<<<end_html
SELECT concat(`Spec_Format`,`Tolerance`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_17_linear where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Linear_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Linear')."</td>"; //中心線
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Linear."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Linear_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('Linear')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Linear."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }


  //...................................................................find recipes_18_cld
     $sql=<<<end_html
SELECT concat(`Spec_Format`,`Tolerance`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_18_cld where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($CLD_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('CLD')."</td>";// 長短刃
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$CLD."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($CLD_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('CLD')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$CLD."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
      //...................................................................find recipes_19_cut
     $sql=<<<end_html
SELECT concat(`Spec_Format`,`Tolerance`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_19_cut where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Cut_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Cut')."</td>"; //過切 
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Cut."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Cut_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('Cut')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Cut."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
//...................................................................find recipes_20_cut_differ
     $sql=<<<end_html
SELECT concat(`Spec_Format`,`Tolerance`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_20_cut_differ where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Cut_Differ_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Cut_Differ')."</td>"; // 過切差異
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Cut_Differ."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Cut_Differ_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('Cut_Differ')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Cut_Differ."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
//...................................................................find recipes_21_clca
     $sql=<<<end_html
SELECT concat(`Spec_Format`,`Tolerance`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_21_clca where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($CLCA_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('CLCA')."</td>";// 割出
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$CLCA."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($CLCA_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('CLCA')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$CLCA."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
    //...................................................................find recipes_22_axispolishng
     $sql=<<<end_html
SELECT concat(`Spec_Format`,`Tolerance`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_22_axispolishng where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($AxisPolishNG_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('AxisPolishNG')."</td>";// 中心研磨不足
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$AxisPolishNG."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($AxisPolishNG_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('AxisPolishNG')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$AxisPolishNG."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
//...................................................................find recipes_23_scratch
     $sql=<<<end_html
SELECT concat(`Spec_Format`,`Tolerance`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_23_scratch where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($Scratch_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Scratch')."</td>";// 刀痕
      $html.="<td class='pass'>".$row['Range']."</td>";
      $html.="<td class='pass'>".$Scratch."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($Scratch_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('Scratch')."</td>";
      $html.="<td class='ng'>".$row['Range']."</td>";
      $html.="<td class='ng'>".$Scratch."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }
//...................................................................find recipes_24_shapeng
     $sql=<<<end_html
SELECT concat(`Up_Limit`,`Spec_Format`,`Low_Limit`) as 'Range',if(`Unit`=0,'μm',if(`Unit`=1,'°','')) as 'Unit' FROM $database.recipes_24_shapeng where Recipe_index='$Recipe_index';
end_html;
$data=$this->db->query($sql);
    foreach ($data->result_array() as $key => $row)
    {
      $Range=$row['Range'];
      $Unit=$row['Unit'];
    }
    if ($ShapeNG_Result==2)
    {
      $html.="<tr><td class='row'>".$this->lang->line('Shape NG')."</td>"; // 刀形不良
      $html.="<td class='pass'>O/X</td>";
      $html.="<td class='pass'>".$ShapeNG."</td>";
      $html.="<td class='pass'>".$row['Unit']."</td></tr>";
    }
    elseif ($ShapeNG_Result==1)
     {
     $html.="<tr><td class='ng'>".$this->lang->line('Shape NG')."</td>";
      $html.="<td class='ng'>O/X</td>";
      $html.="<td class='ng'>".$ShapeNG."</td>";
      $html.="<td class='ng'>".$row['Unit']."</td></tr>";
    }
    else
    {
      $html.="";
    }

    $html.="</table>";
    return $html;
  }
  function Initial_img($database,$lot_number,$test_number)
  {
    $number=6-strlen($test_number)-1;
    for($i=0;$i<=$number;$i++)
    {
      $test_number="0".$test_number;
    }
    $address=base_url();
    $html=<<<end_html
    <img id="main_img" src="$address/$database/Test data/$lot_number/$test_number/Inspection.png" width="680px" height="480px">
end_html;
return $html;
  }
  function find_all()
  {

    $sql="select * from drm20.test_data limit 100";
    $query=$this->db->query($sql);
 foreach ($query->result_array() as $key => $row)
 {
  $data[]=$row;
 }
 
 return $data;

  }
  function colhead($database,$lot_number)
  {
      //............find all test_data//..Prepare the col realy in
     $sql=<<<end_html
Select 
Diameter,
Diameter_Result,
Edge_Wear,
Edge_Wear_Result,
Chips,
Chips_Result,
Overlap,
Overlap_Result,
Vertical_Open,
Vertical_Open_Result,
Horizontal_Open,
Horizontal_Open_Result,
Chisel_Point,
Chisel_Point_Result,
Flare,
Flare_Result,
Negative,
Negative_Result,
`Offset`,
Offset_Result,
Hook,
Hook_Result,
Layback,
Layback_Result,
Web_Thickness,
Web_Thickness_Result,
Taper,
Taper_Result,
Polish,
Polish_Result,
Cutting_Lip,
Cutting_Lip_Result,
`Linear`,
Linear_Result,
CLD,
CLD_Result,
Cut,
Cut_Result,
Cut_Differ,
Cut_Differ_Result,
CLCA,
CLCA_Result,
AxisPolishNG,
AxisPolishNG_Result,
Scratch,
Scratch_Result,
ShapeNG,
ShapeNG_Result
from  $database.test_data where `lot_number`='$lot_number' and length(`Diameter`)>0 limit 1 ;
end_html;
$string="";
$colhead=[];
$F_array=[];
$query=$this->db->query($sql);
foreach ($query->result_array() as $row)
 {
  $data=array($row['Diameter'],$row['Diameter_Result'],$row['Edge_Wear'],$row['Edge_Wear_Result'],$row['Chips'],$row['Chips_Result'],$row['Overlap'],$row['Overlap_Result'],$row['Vertical_Open'],$row['Vertical_Open_Result'],$row['Horizontal_Open'],$row['Horizontal_Open_Result'],$row['Chisel_Point'],$row['Chisel_Point_Result'],$row['Flare'],$row['Flare_Result'],$row['Negative'],$row['Negative_Result'],$row['Offset'],$row['Offset_Result'],$row['Hook'],$row['Hook_Result'],$row['Layback'],$row['Layback_Result'],$row['Web_Thickness'],$row['Web_Thickness_Result'],$row['Taper'],$row['Taper_Result'],$row['Polish'],$row['Polish_Result'],$row['Cutting_Lip'],$row['Cutting_Lip_Result'],$row['Linear'],$row['Linear_Result'],$row['CLD'],$row['CLD_Result'],$row['Cut'],$row['Cut_Result'],$row['Cut_Differ'],$row['Cut_Differ_Result'],$row['CLCA'],$row['CLCA_Result'],$row['AxisPolishNG'],$row['AxisPolishNG_Result'],$row['Scratch'],$row['Scratch_Result'],$row['ShapeNG'],$row['ShapeNG_Result']);
 }
//.........Select the data
$sql=<<<end_html
    SELECT Testing_Item_Chinese from  $database.recipes_column_header ;
end_html;
$query=$this->db->query($sql);

foreach ($query->result_array() as $row)// 
 {
  array_push($colhead,$row['Testing_Item_Chinese']);//Buidl
 }
for($i=0;$i<count($data);$i=$i+2)
{
  $o=intval($data[$i+1]);
  if(intval($data[$i+1])>0)
  {
    $j=$i/2;
    array_push($F_array,$colhead[$j]);
  }
     
}
return $F_array;

  }
  function get_receipe_data($database,$lot_number)
  {
          //............find all test_data//..Prepare the col realy in
     $sql=<<<end_html
Select 
Diameter,
Diameter_Result,
Edge_Wear,
Edge_Wear_Result,
Chips,
Chips_Result,
Overlap,
Overlap_Result,
Vertical_Open,
Vertical_Open_Result,
Horizontal_Open,
Horizontal_Open_Result,
Chisel_Point,
Chisel_Point_Result,
Flare,
Flare_Result,
Negative,
Negative_Result,
`Offset`,
Offset_Result,
Hook,
Hook_Result,
Layback,
Layback_Result,
Web_Thickness,
Web_Thickness_Result,
Taper,
Taper_Result,
Polish,
Polish_Result,
Cutting_Lip,
Cutting_Lip_Result,
`Linear`,
Linear_Result,
CLD,
CLD_Result,
Cut,
Cut_Result,
Cut_Differ,
Cut_Differ_Result,
CLCA,
CLCA_Result,
AxisPolishNG,
AxisPolishNG_Result,
Scratch,
Scratch_Result,
ShapeNG,
ShapeNG_Result
from  $database.test_data where `lot_number`='$lot_number' and length(`Diameter`)>0 limit 1 ;
end_html;
$string="";
$colhead=[];
$F_index=[];
$query=$this->db->query($sql);
foreach ($query->result_array() as $row)
 {
  $data=array($row['Diameter'],$row['Diameter_Result'],$row['Edge_Wear'],$row['Edge_Wear_Result'],$row['Chips'],$row['Chips_Result'],$row['Overlap'],$row['Overlap_Result'],$row['Vertical_Open'],$row['Vertical_Open_Result'],$row['Horizontal_Open'],$row['Horizontal_Open_Result'],$row['Chisel_Point'],$row['Chisel_Point_Result'],$row['Flare'],$row['Flare_Result'],$row['Negative'],$row['Negative_Result'],$row['Offset'],$row['Offset_Result'],$row['Hook'],$row['Hook_Result'],$row['Layback'],$row['Layback_Result'],$row['Web_Thickness'],$row['Web_Thickness_Result'],$row['Taper'],$row['Taper_Result'],$row['Polish'],$row['Polish_Result'],$row['Cutting_Lip'],$row['Cutting_Lip_Result'],$row['Linear'],$row['Linear_Result'],$row['CLD'],$row['CLD_Result'],$row['Cut'],$row['Cut_Result'],$row['Cut_Differ'],$row['Cut_Differ_Result'],$row['CLCA'],$row['CLCA_Result'],$row['AxisPolishNG'],$row['AxisPolishNG_Result'],$row['Scratch'],$row['Scratch_Result'],$row['ShapeNG'],$row['ShapeNG_Result']);
 }
//.........Select the data
$sql=<<<end_html
    SELECT NGs FROM $database.analysis where `Lot_number`='$lot_number';
end_html;
$query=$this->db->query($sql);

foreach ($query->result_array() as $row)// get the data for NGS
 {
  $NGs_string=$row['NGs'];
 }
 $NGs=explode(",",$NGs_string);
for($i=0;$i<count($data);$i=$i+2)
{
  if(intval($data[$i+1])>0)
  {
    $j=$i/2;
    array_push($F_index,$NGs[$j]);
  }
     
}
return $F_index;

  }
  //........................................................... 
   function colhead_DB($database,$lot_number)
  {
      //............find all test_data//..Prepare the col realy in
     $sql=<<<end_html
Select 
Diameter,
Diameter_Result,
Edge_Wear,
Edge_Wear_Result,
Chips,
Chips_Result,
Overlap,
Overlap_Result,
Vertical_Open,
Vertical_Open_Result,
Horizontal_Open,
Horizontal_Open_Result,
Chisel_Point,
Chisel_Point_Result,
Flare,
Flare_Result,
Negative,
Negative_Result,
`Offset`,
Offset_Result,
Hook,
Hook_Result,
Layback,
Layback_Result,
Web_Thickness,
Web_Thickness_Result,
Taper,
Taper_Result,
Polish,
Polish_Result,
Cutting_Lip,
Cutting_Lip_Result,
`Linear`,
Linear_Result,
CLD,
CLD_Result,
Cut,
Cut_Result,
Cut_Differ,
Cut_Differ_Result,
CLCA,
CLCA_Result,
AxisPolishNG,
AxisPolishNG_Result,
Scratch,
Scratch_Result,
ShapeNG,
ShapeNG_Result
from  $database.test_data where `lot_number`='$lot_number' and length(`Diameter`)>0 limit 1 ;
end_html;
$string="";
$colhead=[];
$F_array=[];
$query=$this->db->query($sql);
foreach ($query->result_array() as $row)
 {
  $data=array($row['Diameter'],$row['Diameter_Result'],$row['Edge_Wear'],$row['Edge_Wear_Result'],$row['Chips'],$row['Chips_Result'],$row['Overlap'],$row['Overlap_Result'],$row['Vertical_Open'],$row['Vertical_Open_Result'],$row['Horizontal_Open'],$row['Horizontal_Open_Result'],$row['Chisel_Point'],$row['Chisel_Point_Result'],$row['Flare'],$row['Flare_Result'],$row['Negative'],$row['Negative_Result'],$row['Offset'],$row['Offset_Result'],$row['Hook'],$row['Hook_Result'],$row['Layback'],$row['Layback_Result'],$row['Web_Thickness'],$row['Web_Thickness_Result'],$row['Taper'],$row['Taper_Result'],$row['Polish'],$row['Polish_Result'],$row['Cutting_Lip'],$row['Cutting_Lip_Result'],$row['Linear'],$row['Linear_Result'],$row['CLD'],$row['CLD_Result'],$row['Cut'],$row['Cut_Result'],$row['Cut_Differ'],$row['Cut_Differ_Result'],$row['CLCA'],$row['CLCA_Result'],$row['AxisPolishNG'],$row['AxisPolishNG_Result'],$row['Scratch'],$row['Scratch_Result'],$row['ShapeNG'],$row['ShapeNG_Result']);
 }
//.........Select the data
$colhead=array('Diameter','Edge_Wear','Chips','Overlap','Vertical_Open','Horizontal_Open','Chisel_Point','Flare','Negative','`Offset`','Hook','Layback','Web_Thickness','Taper','Polish','Cutting_Lip','`Linear`','CLD','Cut','Cut_Differ','CLCA','AxisPolishNG','Scratch','ShapeNG');
for($i=0;$i<count($data);$i=$i+2)
{
  $o=intval($data[$i+1]);
  if(intval($data[$i+1])>0)
  {
    $j=$i/2;
    array_push($F_array,$colhead[$j]);
  }
     
}
return $F_array;
}
  //....................................................................................................................................... 
function get_test_data($database,$lot_number,$colstring)
  {
    $colstring="Test_number,".$colstring.",In_Length,Out_Length,Cycle_Time,Reshape ";
    $sql=<<<end_html
    SELECT $colstring from  $database.test_data where `lot_number`='$lot_number' ;
end_html;
$colhead=explode(",",$colstring);
$query=$this->db->query($sql);
foreach ($query->result_array() as $key => $row)
 {
   $data[]=array_values($row);
 }

 return $data;

  }
  function get_test_data2($database,$lot_number)
  {
    $sql=<<<end_html
    SELECT * from  $database.test_data where `lot_number`='$lot_number'  ;
end_html;
$query=$this->db->query($sql);
$row=$query->result_array() ;
 foreach ($query->result_array() as $row)// get the data for NGS
 {
  $data[]=array_values($row);
 }
 
  echo sizeof($data,1)/sizeof($data);

  }
  function Find_analysis($database,$lot_number)
  {
    $sql=<<<end_html
   Select
`Yield`,
`Total`,
`Inspect_Total`,
`Inspect_NG`,
`Inspect_Total`-`Inspect_NG`,
`Length_NG`,
`OK`,
`Twist_NG`,
`Inspect_NG`,
round(`Reshape_Rate`+0,2),
`Reshape_Total`,
`Reshape_NG`,
round((`Reshape_Total`-`Reshape_NG`)/`Reshape_Total`*100,2) from $database.analysis where `lot_number`='$lot_number' ;
end_html;
$query=$this->db->query($sql);
 foreach ($query->result_array() as $row)// get the data for NGS
 {
  $data=array_values($row);
 }
 return $data;
 
  }


//*******************end

  function sort_error($database,$item,$lot_number)
  {
    $sql=<<<end_html
    Select * from $database.test_data where $item='1' and `lot_number`='$lot_number';
end_html;
  }

  function judge_col($database,$lot_number)
  {

    $sql=<<<end_html
    SELECT sum(Diameter_Result) as '0',sum(Edge_Wear_Result)as '1',sum(Chips_Result)as '2',
sum(Overlap_Result)as '3',sum(Vertical_Open_Result)as '4',sum(Horizontal_Open_Result)as '5',sum(Chisel_Point_Result)as '6',
sum(Flare_Result)as '7',sum(Negative_Result) as '8',sum(Offset_Result) as '9',sum(Hook_Result) as '10',sum(Layback_Result) as '11',
sum(Web_Thickness_Result)as '12',sum(Taper_Result) as '13',sum(Polish_Result) as '14',sum(Cutting_Lip_Result)as '15',
sum(Linear_Result)as '16',sum(CLD_Result)as '17',
sum(Cut_Result)as '18',sum(Cut_Differ_Result)as '19',sum(CLCA_Result)as '20',sum(AxisPolishNG_Result)as '21'
,sum(Scratch_Result)as '22',sum(ShapeNG_Result) as '23',sum(Ring_Depth_Result) as '24' ,sum(Top_Angle_Result) as '25 ',
sum(UC_Length_Result) as '26 '
FROM (

SELECT CASE WHEN `Diameter_Result` > 0 THEN 1 ELSE 0 END AS Diameter_Result,
CASE WHEN `Edge_Wear_Result`> 0 THEN 1 ELSE 0 END AS Edge_Wear_Result,
CASE WHEN `Chips_Result`> 0 THEN 1 ELSE 0 END AS Chips_Result,
CASE WHEN `Overlap_Result`> 0 THEN 1 ELSE 0 END AS Overlap_Result,
CASE WHEN `Vertical_Open_Result`> 0 THEN 1 ELSE 0 END AS Vertical_Open_Result,
CASE WHEN `Horizontal_Open_Result`> 0 THEN 1 ELSE 0 END AS Horizontal_Open_Result,
CASE WHEN `Chisel_Point_Result`> 0 THEN 1 ELSE 0 END AS Chisel_Point_Result,
CASE WHEN `Flare_Result`> 0 THEN 1 ELSE 0 END AS Flare_Result,
CASE WHEN `Negative_Result`> 0 THEN 1 ELSE 0 END AS Negative_Result,
CASE WHEN `Offset_Result`> 0 THEN 1 ELSE 0 END AS Offset_Result,
CASE WHEN `Hook_Result`> 0 THEN 1 ELSE 0 END AS Hook_Result,
CASE WHEN `Layback_Result`> 0 THEN 1 ELSE 0 END AS Layback_Result,
CASE WHEN `Web_Thickness_Result`> 0 THEN 1 ELSE 0 END AS Web_Thickness_Result,
CASE WHEN `Taper_Result`> 0 THEN 1 ELSE 0 END AS Taper_Result,
CASE WHEN `Polish_Result`> 0 THEN 1 ELSE 0 END AS Polish_Result,
CASE WHEN `Cutting_Lip_Result`> 0 THEN 1 ELSE 0 END AS Cutting_Lip_Result,
CASE WHEN `Linear_Result`> 0 THEN 1 ELSE 0 END AS Linear_Result,
CASE WHEN `CLD_Result`> 0 THEN 1 ELSE 0 END AS CLD_Result,
CASE WHEN `Cut_Result`> 0 THEN 1 ELSE 0 END AS Cut_Result,
CASE WHEN `Cut_Differ_Result`> 0 THEN 1 ELSE 0 END AS Cut_Differ_Result,
CASE WHEN `CLCA_Result`> 0 THEN 1 ELSE 0 END AS CLCA_Result,
CASE WHEN `AxisPolishNG_Result`> 0 THEN 1 ELSE 0 END AS AxisPolishNG_Result,
CASE WHEN `Scratch_Result`> 0 THEN 1 ELSE 0 END AS Scratch_Result,
CASE WHEN `ShapeNG_Result`> 0 THEN 1 ELSE 0 END AS ShapeNG_Result,
CASE WHEN `Ring_Depth_Result`>0 THEN 1 ELSE 0 END AS Ring_Depth_Result,
CASE WHEN `Top_Angle_Result`>0 THEN 1 ELSE 0 END AS Top_Angle_Result,
CASE WHEN `UC_Length_Result`>0 THEN 1 ELSE 0 END AS UC_Length_Result

FROM $database.test_data WHERE `Lot_Number` = '$lot_number'
) as A
end_html;
$query=$this->db->query($sql);
 $judgement=[];
 foreach($query->result_array() as $key=>$row)//判斷哪些欄位
  {
    for($i=0;$i<25;$i++)
    {
      $string="'".$i."'";
     $judgement[$i]=$row[$i];
    }
      
  
  }
  return $judgement;
}
function col_head($judge_col)
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
    ,$this->lang->line('Ring_Depth')//'補環深度'
    ,$this->lang->line('Top_Angle')//'鑽尖角'
    ,$this->lang->line('UC_Length')//'UC'
    );
  for($i=0;$i<count($col_head);$i++)
  {
    if($judge_col[$i]==0)
    {
      unset($col_head[$i]);
    }
  }
  return $col_head;
}

function addcol($judge_col)
{
  $col=array('Diameter','Edge_Wear','Chips','Overlap','Vertical_Open','Horizontal_Open','Chisel_Point','Flare','Negative','Offset','Hook','Layback','Web_Thickness','Taper','Polish','Cutting_Lip','Linear','CLD','Cut','Cut_Differ','CLCA','AxisPolishNG','Scratch','ShapeNG','Ring_Depth','Top_Angle','UC_Length');
  $Output_string="";
  for($i=0;$i<25;$i++)
  {
    if($judge_col[$i]>0)
      {
        $Output_string.=",".$col[$i]." as '".($i+6)."'";
      }
  }
  return $Output_string;
}
}
?>