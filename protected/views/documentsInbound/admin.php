<?php
/* @var $this DocumentsInboundController */
/* @var $model DocumentsInbound */

$this->breadcrumbs=array(
	'Documents Inbounds'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DocumentsInbound', 'url'=>array('index')),
	array('label'=>'Create DocumentsInbound', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#documents-inbound-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Documents Inbounds</h1>

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
	'id'=>'documents-inbound-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'uuid',
		'sender_id',
		'recipient_id',
		'document_type',
		'process_type',
		/*
		'received_date',
		'document_data',
		'status',
		'sync_date',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
