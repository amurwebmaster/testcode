<tr>
<td><?php echo '<a href="?r=story/view&id='.$data->id.'"><b>'.$data->title.'</b></a>' ?></td>
<td><?php echo '<a href="?r=story&user='.$data->user.'">'.$data->id0->login.'</a>' ?></td>
<td><?php echo '<a href="?r=story&status='.$data->status.'">'.$data->returnTaskLabels($data->status).'</a>' ?></td>
<td><?php echo $data->date ?></td>
</tr>