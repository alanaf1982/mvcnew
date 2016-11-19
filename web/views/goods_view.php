<div class="products">
	<div class="cl">&nbsp;</div>
	<ul>
		<?
		$count = 0; // кол-во товара	
		foreach($data as $good){
			$count ++; ?>
	    	<li <?if ($count%3 === 0) {echo "class='last'";}?>>
		    	<a href="/product/<?=$good["alias"]?>"><img src="/admin/static/images/<?=$good['imgGood']?>" alt="<?=$good["nameGood"]?>" /></a>
		    	<div class="product-info">
		    		<h3><?=$good["nameGood"]?></h3>
		    		<div class="product-desc">
						<h4>Рейтинг <?=$good["raiting"]?></h4>
		    			<p><?=$good["description"]?></p>
		    			<strong class="price"><?=$good["price"]?> гр.</strong>
		    		</div>
		    	</div>
	    	</li>
    	<?}?>	   	
	</ul>
	<div class="cl">&nbsp;</div>
</div>