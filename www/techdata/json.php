<meta name="robots" content="noarchive"><?php
 	header('Access-Control-Allow-Origin:*');
    #$this->layout = "noThemes";
	//header('Content-Type: application/json');
	$objConnect = mysql_connect("localhost","root","T@s007");
	$objDB = mysql_select_db("portal");
	mysql_query("SET NAMES UTF8");
	

 $strSQL = "SELECT * FROM phone;";

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
	//echo json_encode(array("success" => true,"profiles"=>$resultArray));
/**/
	  
?>