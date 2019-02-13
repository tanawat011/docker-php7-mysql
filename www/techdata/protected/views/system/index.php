<?php
/* @var $this SystemController */
/* @var $dataProvider CActiveDataProvider */

$this->layout = "column1";

$this->breadcrumbs=array(
	'Systems',
);

$this->menu=array(
	array('label'=>'Create System', 'url'=>array('create')),
	array('label'=>'Manage System', 'url'=>array('admin')),
);
?>



<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Inventory Control</div>
  <div class="panel-body">
    

<?php 

$dataProvider=new CActiveDataProvider('System', array(
    'criteria'=>array(
        'condition'=>'1=1',
        'order'=>'hostname DESC',
        #'with'=>array('author'),
    ),
    'countCriteria'=>array(
        'condition'=>'linked_sys = 0',
        // 'order' and 'with' clauses have no meaning for the count query
    ),
    'pagination'=>array(
        'pageSize'=>50,
    ),
));
 


$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'system-grid',
	'dataProvider'=>$dataProvider,
	#'filter'=>$model,
	'columns'=>array(
		#'system_id',
		#'system_key',
		#'uuid',
		'hostname',
		#'domain',
		'fqdn',
		
		'description',
		'type',
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
		),
	),
)); ?>


</div>
</div>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
