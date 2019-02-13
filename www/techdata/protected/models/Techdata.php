<?php

/**
 * This is the model class for table "techdata".
 *
 * The followings are the available columns in table 'techdata':
 * @property integer $id
 * @property string $caseNo
 * @property string $caseDate
 * @property string $caseTitle
 * @property string $documentType
 * @property string $ACModel
 * @property string $ACSerial
 * @property string $ATAChapter
 * @property string $partNumber
 * @property string $partDesc
 * @property string $updateTime
 */
class Techdata extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'techdata';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('caseNo, caseDate, caseTitle, documentType, ACModel, ACSerial, ATAChapter, partNumber, partDesc', 'required'),
			array('caseNo', 'length', 'max'=>20),
			array('caseTitle, ACSerial', 'length', 'max'=>100),
			array('documentType, ACModel', 'length', 'max'=>2),
			array('ATAChapter', 'length', 'max'=>150),
			array('partNumber,updateTime,status', 'length', 'max'=>50),
			array('partDesc,files', 'length', 'max'=>2000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, caseNo, caseDate, caseTitle, documentType, ACModel, ACSerial, ATAChapter, partNumber, partDesc, updateTime', 'safe', 'on'=>'search'),
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
			'caseNo' => 'FTR/Case No.',
			'caseDate' => 'FTR/Case Date',
			'caseTitle' => 'FTR/Case Title',
			'documentType' => 'Document Type',
			'ACModel' => 'A/C model',
			'ACSerial' => 'A/C serial',
			'ATAChapter' => 'ATA chapter',
			'partNumber' => 'Part Number',
			'partDesc' => 'Part Description',
			'updateTime' => 'Update Time',
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
		$criteria->compare('caseNo',$this->caseNo,true);
		if(!empty($this->caseDate) && !empty($this->id))   $criteria->addCondition("caseDate between '".$this->caseDate."'  and  '".$this->id."' ");
 		
		$criteria->compare('caseTitle',$this->caseTitle,true);
		
		if(!empty($this->documentType))$criteria->addCondition(" documentType = '".$this->documentType."' ");
		if(!empty($this->ACModel))$criteria->addCondition(" ACModel = '".$this->ACModel."' ");
		if(!empty($this->ACSerial))$criteria->addCondition(" ACSerial = '".$this->ACSerial."' ");
		
		/*$criteria->compare('ACModel',$this->ACModel,true);
		$criteria->compare('ACSerial',$this->ACSerial,true);*/
		$criteria->compare('ATAChapter',$this->ATAChapter,true);
		$criteria->compare('partNumber',$this->partNumber,true);
		$criteria->compare('partDesc',$this->partDesc,true);
		$criteria->compare('updateTime',$this->updateTime,true);
		if(isset($_SESSION["role"]) && $_SESSION["role"]=="1") $criteria->compare('status',$this->status,true);
		if(isset($_SESSION["role"]) && $_SESSION["role"]=="2") $criteria->addCondition(" status = '1' ");

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
	 * @return Techdata the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
