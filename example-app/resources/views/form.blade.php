<form method="post" action="/form">
    @csrf
    <label for="name">Имя:</label>
    <input type="text" name="name">
    <!-- Добавьте другие поля формы здесь -->
    <button type="submit">Отправить</button>
</form>
