<?

/*$connection=Yii::app()->db;

$usertech = Techuser::model()->findAll(" 1=1 ");
foreach($usertech as  $ut){
	$name = $ut->name;
	$pieces = explode(" ",$name);

	$username = strtolower($pieces[0].'_'.(isset($pieces[1]) ? substr($pieces[1],0,1) : ""));
	#$Reader = $connection->createCommand("update techuser set username = '".$username."' where id = ".$ut->id.";")->query();
	$n  = Users::model()->count(" uname = '".$username."' ");
	if($n>0) $Reader = $connection->createCommand("update users set isactive = '1' where uname = '".$username."';")->query();
	echo $username.'('.$n.')<br>';}*/
		

?>