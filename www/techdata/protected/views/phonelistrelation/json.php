<?php
 	header('Access-Control-Allow-Origin:*');
    $this->layout = "noThemes";
	header('Content-Type: application/json');
	$objConnect = mysql_connect("localhost","root","T@s007");
	$objDB = mysql_select_db("phonelist");
	mysql_query("SET NAMES UTF8");

 $strSQL = "SELECT d.department as groupname, p.name as name,pr.departmentid as groupid, pr.userid as userid  FROM phonelistrelation pr,phone p, department d where pr.userid = p.id and pr.departmentid = d.departmentid  ;";

	$objQuery = mysql_query($strSQL);
	$intNumField = mysql_num_fields($objQuery);
	$resultArray = array();
	while($obResult = mysql_fetch_array($objQuery))
	{
		$arrCol = array();
		for($i=0;$i<$intNumField;$i++)
		{
			$arrCol[mysql_field_name($objQuery,$i)] = $obResult[$i];
		}
		array_push($resultArray,$arrCol);
	}	
	mysql_close($objConnect);
	if($_GET['whoareyou'])echo json_encode(array("success" => true,"drivers"=>$resultArray));
/**/
	  
?>