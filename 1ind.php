<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. 
    session_start();
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку
    echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
    }
    else
    {
    // Если не пусты, то мы выводим ссылку
    echo "Вы вошли на сайт, как ".$_SESSION['login'];
	echo "<br><a href='out.php'>Выйти</a>";
    }
    ?>
<html>

<head>
	<link rel="stylesheet" href="style_of_site.css">
	<style>
		.menu_of_body{display: flex; flex-direction: column;width:20%}
		.body_of_site{border: 1px solid red; display: flex;justify-content:space-between; width: 90%; height: 90%;}
		.content_of_body{border: 1px solid black; display: flex;justify-content:space-between; width: 80%;}
		.container_of_viwu_storeg{display: block;justify-content:space-between; width: 100%; height: 100%; background: grey;}
		.container_of_stelag{ display: flex;justify-content:space-between; width: 100%; height:25%; color:wi}
		.fle{border: 1px solid black; display: flex;justify-content:space-between; width: 20%; heigt:25%; background: green; color: white; text-align: center; }
		#fl1{height:50%; width: 20%; border: 1px solid black; background: green; display: flex; color: white; }
		.marg{margin: auto;}
		.lisp{border: 1px solid black; display: flex;justify-content:space-between; text-align: center;border-radius: 7px; margin-top:1px;}
	</style>
</head>
<!--border: 1px solid green;  class='fle'-->
	<body>
		<!--<div>
			ЭТО главная страница
			ЭТО главная страница
			ЭТО главная страница
			ЭТО главная страница
			ЭТО главная страница
		</div>-->
		<div class='baccraund_of_site'>
		
			<div class='head_of_site'> <!-- head_of_site-->
				<h1>Storeg of 6 floor</h1>
			</div>
			
			<div class='body_of_site'><!-- body_of_site-->
				<div class='menu_of_body'><!--menu_of_body-->
					<div class='lisp'><div class='marg'>all items</div></div>
					<div class='lisp'><div class='marg'>dispolsing</div></div>
					<div class='lisp'><div class='marg'>not Nooled</div></div>
					<div class='lisp'><div class='marg'>ТРЕКЕР ЗАКУПОК</div></div>
					<div class='lisp'><div class='marg'>лицензии</div></div>
					<div class='lisp'><div class='marg'><a href='add_items.php'>add items</a></div></div>
				</div>
				
				<div class='content_of_body'> <!--content_of_body-->
					
					<div class='container_of_viwu_storeg'>
					
						<div class='container_of_stelag'>
							<div id='fl1'><div class='marg'>safe</div></div>
							<div class='fle'><div class='marg'>G</div></div>
						</div>
						
						<div class='container_of_stelag'>
							<div  class='fle'><div class='marg'>C</div></div>
							
							<div class='fle'><div class='marg'>F</div></div>
						</div>
						
						<div class='container_of_stelag'>
							<div  class='fle'><div class='marg'>B</div></div>
							Floor 6
							<div class='fle'><div class='marg'>E</div></div>
						</div>
						
						<div class='container_of_stelag'>
							<div  class='fle'><div class='marg'>A</div></div>
							<div class='fle'><div class='marg'>D</div></div>
						</div>
						
					</div>	
				</div>
			</div>
			
		</div>
	</body>

</html>