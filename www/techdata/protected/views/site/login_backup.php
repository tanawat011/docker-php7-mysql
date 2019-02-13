<? header('Access-Control-Allow-Origin:*'); 
$this->layout = "noThemes";

$_SESSION['type'] = isset($_GET['type']) ? $_GET['type'] : 'techdata'

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
    body {
	background-color: #222;
	
    background-image: url(../img/map-image.png);
    background-position: center;
    background-repeat: no-repeat; /**/
}
</style>
<style type="text/css">
 section#contact {
    background-color: #222;
    background-image: url(../img/map-image.png);
    background-position: center;
    background-repeat: no-repeat;
} /**/
#showModul{
  display: none;
}
</style>
<link href="../apps/bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="../apps/bootstrap/signin.css" rel="stylesheet">
<script src="../apps/bootstrap/ie-emulation-modes-warning.js"></script>

<script src="../apps/js/jquery-1.11.3.min.js"></script>  
<script src="../apps/js/jquery-migrate-1.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>THAI AVIATION SERVICES : LOGIN</title>
<div id="data"></div>
<script language="javascript">
$(document).ready(function(){
    //attach a jQuery live event to the button
	//$('#forgotpassword').load('http://saas.tasl.co.th/apps/forgotpassword.php');
$('#showModul').hide();
$('#checkLoginNew').live('click', function(){
	var username = document.forms[0].LoginForm_username.value;
	var password = document.forms[0].LoginForm_password.value;
		
	$.post("http://swm.tasl.co.th/hiboss/index.php?r=site/page&view=checkLoginTechData",
        {
          username:username,
          password: password
        },
        function(data,status){
			//alert(data.status);
			/**/

			if(username.length>0 && password.length>0 ){ 

					if(data.status=="1"){ 
					var progress ='<div class="progress"><div class="progress-bar active progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">40% Complete (success)</span></div></div>';
					$('#alert-status').html(progress);
					//document.forms['login-form'].submit(); //
          //alert('Yes'+data.username+'|'+LoginForm_password.value);
          $('#showModul').show();

					}else  $('#alert-status').html('<div class="alert alert-danger"><i class="fa fa-ban on fa-user"></i> <strong>Bad username or password for "'+data.username+'"</strong></div>'); //alert('Wrong username or password');
			}else alert('Please input username & password ');
			/**/
			
			
	});		
});

	
    $('#checkLogin').live('click', function(){
		var username = document.forms[0].LoginForm_username.value;
		var password = document.forms[0].LoginForm_password.value;
		password = password.replace('#','|');
		password = password.replace('#','|');
		password = password.replace('#','|');
		password = password.replace('#','|');
		var url = 'http://swm.tasl.co.th/hiboss/index.php?r=site/page&view=checkLogin&username='+username+'&password='+password+'';
        $.getJSON(url, function(data) { 
            
			
			if(document.forms[0].LoginForm_username.value.length>0 && document.forms[0].LoginForm_password.value.length>0 ){
					if(data.status=="1"||data.status_local=="1"){ 
					var progress ='<div class="progress"><div class="progress-bar active progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">40% Complete (success)</span></div></div>';
					$('#alert-status').html(progress);

					//document.forms['login-form'].submit(); 

          alert('Yes'+data.username+'|'+LoginForm_password.value);
					}else  $('#alert-status').html('<div class="alert alert-danger"><i class="fa fa-ban on fa-user"></i> <strong>Bad username or password for "'+data.username+'"</strong></div>'); //alert('Wrong username or password');
			}else alert('Please input username & password ');
        });
    });
});
</script>

<section id="contact">
<div class="row">

<div id="showModul">
<style>
.modal-backdrop {
   background-color: rgba(0,0,0,0.6);
}
.info-box {
    box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
    border-radius: 0.25rem;
    padding: .5rem;
    min-height: 80px;
    background: #ffffff;

}
.bg-info, .alert-info, .label-info {
    background-color: #17a2b8 !important;
}
.bg-warning, .alert-warning, .label-warning {
    background-color: #ffc107 !important;
}
.bg-success, .alert-success, .label-success {
    background-color: #28a745 !important;
}
.info-box-text{
  text-align: center;
  padding: 2px;
  color: #ffffff;
  font-size: 16px;
}
.info-box-link{
  margin-top: 5px;
  text-align: center;
  color: #ffffff;

}
</style>

  <!-- Modal -->
  <div class="modal show modal-backdrop" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-body">
          <div class="row">
            
            <div class="col-md-3">
              <div class="info-box mb-3 bg-info">
                <div class="info-box-content">
                  <div class="info-box-text">name</div>
                  <div class="info-box-link">
                    <a href="">Link</a>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
            </div>

          <div class="col-md-3">
            <div class="info-box mb-3 bg-warning">
              <div class="info-box-content">
                <div class="info-box-text">name</div>
                <div class="info-box-link">
                    <a href="">Link</a>
                  </div>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

            <div class="col-md-3">
              <div class="info-box mb-3 bg-success">
                <div class="info-box-content">
                  <div class="info-box-text">name</div>
                  <div class="info-box-link">
                    <a href="">Link</a>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
            </div>

          </div>
        </div>
        
      </div>
      
    </div>
  </div>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>
</div>
    <div class="col-md-12">
    <br /><br /><br />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;
    <img src="http://saas.tasl.co.th/mcs/images/logo_login.png" width="160"  style="border-color:#FFF"/>
    </div>
    
    <div class="col-md-12">
    <br>
    </div>
    <div class="col-md-12">
    <br>
    </div>

</div>
<div class="row">
     <div class="col-md-12">
    <br>
    </div>
    <div class="col-md-12">
    <br>
    </div>
    <div class="col-md-12">
    <br>
    </div>

</div>

<div class="row">
  <div class="col-md-4">
  
 
  
  
  </div>
  <div class="col-md-8">
  		<div align="right"></div>
  </div>
</div>


<div class="row">
  <div class="col-xs-6 col-sm-4" >
  	
    
     <!-- -->
<div class="form">
<center>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableAjaxValidation'=>true,
)); ?>
<link rel="stylesheet" href="css/font-awesome.min.css">
<div class="container"  style="width:350px;">
<form class="form-signin" onsubmit="alert('AAAA');">
	  
      <label for="inputEmail" class="sr-only">Email address</label>
   <div class="input-group margin-bottom-sm">
          <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>    

   <?php echo $form->textField($model,'username',array('class'=>"form-control",'placeholder'=>"username")); ?><?php echo $form->error($model,'username'); ?>
   </div>
        <label for="inputPassword" class="sr-only">Password</label>
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
        <?php echo $form->passwordField($model,'password',array('class'=>"form-control btn-block",'placeholder'=>"password")); ?>
        </div>
        <?php echo $form->error($model,'password'); ?>
<br />

		
       <?php echo CHtml::submitButton('Login',array('class'=>'btn btn-success','style'=>'display:none')); ?>
        <!--/*<button type="button" id="checkLogin" class="btn-lg btn-primary btn-block" aria-label="Left Align" >LOGIN</button>*/-->
        <button type="button" id="checkLoginNew" class="btn-lg btn-danger btn-block" aria-label="Left Align" >LOGIN</button>
        
	<br />
	
     <div class="panel panel-default" >
  	 <div class="panel-body">
			* Hint : Use TASL username&password<br />
	<!--example if you are "Jhon Doe" username = jhon_d and password = "your email password" -->
	 </div>
     </div>
    </form><br />
    <font color="#FFFFFF">© Copyright 2017 All Rights Reserved. <br /> Thai Aviation Services. <br /> IT departments.</font>
  </div> 
<?php $this->endWidget(); ?>
</div>


  
  <!-- -->
    
  </div>
  <div class="col-xs-6 col-sm-3" >
  </div>
  <div class="col-xs-6 col-sm-3" ></div>
      <div class="col-xs-6 col-sm-3" >
      			<center><h3 style=" color:#FFF">THAI AVIATION SERVICES</h3></center>        
                <div class="col-xs-12" style="background:#FFF">
  				</div>
                
                <center><h1 style=" color:#FFF"><?=isset($_GET['type']) ? "Stock Request" : "OEM Tech Database"?></h1></center>
                <div class="col-xs-12" style="background:#FFF">
  				</div>
               <!-- <center><h3 style=" color:#FFF">______</h3></center>-->
                <div id="alert-status"></div>
      </div>
</div>

</section>




<?php

/*
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>



<div class="form" align="center">
<h4>Login</h4>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<!--<p class="hint">
			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p>-->
	</div>
<!--
	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
-->    

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
<? */ ?>


