<?php
/* @var $this ScannedDocumentsController */
/* @var $model ScannedDocuments */

$this->breadcrumbs=array(
	'Scanned Documents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ScannedDocuments', 'url'=>array('index')),
	array('label'=>'Manage ScannedDocuments', 'url'=>array('admin')),
);
?>

<h1>Create ScannedDocuments</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>