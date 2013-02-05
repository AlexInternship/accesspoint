<?php

/**
 * This is the model class for table "scanned_documents".
 *
 * The followings are the available columns in table 'scanned_documents':
 * @property integer $id
 * @property string $sender_email
 * @property string $document_id
 * @property string $protocol
 * @property string $original_received_date
 * @property string $received_date
 * @property string $filename
 * @property string $document_data
 * @property string $comments
 * @property string $status
 * @property string $sync_date
 */
class ScannedDocuments extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ScannedDocuments the static model class
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
		return 'scanned_documents';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sender_email, document_id, protocol, filename, document_data, status', 'required'),
			array('sender_email, document_id, protocol, filename, comments', 'length', 'max'=>255),
			array('status', 'length', 'max'=>32),
			array('original_received_date, received_date, sync_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sender_email, document_id, protocol, original_received_date, received_date, filename, document_data, comments, status, sync_date', 'safe', 'on'=>'search'),
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
                    'log' => array(self::HAS_MANY, 'log', 'document_id', 'document_table'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sender_email' => 'Sender Email',
			'document_id' => 'Document',
			'protocol' => 'Protocol',
			'original_received_date' => 'Original Received Date',
			'received_date' => 'Received Date',
			'filename' => 'Filename',
			'document_data' => 'Document Data',
			'comments' => 'Comments',
			'status' => 'Status',
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
		$criteria->compare('sender_email',$this->sender_email,true);
		$criteria->compare('document_id',$this->document_id,true);
		$criteria->compare('protocol',$this->protocol,true);
		$criteria->compare('original_received_date',$this->original_received_date,true);
		$criteria->compare('received_date',$this->received_date,true);
		$criteria->compare('filename',$this->filename,true);
		$criteria->compare('document_data',$this->document_data,true);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('sync_date',$this->sync_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}