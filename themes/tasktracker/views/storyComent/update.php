<?php
$this->breadcrumbs=array(
	'Комментарии'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Все комментарии','url'=>array('index')),
	array('label'=>'Создать комментарий','url'=>array('create')),
	array('label'=>'Просмотр комментария','url'=>array('view','id'=>$model->id)),
	array('label'=>'Управление комментариями','url'=>array('admin')),
);
?>

<h1>Обновить комментарий <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>