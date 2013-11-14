<?php
$this->breadcrumbs=array(
	'Story Coments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StoryComent','url'=>array('index')),
	array('label'=>'Create StoryComent','url'=>array('create')),
	array('label'=>'View StoryComent','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage StoryComent','url'=>array('admin')),
);
?>

<h1>Update StoryComent <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>