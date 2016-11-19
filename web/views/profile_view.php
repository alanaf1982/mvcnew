<h1>Персональные данные</h1>
<form action = "/user/edit" method = "POST">
	<p>Имя<input type="text" name="name" value = "<?=$data["name"]?>"></p>
	<p>Фамилия<input type="text" name="fname" value = "<?=$data["fname"]?>"></p>
	<p>E-mail<input type="text" name="email" value = "<?=$data["email"]?>"></p>
	<p>Телефон<input type="text" name="fone" value = "<?=$data["fone"]?>"></p>
	<p>Город<input type="text" name="city" value = "<?=$data["city"]?>"></p>
	<input type="submit" name="edit" value = "Редактировать">