<?php
/* @var $this DocumentsInboundController */
/* @var $model DocumentsInbound */

$this->breadcrumbs=array(
	'Documents Inbounds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DocumentsInbound', 'url'=>array('index')),
	array('label'=>'Manage DocumentsInbound', 'url'=>array('admin')),
);
?>

<h1>Create DocumentsInbound</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>