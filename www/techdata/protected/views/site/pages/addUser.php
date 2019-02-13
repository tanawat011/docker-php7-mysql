<?
$this->layout = "noThemes";
	$post=new Phonelistrelation;
	$post->departmentid = $_GET['departmentid'];
	$post->userid = $_GET['userid'];
	$post->status= 1;
	if($post->save()) echo "<center><div style=\"width:250px;\" class=\"alert alert-info\"> Success add </div></center>"

?>