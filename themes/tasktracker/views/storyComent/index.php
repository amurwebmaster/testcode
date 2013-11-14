<?php
$this->breadcrumbs=array(
	'Коментарии',
);

$this->menu=array(
	array('label'=>'Создать коментарий','url'=>array('create')),
	array('label'=>'Управление коментариями','url'=>array('admin')),
);
?>

<h1>Коментарии</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
