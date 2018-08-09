<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<link href="<? echo base_url(); ?>/css/Detail.css" rel="stylesheet">
<title>Detail</title>
</head>

<body>
<div style="float:left">
<? echo $database.$lot_number; ?>
<?php echo $html;?>
</div>
<div style=" float:left">
<table>
<tr><td align="center" colspan="4"><? echo $img;?></td></tr>
<tr>
<td>
<button style="width:100px;" id="B_Characteristic"  onclick="change_p('Inspection')"><? echo $this->lang->line('Inspection') ?></button>
</td>
<td>
<button style="width:100px;" id="Blade" onclick="change_p('Pre-Twist')"><? echo $this->lang->line('Pre-Twist') ?></button>
</td>
<td>
<button style="width:100px;" id="A_Characteristic" onclick="change_p('Post-Twist')"><? echo $this->lang->line('Post-Twist') ?></button>
</td>
<td>
<button style="width:100px;" id="A_Characteristic" onclick="change_p('Ring Setting')"><? echo $this->lang->line('Ring Setting') ?></button>	
</td>
<td >
<button style="width:100px;" id="Ring" onclick="change_p('UC')">UC</button>
</td>
</tr>
</table>
<div style="float:left;">
<?php echo $measurement;?>
</div>
</div>

<div style="float:left;" >
<?php echo $Receipes;?>
</div>
</body>
<script>
function change_p(type)
{
	var n=document.getElementById('test_number').value;
	var lot_number=document.getElementById('lot_number').value;
	var database=document.getElementById('database').value;
    var number=6-n.length-1;
	for(i=0;i<=number;i++)
	{
		n="0"+n;
	}
	
	if(type=='Inspection')
	{
	var path="../../"+database+"/Test Data/"+lot_number+'/'+n+'/'+"Inspection.png";
	document.getElementById('main_img').src=path;
	}
	else if(type=='Pre-Twist')
	{
	 var path="../../"+database+"/Test Data/"+lot_number+'/'+n+'/'+"Pre-Twist.png";
	 document.getElementById('main_img').src=path;		
	}
	else if(type=='Post-Twist')
	{
	  var path="../../"+database+"/Test Data/"+lot_number+'/'+n+'/'+"Post-Twist.png";
	  document.getElementById('main_img').src=path;
	}
	else if(type=='Ring Setting')
	{
	  var path="../../"+database+"/Test Data/"+lot_number+'/'+n+'/'+"Ring Setting.png";
	  document.getElementById('main_img').src=path;
	}
	else
	{
	   var path="../../"+database+"/Test Data/"+lot_number+'/'+n+'/'+"UC.png";
	   document.getElementById('main_img').src=path;
	}
	
}
function change_lot_number()
{
	var n=document.getElementById('test_number').value;
	var lot_number=document.getElementById('lot_number').value;
	var database=document.getElementById('database').value;	
	window.location.href = '/?/report/find_detail/'+'/'+database+'/'+lot_number+'/'+n;
}

</script>
</html>