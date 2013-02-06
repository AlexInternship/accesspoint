<?php
/* @var $this DocumentsInboundController */
/* @var $data DocumentsInbound */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uuid')); ?>:</b>
	<?php echo CHtml::encode($data->uuid); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('process_type')); ?>:</b>
	<?php echo CHtml::encode($data->process_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('received_date')); ?>:</b>
	<?php echo CHtml::encode($data->received_date); ?>
	<br />
        
        <?php 
        
              $array = $this->getLogs($data->id);
        $c = $array.lenght();
        
        foreach ($array as $item){
            
                $log_id = $item-> 
                 echo '<a href="http://localhost/accesspoint/index.php?r=log/view&id='.$log_id->id.'">log</a>';
                 }?> 

	<?php /*
         * 
         <b><?php echo CHtml::encode($data->getAttributeLabel('log')); ?>:</b>

                         
       	<?php echo CHtml::button(CHtml::encode('logs'), array($this->getLogs($data->id))); ?>
	<br />
          
         
        <?php
        $relation = $this->getRelations($data->id);
        php?>
         *          
        <b><?php echo CHtml::link($data->getAttributeLabel('log',array('view', 'id'=>$data->id))); ?>:</b>
	<br /> 
        
        <?php echo CHtml::link(CHtml::encode('Log'), array('view', 'id'=>$this->getRelations())); ?>
	
         * ,array($this->getRelations($data->id)
         
	<b><?php echo CHtml::encode($data->getAttributeLabel('document_data')); ?>:</b>
	<?php echo CHtml::encode($data->document_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sync_date')); ?>:</b>
	<?php echo CHtml::encode($data->sync_date); ?>
	<br />

	*/ ?>

</div>