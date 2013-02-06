<?php

/**
 * This is the model class for table "log".
 *
 * The followings are the available columns in table 'log':
 * @property integer $id
 * @property string $log_code
 * @property string $document_table
 * @property string $document_id
 * @property string $date
 * @property string $message
 * @property string $cleaned_message
 * @property string $status
 */
class Log extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Log the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'log';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('log_code, date, message, status', 'required'),
			array('log_code, document_table, document_id', 'length', 'max'=>255),
			array('status', 'length', 'max'=>32),
			array('cleaned_message', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, log_code, document_table, document_id, date, message, cleaned_message, status', 'safe', 'on'=>'search'),
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
                    'DocumentsOutbound' => array(self::HAS_MANY, 'DocumentsOutbound', 'document_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'log_code' => 'Log Code',
			'document_table' => 'Document Table',
			'document_id' => 'Document',
			'date' => 'Date',
			'message' => 'Message',
			'cleaned_message' => 'Cleaned Message',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('log_code',$this->log_code,true);
		$criteria->compare('document_table',$this->document_table,true);
		$criteria->compare('document_id',$this->document_id,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('cleaned_message',$this->cleaned_message,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}