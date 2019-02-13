<?
$this->layout = 'noThemes';
$data = StockRequestPart::model()->findAll(" request_id = ".$_SESSION['request_id']."  "); //".$_GET['request_id']."
$email_content = '';	
$str = 'Could you please stock part list below. <br><br> ';
$email_content = $str;


$str = '			
<table width="100%" border="1" class="table table-bordered">
  <tr>
    <th scope="col">#</th>
    <th scope="col">Part Number</th>
    <th scope="col">Description</th>
    <th scope="col">Recomended stock level</th>
    <th scope="col">Reason</th>
    <th scope="col">A/C Model</th>
	<th scope="col">IPC Reference</th>
  </tr>
  
  
  


    ';
	$i = 1;
	foreach($data as $p){
		//$str = $str.$i.'.'.$p->part_number.' Qty '.$p->qty.'<br>';
		$str = $str.'
		<tr>
			<th scope="row">'.$i.'</th>
			<td>'.$p->part_number.'</td>
			<td>'.$p->description.'</td>
			<td>'.$p->qty.'</td>
			<td>'.$p->reason.'</td>
			<td>'.$p->ac_model.'</td>
			<td>'.$p->ipc_ref.'</td>
  		</tr>
		';
		
		$i++;
	}
	$str = $str.'</table><br>';
	//echo $str;
	
	$email_content = $email_content.$str;

	
	
	
	
	$str = '<b>Best Regards,<br>';
	$str = $str.$_SESSION["fname"].'  '.$_SESSION["lname"].'<br> '.date('d-m-Y H:i:s').'</b><br><br>';
	$email_content = $email_content.$str;
	//echo $email_content;

?>