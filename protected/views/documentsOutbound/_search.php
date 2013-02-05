<?php
/* @var $this DocumentsOutboundController */
/* @var $model DocumentsOutbound */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ehfportal_uuid'); ?>
		<?php echo $form->textField($model,'ehfportal_uuid',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peppol_uuid'); ?>
		<?php echo $form->textField($model,'peppol_uuid',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'document_id'); ?>
		<?php echo $form->textField($model,'document_id',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sender_id'); ?>
		<?php echo $form->textField($model,'sender_id',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recipient_id'); ?>
		<?php echo $form->textField($model,'recipient_id',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'document_type'); ?>
		<?php echo $form->textField($model,'document_type',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'process_type'); ?>
		<?php echo $form->textField($model,'process_type',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'received_date'); ?>
		<?php echo $form->textField($model,'received_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'send_date'); ?>
		<?php echo $form->textField($model,'send_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'document_data'); ?>
		<?php echo $form->textArea($model,'document_data',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file'); ?>
		<?php echo $form->textField($model,'file',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biztalkqueue_id'); ?>
		<?php echo $form->textField($model,'biztalkqueue_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sync_date'); ?>
		<?php echo $form->textField($model,'sync_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->