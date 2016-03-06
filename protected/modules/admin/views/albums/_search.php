<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('class' => 'search-form')
)); ?>
<div class="box-body">
	<div class="form-group">
		<div class="col-xs-3">
			<?php echo $form->label($model,'album_name'); ?>
			<?php echo $form->textField($model,'album_name',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		</div>
		<div class="col-xs-3">
			
		</div>
		<div class="col-xs-3"></div>
		<div class="col-xs-3"></div>
	</div>
</div>
<div class="box-footer">
	<?php echo CHtml::submitButton('Search',array("class" => 'btn btn-info search-button')); ?>
	<a href="<?php echo base_url().'/admin/albums/manage' ?>" class="btn btn-warning">Clear</a>
</div>
<?php $this->endWidget(); ?>