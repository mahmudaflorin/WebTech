<?php
require_once('home.php');
if(isset($_SESSION["ut_id"]))
{
	if($_SESSION["ut_id"]==1)
	{
		Home::headeradmin();
		Home::Header("customer");
		Home::Category();
		Home::Footer();
	}
	else
	{
		$_SESSION["ut_id"]=2;
		Home::Header("customer");
		Home::Category();
		Home::Footer();
	}
}
else
{
	$_SESSION["ut_id"]=2;
	Home::Header("customer");
	Home::Category();
	Home::Footer();
}
?>

