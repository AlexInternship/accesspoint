<?php
/* @var $this DocumentsInboundController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Documents Inbounds',
);

$this->menu=array(
	array('label'=>'Create DocumentsInbound', 'url'=>array('create')),
	array('label'=>'Manage DocumentsInbound', 'url'=>array('admin')),
);
?>

<h1>Documents Inbounds</h1>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
