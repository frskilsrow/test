<?php
session_start();
// Создаем переменную для сбора данных от пользователя по методу POST
$data = $_POST;
// Пользователь нажимает на кнопку "Зарегистрировать" и код начинает выполняться
if(isset($data['submit'])) {

        // Регистрируем
        // Создаем массив для сбора ошибок
	$errors = array();
	// Проводим проверки
	if(trim($data['login']) == '') {$errors[] = "Введите логин!";}
	if($data['email'] == '') {$errors[] = "Введите e-mail!";}
	if($data['password'] == '') {$errors[] = "Введите пароль";}
	if($data['password_2'] == ''){$errors[] = "Введите пароль второй раз";}
	if($data['password_2'] != $data['password']) {$errors[] = "Повторный пароль введен не верно!";}
	if (empty($errors))
	{
		$login = stripslashes(htmlspecialchars($data['login']));
		$password = stripslashes(htmlspecialchars($data['password']));
		$email = stripslashes(htmlspecialchars($data['email']));
		$password = password_hash($password, PASSWORD_DEFAULT);
		// подключаемся к базе
		$db = mysqli_connect("localhost","root","");
		mysqli_select_db($db,"site"); $result = mysqli_query($db,"SELECT id FROM user WHERE login='$login'");
		$myrow = mysqli_fetch_array($result);
		if (!empty($myrow['id'])){echo ("Введённый вами логин уже зарегистрирован. Вернитесь на предидущую страницу и введите другой логин.");exit;}
		// если такого нет, то сохраняем данные
		$result2 = mysqli_query($db,"INSERT INTO user (login,email,password) VALUES('$login','$email','$password')");
		// Проверяем, есть ли ошибки
		if ($result2=='TRUE'){require "index_test1.php"; echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт.";}
		else {echo "Ошибка! Вы не зарегистрированы.";}
	}
	else{echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';
	}
}
	
?>
<!DOCTYPE html>
<html>
 <head>
  
  <meta charset="utf-8">
  <title>OPEX</title>
  <link rel="stylesheet" href="register.css"> 

  <script src="register.js"></script>
 </head>
 <body>

<div class="flex justify-center items-center parent">
    <form action="/reg.php" method="POST" class="flex flex-column items-center window">
        
            <div class="flex flex-column item-center separator_top"></div>

                <div class="input_block">
                    <div class="flex flex-column item-start laible">
                        5+3
                    <input type="text" class="input" name="login" value="<?php echo @$data['login']; ?>">
                    </div>
                </div>

            <div class="separator"></div>

            <div class="input_block">
                <div class="flex flex-column item-start laible">
                    email
                    <input type="text" name="email" class="input" value="<?php echo @$data['email']; ?>">
                </div>
            </div>

            <div class="separator"></div>

            <div class="input_block">
                <div class="flex flex-column item-start laible">
                    Password
                    <input type="password" class="input" name="password" value="<?php echo @$data['password']; ?>">
                </div>
            </div>

            <div class="separator"></div>

            <div class="input_block">
                <div class="flex flex-column item-start laible">
                    Repeat the password
                    <input type="password" class="input" name="password_2" value="<?php echo @$data['password_2']; ?>">
                </div>
            </div>

            <div class="separator"></div>

        <button name="submit" class="button_sub">Submit</button>
    </form>
</div>

</body>
</html>


<!--
<html>
<head>
</head>
<body>
				<form action="/reg.php" method="POST">
					<p>
						<label>Ваше имя:<br></label>
						<input name="login" type="text" size="15" maxlength="8" value="<?php echo @$data['login']; ?>">
					</p>
					
					<p>
						<label>Ваш e-mail:<br></label>
						<input name="email" type="text" size="15" maxlength="20" value="<?php echo @$data['email']; ?>">
					</p>
					
					<p>
						<label>Ваш пароль:<br></label>
						<input name="password" type="password" size="15" maxlength="20" value="<?php echo @$data['password']; ?>">
					</p>
					
					<p>
						<label>Ваш пароль:<br></label>
						<input class="inp" name="password_2" type="password" size="15" maxlength="20" value="<?php echo @$data['password_2']; ?>">
					</p>
					
					<p>
						<input type="submit" name="submit" value="Зарегистрироваться">
						<a href="index_test1.php">Войти</a> 
					</p>
				</form>
</body>
</html>-->