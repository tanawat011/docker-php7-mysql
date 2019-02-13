<?php

/**
 * This is the model class for table "system".
 *
 * The followings are the available columns in table 'system':
 * @property string $system_id
 * @property string $system_key
 * @property string $uuid
 * @property string $hostname
 * @property string $domain
 * @property string $fqdn
 * @property string $description
 * @property string $type
 * @property string $icon
 * @property string $os_group
 * @property string $os_family
 * @property string $os_name
 * @property string $os_version
 * @property integer $linked_sys
 * @property string $serial
 * @property string $model
 * @property string $manufacturer
 * @property string $uptime
 * @property string $form_factor
 * @property string $pc_os_bit
 * @property integer $pc_memory
 * @property integer $pc_num_processor
 * @property string $pc_date_os_installation
 * @property string $printer_port_name
 * @property string $printer_shared
 * @property string $printer_shared_name
 * @property string $printer_color
 * @property string $printer_duplex
 * @property string $man_os_group
 * @property string $man_os_family
 * @property string $man_os_name
 * @property string $man_domain
 * @property string $man_status
 * @property string $man_environment
 * @property string $man_criticality
 * @property string $man_class
 * @property string $man_description
 * @property string $man_function
 * @property string $man_type
 * @property string $man_ip_address
 * @property string $man_owner
 * @property string $man_org_id
 * @property string $man_location_id
 * @property string $man_location_level
 * @property string $man_location_suite
 * @property string $man_location_room
 * @property string $man_location_rack
 * @property string $man_location_rack_position
 * @property string $man_location_rack_size
 * @property string $man_serial
 * @property string $man_asset_number
 * @property string $man_model
 * @property string $man_manufacturer
 * @property string $man_form_factor
 * @property string $man_icon
 * @property string $man_vm_server_name
 * @property string $man_vm_system_id
 * @property string $man_vm_group
 * @property string $man_cluster_name
 * @property string $invoice_id
 * @property string $man_purchase_invoice
 * @property string $man_purchase_order_number
 * @property string $man_purchase_cost_center
 * @property string $man_purchase_vendor
 * @property string $man_purchase_date
 * @property string $man_purchase_amount
 * @property string $man_warranty_duration
 * @property string $man_warranty_expires
 * @property string $man_warranty_type
 * @property integer $man_terminal_number
 * @property string $man_switch_id
 * @property string $man_switch_port
 * @property string $man_patch_panel
 * @property string $man_patch_panel_port
 * @property string $man_wall_port
 * @property string $man_picture
 * @property string $contact_name
 * @property string $contact_id
 * @property string $man_service_number
 * @property string $man_service_provider
 * @property string $man_service_type
 * @property string $man_service_plan
 * @property string $man_service_network
 * @property string $man_unlock_pin
 * @property string $man_serial_imei
 * @property string $man_serial_sim
 * @property string $nmap_type
 * @property string $last_seen
 * @property string $last_seen_by
 * @property string $last_user
 * @property string $access_details
 * @property string $snmp_oid
 * @property string $nmis_group
 * @property string $nmis_name
 * @property string $nmis_role
 * @property string $system_key_type
 * @property string $timestamp
 * @property string $first_timestamp
 *
 * The followings are the available model relations:
 * @property OaAlertLog[] $oaAlertLogs
 * @property OaAuditLog[] $oaAuditLogs
 * @property OaGraph[] $oaGraphs
 * @property OaGroupSys[] $oaGroupSys
 * @property OaSwitchPorts[] $oaSwitchPorts
 * @property OaSwitchPorts[] $oaSwitchPorts1
 * @property SysHwBios[] $sysHwBioses
 * @property SysHwGraphsDisk[] $sysHwGraphsDisks
 * @property SysHwHardDrive[] $sysHwHardDrives
 * @property SysHwMemory[] $sysHwMemories
 * @property SysHwMonitor[] $sysHwMonitors
 * @property SysHwMotherboard[] $sysHwMotherboards
 * @property SysHwNetworkCard[] $sysHwNetworkCards
 * @property SysHwNetworkCardIp[] $sysHwNetworkCardIps
 * @property SysHwOpticalDrive[] $sysHwOpticalDrives
 * @property SysHwPartition[] $sysHwPartitions
 * @property SysHwProcessor[] $sysHwProcessors
 * @property SysHwScsiController[] $sysHwScsiControllers
 * @property SysHwSound[] $sysHwSounds
 * @property SysHwVideo[] $sysHwVideos
 * @property SysHwWarranty[] $sysHwWarranties
 * @property SysManAdditionalFieldsData[] $sysManAdditionalFieldsDatas
 * @property SysManAttachment[] $sysManAttachments
 * @property SysManAudits[] $sysManAudits
 * @property SysManNotes[] $sysManNotes
 * @property SysSwAntivirus[] $sysSwAntiviruses
 * @property SysSwDatabase[] $sysSwDatabases
 * @property SysSwDns[] $sysSwDns
 * @property SysSwGroup[] $sysSwGroups
 * @property SysSwLog[] $sysSwLogs
 * @property SysSwNetstat[] $sysSwNetstats
 * @property SysSwPagefile[] $sysSwPagefiles
 * @property SysSwPrintQueue[] $sysSwPrintQueues
 * @property SysSwRoute[] $sysSwRoutes
 * @property SysSwScheduledTask[] $sysSwScheduledTasks
 * @property SysSwService[] $sysSwServices
 * @property SysSwShare[] $sysSwShares
 * @property SysSwSharePerms[] $sysSwSharePerms
 * @property SysSwSoftware[] $sysSwSoftwares
 * @property SysSwSoftwareKey[] $sysSwSoftwareKeys
 * @property SysSwUser[] $sysSwUsers
 * @property SysSwVariable[] $sysSwVariables
 * @property SysSwVirtualMachine[] $sysSwVirtualMachines
 * @property SysSwWebServer[] $sysSwWebServers
 * @property SysSwWebServerExt[] $sysSwWebServerExts
 * @property SysSwWebSite[] $sysSwWebSites
 * @property SysSwWebSiteHeader[] $sysSwWebSiteHeaders
 * @property SysSwWebSiteVirtual[] $sysSwWebSiteVirtuals
 * @property SysSwWindows[] $sysSwWindows
 */
class System extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'system';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			#array('fqdn, access_details, snmp_oid', 'required'),
			array('linked_sys, pc_memory, pc_num_processor, man_terminal_number', 'numerical', 'integerOnly'=>true),
			array('system_key, serial, model, man_serial,user,department,room,tagid', 'length', 'max'=>200),
			array('uuid, hostname, domain, os_name, man_os_name, man_domain, man_function, man_type, man_owner, man_location_level, man_location_suite, man_location_room, man_location_rack, man_location_rack_position, man_purchase_vendor, man_switch_id, man_switch_port, man_wall_port, man_picture, man_service_number, man_service_provider, man_service_type, man_service_plan, man_service_network, man_unlock_pin, man_serial_imei, man_serial_sim', 'length', 'max'=>100),
			array('description, man_description', 'length', 'max'=>250),
			array('type, icon, os_group, os_family, os_version, manufacturer, uptime, form_factor, printer_port_name, printer_shared, printer_shared_name, man_os_group, man_os_family, man_asset_number, man_model, man_manufacturer, man_form_factor, man_icon, man_purchase_invoice, man_purchase_order_number, man_purchase_cost_center, man_purchase_amount, contact_name, nmap_type, nmis_group, nmis_name, nmis_role', 'length', 'max'=>50),
			array('pc_os_bit', 'length', 'max'=>3),
			array('printer_color, printer_duplex, man_warranty_duration', 'length', 'max'=>5),
			array('man_status', 'length', 'max'=>11),
			array('man_environment, man_org_id, man_location_id, man_location_rack_size, invoice_id, contact_id', 'length', 'max'=>10),
			array('man_criticality', 'length', 'max'=>8),
			array('man_class', 'length', 'max'=>15),
			array('man_ip_address', 'length', 'max'=>30),
			array('man_vm_server_name, man_vm_system_id, man_vm_group, man_cluster_name, last_seen_by, last_user', 'length', 'max'=>150),
			array('man_warranty_type', 'length', 'max'=>17),
			array('man_patch_panel, man_patch_panel_port', 'length', 'max'=>45),
			array('system_key_type', 'length', 'max'=>4),
			array('pc_date_os_installation, man_purchase_date, man_warranty_expires, last_seen, timestamp, first_timestamp', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('system_id, system_key, uuid, hostname, domain, fqdn, description, type, icon, os_group, os_family, os_name, os_version, linked_sys, serial, model, manufacturer, uptime, form_factor, pc_os_bit, pc_memory, pc_num_processor, pc_date_os_installation, printer_port_name, printer_shared, printer_shared_name, printer_color, printer_duplex, man_os_group, man_os_family, man_os_name, man_domain, man_status, man_environment, man_criticality, man_class, man_description, man_function, man_type, man_ip_address, man_owner, man_org_id, man_location_id, man_location_level, man_location_suite, man_location_room, man_location_rack, man_location_rack_position, man_location_rack_size, man_serial, man_asset_number, man_model, man_manufacturer, man_form_factor, man_icon, man_vm_server_name, man_vm_system_id, man_vm_group, man_cluster_name, invoice_id, man_purchase_invoice, man_purchase_order_number, man_purchase_cost_center, man_purchase_vendor, man_purchase_date, man_purchase_amount, man_warranty_duration, man_warranty_expires, man_warranty_type, man_terminal_number, man_switch_id, man_switch_port, man_patch_panel, man_patch_panel_port, man_wall_port, man_picture, contact_name, contact_id, man_service_number, man_service_provider, man_service_type, man_service_plan, man_service_network, man_unlock_pin, man_serial_imei, man_serial_sim, nmap_type, last_seen, last_seen_by, last_user, access_details, snmp_oid, nmis_group, nmis_name, nmis_role, system_key_type, timestamp, first_timestamp', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'oaAlertLogs' => array(self::HAS_MANY, 'OaAlertLog', 'system_id'),
			'oaAuditLogs' => array(self::HAS_MANY, 'OaAuditLog', 'system_id'),
			'oaGraphs' => array(self::HAS_MANY, 'OaGraph', 'system_id'),
			'oaGroupSys' => array(self::HAS_MANY, 'OaGroupSys', 'system_id'),
			'oaSwitchPorts' => array(self::HAS_MANY, 'OaSwitchPorts', 'switch_system_id'),
			'oaSwitchPorts1' => array(self::HAS_MANY, 'OaSwitchPorts', 'system_id'),
			'sysHwBioses' => array(self::HAS_MANY, 'SysHwBios', 'system_id'),
			'sysHwGraphsDisks' => array(self::HAS_MANY, 'SysHwGraphsDisk', 'system_id'),
			'sysHwHardDrives' => array(self::HAS_MANY, 'SysHwHardDrive', 'system_id'),
			'sysHwMemories' => array(self::HAS_MANY, 'SysHwMemory', 'system_id'),
			'sysHwMonitors' => array(self::HAS_MANY, 'SysHwMonitor', 'system_id'),
			'sysHwMotherboards' => array(self::HAS_MANY, 'SysHwMotherboard', 'system_id'),
			'sysHwNetworkCards' => array(self::HAS_MANY, 'SysHwNetworkCard', 'system_id'),
			'sysHwNetworkCardIps' => array(self::HAS_MANY, 'SysHwNetworkCardIp', 'system_id'),
			'sysHwOpticalDrives' => array(self::HAS_MANY, 'SysHwOpticalDrive', 'system_id'),
			'sysHwPartitions' => array(self::HAS_MANY, 'SysHwPartition', 'system_id'),
			'sysHwProcessors' => array(self::HAS_MANY, 'SysHwProcessor', 'system_id'),
			'sysHwScsiControllers' => array(self::HAS_MANY, 'SysHwScsiController', 'system_id'),
			'sysHwSounds' => array(self::HAS_MANY, 'SysHwSound', 'system_id'),
			'sysHwVideos' => array(self::HAS_MANY, 'SysHwVideo', 'system_id'),
			'sysHwWarranties' => array(self::HAS_MANY, 'SysHwWarranty', 'system_id'),
			'sysManAdditionalFieldsDatas' => array(self::HAS_MANY, 'SysManAdditionalFieldsData', 'system_id'),
			'sysManAttachments' => array(self::HAS_MANY, 'SysManAttachment', 'system_id'),
			'sysManAudits' => array(self::HAS_MANY, 'SysManAudits', 'system_id'),
			'sysManNotes' => array(self::HAS_MANY, 'SysManNotes', 'system_id'),
			'sysSwAntiviruses' => array(self::HAS_MANY, 'SysSwAntivirus', 'system_id'),
			'sysSwDatabases' => array(self::HAS_MANY, 'SysSwDatabase', 'system_id'),
			'sysSwDns' => array(self::HAS_MANY, 'SysSwDns', 'system_id'),
			'sysSwGroups' => array(self::HAS_MANY, 'SysSwGroup', 'system_id'),
			'sysSwLogs' => array(self::HAS_MANY, 'SysSwLog', 'system_id'),
			'sysSwNetstats' => array(self::HAS_MANY, 'SysSwNetstat', 'system_id'),
			'sysSwPagefiles' => array(self::HAS_MANY, 'SysSwPagefile', 'system_id'),
			'sysSwPrintQueues' => array(self::HAS_MANY, 'SysSwPrintQueue', 'system_id'),
			'sysSwRoutes' => array(self::HAS_MANY, 'SysSwRoute', 'system_id'),
			'sysSwScheduledTasks' => array(self::HAS_MANY, 'SysSwScheduledTask', 'system_id'),
			'sysSwServices' => array(self::HAS_MANY, 'SysSwService', 'system_id'),
			'sysSwShares' => array(self::HAS_MANY, 'SysSwShare', 'system_id'),
			'sysSwSharePerms' => array(self::HAS_MANY, 'SysSwSharePerms', 'system_id'),
			'sysSwSoftwares' => array(self::HAS_MANY, 'SysSwSoftware', 'system_id'),
			'sysSwSoftwareKeys' => array(self::HAS_MANY, 'SysSwSoftwareKey', 'system_id'),
			'sysSwUsers' => array(self::HAS_MANY, 'SysSwUser', 'system_id'),
			'sysSwVariables' => array(self::HAS_MANY, 'SysSwVariable', 'system_id'),
			'sysSwVirtualMachines' => array(self::HAS_MANY, 'SysSwVirtualMachine', 'system_id'),
			'sysSwWebServers' => array(self::HAS_MANY, 'SysSwWebServer', 'system_id'),
			'sysSwWebServerExts' => array(self::HAS_MANY, 'SysSwWebServerExt', 'system_id'),
			'sysSwWebSites' => array(self::HAS_MANY, 'SysSwWebSite', 'system_id'),
			'sysSwWebSiteHeaders' => array(self::HAS_MANY, 'SysSwWebSiteHeader', 'system_id'),
			'sysSwWebSiteVirtuals' => array(self::HAS_MANY, 'SysSwWebSiteVirtual', 'system_id'),
			'sysSwWindows' => array(self::HAS_MANY, 'SysSwWindows', 'system_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'system_id' => 'System',
			'system_key' => 'System Key',
			'uuid' => 'Uuid',
			'hostname' => 'Hostname',
			'domain' => 'Domain',
			'fqdn' => 'Fqdn',
			'description' => 'Description',
			'type' => 'Type',
			'icon' => 'Icon',
			'os_group' => 'Os Group',
			'os_family' => 'Os Family',
			'os_name' => 'Os Name',
			'os_version' => 'Os Version',
			'linked_sys' => 'Linked Sys',
			'serial' => 'Serial',
			'model' => 'Model',
			'manufacturer' => 'Manufacturer',
			'uptime' => 'Uptime',
			'form_factor' => 'Form Factor',
			'pc_os_bit' => 'Pc Os Bit',
			'pc_memory' => 'Pc Memory',
			'pc_num_processor' => 'Pc Num Processor',
			'pc_date_os_installation' => 'Pc Date Os Installation',
			'printer_port_name' => 'Printer Port Name',
			'printer_shared' => 'Printer Shared',
			'printer_shared_name' => 'Printer Shared Name',
			'printer_color' => 'Printer Color',
			'printer_duplex' => 'Printer Duplex',
			'man_os_group' => 'Man Os Group',
			'man_os_family' => 'Man Os Family',
			'man_os_name' => 'Man Os Name',
			'man_domain' => 'Man Domain',
			'man_status' => 'Man Status',
			'man_environment' => 'Man Environment',
			'man_criticality' => 'Man Criticality',
			'man_class' => 'Man Class',
			'man_description' => 'Man Description',
			'man_function' => 'Man Function',
			'man_type' => 'Man Type',
			'man_ip_address' => 'Man Ip Address',
			'man_owner' => 'Man Owner',
			'man_org_id' => 'Man Org',
			'man_location_id' => 'Man Location',
			'man_location_level' => 'Man Location Level',
			'man_location_suite' => 'Man Location Suite',
			'man_location_room' => 'Man Location Room',
			'man_location_rack' => 'Man Location Rack',
			'man_location_rack_position' => 'Man Location Rack Position',
			'man_location_rack_size' => 'Man Location Rack Size',
			'man_serial' => 'Man Serial',
			'man_asset_number' => 'Man Asset Number',
			'man_model' => 'Man Model',
			'man_manufacturer' => 'Man Manufacturer',
			'man_form_factor' => 'Man Form Factor',
			'man_icon' => 'Man Icon',
			'man_vm_server_name' => 'Man Vm Server Name',
			'man_vm_system_id' => 'Man Vm System',
			'man_vm_group' => 'Man Vm Group',
			'man_cluster_name' => 'Man Cluster Name',
			'invoice_id' => 'Invoice',
			'man_purchase_invoice' => 'Man Purchase Invoice',
			'man_purchase_order_number' => 'Man Purchase Order Number',
			'man_purchase_cost_center' => 'Man Purchase Cost Center',
			'man_purchase_vendor' => 'Man Purchase Vendor',
			'man_purchase_date' => 'Man Purchase Date',
			'man_purchase_amount' => 'Man Purchase Amount',
			'man_warranty_duration' => 'Man Warranty Duration',
			'man_warranty_expires' => 'Man Warranty Expires',
			'man_warranty_type' => 'Man Warranty Type',
			'man_terminal_number' => 'Man Terminal Number',
			'man_switch_id' => 'Man Switch',
			'man_switch_port' => 'Man Switch Port',
			'man_patch_panel' => 'Man Patch Panel',
			'man_patch_panel_port' => 'Man Patch Panel Port',
			'man_wall_port' => 'Man Wall Port',
			'man_picture' => 'Man Picture',
			'contact_name' => 'Contact Name',
			'contact_id' => 'Contact',
			'man_service_number' => 'Man Service Number',
			'man_service_provider' => 'Man Service Provider',
			'man_service_type' => 'Man Service Type',
			'man_service_plan' => 'Man Service Plan',
			'man_service_network' => 'Man Service Network',
			'man_unlock_pin' => 'Man Unlock Pin',
			'man_serial_imei' => 'Man Serial Imei',
			'man_serial_sim' => 'Man Serial Sim',
			'nmap_type' => 'Nmap Type',
			'last_seen' => 'Last Seen',
			'last_seen_by' => 'Last Seen By',
			'last_user' => 'Last User',
			'access_details' => 'Access Details',
			'snmp_oid' => 'Snmp Oid',
			'nmis_group' => 'Nmis Group',
			'nmis_name' => 'Nmis Name',
			'nmis_role' => 'Nmis Role',
			'system_key_type' => 'System Key Type',
			'timestamp' => 'Timestamp',
			'first_timestamp' => 'First Timestamp',
			
			'user' => 'User',
			'department' => 'Department',
			'room' => 'Room',
			'tagid' => 'Tag ID',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('system_id',$this->system_id,true);
		$criteria->compare('system_key',$this->system_key,true);
		$criteria->compare('uuid',$this->uuid,true);
		$criteria->compare('hostname',$this->hostname,true);
		$criteria->compare('domain',$this->domain,true);
		$criteria->compare('fqdn',$this->fqdn,true);
		$criteria->compare('description',$this->description,true);
		
		$criteria->compare('type',$this->type,true);
		if(isset($this->type)){
			
		}else $criteria->addCondition(" type = 'computer'  ");
		
		$criteria->compare('icon',$this->icon,true);
		$criteria->compare('os_group',$this->os_group,true);
		$criteria->compare('os_family',$this->os_family,true);
		$criteria->compare('os_name',$this->os_name,true);
		$criteria->compare('os_version',$this->os_version,true);
		$criteria->compare('linked_sys',$this->linked_sys);
		$criteria->compare('serial',$this->serial,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('manufacturer',$this->manufacturer,true);
		$criteria->compare('uptime',$this->uptime,true);
		$criteria->compare('form_factor',$this->form_factor,true);
		$criteria->compare('pc_os_bit',$this->pc_os_bit,true);
		$criteria->compare('pc_memory',$this->pc_memory);
		$criteria->compare('pc_num_processor',$this->pc_num_processor);
		$criteria->compare('pc_date_os_installation',$this->pc_date_os_installation,true);
		$criteria->compare('printer_port_name',$this->printer_port_name,true);
		$criteria->compare('printer_shared',$this->printer_shared,true);
		$criteria->compare('printer_shared_name',$this->printer_shared_name,true);
		$criteria->compare('printer_color',$this->printer_color,true);
		$criteria->compare('printer_duplex',$this->printer_duplex,true);
		$criteria->compare('man_os_group',$this->man_os_group,true);
		$criteria->compare('man_os_family',$this->man_os_family,true);
		$criteria->compare('man_os_name',$this->man_os_name,true);
		$criteria->compare('man_domain',$this->man_domain,true);
		$criteria->compare('man_status',$this->man_status,true);
		$criteria->compare('man_environment',$this->man_environment,true);
		$criteria->compare('man_criticality',$this->man_criticality,true);
		$criteria->compare('man_class',$this->man_class,true);
		$criteria->compare('man_description',$this->man_description,true);
		$criteria->compare('man_function',$this->man_function,true);
		$criteria->compare('man_type',$this->man_type,true);
		$criteria->compare('man_ip_address',$this->man_ip_address,true);
		$criteria->compare('man_owner',$this->man_owner,true);
		$criteria->compare('man_org_id',$this->man_org_id,true);
		$criteria->compare('man_location_id',$this->man_location_id,true);
		$criteria->compare('man_location_level',$this->man_location_level,true);
		$criteria->compare('man_location_suite',$this->man_location_suite,true);
		$criteria->compare('man_location_room',$this->man_location_room,true);
		$criteria->compare('man_location_rack',$this->man_location_rack,true);
		$criteria->compare('man_location_rack_position',$this->man_location_rack_position,true);
		$criteria->compare('man_location_rack_size',$this->man_location_rack_size,true);
		$criteria->compare('man_serial',$this->man_serial,true);
		$criteria->compare('man_asset_number',$this->man_asset_number,true);
		$criteria->compare('man_model',$this->man_model,true);
		$criteria->compare('man_manufacturer',$this->man_manufacturer,true);
		$criteria->compare('man_form_factor',$this->man_form_factor,true);
		$criteria->compare('man_icon',$this->man_icon,true);
		$criteria->compare('man_vm_server_name',$this->man_vm_server_name,true);
		$criteria->compare('man_vm_system_id',$this->man_vm_system_id,true);
		$criteria->compare('man_vm_group',$this->man_vm_group,true);
		$criteria->compare('man_cluster_name',$this->man_cluster_name,true);
		$criteria->compare('invoice_id',$this->invoice_id,true);
		$criteria->compare('man_purchase_invoice',$this->man_purchase_invoice,true);
		$criteria->compare('man_purchase_order_number',$this->man_purchase_order_number,true);
		$criteria->compare('man_purchase_cost_center',$this->man_purchase_cost_center,true);
		$criteria->compare('man_purchase_vendor',$this->man_purchase_vendor,true);
		$criteria->compare('man_purchase_date',$this->man_purchase_date,true);
		$criteria->compare('man_purchase_amount',$this->man_purchase_amount,true);
		$criteria->compare('man_warranty_duration',$this->man_warranty_duration,true);
		$criteria->compare('man_warranty_expires',$this->man_warranty_expires,true);
		$criteria->compare('man_warranty_type',$this->man_warranty_type,true);
		$criteria->compare('man_terminal_number',$this->man_terminal_number);
		$criteria->compare('man_switch_id',$this->man_switch_id,true);
		$criteria->compare('man_switch_port',$this->man_switch_port,true);
		$criteria->compare('man_patch_panel',$this->man_patch_panel,true);
		$criteria->compare('man_patch_panel_port',$this->man_patch_panel_port,true);
		$criteria->compare('man_wall_port',$this->man_wall_port,true);
		$criteria->compare('man_picture',$this->man_picture,true);
		$criteria->compare('contact_name',$this->contact_name,true);
		$criteria->compare('contact_id',$this->contact_id,true);
		$criteria->compare('man_service_number',$this->man_service_number,true);
		$criteria->compare('man_service_provider',$this->man_service_provider,true);
		$criteria->compare('man_service_type',$this->man_service_type,true);
		$criteria->compare('man_service_plan',$this->man_service_plan,true);
		$criteria->compare('man_service_network',$this->man_service_network,true);
		$criteria->compare('man_unlock_pin',$this->man_unlock_pin,true);
		$criteria->compare('man_serial_imei',$this->man_serial_imei,true);
		$criteria->compare('man_serial_sim',$this->man_serial_sim,true);
		$criteria->compare('nmap_type',$this->nmap_type,true);
		$criteria->compare('last_seen',$this->last_seen,true);
		$criteria->compare('last_seen_by',$this->last_seen_by,true);
		$criteria->compare('last_user',$this->last_user,true);
		$criteria->compare('access_details',$this->access_details,true);
		$criteria->compare('snmp_oid',$this->snmp_oid,true);
		$criteria->compare('nmis_group',$this->nmis_group,true);
		$criteria->compare('nmis_name',$this->nmis_name,true);
		$criteria->compare('nmis_role',$this->nmis_role,true);
		$criteria->compare('system_key_type',$this->system_key_type,true);
		$criteria->compare('timestamp',$this->timestamp,true);
		$criteria->compare('first_timestamp',$this->first_timestamp,true);
		
		
		$criteria->compare('user',$this->user,true);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('room',$this->room,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
				'pagination'=>array(
        'pageSize'=>50,
    ),
		)
		
		
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return System the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
