<?php

/**
 * This is the model class for table "oa_location_org".
 *
 * The followings are the available columns in table 'oa_location_org':
 * @property integer $loc_org_id
 * @property string $location_id
 * @property string $location_name
 * @property string $org_id
 *
 * The followings are the available model relations:
 * @property OaLocation $location
 * @property OaOrg $org
 */
class OaLocationOrg extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'oa_location_org';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('location_id, org_id', 'length', 'max'=>10),
			array('location_name', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('loc_org_id, location_id, location_name, org_id', 'safe', 'on'=>'search'),
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
			'location' => array(self::BELONGS_TO, 'OaLocation', 'location_id'),
			'org' => array(self::BELONGS_TO, 'OaOrg', 'org_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'loc_org_id' => 'Loc Org',
			'location_id' => 'Location',
			'location_name' => 'Location Name',
			'org_id' => 'Org',
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

		$criteria->compare('loc_org_id',$this->loc_org_id);
		$criteria->compare('location_id',$this->location_id,true);
		$criteria->compare('location_name',$this->location_name,true);
		$criteria->compare('org_id',$this->org_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OaLocationOrg the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
