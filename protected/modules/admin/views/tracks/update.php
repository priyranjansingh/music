<?php
/* @var $this TracksController */
/* @var $model Tracks */

$this->breadcrumbs=array(
	'Tracks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tracks', 'url'=>array('index')),
	array('label'=>'Create Tracks', 'url'=>array('create')),
	array('label'=>'View Tracks', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tracks', 'url'=>array('admin')),
);
?>

<h1>Update Tracks <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>