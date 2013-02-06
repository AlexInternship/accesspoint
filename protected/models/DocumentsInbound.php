<?php

/**
 * This is the model class for table "documents_inbound".
 *
 * The followings are the available columns in table 'documents_inbound':
 * @property integer $id
 * @property string $uuid
 * @property string $sender_id
 * @property string $recipient_id
 * @property string $document_type
 * @property string $process_type
 * @property string $received_date
 * @property string $document_data
 * @property string $status
 * @property string $sync_date
 */
class DocumentsInbound extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DocumentsInbound the static model class
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
		return 'documents_inbound';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uuid, sender_id, recipient_id, document_type, process_type, received_date, document_data, status', 'required'),
			array('uuid, sender_id, recipient_id, document_type, process_type', 'length', 'max'=>255),
			array('status', 'length', 'max'=>32),
			array('sync_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, uuid, sender_id, recipient_id, document_type, process_type, received_date, document_data, status, sync_date', 'safe', 'on'=>'search'),
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
                    'log' => array(self::HAS_ONE, 'log', array('document_table'=>'documents_inbound')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'uuid' => 'Uuid',
			'sender_id' => 'Sender',
			'recipient_id' => 'Recipient',
			'document_type' => 'Document Type',
			'process_type' => 'Process Type',
			'received_date' => 'Received Date',
			'document_data' => 'Document Data',
			'status' => 'Status',
			'sync_date' => 'Sync Date',
                        'log' => 'log'
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
		$criteria->compare('uuid',$this->uuid,true);
		$criteria->compare('sender_id',$this->sender_id,true);
		$criteria->compare('recipient_id',$this->recipient_id,true);
		$criteria->compare('document_type',$this->document_type,true);
		$criteria->compare('process_type',$this->process_type,true);
		$criteria->compare('received_date',$this->received_date,true);
		$criteria->compare('document_data',$this->document_data,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('sync_date',$this->sync_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}