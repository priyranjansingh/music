<?php
/* @var $this DownloadsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Downloads',
);

$this->menu=array(
	array('label'=>'Create Downloads', 'url'=>array('create')),
	array('label'=>'Manage Downloads', 'url'=>array('admin')),
);
?>

<h1>Downloads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
