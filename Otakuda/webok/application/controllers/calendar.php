<?
class calendar extends CI_Controller
{
  public function index()
  {
  	$this->load->library('calendar');
  	if( ! ini_get('date.timezone') )
{
   date_default_timezone_set('GMT');
} 
$this->load->library('calendar');
$month   = '2';
$year    = '2012';
$lastday = cal_days_in_month(CAL_GREGORIAN, $month, $year);
for ($day = 1; $day <= $lastday; $day++) {
    $prefix = ($day < 10) ? '0':'';
    $data[$day] =  'http://example.com/news/article/'.$year.'/'.$prefix.$day.'/';
}       
echo $this->calendar->generate($year, $month , $data);

  }
}


?>