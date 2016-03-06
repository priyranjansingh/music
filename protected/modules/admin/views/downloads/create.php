<?php
/* @var $this DownloadsController */
/* @var $model Downloads */

$this->breadcrumbs=array(
	'Downloads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Downloads', 'url'=>array('index')),
	array('label'=>'Manage Downloads', 'url'=>array('admin')),
);
?>

<h1>Create Downloads</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>