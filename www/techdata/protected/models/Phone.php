<?php

/**
 * This is the model class for table "phone".
 *
 * The followings are the available columns in table 'phone':
 * @property integer $id
 * @property string $name
 * @property string $ext
 * @property string $mobile
 * @property string $email
 * @property string $department
 */
class Phone extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'phone';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'length', 'max'=>135),
			array('ext', 'length', 'max'=>9),
			array('mobile', 'length', 'max'=>36),
			array('email', 'length', 'max'=>67),
			array('department,position,home,base,status,division', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, ext, mobile, email, department', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'name' => 'Name',
			'ext' => 'Ext',
			'mobile' => 'Mobile',
			'email' => 'Email',
			'department' => 'Group',
			'base' => 'Base',
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

		//$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('ext',$this->ext,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('base',$this->base,true);
		//if(Yii::app()->user->name!=="admin")$criteria->addCondition("base = '".Yii::app()->user->name."' ");
		//else $criteria->addCondition("base = '".$this->base."' ");

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
                        'pageSize'=>150,
        	 )
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Phone the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
