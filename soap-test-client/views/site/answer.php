<a href="/">Главная </a> / Поиск по имени<br/><br/>

<?php if(!isset($answer['errors'][0])){?>

<table border="1">
  		<tr>
  		    <th>ID</th>
    		<th>Имя</th>
    		<th>Фамилия</th>
    		<th>Дата рождения</th>
    		<th>Редактировать</th>
  		</tr>
  			<?php foreach($person as $personItem){?>
  		<tr>
  			<td><?php echo $personItem['id'];?></td>
  			<td><?php echo $personItem['name'];?></td>
  			<td><?php echo $personItem['lastname'];?></td>
  			<td><?php echo $personItem['date_of_birth'];?></td>
  			<th><a href="/edit/<?php echo $personItem['id'];?>/">#</a></th>
  		</tr>

  			<?php }?>
</table>
<?php } else {
    foreach($answer['errors'] as $error){
        echo '-'. $error;
    }
}?>