<?php
$this->breadcrumbs=array(
	'Коментарии'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Все коментарии','url'=>array('index')),
	array('label'=>'Создать коментарий','url'=>array('create')),
	array('label'=>'Просмотр коментария','url'=>array('view','id'=>$model->id)),
	array('label'=>'Управление коментариями','url'=>array('admin')),
);
?>

<h1>Обновить коментарий <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>