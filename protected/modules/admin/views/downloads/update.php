<?php
/* @var $this DownloadsController */
/* @var $model Downloads */

$this->breadcrumbs=array(
	'Downloads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Downloads', 'url'=>array('index')),
	array('label'=>'Create Downloads', 'url'=>array('create')),
	array('label'=>'View Downloads', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Downloads', 'url'=>array('admin')),
);
?>

<h1>Update Downloads <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>