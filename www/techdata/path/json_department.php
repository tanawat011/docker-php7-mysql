<?php
 	header('Access-Control-Allow-Origin:*');
    #$this->layout = "noThemes";
	header('Content-Type: application/json');
	$objConnect = mysql_connect("localhost","root","T@s007");
	$objDB = mysql_select_db("phonelist");
	mysql_query("SET NAMES UTF8");
	
    $strSQL = "SELECT departmentid,department,(select count(*) from phonelistrelation where phonelistrelation.departmentid = d.departmentid) as entryid FROM department d where isActive = 1 and entryid > 0 order by department";
    if(isset($_GET['dept'])) $strSQL = "SELECT departmentid,department,(select count(*) from phonelistrelation where phonelistrelation.departmentid = d.departmentid) as entryid FROM department d where isActive = 1 and entryid > 0 and d.departmentid = '".$_GET['dept']."' order by department";

 //echo $strSQL;
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
	if(isset($_GET['whoareyou']) && $_GET['whoareyou'] == "iamyourboss") echo json_encode(array("success" => true,"departments"=>$resultArray));
/**/
	  
?>