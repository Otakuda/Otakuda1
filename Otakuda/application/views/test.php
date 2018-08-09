<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script type="application/javascript" src="/laypage-v1.3/laypage/laypage.js"></script>
<style type="text/css">
#c
{
	style="height:150px;width:200px;" align='center' valign="middle"
}
</style>
</head>

<body >
<ul id="biuuu_city_list"></ul>

<?
$tmpl = array (
                    'table_open'          => '<table border="1" cellpadding="4" cellspacing="0">',

                    'heading_row_start'   => '<tr>',
                    'heading_row_end'     => '</tr>',
                    'heading_cell_start'  => '<th>',
                    'heading_cell_end'    => '</th>',

                    'row_start'           => '<tr bgcolor="#666666">',
                    'row_end'             => '</tr>',
                    'cell_start'          => '<td>',
                    'cell_end'            => '</td>',

                    'row_alt_start'       => '<tr bgcolor="#FFFFFF">',
                    'row_alt_end'         => '</tr>',
                    'cell_alt_start'      => '<td>',
                    'cell_alt_end'        => '</td>',

                    'table_close'         => '</table>'
              );

$this->table->set_template($tmpl);
$string="Select 
no,FLOWCARD_NO,ETI_NO,SEQNO,QTY,LABEL_CNT,WASHQTY,OUTQTY,box,machine,workorder,Iniwashtime,cust_seqno,special_code
from receivedetail where `flowcard_no`='15-25401a9-290';";
$query = $this->db->query($string);
$this->table->set_heading(array('no', '流程卡號', 'Eti_no','序號','數量','標籤','已清洗','已出貨','數量','箱號','機型','清洗次數','TSMC','特殊編碼'));
echo $this->table->generate($query);
 ?>

</body>
</html>