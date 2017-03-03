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
				
				<!--------------------------Фотогалерея----------------
			--------------------------------------------------->
				<div class="foto1">
					<div class="content-fg1">
						<div class="bar1"><img src="images/bars_menu.svg" width="50"></div>
						<div id="menu-fotogal">
							<a href="http://site_sg.ru" title="Главная">Главная</a><br/>
							<a href="novosti.php" title="Новости">Новости</a><br/>
							<a href="biography.php" title="Биография">Биография</a><br/>
							<a href="interesbl.php" title="Интересы">Интересы</a><br/>
							<a href="fotogalerey.php" title="Портфолио">Фотогалерея</a>
						</div>
						<div class="hideMenu1">
							<a href="http://site_sg.ru" title="Главная">Главная</a></br>
							<a href="novosti.php" title="Новости">Новости</a></br>
							<a href="biography.php" title="Биография">Биография</a></br>
							<a href="interesbl.php" title="Интересы">Интересы</a></br>
							<a href="fotogalerey.php" title="Портфолио">Фотогалерея</a></br>
							<hr class="hr1">
							<a href="" title="Войти">Войти</a></br>
							<a href="" title="Регистрация">Регистрация</a>
						</div>
					</div>
					<div class="content-fg2">
						
						<div class="gallery">
							<a><img class="someDiv ps1" /></a>
							<a><img class="someDiv ps2" /></a>
							<a><img class="someDiv ps3" /></a>
							<a><img class="someDiv ps4" /></a>
							<a><img class="someDiv ps5" /></a>
							<a><img class="someDiv ps6" /></a>
						</div>
						<div id="modalDiv"></div>
					</div>
					<div class="content-fg3"></div>
				</div>
				
				<!--------------------------Конец раздела Фотогалерея----------------
				--------------------------------------------------->
			</div>	
			<footer>
				<div id="myname" title="Гаврилов Станислав Александрович">
					<span>Гаврилов Станислав Александрович</span>
				</div>
				<div id="prava" title="Все права защищены">
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
		<script src="scripts/scr.js"></script>
		<script src="scripts/bar.js"></script>
	</body>
</html>