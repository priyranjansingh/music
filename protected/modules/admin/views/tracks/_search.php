<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('class' => 'search-form')
)); ?>
<div class="box-body">
	<div class="form-group">
		<div class="col-xs-3">
			<?php echo $form->label($model,'album'); ?>
			<?php echo $form->textField($model,'album',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		</div>
		<div class="col-xs-3">
			<?php echo $form->label($model,'genre'); ?>
			<?php echo $form->textField($model,'genre',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		</div>
		<div class="col-xs-3">
			<?php echo $form->label($model,'song_name'); ?>
			<?php echo $form->textField($model,'song_name',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		</div>
		<div class="col-xs-3">
			<?php echo $form->label($model,'artist_name'); ?>
			<?php echo $form->textField($model,'artist_name',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		</div>
	</div>
</div>
<div class="box-footer">
	<?php echo CHtml::submitButton('Search',array("class" => 'btn btn-info search-button')); ?>
	<a href="<?php echo base_url().'/admin/tracks/manage' ?>" class="btn btn-warning">Clear</a>
</div>
<?php $this->endWidget(); ?>