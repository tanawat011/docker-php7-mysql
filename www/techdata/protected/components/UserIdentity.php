<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'p@ssw0rd',
			'utp'=>'utp2@16##',
			'nst'=>'nst2@16##',
			'bkk'=>"bkk2@16##",
		);
		
		
		 $connection=Yii::app()->db;
		 #$user = Users::model()->findByAttributes(array('uname'=>$this->username));
		
		
		
		
		$dataReader=$connection->createCommand("select uname,pword,fname,lname,role,usersid,emailad from  users u where uname='$this->username' and isactive = '1'  ")->query();
		
		
		$dataReader->bindColumn(1,$uname);
		$dataReader->bindColumn(2,$pword);
		$dataReader->bindColumn(3,$fname);
		$dataReader->bindColumn(4,$lname);
		$dataReader->bindColumn(5,$role);
		$dataReader->bindColumn(6,$usersid);
		$dataReader->bindColumn(7,$emailad);
		/*$dataReader->bindColumn(5,$baseid);
		$dataReader->bindColumn(6,$axslvlid);
		$dataReader->bindColumn(7,$usersid);
		$dataReader->bindColumn(8,$touring_id);
		$dataReader->bindColumn(9,$touring_type);
		$dataReader->bindColumn(10,$access_level);*/
		while($dataReader->read()!== false){
			$_SESSION["uname"] = $uname;
			$_SESSION["pword"] = $pword;
			$_SESSION["fname"] = $fname;
			$_SESSION["lname"] = $lname; 
			$_SESSION["role"] = $role;
			$_SESSION["usersid"] = $usersid;
			$_SESSION["email"] = $emailad;
			//$_SESSION["axslvlid"] = $axslvlid;
			//$_SESSION["role"] = $axslvlid;
			
			#$_SESSION["role_name"] = Axslvl::model()->findBySql("select accesslevel from axslvl  where axslvlid = '".$axslvlid."'")->accesslevel;
			//$_SESSION["role_name"] = $access_level;
			
							 	
	$a = date('Y-m-d H:i:s');
	$ip = $_SERVER['REMOTE_ADDR']; 
	$Reader=$connection->createCommand("INSERT INTO login ( usersid, date, ip) VALUES ('$usersid', '$a', '$ip');")->query();

	}	 
	
		
		$command=$connection->createCommand('select uname,\'1234\' from users ;');
	   //$users = CHtml::listData($command->queryAll(),'uname','pword');
		$users=array(
			$this->username=> md5($this->password), 
		);/**/
		
		
		echo "<center><h1>You don't have permission !!</h1></center>";
		
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!== md5($this->password)) #elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}