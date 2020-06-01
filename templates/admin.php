<form class="form" method="GET" action="delete-admin.php">
	<h2 class="form__title  title__secondary">Удалить админа</h2>
	<fieldset>
		<?php foreach ($admins_list as $admin): ?>
			<label for="<?=$admin['login']; ?>"><?=$admin['login']; ?></label>
			<input type="checkbox" name="admin" id="<?=$admin['login']; ?>">
		<?php endforeach; ?>
	</fieldset>
	<input type="submit" value="Удалить">
</form>
<form class="form" method="POST" action="adding-admin.php">
	<h2 class="form__title  title__secondary">Добавить админа</h2>
	<div class="form__input-wrap">
		<label for="login">Логин</label>
	    <input type="text" name="login" id="login">
	</div>
	<div class="form__input-wrap">
		<label for="email">e-mail</label>
	    <input type="email" name="email" id="email">
	</div>
	<div class="form__input-wrap">
		<label for="password">Пароль</label>
	    <input type="password" name="password" id="password">
	</div>
	<input type="submit" value="Добавить">
	<input type="reset" value="Очистить форму">
</form>
<form class="form" method="POST" action="adding-news.php">
	<h2 class="form__title  title__secondary">Добавить событие</h2>
	<div class="form__input-wrap">
		<label for="title">Название события</label>
	    <input type="text" name="title" id="title" placeholder="">
	</div>
	<div class="form__input-wrap">
		<label for="dates">Время проведения</label>
	    <input type="text" name="dates" id="dates" placeholder="">
	</div>
	<div class="form__input-wrap">
		<label for="expire-date">Дата снятия актуальности события</label>
	    <input type="text" name="expire-date" placeholder="">
	</div>
	<div class="form__input-wrap">
		<label for="archive">Поставьте отметку, если вы хотите видеть это событие в архиве новостей</label>
		<input type="checkbox" name="archive" id="archve">
	</div>
	<div class="form__input-wrap">
		<label for="image">Загрузите иллюстрацию новости</label>
		<input type="file" name="image" id="image">
	</div>
	<div class="form__input-wrap">
		<textarea>Текст новости или события</textarea>
	</div>
	<div class="form__input-wrap">
		<input type="submit" name="" value="Добавить событие">
		<input type="reset" name="" value="Очистить форму">
	</div>
</form>
<form class="form" method="POST" action="adding-instructor.php">
	<h2 class="form__title  title__secondary">Добавить инструктора</h2>
	<div class="form__input-wrap">
		<label for="instructor-name">Имя</label>
	    <input type="text" name="name" id="instructor-name" placeholder="">
	</div>
	<div class="form__input-wrap">
		<label for="branch">Направление</label>
	    <input type="text" name="branch" id="branch" placeholder="">
	</div>
	<div class="form__input-wrap">
		<label for="specification">Специализация</label>
	    <input type="text" name="specification" id="specification" placeholder="">
	</div>
	<div class="form__input-wrap">
		<label for="image">Загрузите изображение инструктора</label>
		<input type="file" name="image" id="image">
	</div>
	<div class="form__input-wrap">
		<label for="bio"></label>
		<textarea id="bio">Несколько слов о том, где обучался/лась инструктор, преподавал, как проходят у него/нее занятия...</textarea>
	</div>
	<div class="form__input-wrap">
		<input type="submit" name="" value="Добавить событие">
		<input type="reset" name="" value="Очистить форму">
	</div>
</form>
<form class="form" method="POST" action="adding-class">
	<h2 class="form__title  title__secondary">Добавить/удалить класс</h2>
	<div class="form__input-wrap">
	</div>
</form>
