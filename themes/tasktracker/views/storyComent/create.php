<?php
$this->breadcrumbs=array(
	'Коментарии'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Все коментарии','url'=>array('index')),
	array('label'=>'Управление коментариями','url'=>array('admin')),
);
?>

<h1>Создать коментарий</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>