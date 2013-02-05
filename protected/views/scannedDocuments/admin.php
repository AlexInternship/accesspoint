<?php
/* @var $this ScannedDocumentsController */
/* @var $model ScannedDocuments */

$this->breadcrumbs=array(
	'Scanned Documents'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ScannedDocuments', 'url'=>array('index')),
	array('label'=>'Create ScannedDocuments', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#scanned-documents-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Scanned Documents</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'scanned-documents-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'sender_email',
		'document_id',
		'protocol',
		'original_received_date',
		'received_date',
		/*
		'filename',
		'document_data',
		'comments',
		'status',
		'sync_date',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
