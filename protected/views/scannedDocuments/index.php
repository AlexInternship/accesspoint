<?php
/* @var $this ScannedDocumentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Scanned Documents',
);

$this->menu=array(
	array('label'=>'Create ScannedDocuments', 'url'=>array('create')),
	array('label'=>'Manage ScannedDocuments', 'url'=>array('admin')),
);
?>

<h1>Scanned Documents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
