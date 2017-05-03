<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

<?php include "head.php"; ?>

</head>

<body class="hidden_menu internal_page payment_information" id="account_validation">
	<header>
<?php include "header.php"; ?>
	</header>

	<section id="header2" style="background-image: url(img/account_validation/bg.jpg)">
		<h2>Платёжная информация</h2>
	</section>

	<section id="menu_after_header" class="pad">
		<div class="wrapper overflow_inherit">
			<div class="menu">
				<div class="wrapper">
					<ul class="pjax-container">
						<?php include "menu_header.php"; ?>
					</ul>
				</div>
			</div>
			<hr color='#000'>
			<ul>
				<?php include "menu_internal.php"; ?>
			</ul>
		</div>
	</section>

	<section id="partnership2_s1" class="pad">
		<div class="wrapper">
			<div class="partnership2_s2__left"></div>
			<div class="partnership2_s2__right">
				<div class="partnership__login">
					<span class="partnership__tested">[tested]</span><span class=" partnership_span partnership__first"><i class="fa fa-user-o" aria-hidden="true"></i>Welcome, loginname</span>
					<span class=" partnership_span partnership__two"><i class="fa fa-calendar" aria-hidden="true"></i>Monday, February 15, 2016</span>
					<span class=" partnership_span partnership__three"><i class="fa fa-clock-o" aria-hidden="true"></i>13:27:59 GMT</span>
					<span class=" partnership_span partnership__four"><i class="fa fa-chevron-left" aria-hidden="true"></i>Logout</span>
				</div>
			</div>
		</div>
	</section>

	<section id="account_validation_s2" class="pad">
		<div class="wrapper">
			<form class="account_validation_s2__form">
				<span class="account_validation_s2__h1_cap">Информация о банковском счете:</span>
				<div class="account_validation_s2__form_wrap overflow_inherit">
					<input type="text" placeholder="ФИО:">
					<input type="text" placeholder="Почтовый индекс:">
					<input type="text" placeholder="Название компании: (если счёт корпоративный)">
					<input type="text" placeholder="Номер наземного телефона:">
					<input type="text" placeholder="Адрес вебсайта: (если счёт корпоративный)">
					<span class="field" style="overflow: inherit" id='registration_s1__form_tel'>
						<input required="required" class="phone_call account_validation_s2__form2_input" type="tel" name="custom_tel">
					</span>
					<input type="text" placeholder="Город:" class="account_validation_s2__input_top">
					<input type="text" placeholder="E-mail:" class="account_validation_s2__input_top">
				</div>
				<span class="account_validation_s2__h1_cap">Смена пароля:</span>
				<div class="account_validation_s2__form_wrap">
					<input type="text" placeholder="Новый пароль:">
					<input type="text" placeholder="Повторите новый пароль:">
				</div>
				<span class="account_validation_s2__h1_cap">Финансовые отчеты по E-Mail:</span>
				<div class="account_validation_s2__form_wrap">
					<input type="checkbox" placeholder="Текущий Bitcoin счета:" id="personal_information_input_check" class="account_validation_s2__input_check_mini">
					<label for="personal_information_input_check">Я согласен получать ежемесячные и ежегодные финансовые отчеты на свой E-Mail.</label>
				</div>
				<span class="account_validation_s2__h1_cap">Информационная безопасность:</span>
				<div class="account_validation_s2__form_wrap">
					<input type="text" placeholder="*Секретный вопрос:">
					<input type="text" placeholder="*Секретный ответ:">
					<span class="account_validation_s2__form_span">*Обязательные поля</span>
					<button class="button button_hover">Изменить профиль</button>
				</div>
			</form>
		</div>
	</section>

	<section id="bottom_menu">
		<div class="wrapper">
			<div class="bottom_menu__left">
				<img src="img/bottom_menu/fx.png" alt="logo" class="bottom_menu__first">
				<img src="img/bottom_menu/comodo.png" alt="comodo" class="bottom_menu__two">
				<ul class="pjax-container">
					<?php include "menu_header.php"; ?>
				</ul>
			</div>
		</div>
	</section>

	<section id="bottom_menu__after">
		<div class="top">
			<ul class="animsition pjax-container">
				<?php include "menu_fx.php"; ?>
			</ul>
		</div>
	</section>

<?php include "footer.php"; ?>
<?php include "script.php"; ?>

</body>
</html>