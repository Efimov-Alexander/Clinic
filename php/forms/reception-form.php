<form class="reception-form" action="/php/forms/reception-form-action.php" method="POST">
	<div class="reception-form__title">Запись</div>
	<div class="reception-form__close-button">
		<span></span>
		<span></span>
	</div>
	<div class="reception-form__body">
		<input placeholder="Имя" class="reception-form__name _green-input" type="text" name="name">
		<input placeholder="Фамилия" class="reception-form__surname _green-input" type="text" name="surname">
		<input placeholder="Телефон" class="reception-form__tel _green-input" type="tel" name="tel">
		<input placeholder="E-mail" class="reception-form__email _green-input" type="email" name="email">
		<textarea placeholder="Сообщение" class="reception-form__message _green-input" name="message"></textarea>
	</div>
	<button name="submit" type="submit" class="reception-form__submit-button _green-transparent-button">Отправить</button>
</form>