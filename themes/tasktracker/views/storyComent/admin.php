<?php
$this->breadcrumbs=array(
	'Комментарии'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Все комментарии','url'=>array('index')),
	array('label'=>'Создать комментарий','url'=>array('create')),
);
?>

<h1>Создать комментарий</h1>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'story-coment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'text',
		'date',
		'num_story',
		'coment_user',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
