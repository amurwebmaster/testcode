<?php
$this->breadcrumbs=array(
	'Story Coments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StoryComent','url'=>array('index')),
	array('label'=>'Manage StoryComent','url'=>array('admin')),
);
?>

<h1>Create StoryComent</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>