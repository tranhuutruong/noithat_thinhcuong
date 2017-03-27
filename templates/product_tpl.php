<div class="container">
	<div class="row">
		
			<div class="title-service">
				<h3><?=$title_cat?></h3>
			</div>
			<div class="wap_item">
			<?php for($i=0,$count_product=count($product);$i<$count_product;$i++){	?>
			    <div class="item">
			            <p class="sp_img"><a href="<?php echo $com ?>/<?=$product[$i]['tenkhongdau']?>-<?=$product[$i]['id']?>.html" title="<?=$product[$i]['ten']?>">
			            <img src="<?php if($product[$i]['thumb']!=NULL) echo _upload_sanpham_l.$product[$i]['thumb']; else echo 'images/noimage.png';?>" alt="<?=$product[$i]['ten']?>" /></a></p>
			            <h3 class="sp_name"><a href="<?php echo $com ?>/<?=$product[$i]['tenkhongdau']?>-<?=$product[$i]['id']?>.html" title="<?=$product[$i]['ten']?>"><?=$product[$i]['ten']?></a></h3>
			    </div><!---END .item-->
			<?php } ?>
			<div class="clear"></div>
			<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
			</div><!---END .wap_item-->
		
	</div>
</div>
