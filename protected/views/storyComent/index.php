<?php
$this->breadcrumbs=array(
	'Story Coments',
);

$this->menu=array(
	array('label'=>'Create StoryComent','url'=>array('create')),
	array('label'=>'Manage StoryComent','url'=>array('admin')),
);
?>

<h1>Story Coments</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
