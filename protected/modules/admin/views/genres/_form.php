<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'genres-form',
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
			<?php echo $form->labelEx($model,'genre'); ?>
			<?php echo $form->textField($model,'genre',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'genre'); ?>
		</div>
		<div class="col-xs-6">
		</div>
	</div>
</div>

<div class="box-footer">
    <?php echo CHtml::link('Back',array('/admin/genres'),array("class" => 'btn btn-info pull-right',"style"=>"margin-left:10px;")); ?>
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class" => 'btn btn-info pull-right')); ?>
</div>

<?php $this->endWidget(); ?>