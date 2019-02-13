<?php
/* @var $this SystemController */
/* @var $model System */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
<!--		
		<div class="col-md-4">
			
			<?php echo $form->label($model,'system_id'); ?>
			<?php echo $form->textField($model,'system_id',array('size'=>10,'maxlength'=>10)); ?>
			
		</div>
		
		<div class="col-md-4">
			
			<?php echo $form->label($model,'system_key'); ?>
			<?php echo $form->textField($model,'system_key',array('size'=>20,'maxlength'=>200)); ?>
			
		</div>
	
		<div class="col-md-4">
			
			<?php echo $form->label($model,'uuid'); ?>
			<?php echo $form->textField($model,'uuid',array('size'=>20,'maxlength'=>100)); ?>
			
		</div>
		
-->			
		<div class="col-md-4">
			<?php echo $form->label($model,'hostname'); ?>
			<?php echo $form->textField($model,'hostname',array('size'=>20,'maxlength'=>100)); ?>
		</div>
		
		<div class="col-md-4">
			<?php echo $form->label($model,'domain'); ?>
			<?php echo $form->textField($model,'domain',array('size'=>20,'maxlength'=>100)); ?>
		</div>
		
		<div class="col-md-4">
			<?php echo $form->label($model,'description'); ?>
			<?php echo $form->textField($model,'description',array('size'=>20,'maxlength'=>250)); ?>
		</div>
		
		<div class="col-md-4">
			<?php echo $form->label($model,'type'); ?>
			<?php $connection=Yii::app()->db;   
					$command = $connection->createCommand('SELECT distinct  type FROM  system');
					echo $form->dropDownList($model,'type', CHtml::listData($command->queryAll(),'type','type'),array('empty'=>'----All----'));
				?>	
		</div>
<!-- ################# -->		
		
		<div class="col-md-4">
			<?php echo $form->label($model,'department'); ?>
			<?php #$connection=Yii::app()->db;   
					$command = $connection->createCommand('SELECT distinct  departmentid,department FROM  department');
					echo $form->dropDownList($model,'department', CHtml::listData($command->queryAll(),'departmentid','department'),array('empty'=>'----All----'));
				?>	
		</div>
<!-- ################# -->			
		
		<div class="col-md-4">
			<?php echo $form->label($model,'room'); ?>
			<?php #$connection=Yii::app()->db;   
					$command2 = $connection->createCommand('SELECT id,name FROM  rooms');
					echo $form->dropDownList($model,'room', CHtml::listData($command2->queryAll(),'id','name'),array('empty'=>'----All----'));
				?>	
		</div>
<!-- ################# -->			
		<div class="col-md-4">
			<?php echo $form->label($model,'man_location_id'); ?>
			<?php #$connection=Yii::app()->db;   
					$command2 = $connection->createCommand('SELECT location_id,location_name FROM  oa_location');
					echo $form->dropDownList($model,'man_location_id', CHtml::listData($command2->queryAll(),'location_id','location_name'),array('empty'=>'----All----'));
				?>
		</div>	
	
		
	</div>


<!--
	<div class="row">
		<?php echo $form->label($model,'fqdn'); ?>
		<?php echo $form->textArea($model,'fqdn',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'icon'); ?>
		<?php echo $form->textField($model,'icon',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'os_group'); ?>
		<?php echo $form->textField($model,'os_group',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'os_family'); ?>
		<?php echo $form->textField($model,'os_family',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'os_name'); ?>
		<?php echo $form->textField($model,'os_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'os_version'); ?>
		<?php echo $form->textField($model,'os_version',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'linked_sys'); ?>
		<?php echo $form->textField($model,'linked_sys'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serial'); ?>
		<?php echo $form->textField($model,'serial',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'model'); ?>
		<?php echo $form->textField($model,'model',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'manufacturer'); ?>
		<?php echo $form->textField($model,'manufacturer',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uptime'); ?>
		<?php echo $form->textField($model,'uptime',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'form_factor'); ?>
		<?php echo $form->textField($model,'form_factor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pc_os_bit'); ?>
		<?php echo $form->textField($model,'pc_os_bit',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pc_memory'); ?>
		<?php echo $form->textField($model,'pc_memory'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pc_num_processor'); ?>
		<?php echo $form->textField($model,'pc_num_processor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pc_date_os_installation'); ?>
		<?php echo $form->textField($model,'pc_date_os_installation'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'printer_port_name'); ?>
		<?php echo $form->textField($model,'printer_port_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'printer_shared'); ?>
		<?php echo $form->textField($model,'printer_shared',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'printer_shared_name'); ?>
		<?php echo $form->textField($model,'printer_shared_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'printer_color'); ?>
		<?php echo $form->textField($model,'printer_color',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'printer_duplex'); ?>
		<?php echo $form->textField($model,'printer_duplex',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_os_group'); ?>
		<?php echo $form->textField($model,'man_os_group',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_os_family'); ?>
		<?php echo $form->textField($model,'man_os_family',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_os_name'); ?>
		<?php echo $form->textField($model,'man_os_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_domain'); ?>
		<?php echo $form->textField($model,'man_domain',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_status'); ?>
		<?php echo $form->textField($model,'man_status',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_environment'); ?>
		<?php echo $form->textField($model,'man_environment',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_criticality'); ?>
		<?php echo $form->textField($model,'man_criticality',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_class'); ?>
		<?php echo $form->textField($model,'man_class',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_description'); ?>
		<?php echo $form->textField($model,'man_description',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_function'); ?>
		<?php echo $form->textField($model,'man_function',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_type'); ?>
		<?php echo $form->textField($model,'man_type',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_ip_address'); ?>
		<?php echo $form->textField($model,'man_ip_address',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_owner'); ?>
		<?php echo $form->textField($model,'man_owner',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_org_id'); ?>
		<?php echo $form->textField($model,'man_org_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_location_id'); ?>
		<?php echo $form->textField($model,'man_location_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_location_level'); ?>
		<?php echo $form->textField($model,'man_location_level',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_location_suite'); ?>
		<?php echo $form->textField($model,'man_location_suite',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_location_room'); ?>
		<?php echo $form->textField($model,'man_location_room',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_location_rack'); ?>
		<?php echo $form->textField($model,'man_location_rack',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_location_rack_position'); ?>
		<?php echo $form->textField($model,'man_location_rack_position',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_location_rack_size'); ?>
		<?php echo $form->textField($model,'man_location_rack_size',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_serial'); ?>
		<?php echo $form->textField($model,'man_serial',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_asset_number'); ?>
		<?php echo $form->textField($model,'man_asset_number',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_model'); ?>
		<?php echo $form->textField($model,'man_model',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_manufacturer'); ?>
		<?php echo $form->textField($model,'man_manufacturer',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_form_factor'); ?>
		<?php echo $form->textField($model,'man_form_factor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_icon'); ?>
		<?php echo $form->textField($model,'man_icon',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_vm_server_name'); ?>
		<?php echo $form->textField($model,'man_vm_server_name',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_vm_system_id'); ?>
		<?php echo $form->textField($model,'man_vm_system_id',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_vm_group'); ?>
		<?php echo $form->textField($model,'man_vm_group',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_cluster_name'); ?>
		<?php echo $form->textField($model,'man_cluster_name',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'invoice_id'); ?>
		<?php echo $form->textField($model,'invoice_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_purchase_invoice'); ?>
		<?php echo $form->textField($model,'man_purchase_invoice',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_purchase_order_number'); ?>
		<?php echo $form->textField($model,'man_purchase_order_number',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_purchase_cost_center'); ?>
		<?php echo $form->textField($model,'man_purchase_cost_center',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_purchase_vendor'); ?>
		<?php echo $form->textField($model,'man_purchase_vendor',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_purchase_date'); ?>
		<?php echo $form->textField($model,'man_purchase_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_purchase_amount'); ?>
		<?php echo $form->textField($model,'man_purchase_amount',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_warranty_duration'); ?>
		<?php echo $form->textField($model,'man_warranty_duration',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_warranty_expires'); ?>
		<?php echo $form->textField($model,'man_warranty_expires'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_warranty_type'); ?>
		<?php echo $form->textField($model,'man_warranty_type',array('size'=>17,'maxlength'=>17)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_terminal_number'); ?>
		<?php echo $form->textField($model,'man_terminal_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_switch_id'); ?>
		<?php echo $form->textField($model,'man_switch_id',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_switch_port'); ?>
		<?php echo $form->textField($model,'man_switch_port',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_patch_panel'); ?>
		<?php echo $form->textField($model,'man_patch_panel',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_patch_panel_port'); ?>
		<?php echo $form->textField($model,'man_patch_panel_port',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_wall_port'); ?>
		<?php echo $form->textField($model,'man_wall_port',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_picture'); ?>
		<?php echo $form->textField($model,'man_picture',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_name'); ?>
		<?php echo $form->textField($model,'contact_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_id'); ?>
		<?php echo $form->textField($model,'contact_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_service_number'); ?>
		<?php echo $form->textField($model,'man_service_number',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_service_provider'); ?>
		<?php echo $form->textField($model,'man_service_provider',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_service_type'); ?>
		<?php echo $form->textField($model,'man_service_type',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_service_plan'); ?>
		<?php echo $form->textField($model,'man_service_plan',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_service_network'); ?>
		<?php echo $form->textField($model,'man_service_network',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_unlock_pin'); ?>
		<?php echo $form->textField($model,'man_unlock_pin',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_serial_imei'); ?>
		<?php echo $form->textField($model,'man_serial_imei',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'man_serial_sim'); ?>
		<?php echo $form->textField($model,'man_serial_sim',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nmap_type'); ?>
		<?php echo $form->textField($model,'nmap_type',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_seen'); ?>
		<?php echo $form->textField($model,'last_seen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_seen_by'); ?>
		<?php echo $form->textField($model,'last_seen_by',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_user'); ?>
		<?php echo $form->textField($model,'last_user',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'access_details'); ?>
		<?php echo $form->textArea($model,'access_details',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'snmp_oid'); ?>
		<?php echo $form->textArea($model,'snmp_oid',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nmis_group'); ?>
		<?php echo $form->textField($model,'nmis_group',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nmis_name'); ?>
		<?php echo $form->textField($model,'nmis_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nmis_role'); ?>
		<?php echo $form->textField($model,'nmis_role',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'system_key_type'); ?>
		<?php echo $form->textField($model,'system_key_type',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timestamp'); ?>
		<?php echo $form->textField($model,'timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'first_timestamp'); ?>
		<?php echo $form->textField($model,'first_timestamp'); ?>
	</div>
-->
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->