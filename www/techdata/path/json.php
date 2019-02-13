<?php
 	header('Access-Control-Allow-Origin:*');
    #$this->layout = "noThemes";
	header('Content-Type: application/json');
	$objConnect = mysql_connect("localhost","root","T@s007");
	$objDB = mysql_select_db("phonelist");
	mysql_query("SET NAMES UTF8");
	
    $strSQL = "SELECT name,position,ext,home,mobile,email,base,department,(select department from department where departmentid = phone.department ) as id FROM phone order by name;";
    if(isset($_GET['dept'])){ 
	    if($_GET['dept']=="BKK" || $_GET['dept']=="NST" || $_GET['dept']=="UTP" ) $strSQL = "SELECT name,position,ext,home,mobile,email,base,department,(select department from department where departmentid = phone.department ) as id FROM phone where base = '".$_GET['dept']."'  order by name;";
		else $strSQL = "SELECT name,position,ext,home,mobile,email,base,department,(select department from department where departmentid ='".$_GET['dept']."' ) as id FROM phone where department = '".$_GET['dept']."'   order by name;";
		
		
	}

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


	
/*if(isset($_GET['whoareyou']) && $_GET['whoareyou'] == "iamyourboss") echo json_encode(array("username" => $_GET['username'],"success" => true,"drivers"=>$resultArray));
*/
	  
?>