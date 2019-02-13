
<?php
/* @var $this SystemController  <div class="alert alert-danger"></div> */   
/* @var $model System */

$this->layout = "column1";
#$this->breadcrumbs=array(
#	'Systems'=>array('index'),
#	'Manage',
#);

$this->menu=array(
	array('label'=>'List System', 'url'=>array('index')),
	array('label'=>'Create System', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#system-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<!--
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
-->
<?php #echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>

<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Inventory Control</div>
  <div class="panel-body">
	  
	  
<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php
	#echo Rooms::model()->find('id = :ID', array(':ID'=>1))->name;
?>

<?php
	$base = array('NST Base','UTP Base','BKK');
?>


<a class="btn btn-danger" href="#link" onclick="window.open('index.php?r=System/excel&type='+System_type.value+'&location='+System_man_location_id.value);">
  <i class="fa fa-file-excel-o fa-lg"></i> Export to Excel</a>
  

	
	
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'system-grid',
	'dataProvider'=>$model->search(),
	#'filter'=>$model,
	'columns'=>array(
		#'system_id',
		array(
		        'header'=>'No.',
		        'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
		      ),
		array(
		        'header'=>'Host Name',
				'name'=>'hostname',
				'type'=>'raw',
		        'value'=> '\' 
			 	  <a target="_blank" href="/open-audit/index.php/main/system_display/\'.strtoupper($data->system_id).\'">\'.strtoupper($data->hostname).\' </a>
			 	\'',
			 'htmlOptions'=>array('style'=>'text-align:left; vertical-align: top;')
		      ),	  
		#http://10.66.99.14/open-audit/index.php/main/system_display/34	  
		#'hostname',
		'domain',
		'os_family',
		'man_model',
		'type',
		#'man_location_id',
		array(
		'name'=>'man_location_id',
		'header'=>'Base',
		#'value'=>'$base[(int)($data->man_location_id)]'
		'value'=>'$data->man_location_id==\'1\'  ?  "NST Base": ($data->man_location_id==\'2\' ? "UTP Base": ($data->man_location_id==\'3\' ? "BKK":"Other")  )  ' 
		),
		#'description',
		
		'user',
		'department',
		#array(
		#'name'=>'department',
		#'type'=>'raw',
		#'value'=>'strlen($data->department)>0 ? (Department::model()->find(\'departmentid = :ID\', array(\':ID\'=>$data->department))->department):"-"',
		#),
		array(
		'name'=>'room',
		'type'=>'raw',
		'value'=>'strlen($data->room)>0 ? (Rooms::model()->find(\'id = :ID\', array(\':ID\'=>$data->room))->name):"-"',
		#'value'=>function($data){
		##  if(strlen($data->room)>0) Rooms::model()->find('id = :ID', array(':ID'=>$data->room))->name;
		#  else return '--';
		#},
		),
		
		#'tagid',
		/*'icon',
		'os_group',
		'os_family',
		'os_name',
		'os_version',
		'linked_sys',
		'serial',
		'model',
		'manufacturer',
		'uptime',
		'form_factor',
		'pc_os_bit',
		'pc_memory',
		'pc_num_processor',
		'pc_date_os_installation',
		'printer_port_name',
		'printer_shared',
		'printer_shared_name',
		'printer_color',
		'printer_duplex',
		'man_os_group',
		'man_os_family',
		'man_os_name',
		'man_domain',
		'man_status',
		'man_environment',
		'man_criticality',
		'man_class',
		'man_description',
		'man_function',
		'man_type',
		'man_ip_address',
		'man_owner',
		'man_org_id',
		'man_location_id',
		'man_location_level',
		'man_location_suite',
		'man_location_room',
		'man_location_rack',
		'man_location_rack_position',
		'man_location_rack_size',
		'man_serial',
		'man_asset_number',
		'man_model',
		'man_manufacturer',
		'man_form_factor',
		'man_icon',
		'man_vm_server_name',
		'man_vm_system_id',
		'man_vm_group',
		'man_cluster_name',
		'invoice_id',
		'man_purchase_invoice',
		'man_purchase_order_number',
		'man_purchase_cost_center',
		'man_purchase_vendor',
		'man_purchase_date',
		'man_purchase_amount',
		'man_warranty_duration',
		'man_warranty_expires',
		'man_warranty_type',
		'man_terminal_number',
		'man_switch_id',
		'man_switch_port',
		'man_patch_panel',
		'man_patch_panel_port',
		'man_wall_port',
		'man_picture',
		'contact_name',
		'contact_id',
		'man_service_number',
		'man_service_provider',
		'man_service_type',
		'man_service_plan',
		'man_service_network',
		'man_unlock_pin',
		'man_serial_imei',
		'man_serial_sim',
		'nmap_type',
		'last_seen',
		'last_seen_by',
		'last_user',
		'access_details',
		'snmp_oid',
		'nmis_group',
		'nmis_name',
		'nmis_role',
		'system_key_type',
		'timestamp',
		'first_timestamp',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}',
			'htmlOptions'=>array('style'=>'width:10px;text-align:center;'),
			
		),
	),
)); ?>

</div></div>

