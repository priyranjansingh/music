<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'add-tracks-form',
	'action' => base_url().'/admin/albums/addtrack?album='.$album,
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

<div class="box-body" id="form">
	<div class="form-group">
	<?php foreach ($model as $i => $single): ?>
        <div class="form-group">
            <div class="col-xs-6">
                <?php echo $form->hiddenField($single,"[$i]album",array('value' => $album)); ?>
                <?php echo $form->labelEx($single,"[$i]song_name"); ?>
    			<?php echo $form->textField($single,"[$i]song_name",array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
    			<?php echo $form->error($single,"[$i]song_name"); ?>
            </div>
            <div class="col-xs-6">
                <?php echo $form->labelEx($single,"[$i]artist_name"); ?>
    			<?php echo $form->textField($single,"[$i]artist_name",array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
    			<?php echo $form->error($single,"[$i]artist_name"); ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-6">
                <?php echo $form->labelEx($single,"[$i]genre"); ?>
    			<?php echo $form->dropDownList($single,"[$i]genre",$genres,array('empty' => 'Select Genre','class' => 'form-control')); ?>
    			<?php echo $form->error($single,"[$i]genre"); ?>
            </div>
            <div class="col-xs-6">
                <?php echo $form->labelEx($single,"[$i]path"); ?>
                <?php echo $form->fileField($single,"[$i]path",array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
    			<?php echo $form->error($single,"[$i]path"); ?>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>

<div class="box-footer">
    <?php echo CHtml::link('Back',array('/admin/albums'),array("class" => 'btn btn-info pull-right',"style"=>"margin-left:10px;")); ?>
    <?php echo CHtml::submitButton('Save',array("class" => 'btn btn-info pull-right')); ?>
    <?php echo CHtml::link('Add Row','javascript:void(0);',array("class" => 'btn btn-info pull-right',"id" => "add-row","style"=>"margin-right:10px;")); ?>
</div>

<?php $this->endWidget(); ?>