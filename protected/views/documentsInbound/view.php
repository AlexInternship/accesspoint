<?php
/* @var $this DocumentsInboundController */
/* @var $model DocumentsInbound */

$this->breadcrumbs=array(
	'Documents Inbounds'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DocumentsInbound', 'url'=>array('index')),
	array('label'=>'Create DocumentsInbound', 'url'=>array('create')),
	array('label'=>'Update DocumentsInbound', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DocumentsInbound', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DocumentsInbound', 'url'=>array('admin')),
);
?>

<h1>View DocumentsInbound #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'uuid',
		'sender_id',
		'recipient_id',
		'document_type',
		'process_type',
		'received_date',
		'document_data',
		'status',
		'sync_date',
	),
)); ?>
