<?php
/* @var $this LogController */
/* @var $model Log */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'log-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'log_code'); ?>
		<?php echo $form->textField($model,'log_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'log_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'document_table'); ?>
		<?php echo $form->textField($model,'document_table',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'document_table'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'document_id'); ?>
		<?php echo $form->textField($model,'document_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'document_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'message'); ?>
		<?php echo $form->textArea($model,'message',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'message'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cleaned_message'); ?>
		<?php echo $form->textArea($model,'cleaned_message',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'cleaned_message'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->