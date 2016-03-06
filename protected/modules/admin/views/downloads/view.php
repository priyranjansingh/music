<?php
/* @var $this DownloadsController */
/* @var $model Downloads */

$this->breadcrumbs=array(
	'Downloads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Downloads', 'url'=>array('index')),
	array('label'=>'Create Downloads', 'url'=>array('create')),
	array('label'=>'Update Downloads', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Downloads', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Downloads', 'url'=>array('admin')),
);
?>

<h1>View Downloads #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'album',
		'download_count',
		'status',
		'deleted',
		'date_entered',
		'date_modified',
		'created_by',
		'modified_by',
	),
)); ?>
