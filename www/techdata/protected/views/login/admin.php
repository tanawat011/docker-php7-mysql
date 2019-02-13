<?php
/* @var $this LoginController */
/* @var $model Login */


$this->layout = "column1";
$this->menu=array(
	#array('label'=>'List Login', 'url'=>array('index')),
	#array('label'=>'Create Login', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#login-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage Logins</h3>

   <script type="text/javascript" src="js/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
        
    <?php /*?>    <script type="text/javascript">
$(function () {
    $('#containerTest').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Average Rainfall'
        },
        subtitle: {
            text: 'Source: WorldClimate.com'
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
                text: 'Rainfall (mm)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
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
        series: [{
            name: 'ABC',
            data: [
				<? for($i=1;$i<=12;$i++){ 
				$m = strlen($i)==1 ? '0'.$i : $i;
				echo Login::model()->count(" date like '".date('Y')."-".$m."%' ").',';
				
				?>   <? }?>
			]

        }]
    });
});
		</script><?php */?>
        
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Access log <?=date('Y')?>'
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
	return   Login::model()->count(" MONTH(date) = $m AND YEAR(date) = ".date('Y')." ");//" status = ".$status." and dateTime like '%2016-".$m."'"; dateTime like '%2016-".$m."%'
}
?>
		
        series: [{
            name: 'login',
            data: [<?=getData(1);?>]

        },/* {
            name: 'Activate Failed',
            data: [<?=getData(0);?>]

        }, {
            name: 'Access',
            data: [<?=getData(3);?>]

        }, {
            name: 'Call',
            data: [<?=getData(2);?>]

        }*/]
    });
});



		</script>
<script src="Highcharts/js/highcharts.js"></script>
<script src="Highcharts/js/modules/exporting.js"></script>
<!--,<? #=getData(0);?> <? #=getData(1);?>,<? #=getData(2);?>,<? #=getData(3);?> -->
<!--<div id="containerTest" style="min-width: 310px; height: 400px; margi n: 0 auto"></div>-->
<div id="container" style="min-width: 310px; height: 400px; margi n: 0 auto"></div>    




<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'login-grid',
	'dataProvider'=>$model->search(),
	#'filter'=>$model,
	'columns'=>array(
		
		'usersid',
		array(
			'name'=>'uname',
			'value'=>'Users::model()->find(" usersid = \'$data->usersid\' ")->fname."  ".Users::model()->find(" usersid = \'$data->usersid\' ")->lname'
		),
		'uname',
		'date',
		'ip',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}',
			'htmlOptions'=>array('style'=>'width:50px;'),
		),
	),
)); ?>
