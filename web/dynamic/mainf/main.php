<div>
<h1>Таблица пользователей данного продукта</h1>
<table>
    <tr><th>Id</th><th>Name</th><th>Surname</th></tr>
<?php
foreach ($data['usersOne'] as $row){
    echo "<tr><td>{$row['ID']}</td><td>{$row['name']}</td><td>{$row['surname']}</td></tr>";
}
?>
</table>
<p id="status"></p>
<script>
    function get(name) {
      if (name = (new RegExp('[?&]' + encodeURIComponent(name) + '=([^&]*)')).exec(location.search))
        return decodeURIComponent(name[1]);
    }
    if (get('err')) {
        alert("Неверный логин или пароль");
    };
    if (get('ext')) {
        alert("Выход из админ панели");
    };
</script>
<form action="a/login" method="POST">
<p>Введите логин: <input type="text" name="login"></p>
<p>Введите пароль: <input type="password" name="pass"></p>
<p><input type="submit" value="Войти" name="done"></p>
</form>
</div>