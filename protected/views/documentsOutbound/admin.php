<?php
/* @var $this DocumentsOutboundController */
/* @var $model DocumentsOutbound */

$this->breadcrumbs=array(
	'Documents Outbounds'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DocumentsOutbound', 'url'=>array('index')),
	array('label'=>'Create DocumentsOutbound', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#documents-outbound-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Documents Outbounds</h1>

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
	'id'=>'documents-outbound-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'ehfportal_uuid',
		'peppol_uuid',
		'document_id',
		'sender_id',
		'recipient_id',
		/*
		'document_type',
		'process_type',
		'received_date',
		'send_date',
		'document_data',
		'file',
		'status',
		'biztalkqueue_id',
		'sync_date',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
