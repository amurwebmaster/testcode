<?php
$this->breadcrumbs=array(
	'Story Coments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StoryComent','url'=>array('index')),
	array('label'=>'Create StoryComent','url'=>array('create')),
	array('label'=>'Update StoryComent','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete StoryComent','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StoryComent','url'=>array('admin')),
);
?>

<h1>View StoryComent #<?php echo $model->id; ?></h1>

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
