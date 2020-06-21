<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();

	$data = $_POST;
		if (isset($data['submit']))
		{
			$errors = array();
			if(trim($data['login']) == '' ){$errors[]= 'Введите логин';}
			if(($data['password']) ==''){$errors[]= 'Введите пароль';}
			if (empty ($errors)){
				$login = htmlspecialchars(stripslashes($data['login']));
				$password = htmlspecialchars(stripslashes($data['password']));
				
				// подключаемся к базе
				$db = mysqli_connect ("localhost","root","");
				mysqli_select_db ($db,"site");
				$result = mysqli_query($db,"SELECT * FROM user WHERE login='$login'"); //извлекаем из базы все данные о пользователе с введенным логином
				$myrow = mysqli_fetch_array($result);
				
				//если пользователя с введенным логином не существует
				if (empty($myrow['password']) or empty($myrow['login'])){exit ("Извините, пользователь с данным логином не существует");}
				//если существует, то сверяем пароли
				else 
				{
					//если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
					$pass = password_verify($password, $myrow['password']); //проверяем совпадение паролей
					if ($pass == TRUE){$_SESSION['login']=$myrow['login']; $_SESSION['id']=$myrow['id'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
					require "1ind.php";}
					else{exit ("Извините, введённый вами login или пароль неверный.");}//если пароли не сошлись
				}	
			}
			else{echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';}
		}
    ?>
	
<!DOCTYPE html>
<html>
 <head>
  
  <meta charset="utf-8">
  <title>OPEX</title>
  <link rel="stylesheet" href="input.css"> 

  <script src="input.js"></script>
 </head>
 <body>

<div class="flex justify-center items-center parent">
	<form action="/index_test1.php" method="POST" class="flex flex-column items-center window">
    <!--<div class="flex flex-column items-center window">-->
        
            <div class="separator_top"></div>
		
        <input type="text" placeholder="5+3" class="input" name="login" maxlength="8" value="<?php echo @$data['login']; ?>">

            <div class="separator"></div>

        <input type="password" placeholder="Password" name="password" class="input" maxlength="20" value="<?php echo @$data['password']; ?>">

            <div class="separator"></div>

        <input type="submit" class="button_sub" name="submit">
	
        <a href="reg.php" class="restart_password">Registret</a>
    <!--</div>-->
	</form>
	
</div>

</body>
</html>