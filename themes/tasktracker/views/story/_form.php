<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'story-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Поля отмеченные <span class="required">*</span> обязательны к заполнению.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

    <label for="Story_user" class="required">Дата <span class="required">*</span></label>
	<?php
    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
        'model'=>$model,
        'attribute' => 'date',
        'name'=>'date',
        'language' => 'ru',
        'options'=>array(
            'dateFormat' => 'yy-mm-dd',
            'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
                                    ),
        'htmlOptions'=>array(
            'style'=>''
        ),
    ));
    ?>

	<?php echo $form->dropDownListRow($model,'status',array($model::IS_NEW=>'Новая', $model::IS_STARTED=>'Начатая', $model::IS_FINISHED=>'Законченная', $model::IS_ACCEPTED=>'Принята', $model::IS_REJECTED=>'Отклонена',)); ?>
    
    <?php $users=CHtml::listData(Users::model()->findAll(), 'id' , 'login'); ?>

	<?php echo $form->dropDownListRow($model,'user',$users); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Создать' : 'Сохранить',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
<script>
$("#Story_title").focus();
</script>
