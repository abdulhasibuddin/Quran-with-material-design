<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/Quran/includes/utility.php');


class DALContents
{
	
	function __construct()
	{

	}
	public function getContents()
	{
		$utility = new Utility;
		$sql = "SELECT * FROM `contents` WHERE 1";
		$result = $utility->dbQuery($sql);
		return $result;
	}
}
?>