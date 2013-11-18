<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'story-coment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Поля отмеченные <span class="required">*</span> должны быть заполнены.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textAreaRow($model,'text',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
    
    <label for="Story_user" class="required">Дата <span class="required">*</span></label>
	<?php
    $this->widget('zii.widgets.jui.CJuiDatePicker',array(
        'model'=>$model,
        'attribute' => 'date',
        'name'=>'date',
        'language' => 'ru',
        'options'=>array(
            'dateFormat' => 'yy-mm-dd',
            'showAnim'=>'fold',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
                                    ),
        'htmlOptions'=>array(
            'style'=>''
        ),
    ));
    ?>
    
    <?php 
          $allstory=CHtml::listData(Story::returnAllRecords(), 'id', 'title');
    ?>
	<?php echo $form->dropDownListRow($model,'num_story',$allstory); ?>
    
    
    <?php 
          $allusers=CHtml::listData(Users::allUsers(), 'id', 'login');
    ?>

	<?php echo $form->dropDownListRow($model,'coment_user',$allusers); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Создать' : 'Сохранить',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
<script>
$("#StoryComent_text").focus();
</script>
