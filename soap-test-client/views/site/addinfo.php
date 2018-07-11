

<a href="/">Главная </a> / Добавление анкеты<br/><br/>

<?php if(!isset($answer['errors'][0])){?>

<?php if($answer){
    echo 'Данные добавлены!';
} else {?>
<form method="post" action="/add/">
    Добавление новой анкеты<br/><br/>
	<input type="text" name="name" placeholder="Имя" /><br/><br/>
	<input type="text" name="lastname" placeholder="Фамилия"/><br/><br/>
	<input type="date" name="date_of_birth" placeholder="Дата рождения"/><br/><br/>
	<input type="submit" name="submit" value="Добавить" />
</form>
<?php }?>


<?php } else {
    foreach($answer['errors'] as $error){
        echo '-'. $error;
    }
}?>