<?php
Yii::app()->clientScript->registerCssFile('./css/story.css');
$this->breadcrumbs=array(
	'Задачи'=>array('index'),
	'Управление задачами',
);

$this->menu=array(
	array('label'=>'Все задачи','url'=>array('index')),
	array('label'=>'Создать','url'=>array('create')),
);
?>

<h1>Управление задачами</h1>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'story-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title:html',
		'date',
		array('name'=>'status', 'type'=>'raw', 'value'=>'Story::returnButyTaskLabels($data->status)'),
		array('name'=>'user', 'type'=>'raw', 'value'=>'$data->id0->login'),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
