<?php
/* @var $this ScannedDocumentsController */
/* @var $model ScannedDocuments */

$this->breadcrumbs=array(
	'Scanned Documents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ScannedDocuments', 'url'=>array('index')),
	array('label'=>'Create ScannedDocuments', 'url'=>array('create')),
	array('label'=>'View ScannedDocuments', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ScannedDocuments', 'url'=>array('admin')),
);
?>

<h1>Update ScannedDocuments <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>