<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<?php /* @var $this Controller */ ?>
   <? if(isset($_GET['username'])) $_SESSION["name"] = $_GET['username']; ?>
   <? $ip = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']); ?>
   <? $pos = strrpos($ip, "192.168."); 
 	  $posCHC = strrpos($ip, "10.66");
	  $posExternal = strrpos($ip, "192.168.202.253");
   ?>
   <? $tas  = ($pos === false) ? "F" : "T" ?>    
   <? $chc  = ($posCHC === false) ? "F" : "T" ?>
   <? $external  = ($posExternal === false) ? "F" : "T" ?>
 <script language="javascript">
 	<?  
 	    if(isset($_SESSION["name"])){}
	    else if( $external == "T"  )  { ?> 
            	location.replace('../index.php?r=site/login&site=phonelist');
    <?  }
	    else if($tas=="F" && $chc == "F" ){ ?>
		        location.replace('../index.php?r=site/login&site=phonelist');
	<?	} ?>
	
location.replace('index.php?r=Techdata/admin');	
 </script>

<!--

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js" >


<div ng-app="myApp" ng-controller="myCtrl">


                <script language="javascript">
                var app = angular.module('myApp', []);
                app.controller('myCtrl', function($scope,$http) {
                    $scope.name = "John Doe";
					//$http.get("http://www.pd-it-solution.com/backoffice/model/apps_json_chat_room.php?data=chatRoom")
    .success(function (response) {$scope.driver = response.drivers; }); 
					
                });
                </script>
                    
                
                


<input type="text" class="form-control" ng-model="searchText" style="width:300px;" placeHolder="?????" >
 <div class="col-lg-3 col-md-6" ng-repeat="user in driver |  filter:searchText"  >
 
 <li> {{user.name}} </li>
 
 </div>
 </div>
 
 -->
 
 <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<script language="javascript">
                var app = angular.module('myApp', []);
                app.controller('myCtrl', function($scope,$http) {
                    $scope.name = "John Doe";
					$http.get("http://saas.tasl.co.th/phonelist/path/json.php?whoareyou=iamyourboss")
    .success(function (response) {$scope.driver = response.drivers; }); 
					
                });
</script>

<div ng-app="myApp" ng-controller="myCtrl">
 	<p>Search : <input type="text" ng-model="searchText" class="form-control" style="width:450px;" ng-model="searchText"></p>
    <!--
    <label><input name="base" type="checkbox" ng-model="UTP" value="UTP">UTP</label>
    <label><input name="base" type="checkbox" ng-model="NST" value="NST">NST</label>
    <label><input name="base" type="checkbox" ng-model="BKK" value="BKK">BKK</label>
	-->
	<div class="table-responsive">
	  <table class="table">
	  <tr class="danger">
      		<td>#</td>
			<td>Name</td>
			<td>Mobile</td>
			<td>Ext</td>
			<td>Email</td>
			
            <td>Department</td>
            <td>Base</td>
	  </tr>
     
		<tr ng-repeat="user in driver |  filter:searchText | filter:UTP | filter:NST| filter:BKK">
			<td>{{($index)+1}}</td>
            <td>{{user.name}} </td>
			<td><a href="tel:{{user.mobile}}">{{user.mobile}}</a></td>
			<td>{{user.ext}}</td>
			<td>{{user.email}}</td>
			
            <td>{{user.id}}</td>
            <td>{{user.base}}</td>
			
		</tr>
       <!--  -->
	  </table>
	</div>



</div>

</body>