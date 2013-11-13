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

	<?php echo $form->dropDownListRow($model,'status',array('1'=>'new', '2'=>'started', '3'=>'finished', '4'=>'accepted', '5'=>'rejected',)); ?>
    
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
