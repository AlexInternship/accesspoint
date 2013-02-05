<?php
/* @var $this DocumentsOutboundController */
/* @var $model DocumentsOutbound */

$this->breadcrumbs=array(
	'Documents Outbounds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DocumentsOutbound', 'url'=>array('index')),
	array('label'=>'Create DocumentsOutbound', 'url'=>array('create')),
	array('label'=>'View DocumentsOutbound', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DocumentsOutbound', 'url'=>array('admin')),
);
?>

<h1>Update DocumentsOutbound <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>