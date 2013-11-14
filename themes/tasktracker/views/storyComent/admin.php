<?php
$this->breadcrumbs=array(
	'Коментарии'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Все коментарии','url'=>array('index')),
	array('label'=>'Создать коментарий','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('story-coment-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Создать коментарий</h1>


<?php echo CHtml::link('Поиск','#',array('class'=>'search-button btn')); ?>
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
