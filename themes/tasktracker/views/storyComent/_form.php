<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'story-coment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Поля отмеченные <span class="required">*</span> должны быть заполнены.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textAreaRow($model,'text',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'num_story',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'coment_user',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Создать' : 'Сохранить',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
