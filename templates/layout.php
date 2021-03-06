<!DOCTYPE html>
<html lang="ru">
	<head>
	    <meta charset="utf-8">
	    <title><?=$title;?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="keywords" content="фитнес, йога, николаев, спорт,здоровье, танцы, хатха, айенгар, пилатес, беллиденс,  восточные танцы, trx, боди-памп, степ, слайд, тренировки">
	    <meta name="description" content="Студия йоги и фитнеса. Тренировки с использованием различного оборудования, семинары, индивидуальные занятия, танцевальные классы">
	    <link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<header class="main-header  <?=$background_color; ?>">
				<div class="main-header__block-wrap ">
					<?=$logo; ?>
					<?=$main_menu; ?>
				</div>
			</header>
            <?=$page_content;?>
            <div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2722.61223878996!2d31.96220711592559!3d46.96930817914761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0YHQv9Cw0YDRgtCw!5e0!3m2!1sen!2sua!4v1588501238683!5m2!1sen!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			<footer class="main-footer  <?=$background_color; ?>">
				<?=$logo; ?>
				<section class="main-footer__contact  contact">
					<h3 class="contact__title  title__third">Наши контакты</h3>
					<p  class="contact__address">
						Адрес: пр.Центральный,<br>6а 54030, г.Николаев</p>
					<p class="contact__phone">Тел: +38(063) 762 8515</p>
					<p class="contact__email">email: om.shanti.niko@gmail.com</p>
				</section>
				<section class="main-footer__short-schedule  short-schedule">
					<h3 class="short-schedule__title  title__third">Рабочие часы</h3>
					<ul class="short-schedule__list">
						<li class="short-schedule__item">
							<div class="short-schedule__days">Понедельник, Среда, Пятница</div>
							<span class="short-schedule__time">7<sup>30</sup> - 21<sup>00</sup></span>
						</li>
						<li class="short-schedule__item">
							<div class="short-schedule__days">Вторник, Четверг</div>
							<span class="short-schedule__time">7<sup>30</sup> - 20<sup>00</sup></span>
						</li>
						<li class="short-schedule__item">
							<div class="short-schedule__days">Суббота</div>
							<span class="short-schedule__time">10<sup>00</sup> - 19<sup>00</sup></span>
						</li>
						<li class="short-schedule__item">
							<div class="short-schedule__days">Воскресенье -</div>
							<span class="short-schedule__time">Выходной</span>
						</li>
					</ul>
				</section>
				<div class="main-footer__social-block  social-block">
					<ul class="social-block__list">
						<li class="social-block__item">
							<a class="social-block__link" href="https://www.facebook.com/groups/1540126396290409/">
								<svg><use xlink:href="img/svg/svg-sprite.svg#facebook"></use></svg>
								Ссылка на наш профиль в Фейсбуке
							</a>
						</li>
						<li class="social-block__item">
							<a class="social-block__link" href="https://www.instagram.com/sparta_omshanti/">
								<svg><use xlink:href="img/svg/svg-sprite.svg#instagram"></use></svg>
								Ссылка на наш профиль в Инстаграме
							</a>
						</li>
					</ul>
				</div>
				<div class="admin-block">
					<button class="admin-block__enter">
						<svg>
							<use xlink:href="img/svg/svg-sprite.svg#login"></use>
						</svg>
					</button>
					<form class="form  form-login" method="POST" action="login.php">
						<span class="form-login__handler"></span>
						<input type="text" name="login">
						<input type="password" name="password">
						<input type="submit" value="Войти">
					</form>
				</div>
			</footer>
		</div>
		<script src="js/login.js"></script>
	</body>
</html>
