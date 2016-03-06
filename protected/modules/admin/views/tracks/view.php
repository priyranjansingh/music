<?php
/* @var $this TracksController */
/* @var $model Tracks */

$this->breadcrumbs=array(
	'Tracks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tracks', 'url'=>array('index')),
	array('label'=>'Create Tracks', 'url'=>array('create')),
	array('label'=>'Update Tracks', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tracks', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tracks', 'url'=>array('admin')),
);
?>

<h1>View Tracks #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'album',
		'song_name',
		'artist_name',
		'category',
		'path',
		'status',
		'deleted',
		'date_entered',
		'date_modified',
		'created_by',
		'modified_by',
	),
)); ?>
