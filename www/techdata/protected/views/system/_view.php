<?php
/* @var $this SystemController */
/* @var $data System */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('hostname')); ?>:</b>
	<?php #echo CHtml::encode($data->hostname); ?>
    <?php echo CHtml::link(CHtml::encode($data->hostname), array('view', 'id'=>$data->system_id)); ?>
	<br />
<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('system_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->system_id), array('view', 'id'=>$data->system_id)); ?>
	<br />
-->
	<b><?php echo CHtml::encode($data->getAttributeLabel('system_key')); ?>:</b>
	<?php echo CHtml::encode($data->system_key); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uuid')); ?>:</b>
	<?php echo CHtml::encode($data->uuid); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('domain')); ?>:</b>
	<?php echo CHtml::encode($data->domain); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fqdn')); ?>:</b>
	<?php echo CHtml::encode($data->fqdn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('icon')); ?>:</b>
	<?php echo CHtml::encode($data->icon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('os_group')); ?>:</b>
	<?php echo CHtml::encode($data->os_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('os_family')); ?>:</b>
	<?php echo CHtml::encode($data->os_family); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('os_name')); ?>:</b>
	<?php echo CHtml::encode($data->os_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('os_version')); ?>:</b>
	<?php echo CHtml::encode($data->os_version); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('linked_sys')); ?>:</b>
	<?php echo CHtml::encode($data->linked_sys); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serial')); ?>:</b>
	<?php echo CHtml::encode($data->serial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('model')); ?>:</b>
	<?php echo CHtml::encode($data->model); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manufacturer')); ?>:</b>
	<?php echo CHtml::encode($data->manufacturer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uptime')); ?>:</b>
	<?php echo CHtml::encode($data->uptime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_factor')); ?>:</b>
	<?php echo CHtml::encode($data->form_factor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pc_os_bit')); ?>:</b>
	<?php echo CHtml::encode($data->pc_os_bit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pc_memory')); ?>:</b>
	<?php echo CHtml::encode($data->pc_memory); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pc_num_processor')); ?>:</b>
	<?php echo CHtml::encode($data->pc_num_processor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pc_date_os_installation')); ?>:</b>
	<?php echo CHtml::encode($data->pc_date_os_installation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('printer_port_name')); ?>:</b>
	<?php echo CHtml::encode($data->printer_port_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('printer_shared')); ?>:</b>
	<?php echo CHtml::encode($data->printer_shared); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('printer_shared_name')); ?>:</b>
	<?php echo CHtml::encode($data->printer_shared_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('printer_color')); ?>:</b>
	<?php echo CHtml::encode($data->printer_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('printer_duplex')); ?>:</b>
	<?php echo CHtml::encode($data->printer_duplex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_os_group')); ?>:</b>
	<?php echo CHtml::encode($data->man_os_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_os_family')); ?>:</b>
	<?php echo CHtml::encode($data->man_os_family); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_os_name')); ?>:</b>
	<?php echo CHtml::encode($data->man_os_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_domain')); ?>:</b>
	<?php echo CHtml::encode($data->man_domain); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_status')); ?>:</b>
	<?php echo CHtml::encode($data->man_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_environment')); ?>:</b>
	<?php echo CHtml::encode($data->man_environment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_criticality')); ?>:</b>
	<?php echo CHtml::encode($data->man_criticality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_class')); ?>:</b>
	<?php echo CHtml::encode($data->man_class); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_description')); ?>:</b>
	<?php echo CHtml::encode($data->man_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_function')); ?>:</b>
	<?php echo CHtml::encode($data->man_function); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_type')); ?>:</b>
	<?php echo CHtml::encode($data->man_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_ip_address')); ?>:</b>
	<?php echo CHtml::encode($data->man_ip_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_owner')); ?>:</b>
	<?php echo CHtml::encode($data->man_owner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_org_id')); ?>:</b>
	<?php echo CHtml::encode($data->man_org_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_location_id')); ?>:</b>
	<?php echo CHtml::encode($data->man_location_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_location_level')); ?>:</b>
	<?php echo CHtml::encode($data->man_location_level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_location_suite')); ?>:</b>
	<?php echo CHtml::encode($data->man_location_suite); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_location_room')); ?>:</b>
	<?php echo CHtml::encode($data->man_location_room); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_location_rack')); ?>:</b>
	<?php echo CHtml::encode($data->man_location_rack); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_location_rack_position')); ?>:</b>
	<?php echo CHtml::encode($data->man_location_rack_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_location_rack_size')); ?>:</b>
	<?php echo CHtml::encode($data->man_location_rack_size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_serial')); ?>:</b>
	<?php echo CHtml::encode($data->man_serial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_asset_number')); ?>:</b>
	<?php echo CHtml::encode($data->man_asset_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_model')); ?>:</b>
	<?php echo CHtml::encode($data->man_model); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_manufacturer')); ?>:</b>
	<?php echo CHtml::encode($data->man_manufacturer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_form_factor')); ?>:</b>
	<?php echo CHtml::encode($data->man_form_factor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_icon')); ?>:</b>
	<?php echo CHtml::encode($data->man_icon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_vm_server_name')); ?>:</b>
	<?php echo CHtml::encode($data->man_vm_server_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_vm_system_id')); ?>:</b>
	<?php echo CHtml::encode($data->man_vm_system_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_vm_group')); ?>:</b>
	<?php echo CHtml::encode($data->man_vm_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_cluster_name')); ?>:</b>
	<?php echo CHtml::encode($data->man_cluster_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoice_id')); ?>:</b>
	<?php echo CHtml::encode($data->invoice_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_purchase_invoice')); ?>:</b>
	<?php echo CHtml::encode($data->man_purchase_invoice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_purchase_order_number')); ?>:</b>
	<?php echo CHtml::encode($data->man_purchase_order_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_purchase_cost_center')); ?>:</b>
	<?php echo CHtml::encode($data->man_purchase_cost_center); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_purchase_vendor')); ?>:</b>
	<?php echo CHtml::encode($data->man_purchase_vendor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_purchase_date')); ?>:</b>
	<?php echo CHtml::encode($data->man_purchase_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_purchase_amount')); ?>:</b>
	<?php echo CHtml::encode($data->man_purchase_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_warranty_duration')); ?>:</b>
	<?php echo CHtml::encode($data->man_warranty_duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_warranty_expires')); ?>:</b>
	<?php echo CHtml::encode($data->man_warranty_expires); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_warranty_type')); ?>:</b>
	<?php echo CHtml::encode($data->man_warranty_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_terminal_number')); ?>:</b>
	<?php echo CHtml::encode($data->man_terminal_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_switch_id')); ?>:</b>
	<?php echo CHtml::encode($data->man_switch_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_switch_port')); ?>:</b>
	<?php echo CHtml::encode($data->man_switch_port); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_patch_panel')); ?>:</b>
	<?php echo CHtml::encode($data->man_patch_panel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_patch_panel_port')); ?>:</b>
	<?php echo CHtml::encode($data->man_patch_panel_port); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_wall_port')); ?>:</b>
	<?php echo CHtml::encode($data->man_wall_port); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_picture')); ?>:</b>
	<?php echo CHtml::encode($data->man_picture); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_name')); ?>:</b>
	<?php echo CHtml::encode($data->contact_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_id')); ?>:</b>
	<?php echo CHtml::encode($data->contact_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_service_number')); ?>:</b>
	<?php echo CHtml::encode($data->man_service_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_service_provider')); ?>:</b>
	<?php echo CHtml::encode($data->man_service_provider); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_service_type')); ?>:</b>
	<?php echo CHtml::encode($data->man_service_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_service_plan')); ?>:</b>
	<?php echo CHtml::encode($data->man_service_plan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_service_network')); ?>:</b>
	<?php echo CHtml::encode($data->man_service_network); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_unlock_pin')); ?>:</b>
	<?php echo CHtml::encode($data->man_unlock_pin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_serial_imei')); ?>:</b>
	<?php echo CHtml::encode($data->man_serial_imei); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('man_serial_sim')); ?>:</b>
	<?php echo CHtml::encode($data->man_serial_sim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmap_type')); ?>:</b>
	<?php echo CHtml::encode($data->nmap_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_seen')); ?>:</b>
	<?php echo CHtml::encode($data->last_seen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_seen_by')); ?>:</b>
	<?php echo CHtml::encode($data->last_seen_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_user')); ?>:</b>
	<?php echo CHtml::encode($data->last_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('access_details')); ?>:</b>
	<?php echo CHtml::encode($data->access_details); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('snmp_oid')); ?>:</b>
	<?php echo CHtml::encode($data->snmp_oid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmis_group')); ?>:</b>
	<?php echo CHtml::encode($data->nmis_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmis_name')); ?>:</b>
	<?php echo CHtml::encode($data->nmis_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmis_role')); ?>:</b>
	<?php echo CHtml::encode($data->nmis_role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('system_key_type')); ?>:</b>
	<?php echo CHtml::encode($data->system_key_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->first_timestamp); ?>
	<br />

	*/ ?>

</div>