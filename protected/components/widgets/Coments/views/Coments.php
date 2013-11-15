<?php Yii::app()->clientScript->registerCssFile('/css/coments.css');// Регистрируем таблицы стилей для коментариев ?> 
<div class="coments">
<h3>Коментарии</h3>
<ul>
<?php
 foreach($coment_list as $coment)
 {
    echo ('<li>'.$coment->text.'<span>'.$coment->comentUser->login.'</span></li>');
 }
?>
<p id="last"></p>
</ul>
</div>