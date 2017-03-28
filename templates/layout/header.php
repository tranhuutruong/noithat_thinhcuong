<?php
	$logo=getOne("select photo$lang as photo from #_background where type='logo' limit 0,1");
	$banner=getOne("select photo$lang as photo from #_background where type='banner' limit 0,1");
?>
<div class="container">
	<div class="row">
		<div id="logo">
			<a href="">
				<img src="<?=_upload_hinhanh_l.$logo['photo']?>" class="logo" />
			</a>
		</div>
		<div id="hotline">
			<p><?= $company['dienthoai'] ?></p>
		</div>
		<img src="resize/1200x185/2/<?=_upload_hinhanh_l.$banner['photo']?>" class="banner" />
		</ul>
	</div>
</div>

