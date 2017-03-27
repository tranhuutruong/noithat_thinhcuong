<?php
	
	$doitac=getAll("select id,ten$lang as ten,link,photo from #_slider where hienthi=1 and type='doitac' order by stt,id desc");
	$danhgia=getAll("select id,ten$lang as ten,mota$lang as mota,thumb from #_news where hienthi=1 and type='danhgia' order by stt,id desc");
?>
<div class="container">
	<div class="row">
		<div class="col-md-6 no-padding-left">
			<div class="title-intro">
				<h3>Đối tác - Khách hàng</h3>
			</div>
			<div class="slick_2_3">
				<?php for($i=0,$count_doitac=count($doitac);$i<$count_doitac;$i++){ ?>
					<div class="col-md-3 no-padding">
				    	<div class="partner_item">
				    		<img src="<?=_upload_hinhanh_l.$doitac[$i]['photo']?>" alt="<?php if($doitac[$i]['ten']!='') echo $doitac[$i]['ten'];else echo $company['ten']?>" />
				    		<a href="<?=$doitac[$i]['link']?>" title="<?=$doitac[$i]['link']?>" target="_blank">Xem</a>
				    	</div>
			    	</div>
			    <?php } ?>
		    </div>
		</div>
		<div class="col-md-6 no-padding-right">
			<div class="title-intro">
				<h3>Đánh giá của khách hàng</h3>
			</div>
			<div id="appraise">
				<div class="slick_1">
					<?php foreach ($danhgia as $d_item): ?>
						<div class="appraise_item">
							<div class="description">
								<?= catchuoi($d_item['mota'],380) ?>
							</div>
							<div class="thumb">
								<img src="<?= _upload_tintuc_l.$d_item['thumb'] ?>">
								<p><?= $d_item['ten'] ?></p>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>

	</div>
</div>
