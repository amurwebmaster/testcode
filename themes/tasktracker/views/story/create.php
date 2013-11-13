<?php
$this->breadcrumbs=array(
	'Задачи'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Все задачи','url'=>array('index')),
	array('label'=>'Управление задачами','url'=>array('admin')),
);
?>

<h1>Создать задачу</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>