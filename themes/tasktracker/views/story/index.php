<?php
$this->breadcrumbs=array(
	'Задачи',
);

$this->menu=array(
	array('label'=>'Создать задача','url'=>array('create')),
	array('label'=>'Управление задачами','url'=>array('admin')),
);
?>

<h1>Задачи</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
