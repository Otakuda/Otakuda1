<?
Class Hello_mode extends CI_Model
{
	public function getProfile($name,$age)
	{
		return array("fullname"=>$name,"age"=>$age);
	}
}
?>