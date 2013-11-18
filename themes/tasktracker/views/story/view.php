<?php
Yii::app()->clientScript->registerCssFile('./css/story.css');
$this->breadcrumbs=array(
	'Задачи'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Все задачи','url'=>array('index')),
	array('label'=>'Создать задачу','url'=>array('create')),
	array('label'=>'Изменить задачу','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить задачу','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверенны что хотите удалить задачу "'.$model->title.'"?')),
	array('label'=>'Управление задачами','url'=>array('admin')),
);
?>

<h1><?php echo $model->title; ?></h1>

<blockquote><p><?php echo $model->description  ?></p></blockquote><br />

<i class="icon-user"></i> <?php echo $model->id0->login; ?>&nbsp;&nbsp;&nbsp;<i class="icon-calendar"></i> <?php echo $model->date; ?>  &nbsp;&nbsp;&nbsp;<i class="task-status-<?php echo $model->status ?>"><?php echo $model->returnTaskLabels($model->status); ?></i>
<?php
$this->Widget('application.components.widgets.Coments.Coments', array('story'=>$model->id));
?>
<hr />
<p>
<?php $coment=StoryComent::model(); ?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'storycoment-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php echo $form->textAreaRow($coment,'text',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

<div class="form-actions">
        
		<?php echo Chtml::ajaxButton('Отправить', '?r=storycoment/add', array('type'=>'POST', 'data'=>array('text'=>'js:$("#StoryComent_text").val()','user'=>Yii::app()->user->isGuest?0:Yii::app()->user->id, 'story'=>$model->id), 'beforeSend'=>'function(){ if($("#StoryComent_text").val()==""){alert("Заполните пожалуйста текст комментария"); brake;} }', 'complete'=>'js:function(){alert("Коментарий успешно добавлен"); $("#StoryComent_text").val(\'\')}', 'replace' => '#last'), array('id'=>'gocoment', 'class'=>'btn btn-primary')) ?>
	</div>

<?php $this->endWidget(); ?>
</p>