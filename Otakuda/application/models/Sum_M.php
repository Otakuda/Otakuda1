<?php
class Sum_M extends CI_Model
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

	function Get_lot_number($database,$start,$end)
	{
		$start=str_replace('%20'," ",$start);
		$end=str_replace('%20'," ",$end);
		$html="";
		if($database!='All')
		{
			$sql="Select distinct lot_number FROM $database.recipes_lot_info where `Test_Time` between '$start' and '$end'";
		    $query=$this->db->query($sql);
        
            $html="<select id='lot_number' class='form-control'><option value=All>All</option>";
		    foreach ($query->result_array() as $key=>$row) 
		    {
			   $html.="<option value=".$row['lot_number'].">";
		       $html.=$row['lot_number']."</option>";
		    }

		       $html.="</select>";
		}
		

		return $html;
	}

	function Resolution($Data)
	{
		 $database=$Data[0];
		 $start=$Data[1];
		 $end=$Data[2];
		 
		if(count($Data)==4)
		{
			
		    $lot_number=$Data[3];
            
            $judge="";
            if($lot_number=='All')
            {
            	$judge="";
            }
            else
            {
            	$judge="  Where `lot_number`='$lot_number'";
            }
            $html=$this->Display_Data($database,$start,$end,$judge);
		}
		else
		{
			$query=$this->showdatabase();
            $html="";
			foreach ($query->result_array() as $key => $row)
			{
				$html.=$this->Display_Data($row['Schema'],$start,$end,"");
			}
		}
		return $html;

          
	}
	function Sum_utilization($Data)
	{
		 $database=$Data[0];
		 $start=$Data[1];
		 $end=$Data[2];
         
         $html="";
		 if($database=='All')
		 {
		 	$query=$this->showdatabase();
		 	foreach($query->result_array() as $key=>$row)
		 	{
		 		$html.=$this->Sum_utilization_html($row['Schema'],$start,$end);
		 	}

		 }
		 else
		 {
		 	$html=$this->Sum_utilization_html($database,$start,$end);
		 }

		 return $html;
		 
	}

	function Sum_utilization_html($database,$start,$end)
	{
		 $machine=$this->Get_Database_to_Machine($database);
		 $sql="Select * from $database.system_utilization where `Time_Stamp` between '$start' and '$end'";
         
         $html="";
		 $query=$this->db->query($sql);
		 foreach($query->result_array() as $key=>$row)
		 {
		 	$Days=$row['Days'];
		 	$Hours=$row['Hours'];
		 	$Minutes=$row['Minutes'];
		 	$Seconds=$row['Seconds'];
		 	$utilization=round($row['Utilization'],2).'%';
		 	$Now_time=$row['Time_Stamp'];

		 	$html.=<<<end_html
		 	<tr>
		 	<td>$Now_time</td>
		 	<td>$machine</td>
		 	<td>$utilization</td>
		 	<td>$Days</td>
		 	<td>$Hours</td>
		 	<td>$Minutes</td>
		 	<td>$Seconds</td>
		 	</tr>
end_html;

		 }

		 return $html;
	}
	function utilization($Data)
	{
		 $database=$Data[0];
		 $start=$Data[1];
		 $end=$Data[2];
         
         $html="";
		 if($database=='All')
		 {
		 	$query=$this->showdatabase();
		 	foreach($query->result_array() as $key=>$row)
		 	{
		 		$html.=$this->utilization_html($row['Schema'],$start,$end);
		 	}

		 }
		 else
		 {
		 	$html=$this->utilization_html($database,$start,$end);
		 }

		 return $html;
		 
	}
    
    function utilization_html($database,$start,$end)
    {
    	 $machine=$this->Get_Database_to_Machine($database);
		 $sql="Select * from $database.system_utilization where `Time_Stamp` between '$start' and '$end'";
         
         $html="";
		 $query=$this->db->query($sql);
		 foreach($query->result_array() as $key=>$row)
		 {
		 	$Days=$row['Days'];
		 	$Hours=$row['Hours'];
		 	$Minutes=$row['Minutes'];
		 	$Seconds=$row['Seconds'];
		 	$utilization=round($row['Utilization'],2).'%';
		 	$Now_time=$row['Time_Stamp'];

		 	$html.=<<<end_html
		 	<tr>
		 	<td>$Now_time</td>
		 	<td>$machine</td>
		 	<td>$utilization</td>
		 	<td>$Days</td>
		 	<td>$Hours</td>
		 	<td>$Minutes</td>
		 	<td>$Seconds</td>
		 	</tr>
end_html;

		 }

		 return $html;
    }

    function utilization_report($database,$start,$end)
    {
    	 $machine=$this->Get_Database_to_Machine($database);
    	 $Out_Data=[];$i=0;
		 $sql="Select * from $database.system_utilization where `Time_Stamp` between '$start' and '$end'";
         
         $html="";
		 $query=$this->db->query($sql);
		 foreach($query->result_array() as $key=>$row)
		 {
		 	$Days=$row['Days'];
		 	$Hours=$row['Hours'];
		 	$Minutes=$row['Minutes'];
		 	$Seconds=$row['Seconds'];
		 	$utilization=$row['Utilization'].'%';
		 	$Now_time=$row['Time_Stamp'];

		 	$Out_Data[$i]=[$Now_time,$machine,$utilization,$Days,$Hours,$Minutes,$Seconds];
		 	$i++;
		 }

		 return $Out_Data;
    }

    function Sum_All($Data)
    {
    	$database=$Data[0];
		$start=$Data[1];
		$end=$Data[2];
        $html="";
		$commend=<<<end2
		Select 
`Class`,
round(avg(`Yield`),2) as `Yield`,
sum(`Total`) as `Total`,
sum(`OK`) as `OK`,
sum(`Length_NG`) as `Length_NG`,
sum(`Twist_NG`) as `Twist_NG`,
sum(`UC_NG`) as `UC_NG`,
sum(`Inspect_Total`) as `Inspect_Total`,
sum(`Inspect_NG`) as `Inspect_NG`,
round(avg(`Reshape_Rate`),2) as `Reshape_Rate`,
sum(`Reshape_Total`) as `Reshape_Total`,
sum(`Reshape_NG`) as `Reshape_NG`,
round(avg(`Ring_Yield`),2) as `Ring_Yield`,
sum(`Ring_Total`) as `Ring_Total`,
sum(`Depth_NG`) as `Depth_NG`,
sum(`Push_NG`) as `Push_NG`,
round(avg(`Total_Yield`),2) as `Total_Yield`,
sum(`Top_NG`) as `Top_NG`
from(
%s
) as f
group by `Class`
end2;

		$sql="";
		$i=0;
		if($database=='All')
		{
			$query=$this->showdatabase();
		 	foreach($query->result_array() as $key=>$row)
		 	{
		 		if($i!=0)
		 		{
		 			$sql.="union ".$this->Prepare_Sql($row['Schema'],$start,$end);
		 		}
		 		else
		 		{
		 			$sql.=$this->Prepare_Sql($row['Schema'],$start,$end);
		 		}
		 		
		 		$i++;
		 	}
		    $commend=sprintf($commend,$sql);
		}
		else
		{
			$commend="";
		}
		

		$query=$this->db->query($commend);
		foreach($query->result_array() as $key=>$row)
		{
	     $Class=$row['Class'];
       	 $Yield=$row['Yield'];
       	 $Total=$row['Total'];
       	 $OK=$row['OK'];
       	 $Length_NG=$row['Length_NG'];
       	 $Twist_NG=$row['Twist_NG'];
       	 $UC_NG=$row['UC_NG'];
       	 $Yield=$row['Yield'];
       	 $Inspect_Total=$row['Inspect_Total'];
       	 $Inspect_NG=$row['Inspect_NG'];
       	 $Reshape_Rate=$row['Reshape_Rate'];
       	 $Reshape_Total=$row['Reshape_Total'];
       	 $Reshape_Yield=$row['Reshape_Rate'];
       	 $Reshape_NG=$row['Reshape_NG'];
       	 $Ring_Yield=$row['Ring_Yield'];
       	 $Ring_Total=$row['Ring_Total'];
       	 $Depth_NG=$row['Depth_NG'];
       	 $Push_NG=$row['Push_NG'];
       	 $Total_Yield=$row['Total_Yield'];
       	 $Top_NG=$row['Top_NG'];


       	 $html.=<<<end_html
		    	<tr>		    		    	
		    	<td>$Class</td>
		    	<td>$Yield</td>
		    	<td>$Total</td>
		    	<td>$OK</td>
		    	<td>$Length_NG</td>
		    	<td>$Twist_NG</td>
		    	<td>$Inspect_Total</td>
		    	<td>$Inspect_NG</td>
		    	<td>$Reshape_Rate</td>
		    	<td>$Reshape_Yield</td>
		    	<td>$Reshape_Total</td>
		    	<td>$Reshape_NG</td>
		    	<td>$Ring_Yield</td>
		    	<td>$Ring_Total</td>
		    	<td>$Depth_NG</td>
		    	<td>$Push_NG</td>
		    	</tr>
end_html;
		}
		return $html;

    }
    function Prepare_Sql($database,$start,$end)
    {
    	$sql=<<<end_html
    	Select 
`Class`,
round(avg(`Yield`),2) as `Yield`,
sum(`Total`) as `Total`,
sum(`OK`) as `OK`,
sum(`Length_NG`) as `Length_NG`,
sum(`Twist_NG`) as `Twist_NG`,
sum(`UC_NG`) as `UC_NG`,
sum(`Inspect_Total`) as `Inspect_Total`,
sum(`Inspect_NG`) as `Inspect_NG`,
round(avg(`Reshape_Rate`),2) as `Reshape_Rate`,
sum(`Reshape_Total`) as `Reshape_Total`,
sum(`Reshape_NG`) as `Reshape_NG`,
round(avg(`Ring_Yield`),2) as `Ring_Yield`,
sum(`Ring_Total`) as `Ring_Total`,
sum(`Depth_NG`) as `Depth_NG`,
sum(`Push_NG`) as `Push_NG`,
round(avg(`Total_Yield`),2) as `Total_Yield`,
sum(`Top_NG`) as `Top_NG`

from 
(
Select * from(
		    Select a.`start`,a.`end`,a.`Class`,b.* from(
SELECT `lot_number`,substring(`lot_number`,10,1) as `Class`,max(`test_time`)as `end`,min(`test_time`)as `start` FROM $database.test_data where `Test_Time` between '$start' and '$end' group by `lot_number`)as a
left join
(Select * from $database.analysis where `lot_number` in (Select distinct lot_number FROM $database.recipes_lot_info where `Test_Time` between '$start' and '$end') ) as b
on a.`lot_number`=b.`lot_number`) as c )as d Group by `Class`
end_html;

        return $sql;
    }

    function Sum($Data)
    {
    	$database=$Data[0];
		$start=$Data[1];
		$end=$Data[2];
       
		$html="";
		 if($database=='All')
		 {
		 	$query=$this->showdatabase();
		 	foreach($query->result_array() as $key=>$row)
		 	{

		 		$html.=$this->Sum_by_Class($row['Schema'],$start,$end);
		 	}

		 }
		 else
		 {
		 	$html=$this->Sum_by_Class($database,$start,$end);
		 }

		 return $html;
    }

    function Sum_by_Class($database,$start,$end)
    {
    	$html="";
    	$machine=$this->Get_Database_to_Machine($database);
    	$sql=<<<end_html
    	Select 
`Class`,
round(avg(`Yield`),2) as `Yield`,
sum(`Total`) as `Total`,
sum(`OK`) as `OK`,
sum(`Length_NG`) as `Length_NG`,
sum(`Twist_NG`) as `Twist_NG`,
sum(`UC_NG`) as `UC_NG`,
sum(`Inspect_Total`) as `Inspect_Total`,
sum(`Inspect_NG`) as `Inspect_NG`,
round(avg(`Reshape_Rate`),2) as `Reshape_Rate`,
sum(`Reshape_Total`) as `Reshape_Total`,
sum(`Reshape_NG`) as `Reshape_NG`,
round(avg(`Ring_Yield`),2) as `Ring_Yield`,
sum(`Ring_Total`) as `Ring_Total`,
sum(`Depth_NG`) as `Depth_NG`,
sum(`Push_NG`) as `Push_NG`,
round(avg(`Total_Yield`),2) as `Total_Yield`,
sum(`Top_NG`) as `Top_NG`

from 
(
Select * from(
		    Select a.`start`,a.`end`,a.`Class`,b.* from(
SELECT `lot_number`,substring(`lot_number`,10,1) as `Class`,max(`test_time`)as `end`,min(`test_time`)as `start` FROM $database.test_data where `Test_Time` between '$start' and '$end' group by `lot_number`)as a
left join
(Select * from $database.analysis where `lot_number` in (Select distinct lot_number FROM $database.recipes_lot_info where `Test_Time` between '$start' and '$end') ) as b
on a.`lot_number`=b.`lot_number`) as c )as d Group by `Class`
end_html;
       $query=$this->db->query($sql);

       foreach ($query->result_array() as $key => $row)
       {
       	 $Class=$row['Class'];
       	 $Yield=$row['Yield'];
       	 $Total=$row['Total'];
       	 $OK=$row['OK'];
       	 $Length_NG=$row['Length_NG'];
       	 $Twist_NG=$row['Twist_NG'];
       	 $UC_NG=$row['UC_NG'];
       	 $Yield=$row['Yield'];
       	 $Inspect_Total=$row['Inspect_Total'];
       	 $Inspect_NG=$row['Inspect_NG'];
       	 $Reshape_Rate=$row['Reshape_Rate'];
       	 $Reshape_Total=$row['Reshape_Total'];
       	 $Reshape_Yield=$row['Reshape_Rate'];
       	 $Reshape_NG=$row['Reshape_NG'];
       	 $Ring_Yield=$row['Ring_Yield'];
       	 $Ring_Total=$row['Ring_Total'];
       	 $Depth_NG=$row['Depth_NG'];
       	 $Push_NG=$row['Push_NG'];
       	 $Total_Yield=$row['Total_Yield'];
       	 $Top_NG=$row['Top_NG'];


       	 $html.=<<<end_html
		    	<tr>
		    	<td>$machine</td>		    	
		    	<td>$Class</td>
		    	<td>$Yield</td>
		    	<td>$Total</td>
		    	<td>$OK</td>
		    	<td>$Length_NG</td>
		    	<td>$Twist_NG</td>
		    	<td>$Inspect_Total</td>
		    	<td>$Inspect_NG</td>
		    	<td>$Reshape_Rate</td>
		    	<td>$Reshape_Yield</td>
		    	<td>$Reshape_Total</td>
		    	<td>$Reshape_NG</td>
		    	<td>$Ring_Yield</td>
		    	<td>$Ring_Total</td>
		    	<td>$Depth_NG</td>
		    	<td>$Push_NG</td>
		    	</tr>
end_html;


       }
       return $html;

    }

	function Display_Data($database,$start,$end,$judge)
	{
		    $machine=$this->Get_Database_to_Machine($database);
            $html="";
		    $sql=<<<end_html
		    Select * from(
		    Select a.`start`,a.`end`,timestampdiff(minute,a.`start`,a.`end`)/60 as `total_time`,b.* from(
SELECT `lot_number`,max(`test_time`)as `end`,min(`test_time`)as `start` FROM $database.test_data where `Test_Time` between '$start' and '$end' group by `lot_number`)as a
left join
(Select * from $database.analysis where `lot_number` in (Select distinct lot_number FROM $database.recipes_lot_info where `Test_Time` between '$start' and '$end') ) as b
on a.`lot_number`=b.`lot_number`) as c  $judge;
end_html;
            $query=$this->db->query($sql);
		    foreach ($query->result_array() as $key => $row)
		    {
		    	$Lot_number=$row['Lot_number'];
		    	$start=$row['start'];
		    	$end=$row['end'];
		    	$Yield=$row['Yield'].'%';
		    	$Total=$row['Total'];
		    	$OK=$row['OK'];
		    	$Length_NG=$row['Length_NG'];
		    	$Twist_NG=$row['Twist_NG'];
		    	$Inspect_Total=$row['Inspect_Total'];
		    	$Inspect_NG=$row['Inspect_NG'];
		    	$Reshape_Rate=round((float)$row['Reshape_Rate'],2).'%';
		    	$Reshape_Total=$row['Reshape_Total'];
		    	$Reshape_NG=$row['Reshape_NG'];
		    	$Ring_Yield=$row['Ring_Yield'].'%';
		    	$Ring_Total=$row['Ring_Total'];
		    	$Depth_NG=$row['Depth_NG'];
		    	$Push_NG=$row['Push_NG'];
		    	$total_time=$row['total_time'];
		    	if( ($Reshape_Total-$Reshape_NG)<=0)
		    	{
		    		$Reshape_Yield='0%';
		    	}
		    	else
		    	{
		    		$Reshape_Yield=round(($Reshape_Total-$Reshape_NG)*100/$Reshape_Total,2).'%';
		    	}
		    	
		    	$html.=<<<end_html
		    	<tr>
		    	<td>$machine</td>
		    	<td>$Lot_number</td>
		    	<td>$start</td>
		    	<td>$end</td>
		    	<td>$total_time</td>
		    	<td>$Yield</td>
		    	<td>$Total</td>
		    	<td>$OK</td>
		    	<td>$Length_NG</td>
		    	<td>$Twist_NG</td>
		    	<td>$Inspect_Total</td>
		    	<td>$Inspect_NG</td>
		    	<td>$Reshape_Rate</td>
		    	<td>$Reshape_Yield</td>
		    	<td>$Reshape_Total</td>
		    	<td>$Reshape_NG</td>
		    	<td>$Ring_Yield</td>
		    	<td>$Ring_Total</td>
		    	<td>$Depth_NG</td>
		    	<td>$Push_NG</td>
		    	</tr>
end_html;
	       }

	       return $html;
	  }


	  function Prepare_Data($Data)
	  {
	  	 $database=$Data[0];
		 $start=$Data[1];
		 $end=$Data[2];
		 $Table=[];
		if(count($Data)==4)
		{
			
		    $lot_number=$Data[3];            
            $judge="";
            if($lot_number=='All')
            {
            	$judge="";
            }
            else
            {
            	$judge="  Where `lot_number`='$lot_number'";
            }
            $Table=$this->Trans_Data($database,$start,$end,$judge);
		}
		else
		{
			$query=$this->showdatabase();
			$i=0;            
			foreach ($query->result_array() as $key => $row)
			{
				$database=$row['Schema'];
				$Out_data=$this->Trans_Data($database,$start,$end,"");
				
				for($j=0;$j<count($Out_data);$j++)
				{
					$Table[$i]=$Out_data[$j];
					$i++;
				}
			}
		}
		return $Table;
	  }

	  function Prepare_utilization_Data($Data)
	  {
	  	 $database=$Data[0];
		 $start=$Data[1];
		 $end=$Data[2];
         $Table=[];
		 if($database=='All')
		 {
		 	$query=$this->showdatabase();
		 	$i=0;
		 	foreach($query->result_array() as $key=>$row)
		 	{
		 		$database=$row['Schema'];

		 		$Out_data=$this->utilization_report($database,$start,$end);
				
				for($j=0;$j<count($Out_data);$j++)
				{
					$Table[$i]=$Out_data[$j];
					$i++;
				}

		 	}
		 }
		 else
		 {
		 	$Table=$this->utilization_report($database,$start,$end);
		 }
		 return $Table;
	  }

	  function Trans_Data($database,$start,$end,$judge)
	  {
	  	    $i=0;
	  	    $Data=[];
	  	    $machine=$this->Get_Database_to_Machine($database);
            $html="";
		    $sql=<<<end_html
		    Select * from(
		    Select a.`start`,a.`end`,b.* from(
SELECT `lot_number`,max(`test_time`)as `start`,min(`test_time`)as `end` FROM $database.test_data where `Test_Time` between '$start' and '$end' group by `lot_number`)as a
left join
(Select * from $database.analysis where `lot_number` in (Select distinct lot_number FROM $database.recipes_lot_info where `Test_Time` between '$start' and '$end') ) as b
on a.`lot_number`=b.`lot_number`) as c  $judge;
end_html;
            $query=$this->db->query($sql);
		    foreach ($query->result_array() as $key => $row)
		    {
		    	$Lot_number=$row['Lot_number'];
		    	$start=$row['start'];
		    	$end=$row['end'];
		    	$Yield=$row['Yield'].'%';
		    	$Total=$row['Total'];
		    	$OK=$row['OK'];
		    	$Length_NG=$row['Length_NG'];
		    	$Twist_NG=$row['Twist_NG'];
		    	$Inspect_Total=$row['Inspect_Total'];
		    	$Inspect_NG=$row['Inspect_NG'];
		    	$Reshape_Rate=round((float)$row['Reshape_Rate'],2).'%';
		    	$Reshape_Total=$row['Reshape_Total'];
		    	$Reshape_NG=$row['Reshape_NG'];
		    	$Ring_Yield=$row['Ring_Yield'].'%';
		    	$Ring_Total=$row['Ring_Total'];
		    	$Depth_NG=$row['Depth_NG'];
		    	$Push_NG=$row['Push_NG'];
		    	if( ($Reshape_Total-$Reshape_NG)<=0)
		    	{
		    		$Reshape_Yield='0%';
		    	}
		    	else
		    	{
		    		$Reshape_Yield=round(($Reshape_Total-$Reshape_NG)*100/$Reshape_Total,2).'%';
		    	}
		    	$Data[$i]=[$machine,$Lot_number,$start,$end,$Yield,$Total,$OK,$Length_NG,$Twist_NG,$Inspect_Total,$Inspect_NG,$Reshape_Rate,$Reshape_Yield,$Reshape_Total,
		    	       $Reshape_NG,$Ring_Yield,$Ring_Total,$Depth_NG,$Push_NG];
		    	$i++;

		    	
	       }

	       return $Data;
	  }

	  function Get_Report_Header()
	  {
	  	  $Header=[ $this->lang->line('Machine'),
                    $this->lang->line('lot_number'),
                    $this->lang->line('Start_time'),
                    $this->lang->line('End_time'),
                    $this->lang->line('Yield'),
                    $this->lang->line('Total'),
                    $this->lang->line('OK'),
                    $this->lang->line('Length_NG'),
                    $this->lang->line('Twist_NG'),
                    $this->lang->line('Inspect_Total'),
                    $this->lang->line('Inspect_NG'),
                    $this->lang->line('Reshape_Rate'),
                    $this->lang->line('Reshape_ok_Rate'),
                    $this->lang->line('Reshape_Total'),
                    $this->lang->line('Reshape_NG'),
                    $this->lang->line('Ring_Yield'),
                    $this->lang->line('Ring_Total'),
                    $this->lang->line('Depth_NG'),
                    $this->lang->line('Ring_NG')
                    ];
           return $Header;
	  }
	  function Reshape_NGs_analysis($Data)
	  {
	  	 $database=$Data[0];
		 $start=$Data[1];
		 $end=$Data[2];
         $i=0;
         
         
         $user_object=new new_object();
         $user_object->NGs_Table=[];
         $user_object->Reshape_NGs_Table=[];
         $user_object->time=0;
		 if($database=='All')
		 {
		 	$query=$this->showdatabase();
		 	$i=0;
		 	foreach($query->result_array() as $key=>$row)
		 	{
		 		$database=$row['Schema'];

		 		$Out_object=$this->Prepare_String_to_Array($database,$start,$end,$user_object);
				$user_object=$Out_object;
				
		 	}
		 }
		 else
		 {
		 	$Out_object=$this->Prepare_String_to_Array($database,$start,$end,$user_object);
		 }
		 $Big_Table=$user_object->Reshape_NGs_Table;
		 $Seconde_Table=$this->Analysis_by_Machine_Class($Big_Table,2,1);
		 $Final_Table=$this->Analysis_by_Class($Seconde_Table,1);

		 $By_Class_Html=$this->By_Class_Header().$this->Array_to_Html($Final_Table)."</table>";
		 $By_Class_Machine_Html=$this->By_Class_Machine_Header().$this->Array_to_Html($Seconde_Table)."</table>";
		 $By_Lot_Html=$this->NGs_header().$this->Array_to_Html($Big_Table)."</table>";

		 return $By_Class_Html.$By_Class_Machine_Html.$By_Lot_Html;
		 
	  }

	  function NGs_analysis($Data)
	  {
	  	 $database=$Data[0];
		 $start=$Data[1];
		 $end=$Data[2];
         $i=0;
         
         
         $user_object=new new_object();
         $user_object->NGs_Table=[];
         $user_object->Reshape_NGs_Table=[];
         $user_object->time=0;
		 if($database=='All')
		 {
		 	$query=$this->showdatabase();
		 	$i=0;
		 	foreach($query->result_array() as $key=>$row)
		 	{
		 		$database=$row['Schema'];

		 		$Out_object=$this->Prepare_String_to_Array($database,$start,$end,$user_object);
				$user_object=$Out_object;
				
		 	}
		 }
		 else
		 {
		 	$Out_object=$this->Prepare_String_to_Array($database,$start,$end,$user_object);
		 }
		 $Big_Table=$user_object->NGs_Table;
		 $Seconde_Table=$this->Analysis_by_Machine_Class($Big_Table,2,1);
		 $Final_Table=$this->Analysis_by_Class($Seconde_Table,1);

		 $By_Class_Html=$this->By_Class_Header().$this->Array_to_Html($Final_Table)."</table>";
		 $By_Class_Machine_Html=$this->By_Class_Machine_Header().$this->Array_to_Html($Seconde_Table)."</table>";
		 $By_Lot_Html=$this->NGs_header().$this->Array_to_Html($Big_Table)."</table>";

		 return $By_Class_Html.$By_Class_Machine_Html.$By_Lot_Html;
		 
	  }

	  function Prepare_String_to_Array($database,$start,$end,$user_object)
	  {
	  	$sql=<<<end_html
	  	Select `lot_number`,substring(`lot_number`,10,1) as `Class`,NGs,Reshape_NGs from $database.analysis where `Lot_number` in(
        Select `Lot_Number` from $database.recipes_lot_info  where `Test_Time` between '$start' and '$end');
end_html;
        $machine=$this->Get_Database_to_Machine($database);
        $query=$this->db->query($sql);
         
        $NGs_Table=$user_object->NGs_Table;
        $Reshape_NGs_Table=$user_object->Reshape_NGs_Table;
        $i=$user_object->time;
        foreach ($query->result_array() as $key => $row)
        {
        	$NGs = explode(",", (string)$row['NGs']);
        	$NGs_Table[$i]=array_merge(array($row['lot_number'],$row['Class'],$machine),$NGs); 

        	$Reshape_NGs = explode(",", (string)$row['Reshape_NGs']);
        	$Reshape_NGs_Table[$i]=array_merge(array($row['lot_number'],$row['Class'],$machine),$Reshape_NGs);      	
        	$i++;

        }
        $user_object->NGs_Table=$NGs_Table;
        $user_object->Reshape_NGs_Table=$Reshape_NGs_Table;
        $user_object->time=$i;

        return $user_object;
	  }

	  function Array_to_Html($Data)
	  {
	  	$html="";
	  	for($i=0;$i<count($Data);$i++)
	  	{
	  		$html.="<tr>";
	  		for($j=0;$j<count($Data[$i]);$j++)
	  		{
	  			$html.="<td>".$Data[$i][$j]."</td>";
	  		}
	  		$html.="</tr>";
	  	}

	  	return $html;		

	  }

	  function Analysis_by_Machine_Class($Table,$col,$col2)
	  {
	  	$unique=array_values(array_unique(array_column($Table,$col)));
         
        $Temp=[];$x=0;
        $Temp2=[];
        $Out_data=[];
        
	  	for($i=0;$i<count($unique);$i++)
	  	{
	  		$k=0;$Temp=[];
	  		for($j=0;$j<count($Table);$j++)
	  		{

	  			if($Table[$j][$col]==$unique[$i])
	  			{
	  				$Temp[$k]=$Table[$j];
	  				$k++;
	  			}               
                
	  		}
	  		    $unique2=array_values(array_unique(array_column($Temp,$col2)));
                    
                for($m=0;$m<count($unique2);$m++)
                {
                	$l=0;
                	for($n=0;$n<count($Temp);$n++)
                	{
                		if($Temp[$n][$col2]==$unique2[$m])
                	    {
                		    $Temp2[$l]=$Temp[$n];
                		    $l++;
                	    }                
                	}
                	if(count($Temp2)>0)
                	{
                		$Out_data[$x]=$this->Array_sum($Temp2,3);
                		$x++;
                	}
                }

	  	}
	  	return $Out_data;
	  	
	  }

	  function Analysis_by_Class($Table,$col)
	  {
	  	$unique=array_values(array_unique(array_column($Table,$col)));
         
        $Temp=[];$x=0;
        $Temp2=[];
        $Out_data=[];
        
	  	for($i=0;$i<count($unique);$i++)
	  	{
	  		$k=0;$Temp=[];
	  		for($j=0;$j<count($Table);$j++)
	  		{

	  			if($Table[$j][$col]==$unique[$i])
	  			{
	  				$Temp[$k]=$Table[$j];
	  				$k++;
	  			}               
                
	  		}
	  		if(count($Temp)>0)
             {
                $Out_data[$x]=$this->Final_sum($Temp,2);
                $x++;
             }

	  	}
	  	return $Out_data;
	  	
	  }

	  function Array_sum($Table,$squence)
	  {
	  	 $Out_data=[];
	  	 for($i=0;$i<sizeof($Table[0])-$squence;$i++)
	  	 {
	  	 	$Out_data[$i]=array_sum(array_column($Table, $i+$squence));
	  	 }
	  	 array_unshift($Out_data, $Table[0][2],$Table[0][1]);
	  	 return $Out_data;
	  }

	  function Final_sum($Table,$squence)
	  {
	  	 $Out_data=[];
	  	 for($i=0;$i<sizeof($Table[0])-$squence;$i++)
	  	 {
	  	 	$Out_data[$i]=array_sum(array_column($Table, $i+$squence));
	  	 }
	  	 array_unshift($Out_data,$Table[0][1]);
	  	 return $Out_data;
	  }

	  function NGs_header()
	  {
	  	$html=<<<end_html
	  	<table style="border:3px black solid;padding:5px;" rules="all" cellpadding='5';>
end_html;
        $html.="<th>".$this->lang->line('lot_number')."</th>";
        $html.="<th>".$this->lang->line('Work_Type')."</th>";
        $html.="<th>".$this->lang->line('Machine')."</th>";
        $html.="<th>".$this->lang->line('Diameter')."</th>";
        $html.="<th>".$this->lang->line('Edge_Wear')."</th>";
        $html.="<th>".$this->lang->line('Chips')."</th>";
        $html.="<th>".$this->lang->line('Overlap')."</th>";
        $html.="<th>".$this->lang->line('Vertical Open')."</th>";
        $html.="<th>".$this->lang->line('Honizontal Open')."</th>";
        $html.="<th>".$this->lang->line('Chisel_Point')."</th>";
        $html.="<th>".$this->lang->line('Flare')."</th>";
        $html.="<th>".$this->lang->line('Negative')."</th>";
        $html.="<th>".$this->lang->line('offset')."</th>";
        $html.="<th>".$this->lang->line('Hook')."</th>";
        $html.="<th>".$this->lang->line('Layback')."</th>";
        $html.="<th>".$this->lang->line('Web_Thickness')."</th>";
        $html.="<th>".$this->lang->line('Taper')."</th>";
        $html.="<th>".$this->lang->line('Polish')."</th>";
        $html.="<th>".$this->lang->line('Cutting_Lip')."</th>";
        $html.="<th>".$this->lang->line('Linear')."</th>";
        $html.="<th>".$this->lang->line('CLD')."</th>";
        $html.="<th>".$this->lang->line('Cut')."</th>";
        $html.="<th>".$this->lang->line('Cut_Differ')."</th>";
        $html.="<th>".$this->lang->line('CLCA')."</th>";
        $html.="<th>".$this->lang->line('AxisPolishNG')."</th>";
        $html.="<th>".$this->lang->line('Scratch')."</th>";
        $html.="<th>".$this->lang->line('Shape NG')."</th>";
        $html.="</tr>";

        return $html;

	  }

	  function By_Class_Machine_Header()
	  {
	  	$html=<<<end_html
	  	<table style="border:3px black solid;padding:5px;" rules="all" cellpadding='5';>
end_html;
        $html.="<th>".$this->lang->line('Machine')."</th>";
        $html.="<th>".$this->lang->line('Work_Type')."</th>";
        $html.="<th>".$this->lang->line('Diameter')."</th>";
        $html.="<th>".$this->lang->line('Edge_Wear')."</th>";
        $html.="<th>".$this->lang->line('Chips')."</th>";
        $html.="<th>".$this->lang->line('Overlap')."</th>";
        $html.="<th>".$this->lang->line('Vertical Open')."</th>";
        $html.="<th>".$this->lang->line('Honizontal Open')."</th>";
        $html.="<th>".$this->lang->line('Chisel_Point')."</th>";
        $html.="<th>".$this->lang->line('Flare')."</th>";
        $html.="<th>".$this->lang->line('Negative')."</th>";
        $html.="<th>".$this->lang->line('offset')."</th>";
        $html.="<th>".$this->lang->line('Hook')."</th>";
        $html.="<th>".$this->lang->line('Layback')."</th>";
        $html.="<th>".$this->lang->line('Web_Thickness')."</th>";
        $html.="<th>".$this->lang->line('Taper')."</th>";
        $html.="<th>".$this->lang->line('Polish')."</th>";
        $html.="<th>".$this->lang->line('Cutting_Lip')."</th>";
        $html.="<th>".$this->lang->line('Linear')."</th>";
        $html.="<th>".$this->lang->line('CLD')."</th>";
        $html.="<th>".$this->lang->line('Cut')."</th>";
        $html.="<th>".$this->lang->line('Cut_Differ')."</th>";
        $html.="<th>".$this->lang->line('CLCA')."</th>";
        $html.="<th>".$this->lang->line('AxisPolishNG')."</th>";
        $html.="<th>".$this->lang->line('Scratch')."</th>";
        $html.="<th>".$this->lang->line('Shape NG')."</th>";
        $html.="</tr>";

        return $html;
	  }

	  function By_Class_Header()
	  {
	  	$html=<<<end_html
	  	<table style="border:3px black solid;padding:5px;" rules="all" cellpadding='5';>
end_html;
        
        $html.="<th>".$this->lang->line('Work_Type')."</th>";
        $html.="<th>".$this->lang->line('Diameter')."</th>";
        $html.="<th>".$this->lang->line('Edge_Wear')."</th>";
        $html.="<th>".$this->lang->line('Chips')."</th>";
        $html.="<th>".$this->lang->line('Overlap')."</th>";
        $html.="<th>".$this->lang->line('Vertical Open')."</th>";
        $html.="<th>".$this->lang->line('Honizontal Open')."</th>";
        $html.="<th>".$this->lang->line('Chisel_Point')."</th>";
        $html.="<th>".$this->lang->line('Flare')."</th>";
        $html.="<th>".$this->lang->line('Negative')."</th>";
        $html.="<th>".$this->lang->line('offset')."</th>";
        $html.="<th>".$this->lang->line('Hook')."</th>";
        $html.="<th>".$this->lang->line('Layback')."</th>";
        $html.="<th>".$this->lang->line('Web_Thickness')."</th>";
        $html.="<th>".$this->lang->line('Taper')."</th>";
        $html.="<th>".$this->lang->line('Polish')."</th>";
        $html.="<th>".$this->lang->line('Cutting_Lip')."</th>";
        $html.="<th>".$this->lang->line('Linear')."</th>";
        $html.="<th>".$this->lang->line('CLD')."</th>";
        $html.="<th>".$this->lang->line('Cut')."</th>";
        $html.="<th>".$this->lang->line('Cut_Differ')."</th>";
        $html.="<th>".$this->lang->line('CLCA')."</th>";
        $html.="<th>".$this->lang->line('AxisPolishNG')."</th>";
        $html.="<th>".$this->lang->line('Scratch')."</th>";
        $html.="<th>".$this->lang->line('Shape NG')."</th>";
        $html.="</tr>";

        return $html;
	  }
	 

      

	

}

class new_object
{
    public $NGs_Table;
    public $Reshape_NGs_Table;
    Public $time=0;
}