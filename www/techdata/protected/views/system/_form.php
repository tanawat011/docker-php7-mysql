<?php
/* @var $this SystemController */
/* @var $model System */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'system-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	

<div class="alert alert-success">	
<div class="row">

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'system_key'); ?>
		<?php echo $form->textField($model,'system_key',array('size'=>40,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'system_key'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'uuid'); ?>
		<?php echo $form->textField($model,'uuid',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'uuid'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'hostname'); ?>
		<?php echo $form->textField($model,'hostname',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'hostname'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'domain'); ?>
		<?php echo $form->textField($model,'domain',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'domain'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'fqdn'); ?>
		<?php echo $form->textArea($model,'fqdn',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'fqdn'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>40,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'icon'); ?>
		<?php echo $form->textField($model,'icon',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'icon'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'os_group'); ?>
		<?php echo $form->textField($model,'os_group',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'os_group'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'os_family'); ?>
		<?php echo $form->textField($model,'os_family',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'os_family'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'os_name'); ?>
		<?php echo $form->textField($model,'os_name',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'os_name'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'os_version'); ?>
		<?php echo $form->textField($model,'os_version',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'os_version'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'linked_sys'); ?>
		<?php echo $form->textField($model,'linked_sys'); ?>
		<?php echo $form->error($model,'linked_sys'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'serial'); ?>
		<?php echo $form->textField($model,'serial',array('size'=>40,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'serial'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'model'); ?>
		<?php echo $form->textField($model,'model',array('size'=>40,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'model'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'manufacturer'); ?>
		<?php echo $form->textField($model,'manufacturer',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'manufacturer'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'uptime'); ?>
		<?php echo $form->textField($model,'uptime',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'uptime'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'form_factor'); ?>
		<?php echo $form->textField($model,'form_factor',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'form_factor'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'pc_os_bit'); ?>
		<?php echo $form->textField($model,'pc_os_bit',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'pc_os_bit'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'pc_memory'); ?>
		<?php echo $form->textField($model,'pc_memory'); ?>
		<?php echo $form->error($model,'pc_memory'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'pc_num_processor'); ?>
		<?php echo $form->textField($model,'pc_num_processor'); ?>
		<?php echo $form->error($model,'pc_num_processor'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'pc_date_os_installation'); ?>
		<?php echo $form->textField($model,'pc_date_os_installation'); ?>
		<?php echo $form->error($model,'pc_date_os_installation'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'printer_port_name'); ?>
		<?php echo $form->textField($model,'printer_port_name',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'printer_port_name'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'printer_shared'); ?>
		<?php echo $form->textField($model,'printer_shared',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'printer_shared'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'printer_shared_name'); ?>
		<?php echo $form->textField($model,'printer_shared_name',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'printer_shared_name'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'printer_color'); ?>
		<?php echo $form->textField($model,'printer_color',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'printer_color'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'printer_duplex'); ?>
		<?php echo $form->textField($model,'printer_duplex',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'printer_duplex'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_os_group'); ?>
		<?php echo $form->textField($model,'man_os_group',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'man_os_group'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_os_family'); ?>
		<?php echo $form->textField($model,'man_os_family',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'man_os_family'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_os_name'); ?>
		<?php echo $form->textField($model,'man_os_name',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_os_name'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_domain'); ?>
		<?php echo $form->textField($model,'man_domain',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_domain'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_status'); ?>
		<?php echo $form->textField($model,'man_status',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'man_status'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_environment'); ?>
		<?php echo $form->textField($model,'man_environment',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'man_environment'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_criticality'); ?>
		<?php echo $form->textField($model,'man_criticality',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'man_criticality'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_class'); ?>
		<?php echo $form->textField($model,'man_class',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'man_class'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_description'); ?>
		<?php echo $form->textField($model,'man_description',array('size'=>40,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'man_description'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_function'); ?>
		<?php echo $form->textField($model,'man_function',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_function'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_type'); ?>
		<?php echo $form->textField($model,'man_type',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_type'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_ip_address'); ?>
		<?php echo $form->textField($model,'man_ip_address',array('size'=>40,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'man_ip_address'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_owner'); ?>
		<?php echo $form->textField($model,'man_owner',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_owner'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_org_id'); ?>
		<?php echo $form->textField($model,'man_org_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'man_org_id'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_location_id'); ?>
		<?php echo $form->textField($model,'man_location_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'man_location_id'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_location_level'); ?>
		<?php echo $form->textField($model,'man_location_level',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_location_level'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_location_suite'); ?>
		<?php echo $form->textField($model,'man_location_suite',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_location_suite'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_location_room'); ?>
		<?php echo $form->textField($model,'man_location_room',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_location_room'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_location_rack'); ?>
		<?php echo $form->textField($model,'man_location_rack',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_location_rack'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_location_rack_position'); ?>
		<?php echo $form->textField($model,'man_location_rack_position',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_location_rack_position'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_location_rack_size'); ?>
		<?php echo $form->textField($model,'man_location_rack_size',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'man_location_rack_size'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_serial'); ?>
		<?php echo $form->textField($model,'man_serial',array('size'=>40,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'man_serial'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_asset_number'); ?>
		<?php echo $form->textField($model,'man_asset_number',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'man_asset_number'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_model'); ?>
		<?php echo $form->textField($model,'man_model',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'man_model'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_manufacturer'); ?>
		<?php echo $form->textField($model,'man_manufacturer',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'man_manufacturer'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_form_factor'); ?>
		<?php echo $form->textField($model,'man_form_factor',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'man_form_factor'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_icon'); ?>
		<?php echo $form->textField($model,'man_icon',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'man_icon'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_vm_server_name'); ?>
		<?php echo $form->textField($model,'man_vm_server_name',array('size'=>40,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'man_vm_server_name'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_vm_system_id'); ?>
		<?php echo $form->textField($model,'man_vm_system_id',array('size'=>40,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'man_vm_system_id'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_vm_group'); ?>
		<?php echo $form->textField($model,'man_vm_group',array('size'=>40,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'man_vm_group'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_cluster_name'); ?>
		<?php echo $form->textField($model,'man_cluster_name',array('size'=>40,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'man_cluster_name'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'invoice_id'); ?>
		<?php echo $form->textField($model,'invoice_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'invoice_id'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_purchase_invoice'); ?>
		<?php echo $form->textField($model,'man_purchase_invoice',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'man_purchase_invoice'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_purchase_order_number'); ?>
		<?php echo $form->textField($model,'man_purchase_order_number',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'man_purchase_order_number'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_purchase_cost_center'); ?>
		<?php echo $form->textField($model,'man_purchase_cost_center',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'man_purchase_cost_center'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_purchase_vendor'); ?>
		<?php echo $form->textField($model,'man_purchase_vendor',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_purchase_vendor'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_purchase_date'); ?>
		<?php echo $form->textField($model,'man_purchase_date'); ?>
		<?php echo $form->error($model,'man_purchase_date'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_purchase_amount'); ?>
		<?php echo $form->textField($model,'man_purchase_amount',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'man_purchase_amount'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_warranty_duration'); ?>
		<?php echo $form->textField($model,'man_warranty_duration',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'man_warranty_duration'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_warranty_expires'); ?>
		<?php echo $form->textField($model,'man_warranty_expires'); ?>
		<?php echo $form->error($model,'man_warranty_expires'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_warranty_type'); ?>
		<?php echo $form->textField($model,'man_warranty_type',array('size'=>17,'maxlength'=>17)); ?>
		<?php echo $form->error($model,'man_warranty_type'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_terminal_number'); ?>
		<?php echo $form->textField($model,'man_terminal_number'); ?>
		<?php echo $form->error($model,'man_terminal_number'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_switch_id'); ?>
		<?php echo $form->textField($model,'man_switch_id',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_switch_id'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_switch_port'); ?>
		<?php echo $form->textField($model,'man_switch_port',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_switch_port'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_patch_panel'); ?>
		<?php echo $form->textField($model,'man_patch_panel',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'man_patch_panel'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_patch_panel_port'); ?>
		<?php echo $form->textField($model,'man_patch_panel_port',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'man_patch_panel_port'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_wall_port'); ?>
		<?php echo $form->textField($model,'man_wall_port',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_wall_port'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_picture'); ?>
		<?php echo $form->textField($model,'man_picture',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_picture'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'contact_name'); ?>
		<?php echo $form->textField($model,'contact_name',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'contact_name'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'contact_id'); ?>
		<?php echo $form->textField($model,'contact_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'contact_id'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_service_number'); ?>
		<?php echo $form->textField($model,'man_service_number',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_service_number'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_service_provider'); ?>
		<?php echo $form->textField($model,'man_service_provider',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_service_provider'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_service_type'); ?>
		<?php echo $form->textField($model,'man_service_type',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_service_type'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_service_plan'); ?>
		<?php echo $form->textField($model,'man_service_plan',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_service_plan'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_service_network'); ?>
		<?php echo $form->textField($model,'man_service_network',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_service_network'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_unlock_pin'); ?>
		<?php echo $form->textField($model,'man_unlock_pin',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_unlock_pin'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_serial_imei'); ?>
		<?php echo $form->textField($model,'man_serial_imei',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_serial_imei'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'man_serial_sim'); ?>
		<?php echo $form->textField($model,'man_serial_sim',array('size'=>40,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'man_serial_sim'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'nmap_type'); ?>
		<?php echo $form->textField($model,'nmap_type',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nmap_type'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'last_seen'); ?>
		<?php echo $form->textField($model,'last_seen'); ?>
		<?php echo $form->error($model,'last_seen'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'last_seen_by'); ?>
		<?php echo $form->textField($model,'last_seen_by',array('size'=>40,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'last_seen_by'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'last_user'); ?>
		<?php echo $form->textField($model,'last_user',array('size'=>40,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'last_user'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'access_details'); ?>
		<?php echo $form->textArea($model,'access_details',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'access_details'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'snmp_oid'); ?>
		<?php echo $form->textArea($model,'snmp_oid',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'snmp_oid'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'nmis_group'); ?>
		<?php echo $form->textField($model,'nmis_group',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nmis_group'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'nmis_name'); ?>
		<?php echo $form->textField($model,'nmis_name',array('size'=>40,'maxlength'=>50)); ?> 
		<?php echo $form->error($model,'nmis_name'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'nmis_role'); ?>
		<?php echo $form->textField($model,'nmis_role',array('size'=>40,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nmis_role'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'system_key_type'); ?>
		<?php echo $form->textField($model,'system_key_type',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'system_key_type'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'timestamp'); ?>
		<?php echo $form->textField($model,'timestamp'); ?>
		<?php echo $form->error($model,'timestamp'); ?>
	</div>
</div>
</div>
<div class="alert alert-success">

<div class="row">
	<div class="col-md-6">
		<?php echo $form->labelEx($model,'user'); ?>
		<?php echo $form->textField($model,'user'); ?>
		<?php echo $form->error($model,'user'); ?>
	</div>
	
	<div class="col-md-6">
		<?php echo $form->labelEx($model,'department'); ?>
		<?php #echo $form->textField($model,'department'); ?>
        <?php #$connection=Yii::app()->db;   
		$connection=Yii::app()->db;   
					$command = $connection->createCommand('SELECT distinct  departmentid,department FROM  department');
					echo $form->dropDownList($model,'department', CHtml::listData($command->queryAll(),'departmentid','department'),array('empty'=>'----All----'));
				?>	
		<?php echo $form->error($model,'department'); ?>
	</div>
	
	<div class="col-md-6">
		<?php echo $form->labelEx($model,'room'); ?>
		<?php #echo $form->textField($model,'room'); ?>
		<?php 
				$command2 = $connection->createCommand('SELECT id,name FROM  rooms');
				echo $form->dropDownList($model,'room', CHtml::listData($command2->queryAll(),'id','name'),array('empty'=>'----All----'));
			?>
		<?php echo $form->error($model,'room'); ?>
	</div>
	
</div>

</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-danger')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->