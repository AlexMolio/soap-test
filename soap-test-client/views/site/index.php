<a href="/add/">Добавить анкету</a><br/><br/>

<form method="post" action="/answer/">
    Поиск по имени<br/><br/>
	<input type="text" name="name" /><br/><br/>
	<input type="submit" name="submit" value="Поиск" />
</form>
<br/><br/>

<table border="1">
  		<tr>
  		    <th>ID</th>
    		<th>Имя</th>
    		<th>Фамилия</th>
    		<th>Дата рождения</th>
    		<th>Редактирование</th>
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