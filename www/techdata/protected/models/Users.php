<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property string $usersid
 * @property string $uname
 * @property string $pword
 * @property string $departmentid
 * @property string $fname
 * @property string $mname
 * @property string $lname
 * @property string $mobileno
 * @property string $emailad
 * @property string $picture
 * @property string $isactive
 * @property string $updatets
 * @property string $pincode
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{ 
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uname, fname, lname,role', 'required'),
			array('uname, pword, fname, mname, lname,isactive, updatets', 'length', 'max'=>45),
			array('departmentid', 'length', 'max'=>10),
			array('mobileno', 'length', 'max'=>20),
			array('emailad, picture', 'length', 'max'=>100),
			array('isactive', 'length', 'max'=>1),
			array('pincode', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('usersid, uname, pword, departmentid, fname, mname, lname, mobileno, emailad, picture, isactive, updatets, pincode', 'safe', 'on'=>'search'),
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
			'usersid' => 'Usersid',
			'uname' => 'Uname',
			'pword' => 'Pword',
			'departmentid' => 'Departmentid',
			'fname' => 'Name',
			'mname' => 'Middle name',
			'lname' => 'Last name',
			'mobileno' => 'Mobileno',
			'emailad' => 'Emailad',
			'picture' => 'Picture',
			'isactive' => 'Isactive',
			'updatets' => 'Updatets',
			'pincode' => 'Pincode',
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

		$criteria->compare('usersid',$this->usersid,true);
		$criteria->compare('uname',$this->uname,true);
		$criteria->compare('pword',$this->pword,true);
		$criteria->compare('departmentid',$this->departmentid,true);
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('mname',$this->mname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('mobileno',$this->mobileno,true);
		$criteria->compare('emailad',$this->emailad,true);
		$criteria->compare('picture',$this->picture,true);
		$criteria->compare('isactive',$this->isactive,true);
		$criteria->compare('updatets',$this->updatets,true);
		$criteria->compare('pincode',$this->pincode,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
			  'pageSize'=>'100'
			)
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
