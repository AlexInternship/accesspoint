<?php
/* @var $this DocumentsOutboundController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Documents Outbounds',
);

$this->menu=array(
	array('label'=>'Create DocumentsOutbound', 'url'=>array('create')),
	array('label'=>'Manage DocumentsOutbound', 'url'=>array('admin')),
);
?>

<h1>Documents Outbounds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
