<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>info Kings</title>
	<meta name="desription" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/mainstyle.css">
	<link rel="shortcut icon" href="img/main-logo.png" type="image/x-icon">		
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="js/wow.min.js">
</head>
<body>
		<div id="wrapper">
			<div id="content">
		<header>
			<div id="logo">
				<a href="#" title="На главную">
					<img src="img/main-logo.png" alt="" title="Главная">
					<span title="Информация Королей">info Kings</span>
				</a>
			</div>
			<div id="about">
				<a href="" title="Узнать о занятиях">Обратная связь</a>
				<a href="" title="Узнать о раписании занятий">Реклама</a>	
			</div>
			<div id="reg_auth">
				<a href="" title="Войти в кабинет пользователя">
					<div class="btn">
						Войти
					</div>
				</a>
				<a href="" title="Зарегистрироваться на сайте">
					<div class="btn">
						Регистрация
					</div>
				</a>
			</div>
		</header>
	<nav>
		<div id="menuShow"><i class="fa fa-bars" aria-hidden="true"></i></div>
		<div id="hideMenu">
		<a href="">Реклама</a>
		<a href="" class="stickUp"> | </a>
		<a href="">Сайты на заказ</a>
		<a href="" class="stickUp"> | </a>
		<a href="">Обратная связь</a>
		<a href="" class="stickUp"> | </a>
		<a href="">Личный кабинет</a>
		<a href="" class="stickUp"> | </a>
	</div>
		<div id="search">
			<span>Поиск...</span>
			<i class="fa fa-search" aria-hidden="true"></i>
		</div>

		<div id="mobileMenu">
			<a href="">Топ статьи</a><br/>
			<a href="">Реклама</a><br/>
			<a href="">Сайты на заказ</a><br/>
			<a href="">Обратная связь</a><br/>
			<a href="">Личный кабинет</a><br/>
		<hr>
			<a href="">Регистрация</a>
			<a href="">Войти</a>
		</div>
	</nav>


</div>
		<footer>
<div id="site_name">
	<span>info Kings</span> - короли информации!
	</div>
	<div id="clear"></div>
			<div id="footer_menu">
				<a href="">Узнать детальнее про рекламу</a>
				<a href=""> | </a>
				<a href="">Поддержать проект</a>
				<a href=""> | </a>
				<a href="">Обратная связь</a>
				
			</div>
<div id="rights">
		<a href="">Все права защищены &copy; <?=date ('Y')?></a>
	</div>
			<div id="social">
				<a href="" title="Группа ВК"><i class="fa fa-vk" aria-hidden="true"></i></a>
			</div>
		</footer>
</div>

<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"> </script>
	<script>
		$('#menuShow').click (function (){
			if ($('#mobileMenu').is(':visible'))
				$('#mobileMenu').hide ();
			else
				$('#mobileMenu').show ();
		});

				$(document).scroll (function () {
				if ($(document). width () > 785){
				if ($(document).scrollTop () > $('header').height  () + 10)
				$('nav').addClass ('fixed');
			else
				$('nav').removeClass ('fixed');
		}
			});

		window.onresize = function (event) {
				$('#mobileMenu').hide ();
		};
	</script>
	</body>
	</html>
