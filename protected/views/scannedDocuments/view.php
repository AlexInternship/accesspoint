<?php
/* @var $this ScannedDocumentsController */
/* @var $model ScannedDocuments */

$this->breadcrumbs=array(
	'Scanned Documents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ScannedDocuments', 'url'=>array('index')),
	array('label'=>'Create ScannedDocuments', 'url'=>array('create')),
	array('label'=>'Update ScannedDocuments', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ScannedDocuments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ScannedDocuments', 'url'=>array('admin')),
);
?>

<h1>View ScannedDocuments #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sender_email',
		'document_id',
		'protocol',
		'original_received_date',
		'received_date',
		'filename',
		'document_data',
		'comments',
		'status',
		'sync_date',
	),
)); ?>
