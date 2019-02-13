<?php

/**
 * This is the model class for table "stock_request_part".
 *
 * The followings are the available columns in table 'stock_request_part':
 * @property integer $id
 * @property integer $request_id
 * @property string $part_number
 * @property string $description
 * @property integer $qty
 * @property string $reason
 * @property integer $ac_model
 * @property string $ipc_ref
 */
class StockRequestPart extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stock_request_part';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('request_id, part_number, description, qty, reason, ac_model, ipc_ref', 'required'),
			array('request_id, qty', 'numerical', 'integerOnly'=>true),
			array('part_number', 'length', 'max'=>39),
			array('description, reason,ac_model', 'length', 'max'=>100),
			array('ipc_ref', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, request_id, part_number, description, qty, reason, ac_model, ipc_ref', 'safe', 'on'=>'search'),
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
			'request_id' => 'Request',
			'part_number' => 'Part Number',
			'description' => 'Description',
			'qty' => 'Recomended stock level',
			'reason' => 'Reason',
			'ac_model' => 'A/C Model',
			'ipc_ref' => 'IPC Reference',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('request_id',$this->request_id);
		$criteria->compare('part_number',$this->part_number,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('reason',$this->reason,true);
		$criteria->compare('ac_model',$this->ac_model);
		$criteria->compare('ipc_ref',$this->ipc_ref,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StockRequestPart the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
