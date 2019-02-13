<?php

/**
 * This is the model class for table "department".
 *
 * The followings are the available columns in table 'department':
 * @property string $departmentid
 * @property string $department
 * @property string $isactive
 * @property string $entryid
 * @property string $entryts
 * @property string $updateid
 * @property string $updatets
 */
class Department extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'department';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('department, isactive', 'required'),
			array('department,updatets,entryts', 'length', 'max'=>100),
			array('isactive', 'length', 'max'=>1),
			array('entryid, updateid', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('departmentid, department, isactive, entryid, entryts, updateid, updatets', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'departmentid' => 'Departmentid',
			'department' => 'Group name',
			'isactive' => 'Isactive',
			'entryid' => 'Entryid',
			'entryts' => 'Entryts',
			'updateid' => 'Updateid',
			'updatets' => 'Updatets',
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

		$criteria->compare('departmentid',$this->departmentid,true);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('isactive',$this->isactive,true);
		$criteria->compare('entryid',$this->entryid,true);
		$criteria->compare('entryts',$this->entryts,true);
		$criteria->compare('updateid',$this->updateid,true);
		$criteria->compare('updatets',$this->updatets,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'Pagination' => array (
                  'PageSize' => 30 //edit your number items per page here
              ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Department the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
