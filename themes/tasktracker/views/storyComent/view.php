<?php
$this->breadcrumbs=array(
	'Все коментарии'=>array('index'),
	$model->text,
);

$this->menu=array(
	array('label'=>'Все коментарии','url'=>array('index')),
	array('label'=>'Создать коментарий','url'=>array('create')),
	array('label'=>'Обновить коментарий','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить коментарий','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление коментариями','url'=>array('admin')),
);
?>

<h1>Коментарий № #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'text',
		'date',
		'num_story',
		'coment_user',
	),
)); ?>
