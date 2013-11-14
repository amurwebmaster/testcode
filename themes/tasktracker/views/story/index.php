<?php
$this->breadcrumbs=array(
	'Задачи',
);

$this->menu=array(
	array('label'=>'Создать задачу','url'=>array('create')),
	array('label'=>'Управление задачами','url'=>array('admin')),
);
?>

<h1>Задачи</h1>
<p><a href="?r=story">Все задачи</a></p>
<table class="table table-striped">
<thead>
<tr>
<td><b><i class="icon-star-empty"></i> Задача</b></td>
<td><b><i class="icon-user"></i> Ответственный</b></td>
<td><b><i class="icon-info-sign"></i> Статус</b></td>
<td><b><i class="icon-calendar"></i> Дата</b></td>
</tr>
</thead>
<tbody>
<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</tbody>
</table>
