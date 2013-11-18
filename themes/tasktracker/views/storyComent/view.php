<?php
$this->breadcrumbs=array(
	'Все комментарии'=>array('index'),
	$model->text,
);

$this->menu=array(
	array('label'=>'Все комментарии','url'=>array('index')),
	array('label'=>'Создать комментарий','url'=>array('create')),
	array('label'=>'Обновить комментарий','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить комментарий','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверенны что хотите удалить комментарий?')),
	array('label'=>'Управление комментариями','url'=>array('admin')),
);
?>

<h1>Комментарий № #<?php echo $model->id; ?></h1>

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
