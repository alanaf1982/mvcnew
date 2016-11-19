<h1>Добавление товара </h1>
<h3><?=$data?></h3>
<form action = "/administrator/goods/addgood" method = "POST" enctype=multipart/form-data>	
	<p><input type = "text" name = "nameGood" >Название товара </p>
	<p><input type = "file" name = "mediaLinkVideo">Видео товара </p>
	<p><input type = "file" name = "mediaLinkDemo">Демо товара </p>
	<p><input type = "file" name = "imgGoodMain">Главная картинка товара </p>
	<p><input type = "file" name = "imgGood1">Картинка товара </p>
	<p><input type = "file" name = "imgGood2">Картинка товара </p>
	<p><input type="checkbox" name="sticker" value="topSales">Топ продаж </p>
	<p><input type="checkbox" name="endingGood" value="end">Заканчивается</p>
	<select name = "raiting">
  		<option value = "1">Рейтинг 1</option>
  		<option value = "2">Рейтинг 2</option>
  		<option value = "3">Рейтинг 3</option>
  		<option value = "4">Рейтинг 4</option>
  		<option value = "5">Рейтинг 5</option>
	</select>
	<p>Описание товара</p>
	<textarea name = "description"></textarea>
	<p><input type = "text" name = "price">Стоимость товара </p>
	<input type = "submit" value = "Добавить товар">
</form>