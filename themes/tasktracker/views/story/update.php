<?php
$this->breadcrumbs=array(
	'Задачи'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Все задачи','url'=>array('index')),
	array('label'=>'Создать задачу','url'=>array('create')),
	array('label'=>'Просмотр задачи','url'=>array('view','id'=>$model->id)),
	array('label'=>'Управление задачами','url'=>array('admin')),
);
?>

<h1>Обновить задачу № <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>