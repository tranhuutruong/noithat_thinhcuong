<div class="container">
	<div class="row">
		<div class="title-service">
			<h3><?=$title_cat?></h3>
		</div>
	</div>


	<div class="wap_box_new">
	 	<?php foreach ($tintuc as $item) {?>
	 		<div class="col-md-4">
		        <div class="service_item">
					<div class="thumb">
						<img src="<?= _upload_tintuc_l.$item['thumb'] ?>">
						<a href="">Chi tiết</a>
					</div>
					<div class="description">
						<h3><a href=""><?= $item['ten'] ?></a></h3>
						<p><?= catchuoi($item['mota'],300) ?></p>
					</div>
				</div>
	        </div>
	    <?php } ?>
	</div><!---END .wap_box_new-->
	<div class="clear"></div>
	<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div>
