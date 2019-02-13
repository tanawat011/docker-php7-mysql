<?php
/* @var $this PhonelistrelationController */
/* @var $model Phonelistrelation */

$this->layout = "column1";
$this->breadcrumbs=array(
	'Phonelistrelations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Phonelistrelation', 'url'=>array('index')),
	array('label'=>'Manage Phonelistrelation', 'url'=>array('admin')),
);
?>

<h4>Create Phonelist</h4>

<?php #$this->renderPartial('_form', array('model'=>$model)); ?>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="js/jquery.min.js"></script>
<body>

<script language="javascript">
                var app = angular.module('myAppDept', []);
                app.controller('myCtrlDept',['$scope','$http', function($scope,$http) {
                      $scope.name = "John Doe";
					  $scope.user = "John Doe";
					  $scope.groupname = "John Doe";
					$http.get("http://saas.tasl.co.th/phonelist/index.php?r=phonelistrelation/json&whoareyou=iamyourboss")
    .success(function (response) {$scope.driver = response.drivers; });
	
					$http.get("http://saas.tasl.co.th/phonelist/path/json_department.php?whoareyou=iamyourboss")
    .success(function (response) {$scope.department = response.departments; });  
					
                }]);
				
function  getUser(id){
	//$('#ruser').html('AA');
	uid.value = id;
}
function  getGroup(id){
	//$('#rgroup').html('BB');
	gid.value = id;
}

function  addUser(){
	$('#rgroup').load('index.php?r=site/page&view=addUser&departmentid='+gid.value+'&userid='+gid.value);
	
}	
			
</script>

<div ng-app="myAppDept" ng-controller="myCtrlDept">

<input type="hidden" id="uid" />
<input type="hidden" id="gid" />

	<div id="ruser"></div>  <div id="rgroup"></div>        



<div class="row" >
  <div class="col-md-4">
 
  <input type="text" ng-model="searchText"  class="form-control" placeHolder="Search"/>
  <!--
  <div class="list-group">
     <a href="#add" id="user" onclick="getUser(user.userid)" va class="list-group-item" ng-repeat="user in driver | filter:searchText">{{user.name}}</a>
  </div> -->

<ul class="list-group">
  <li ng-repeat="user in driver | filter:searchText" class="list-group-item list-group-item-default">
  		<label><input name="A" type="radio" value=""> {{user.name}} </label><br>
		<div>department</div>
  </li>
</ul>

<!--
  <div  ng-repeat="user in driver | filter:searchText">
  		<label><input type="radio" name="user" id="user" ng-model="user" onClick="getUser(this.value)" value="{{user.userid}}" /> &nbsp;&nbsp;{{user.name}}</label>
  </div>
-->  
  </div>
  <div class="col-md-4" align="center">
  		<a class="btn btn-danger btn-lg" href="#" onClick="addUser()"><i class="fa fa-cog"></i> >></a>
  </div>
  <div class="col-md-4">
  
  <input type="text" ng-model="searchTextD"  class="form-control"  placeHolder="Search"/>

  <div  ng-repeat="d in department | filter:searchTextD">
  		<label><input type="radio" onClick="getGroup(this.value)" name="groupname" id="groupname" ng-model="groupname" value="{{d.departmentid}}" /> &nbsp;&nbsp;{{d.department}}</label>
  </div>
<?
  /*
  $dataProvider=new CActiveDataProvider('Department', array(
    'criteria'=>array(
        'condition'=>'1=1',
        #'order'=>'create_time DESC',
       # 'with'=>array('author'),
    ),
    'pagination'=>array(
        'pageSize'=>40,
    ),
));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'department-grid',
	'dataProvider'=>$dataProvider,
	#'filter'=>$model,
	'columns'=>array(
	array(
		'header'=>'#',
		'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize+$row+1',
		'htmlOptions'=>array('style'=>'width:40px;'),
		),
		#'departmentid',
		'department',
		#'isactive',
		#'entryid',
		#'entryts',
		#'updateid',
		/*
		'updatets',
		
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('style'=>'width:70px;'),
		),
	),
));*/

?>
  
  </div>
</div>


</div>