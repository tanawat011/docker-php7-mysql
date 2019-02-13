
<?php /*?><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><?php */?>

<?php
/* @var $this ActivateUserController */
/* @var $model ActivateUser */
$this->layout = "column1";
$this->breadcrumbs=array(
	'Activate Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ActivateUser', 'url'=>array('index')),
	array('label'=>'Create ActivateUser', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#activate-user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<div class="row">
  <div class="col-md-5">
  <h4>Manage Activate Users</h4>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'activate-user-grid',
	'dataProvider'=>$model->search(),
	#'filter'=>$model,
	'columns'=>array(
		#'id',
		array(
		'header'=>'#',
		'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize+$row+1'
		),
		'username',
		'dateTime',
		array(
		'header'=>'Action', 
		'value'=>'getStatus($data->status)'
		),
		'callnumber',
		#array(
		#	'class'=>'CButtonColumn',
		#),
	),
));
function getStatus($status){
	if($status=="0") return "Activate Failed";
	else if($status=="1") return "Activate Success";
	else if($status=="2") return "Call";
	else if($status=="3") return "Access";	
}
 ?>
  
  </div>
  <div class="col-md-7">
   <script type="text/javascript" src="js/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Phone list access log 2016'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Access count '
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.0f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
<? 
function getData($status){
	$str = "";
	for($i=1;$i<=12;$i++){ $str = $str.getPerMonthData($i,$status).','; }
	return $str;
	//return getPerMonthData(1,$status);		
}
function getPerMonthData($m,$status){
	return   ActivateUser::model()->count(" status = ".$status." and MONTH(dateTime) = $m AND YEAR(dateTime) = 2016 ");//" status = ".$status." and dateTime like '%2016-".$m."'"; dateTime like '%2016-".$m."%'
}
?>
		
        series: [{
            name: 'Activate Success',
            data: [<?=getData(1);?>]

        }, {
            name: 'Activate Failed',
            data: [<?=getData(0);?>]

        }, {
            name: 'Access',
            data: [<?=getData(3);?>]

        }, {
            name: 'Call',
            data: [<?=getData(2);?>]

        }]
    });
});



		</script>
<script src="Highcharts/js/highcharts.js"></script>
<script src="Highcharts/js/modules/exporting.js"></script>
<!--,<? #=getData(0);?> <? #=getData(1);?>,<? #=getData(2);?>,<? #=getData(3);?> -->
<div id="container" style="min-width: 310px; height: 400px; margi n: 0 auto"></div>        


  
  </div>
</div>



 


