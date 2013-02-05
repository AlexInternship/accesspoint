<?php
/* @var $this DocumentsInboundController */
/* @var $model DocumentsInbound */

$this->breadcrumbs=array(
	'Documents Inbounds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DocumentsInbound', 'url'=>array('index')),
	array('label'=>'Create DocumentsInbound', 'url'=>array('create')),
	array('label'=>'View DocumentsInbound', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DocumentsInbound', 'url'=>array('admin')),
);
?>

<h1>Update DocumentsInbound <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>