<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>St_animation</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
	</head>
	<body background="images/1.jpg">
		<div id="site">
			<div id="info">
				<header>
					<!логотип>
					<div id="logo">
						<a href="http://site_sg.ru" title="На главную">
							<img src="images/logo1.png"/>
							<span>St_animation</span>
						</a>
					</div>
					<!Ульяновск>
					<div id="ulaynovsk">
						<a href="https://ru.wikipedia.org/wiki/Ульяновск" title="город Ульяновск">Ульяновск</a>
					</div>
					<!Кнопки войти и зарегистрироваться>
					<div id="reg_log">
						<a href="" title="Войти в кабинет">
							<div id="btn">
								Войти
							</div>
						</a>
						<a href="" title="Зарегистрироваться на сайте">
							<div id="btn">
								Регистрация
							</div>
						</a>
					</div>
				</header>
				<nav>
					<div class="bar"><img src="images/bars_menu.svg" width="20"></div>
					<div class="showMenu">
						<a href="http://site_sg.ru" title="Главная">Главная</a>
						<a href="novosti.php" title="Новости">Новости</a>
						<a href="biography.php" title="Биография">Биография</a>
						<a href="interesbl.php" title="Интересы">Интересы</a>
						<a href="fotogalerey.php" title="Портфолио">Фотогалерея</a>
					</div>
					<div class="hideMenu">
						<a href="http://site_sg.ru" title="Главная">Главная</a></br>
						<a href="novosti.php" title="Новости">Новости</a></br>
						<a href="biography.php" title="Биография">Биография</a></br>
						<a href="interesbl.php" title="Интересы">Интересы</a></br>
						<a href="fotogalerey.php" title="Портфолио">Фотогалерея</a></br>
						<hr>
						<a href="" title="Войти">Войти</a>
						<a href="" title="Регистрация">Регистрация</a>
					</div>
				</nav>			 <!--------------------------Биография----------------
			--------------------------------------------------->
			<div id="main">
					<h2 class="heading" title='Биография'>Биография</h2>
					<br/><br/>
					<div class="text5">
						<span><p>Родился в с.Павловка Барышского района Ульяновской область 9 июня 1998 году.</p><p>В 2001 году переехал в 
г. Ульяновск. Учился в средней школе №45 г. Ульяновска.</p><p>В 9 классе начал изучать 3ds max. Мои работы можно увидеть в разделе 
"Фотогалерея".<img class="img1" src="images/render.jpg" width="300" align="left"></p><p>Начиная с 9 класса ежегодно участвовал в конкурсе компьютерного творчества <a href="http://masterit.info/otchet-2016/
">"Мастер-IT"</a>. В 2014 году занял третье место в номинации "3D-статичная графика". В 2015 году занял первое место в номинации 
"Анимационный ролик — 3-х мерная графика", второе место в номинации "3-мерная статичная графика", третье место в номинации 
"Анимационный ролик — 2-х мерная графика". В 2016 году стал победителем конкурса в номинации "ИТ-интеграция".</p></span>				
					</div>
			</div>
			<!--------------------------Конец раздела Биография----------------
			--------------------------------------------------->
			</div>	
			<footer>
				<div id="myname" title='Гаврилов Станислав Александрович'>
					<span>Гаврилов Станислав Александрович</span>
				</div>
				<div id="clear"></div>
				<div id="prava">
					<a href="prava.php" title='Все права защищены'>Все права защищены &#169; <?=date ('Y')?></a>
				</div>
				<div id="ccbllki">
					<a href="https://ok.ru/stanislav73rus" 
						class="cc1" title="Я в ОК"><img src="images/OK.png"/></a>
					<a href="https://vk.com/club57528420"
						class="cc2" title="Группа Вк"><img src="images/VK.png"/></a>
					<a href="https://www.facebook.com/profile.php?id=100006467527935&ref=bookmarks" 
						class="cc3" title="Я в FaceBook"><img src="images/FaceBook.png"/></a>
				</div>
			</footer>	
		</div>
		<script type="text/javascript" src="scripts/jquery-3.1.1.min.js"></script>
		<script src="scripts/bar.js"></script>
	</body>
</html>