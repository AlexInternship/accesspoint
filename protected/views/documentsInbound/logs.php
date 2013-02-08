<?php

/* @var $this DocumentsInboundController */
/* @var $model DocumentsInbound */

// TODO: create method getLogId that is the log id currently used

$this->breadcrumbs=array(
	'Documents Inbounds'=>array('index'),
	$this->getLogId()->id,
);

?>
gm
<h1>Log id#<?php echo $this->getLogId()->id; ?></h1>


<?php 
// creates a widget with the log information in the controller

    $this->widget('zii.widgets.CDetailView', array(
	'data'=>$this->getLog(),
	'attributes'=>array(
		'id',
		'log_code',
		'document_table',
		'document_id',
		'date',
		'message',
		'cleaned_message',
		'status',
	),
)); ?>
