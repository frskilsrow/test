<?php
	session_start();
	$data=$_SESSION;
	echo $data['login'].'1<br>';
	echo $data['password'].'2<br>';
    if (isset($data['login'])) { $login = $data['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($data['password'])) { $password=$data['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
	echo 'данные в переменных:<br>1'.$login.'<br>2'.$password.'<br>';
	echo 'данные в сессии:<br>1'.$_SESSION['login'].'<br>2'.$_SESSION['password'].'<br>';
	//unset($_SESSION['login']);
	//unset($_SESSION['password']);
	//session_destroy();
	echo 'данные в сессии после ансет:<br>1'.$_SESSION['login'].'<br>2'.$_SESSION['password'].'<br>';
	echo 'данные в переменных :<br>1'.$login.'<br>2'.$password.'<br>';
	if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь <a href='reg.php'назад</a> и заполните все поля! ");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = trim(stripslashes(htmlspecialchars($login)));
	$password = trim(stripslashes(htmlspecialchars($password)));
	$password = password_hash($password, PASSWORD_DEFAULT);
 // подключаемся к базе
    $db = mysqli_connect("localhost","root","");
    mysqli_select_db($db,"site");
    $result = mysqli_query($db,"SELECT id FROM user WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    echo ("Введённый вами логин уже зарегистрирован. Вернитесь на предидущую страницу и введите другой логин.");
	exit;
    }
 // если такого нет, то сохраняем данные
    $result2 = mysqli_query($db,"INSERT INTO user (login,password) VALUES('$login','$password')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
	//unset($_SESSION['login']);
	//unset($_SESSION['password']);
	
	echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index_test1.php'>Главная страница</a>";
	//header('Location:/index_test1.php');
	//require("index_test1.php");
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>