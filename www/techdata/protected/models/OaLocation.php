<?php

/**
 * This is the model class for table "oa_location".
 *
 * The followings are the available columns in table 'oa_location':
 * @property string $location_id
 * @property string $location_name
 * @property string $location_type
 * @property string $location_room
 * @property string $location_suite
 * @property string $location_level
 * @property string $location_address
 * @property string $location_suburb
 * @property string $location_city
 * @property string $location_district
 * @property string $location_region
 * @property string $location_area
 * @property string $location_state
 * @property string $location_postcode
 * @property string $location_country
 * @property string $location_tags
 * @property string $location_phone
 * @property string $location_picture
 * @property double $location_latitude
 * @property double $location_longitude
 * @property string $location_geo
 * @property string $location_comments
 * @property string $location_icon
 * @property string $location_group_id
 *
 * The followings are the available model relations:
 * @property OaLocationOrg[] $oaLocationOrgs
 */
class OaLocation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'oa_location';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('location_latitude, location_longitude', 'required'),
			array('location_latitude, location_longitude', 'numerical'),
			array('location_name, location_type, location_room, location_suite, location_level, location_address, location_suburb, location_city, location_district, location_region, location_area, location_state, location_country, location_picture, location_comments, location_icon', 'length', 'max'=>100),
			array('location_postcode, location_group_id', 'length', 'max'=>10),
			array('location_tags', 'length', 'max'=>250),
			array('location_phone', 'length', 'max'=>20),
			array('location_geo', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('location_id, location_name, location_type, location_room, location_suite, location_level, location_address, location_suburb, location_city, location_district, location_region, location_area, location_state, location_postcode, location_country, location_tags, location_phone, location_picture, location_latitude, location_longitude, location_geo, location_comments, location_icon, location_group_id', 'safe', 'on'=>'search'),
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
			'oaLocationOrgs' => array(self::HAS_MANY, 'OaLocationOrg', 'location_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'location_id' => 'Location',
			'location_name' => 'Location Name',
			'location_type' => 'Location Type',
			'location_room' => 'Location Room',
			'location_suite' => 'Location Suite',
			'location_level' => 'Location Level',
			'location_address' => 'Location Address',
			'location_suburb' => 'Location Suburb',
			'location_city' => 'Location City',
			'location_district' => 'Location District',
			'location_region' => 'Location Region',
			'location_area' => 'Location Area',
			'location_state' => 'Location State',
			'location_postcode' => 'Location Postcode',
			'location_country' => 'Location Country',
			'location_tags' => 'Location Tags',
			'location_phone' => 'Location Phone',
			'location_picture' => 'Location Picture',
			'location_latitude' => 'Location Latitude',
			'location_longitude' => 'Location Longitude',
			'location_geo' => 'Location Geo',
			'location_comments' => 'Location Comments',
			'location_icon' => 'Location Icon',
			'location_group_id' => 'Location Group',
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

		$criteria->compare('location_id',$this->location_id,true);
		$criteria->compare('location_name',$this->location_name,true);
		$criteria->compare('location_type',$this->location_type,true);
		$criteria->compare('location_room',$this->location_room,true);
		$criteria->compare('location_suite',$this->location_suite,true);
		$criteria->compare('location_level',$this->location_level,true);
		$criteria->compare('location_address',$this->location_address,true);
		$criteria->compare('location_suburb',$this->location_suburb,true);
		$criteria->compare('location_city',$this->location_city,true);
		$criteria->compare('location_district',$this->location_district,true);
		$criteria->compare('location_region',$this->location_region,true);
		$criteria->compare('location_area',$this->location_area,true);
		$criteria->compare('location_state',$this->location_state,true);
		$criteria->compare('location_postcode',$this->location_postcode,true);
		$criteria->compare('location_country',$this->location_country,true);
		$criteria->compare('location_tags',$this->location_tags,true);
		$criteria->compare('location_phone',$this->location_phone,true);
		$criteria->compare('location_picture',$this->location_picture,true);
		$criteria->compare('location_latitude',$this->location_latitude);
		$criteria->compare('location_longitude',$this->location_longitude);
		$criteria->compare('location_geo',$this->location_geo,true);
		$criteria->compare('location_comments',$this->location_comments,true);
		$criteria->compare('location_icon',$this->location_icon,true);
		$criteria->compare('location_group_id',$this->location_group_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OaLocation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
