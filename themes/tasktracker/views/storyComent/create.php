<?php
$this->breadcrumbs=array(
	'Комментарии'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Все комментарии','url'=>array('index')),
	array('label'=>'Управление комментариями','url'=>array('admin')),
);
?>

<h1>Создать комментарий</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>