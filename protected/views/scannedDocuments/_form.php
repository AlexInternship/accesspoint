<?php
/* @var $this ScannedDocumentsController */
/* @var $model ScannedDocuments */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'scanned-documents-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sender_email'); ?>
		<?php echo $form->textField($model,'sender_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sender_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'document_id'); ?>
		<?php echo $form->textField($model,'document_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'document_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'protocol'); ?>
		<?php echo $form->textField($model,'protocol',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'protocol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'original_received_date'); ?>
		<?php echo $form->textField($model,'original_received_date'); ?>
		<?php echo $form->error($model,'original_received_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'received_date'); ?>
		<?php echo $form->textField($model,'received_date'); ?>
		<?php echo $form->error($model,'received_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filename'); ?>
		<?php echo $form->textField($model,'filename',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'filename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'document_data'); ?>
		<?php echo $form->textField($model,'document_data'); ?>
		<?php echo $form->error($model,'document_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comments'); ?>
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