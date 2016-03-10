<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

<div class="box-body">
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'firstname'); ?>
			<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'firstname'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'lastname'); ?>
			<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'lastname'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'username'); ?>
			<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'username'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'email'); ?>
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>
	</div>
</div>

<div class="box-footer">
    <?php echo CHtml::link('Back',array('/admin/users'),array("class" => 'btn btn-info pull-right',"style"=>"margin-left:10px;")); ?>
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class" => 'btn btn-info pull-right')); ?>
</div>

<?php $this->endWidget(); ?>