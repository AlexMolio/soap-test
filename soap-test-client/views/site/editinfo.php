

<a href="/">Главная/</a>Редактирование анкеты<br/><br/>

<?php if(!isset($answer['errors'][0])){?>


<?php if($answer){
    echo 'Данные отредактированны!';
} else {?>
<form method="post" action="/edit/<?php echo $person[0]['id'];?>/">
    Редактирование данных анкеты №<?php echo $person[0]['id'];?><br/><br/>
	<input type="text" name="name" placeholder="Имя" value="<?php echo $person[0]['name'];?>" /><br/><br/>
	<input type="text" name="lastname" placeholder="Фамилия" value="<?php echo $person[0]['lastname'];?>" /><br/><br/>
	<input type="date" name="date_of_birth" placeholder="Дата рождения" value="<?php echo $person[0]['date_of_birth'];?>" /><br/><br/>
	<input type="submit" name="submit" value="Редактировать" />
</form>
<?php }?>


<?php } else {
    foreach($answer['errors'] as $error){
        echo '-'. $error;
    }
}?>