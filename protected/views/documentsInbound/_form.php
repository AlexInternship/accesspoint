<?php
/* @var $this DocumentsInboundController */
/* @var $model DocumentsInbound */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'documents-inbound-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'uuid'); ?>
		<?php echo $form->textField($model,'uuid',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'uuid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sender_id'); ?>
		<?php echo $form->textField($model,'sender_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sender_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recipient_id'); ?>
		<?php echo $form->textField($model,'recipient_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'recipient_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'document_type'); ?>
		<?php echo $form->textField($model,'document_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'document_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'process_type'); ?>
		<?php echo $form->textField($model,'process_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'process_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'received_date'); ?>
		<?php echo $form->textField($model,'received_date'); ?>
		<?php echo $form->error($model,'received_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'document_data'); ?>
		<?php echo $form->textArea($model,'document_data',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'document_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sync_date'); ?>
		<?php echo $form->textField($model,'sync_date'); ?>
		<?php echo $form->error($model,'sync_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->