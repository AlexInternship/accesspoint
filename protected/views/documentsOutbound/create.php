<?php
/* @var $this DocumentsOutboundController */
/* @var $model DocumentsOutbound */

$this->breadcrumbs=array(
	'Documents Outbounds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DocumentsOutbound', 'url'=>array('index')),
	array('label'=>'Manage DocumentsOutbound', 'url'=>array('admin')),
);
?>

<h1>Create DocumentsOutbound</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>