<?php
$this->breadcrumbs=array(
	'Задачи'=>array('index'),
	'Управление задачами',
);

$this->menu=array(
	array('label'=>'Все задачи','url'=>array('index')),
	array('label'=>'Создать','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('story-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление задачами</h1>


<?php echo CHtml::link('Поиск','#',array('class'=>'search-button btn')); ?>
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
		'title',
		'description',
		'date',
		'status',
		'user',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
