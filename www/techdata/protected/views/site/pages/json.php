<?php
 	header('Access-Control-Allow-Origin:*');
    $this->layout = "noThemes";
	header('Content-Type: application/json');
	$objConnect = mysql_connect("localhost","root","T@s007");
	$objDB = mysql_select_db("phonelist");
	mysql_query("SET NAMES UTF8");
	
    $strSQL = "SELECT name,position,ext,home,mobile,email,base,department,(select department from department where departmentid = phone.department ) as id FROM phone order by name;";
    if(isset($_GET['dept'])){ 
	    if($_GET['dept']=="BKK" || $_GET['dept']=="NST" || $_GET['dept']=="UTP" ) $strSQL = "SELECT name,position,ext,home,mobile,email,base,department,(select department from department where departmentid = phone.department ) as id FROM phone where base = '".$_GET['dept']."'  order by name;";
	
		else $strSQL = "SELECT p.name,p.position,p.ext,p.home,p.mobile,p.email,p.base,p.department,(select department from department where departmentid ='".$_GET['dept']."' ) as id FROM phone p, phonelistrelation pr where pr.departmentid = '".$_GET['dept']."' and pr.userid = p.id   order by name";
		
	}
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
	
//Check your name is in database or not
$flag = 0;
 
if(isset(Phone::model()->find(" email = '".$_GET['username']."@tasl.co.th' ")->status)){
		$flag =  Phone::model()->find(" email = '".$_GET['username']."@tasl.co.th' ")->status;
		$flag = ($flag=="1") ? "1" : "0";
}
//echo $flag;	
if(isset($_GET['whoareyou']) && $_GET['whoareyou'] == "iamyourboss" && $flag =="1") echo json_encode(array("username" => $_GET['username'],"success" => true,"drivers"=>$resultArray));
else echo '{"username":"You don\'t have permission","success":"You don\'t have permission","drivers":[{"name":"You don\'t have permission","position":"You don\'t have permission","ext":"You don\'t have permission","home":"","mobile":"You don\'t have permission","email":"You don\'t have permission","base":"You don\'t have permission","department":"You don\'t have permission","id":"You don\'t have permission"}]}';
/**/
	  
?>