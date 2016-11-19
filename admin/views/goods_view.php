<p>Товары</p>
<p><a href="goods/add">Добавить</a></p>
<?
//print_r($data);
//var_dump($data);
	foreach($data as $good){?>
		<p><img src="/admin/static/images/<?=$good['imgGood']?>"> <?=$good["nameGood"]?> <a href="goods/edit?id=<?=$good["id_good"]?>"> Изменить </a><a href="goods/del?id=<?=$good["id_good"]?>">Удалить</a></p>
	<?}

?>


