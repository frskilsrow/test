<?php
    session_start();//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
	if (isset($_SESSION['login']))
	{
		$login = $_SESSION['login'];
		if ($login == ''){unset($login);}
	} //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_SESSION['password']))
		{ 
			$password=$_SESSION['password'];
			if ($password ==''){ unset($password);} 
		}
		

	    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");}
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = htmlspecialchars(stripslashes($login));
	$password = htmlspecialchars(stripslashes($password));
	// подключаемся к базе
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$db = mysqli_connect ("localhost","root","");
    mysqli_select_db ($db,"site");
	$result = mysqli_query($db,"SELECT * FROM user WHERE login='$login'"); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysqli_fetch_array($result);
	$pass = password_verify($password, $myrow['password']);
	//если пользователя с введенным логином не существует
    if (empty($myrow['password'])){exit ("Извините, пользователь с данным логином не существует");}
	//если существует, то сверяем пароли
	else {if ($pass == TRUE){
    //если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
	require "1ind.php";
    echo "Вы успешно вошли на сайт! <a href='1ind.php'>Главная страница</a>";
    }
 else {
    //если пароли не сошлись

    exit ("Извините, введённый вами login или пароль неверный.");
    }
    }
    ?>