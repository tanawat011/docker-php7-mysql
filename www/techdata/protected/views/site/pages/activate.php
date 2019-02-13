<?
	$post=new ActivateUser;
	$post->username= $_GET['username'];
	$post->dateTime = date('Y-m-d H:i:s');
	isset($_GET['number']) ? $post->callnumber = $_GET['number'] : "";
	$post->status = $_GET['status'];
	$post->save();
?>