<?php
/* @var $this DocumentsOutboundController */
/* @var $data DocumentsOutbound */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ehfportal_uuid')); ?>:</b>
	<?php echo CHtml::encode($data->ehfportal_uuid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peppol_uuid')); ?>:</b>
	<?php echo CHtml::encode($data->peppol_uuid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('document_id')); ?>:</b>
	<?php echo CHtml::encode($data->document_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sender_id')); ?>:</b>
	<?php echo CHtml::encode($data->sender_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recipient_id')); ?>:</b>
	<?php echo CHtml::encode($data->recipient_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('document_type')); ?>:</b>
	<?php echo CHtml::encode($data->document_type); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('process_type')); ?>:</b>
	<?php echo CHtml::encode($data->process_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('received_date')); ?>:</b>
	<?php echo CHtml::encode($data->received_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('send_date')); ?>:</b>
	<?php echo CHtml::encode($data->send_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('document_data')); ?>:</b>
	<?php echo CHtml::encode($data->document_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file')); ?>:</b>
	<?php echo CHtml::encode($data->file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('biztalkqueue_id')); ?>:</b>
	<?php echo CHtml::encode($data->biztalkqueue_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sync_date')); ?>:</b>
	<?php echo CHtml::encode($data->sync_date); ?>
	<br />

	*/ ?>

</div>