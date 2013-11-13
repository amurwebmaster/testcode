<?php
$this->breadcrumbs=array(
	'Задачи'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Story','url'=>array('index')),
	array('label'=>'Create Story','url'=>array('create')),
	array('label'=>'Update Story','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Story','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Story','url'=>array('admin')),
);
?>

<h1><?php echo $model->title; ?></h1>

<blockquote><p><?php echo $model->description  ?></p></blockquote><br />

<i class="icon-user"></i> <?php echo $model->id0->login; ?>&nbsp;&nbsp;&nbsp;<i class="icon-calendar"></i> <?php echo $model->date; ?>  &nbsp;&nbsp;&nbsp;<i class="btn btn-success"> Finished</i>