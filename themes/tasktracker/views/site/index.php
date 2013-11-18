<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Добро пожаловать в '.CHtml::encode(Yii::app()->name),
)); ?>

<?php $this->endWidget(); ?>

<p><a href="?r=site/login">Авторизуйтесь</a>, чтобы начать работу с системой!</p>
<br /><br />
