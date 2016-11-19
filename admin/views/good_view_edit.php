<h1>Редактирование товара <?=$data["nameGood"]?> </h1>
<form action = "/administrator/goods/editGood?id=<?=$data[0]["id_good"]?>" method = "POST">	
<?
	//var_dump($data);
?>
	<p><input type = "text" name = "nameGood" value = "<?=$data[0]["nameGood"]?>">Название товара </p>
	<p><input type = "file" name = "mediaLinkVideo" value = "<?=$data[0]["mediaLinkVideo"]?>">Видео товара </p>
	<p><input type = "file" name = "mediaLinkDemo" value = "<?=$data[0]["mediaLinkDemo"]?>">Демо товара </p>
	<p><input type = "file" name = "imgGood" value = "<?=$data[0]["imgGood"]?>">Картинка товара </p>
	<p><input type="checkbox" name="flagMain" value="yes">Главная картинка </p>
	<p><input type="checkbox" name="sticker" value="topSales">Топ продаж </p>
	<p><input type="checkbox" name="endingGood" value="end">Заканчивается</p>
	<select name = "raiting">
  		<option value = "1">Рейтинг 1</option>
  		<option selected value = "2">Рейтинг 2</option>
  		<option value = "3">Рейтинг 3</option>
  		<option value = "4">Рейтинг 4</option>
  		<option value = "5">Рейтинг 5</option>
	</select>
	<p>Описание товара</p>
	<textarea name = "description"><?=$data[0]["description"]?></textarea>
	<p><input type = "text" name = "price" value = "<?=$data[0]["price"]?>">Стоимость товара </p>
	<input type = "submit" value = "Изменить товар">
</form>