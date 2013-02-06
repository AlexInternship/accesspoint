<?php

/**
 * This is the model class for table "documents_outbound".
 *
 * The followings are the available columns in table 'documents_outbound':
 * @property integer $id
 * @property string $ehfportal_uuid
 * @property string $peppol_uuid
 * @property string $document_id
 * @property string $sender_id
 * @property string $recipient_id
 * @property string $document_type
 * @property string $process_type
 * @property string $received_date
 * @property string $send_date
 * @property string $document_data
 * @property string $file
 * @property string $status
 * @property integer $biztalkqueue_id
 * @property string $sync_date
 */
class DocumentsOutbound extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DocumentsOutbound the static model class
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
		return 'documents_outbound';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ehfportal_uuid, peppol_uuid, document_id, sender_id, recipient_id, document_type, process_type, document_data, file, status', 'required'),
			array('biztalkqueue_id', 'numerical', 'integerOnly'=>true),
			array('ehfportal_uuid, peppol_uuid, document_id, sender_id, recipient_id, document_type, process_type, file', 'length', 'max'=>255),
			array('status', 'length', 'max'=>32),
			array('received_date, send_date, sync_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, ehfportal_uuid, peppol_uuid, document_id, sender_id, recipient_id, document_type, process_type, received_date, send_date, document_data, file, status, biztalkqueue_id, sync_date', 'safe', 'on'=>'search'),
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
                    'log' => array(self::HAS_MANY, 'Log', 'document_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ehfportal_uuid' => 'Ehfportal Uuid',
			'peppol_uuid' => 'Peppol Uuid',
			'document_id' => 'Document',
			'sender_id' => 'Sender',
			'recipient_id' => 'Recipient',
			'document_type' => 'Document Type',
			'process_type' => 'Process Type',
			'received_date' => 'Received Date',
			'send_date' => 'Send Date',
			'document_data' => 'Document Data',
			'file' => 'File',
			'status' => 'Status',
			'biztalkqueue_id' => 'Biztalkqueue',
			'sync_date' => 'Sync Date',
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
		$criteria->compare('ehfportal_uuid',$this->ehfportal_uuid,true);
		$criteria->compare('peppol_uuid',$this->peppol_uuid,true);
		$criteria->compare('document_id',$this->document_id,true);
		$criteria->compare('sender_id',$this->sender_id,true);
		$criteria->compare('recipient_id',$this->recipient_id,true);
		$criteria->compare('document_type',$this->document_type,true);
		$criteria->compare('process_type',$this->process_type,true);
		$criteria->compare('received_date',$this->received_date,true);
		$criteria->compare('send_date',$this->send_date,true);
		$criteria->compare('document_data',$this->document_data,true);
		$criteria->compare('file',$this->file,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('biztalkqueue_id',$this->biztalkqueue_id);
		$criteria->compare('sync_date',$this->sync_date,true);
                $criteria->compare('test','meget_test',true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}