<?php
/* @var $this DocumentsOutboundController */
/* @var $model DocumentsOutbound */

$this->breadcrumbs=array(
	'Documents Outbounds'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DocumentsOutbound', 'url'=>array('index')),
	array('label'=>'Create DocumentsOutbound', 'url'=>array('create')),
	array('label'=>'Update DocumentsOutbound', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DocumentsOutbound', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DocumentsOutbound', 'url'=>array('admin')),
);
?>

<h1>View DocumentsOutbound #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ehfportal_uuid',
		'peppol_uuid',
		'document_id',
		'sender_id',
		'recipient_id',
		'document_type',
		'process_type',
		'received_date',
		'send_date',
		'document_data',
		'file',
		'status',
		'biztalkqueue_id',
		'sync_date',
	),
)); ?>
