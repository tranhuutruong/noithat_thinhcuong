<section id="index_gioithieu">
	<div class="container">
		<div class="row">
			<div class="col-md-8 no-padding">
				<div id="intro">
					<div class="title-intro">
						<h3>Giới thiệu</h3>
					</div>
					<div class="content">
						<a href="/gioi-thieu.html"><img src="resize/366x246/2/<?= _upload_hinhanh_l.$gioithieu['photo'] ?>"></a>
						<p><?= catchuoi($gioithieu['mota'],1500) ?></p>
						<p><a href="/gioi-thieu"><span class="glyphicon glyphicon-triangle-right"></span> Xem thêm</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4 no-padding-right">
				<div id="forcus">
					<div class="title-intro">
						<h3>Tiêu điểm</h3>
					</div>
					<div class="content">
						<?php foreach ($tieudiem as $item): ?>
							<div class="forcus_item">
								<div class="datetime">
									<p><?= date('d',$item['ngaytao']) ?></p>
									<p><?= date('m,Y',$item['ngaytao']) ?></p>
								</div>
								<div class="thumb">
									<a href="">
										<img src="resize/135x103/2/<?=_upload_tintuc_l.$item['thumb']?>">
									</a>
								</div>
								<div class="description">
									<h3><a href=""><?= catchuoi($item['ten'],35) ?></a></h3>
									<p><?= catchuoi($item['mota'],140 )?></p>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="index_congtrinh" class="bg-img">
	<div class="title-works">
		<h3>Công trình tiêu biểu</h3>
	</div>
	<div class="content">
		<?php foreach ($congtrinh as $item): ?>
			<div class="col-md-3 no-padding">
				<div class="works_item">
					<img src="resize/339x277/2/<?= _upload_sanpham_l.$item['thumb'] ?>">
					<div class="hover">
						<div class="description">
							<h3><?= $item['ten'] ?></h3>
							<p><?= catchuoi($item['mota'],200) ?></p>
						</div>
						<p><a href="">Chi tiết</a></p>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</section>

<section id="index_dichvu">
	<div class="title-service">
		<h3>Dịch vụ chính</h3>
	</div>
	<div class="container">
		<div class="row">
			<div class="content slick_3">
				<?php foreach ($dichvu as $item): ?>
					<div class="service_item">
						<div class="thumb">
							<img src="resize/350x267/2/<?= _upload_tintuc_l.$item['thumb'] ?>">
							<a href="">Chi tiết</a>
						</div>
						<div class="description">
							<h3><a href=""><?= $item['ten'] ?></a></h3>
							<p><?= catchuoi($item['mota'],300) ?></p>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</section>

<section id="index_tuvan" class="bg-img">
	<div class="container">
		<div class="row">
			<div class="title-works">
				<h3>Tư vấn thiết kế Karaoke</h3>
			</div>
			<div class="content slick_4">
				<?php foreach ($tuvan as $item): ?>
					<div class="advisory_item">
						<div class="thumb">
							<img src="resize/233x178/2/<?= _upload_tintuc_l.$item['thumb'] ?>">
							<a href="">Chi tiết</a>
						</div>
						<div class="description">
							<h3><a href=""><?= $item['ten'] ?></a></h3>
							<p><?= catchuoi($item['mota'],200) ?></p>
						</div>
					</div>
				<?php endforeach ?>
			</div>	
		</div>
	</div>
</section>

<section id="index_tintuc">
	<div class="container">
		<div class="row">
			<div class="title-service">
				<h3>Tin tức - Sự kiện</h3>
			</div>
			<div class="content">
				<?php foreach ($tintuc as $k => $item): ?>
					<div class="col-md-3 no-padding">
	
						<?php if($k%2==0){ ?>
							<div class="new_item">
								<div class="thumb">
									<img src="resize/300x300/2/<?= _upload_tintuc_l.$item['thumb'] ?>">
									<a href="">Chi tiết</a>
								</div>
								<div class="description">
									<p class="odd"><?= date('d, F',$ngaytao) ?></p>
									<h3><a href=""><?= $item['ten'] ?></a></h3>
									<p><?= $item['mota'] ?></p>
									<a href=""><span class="glyphicon glyphicon-triangle-right"></span> Xem tiếp</a>
								</div>
							</div>
						<?php }else{ ?>
							<div class="new_item">
								<div class="description">
									<p class="even"><?= date('d, F',$ngaytao) ?></p>
									<h3><a href=""><?= $item['ten'] ?></a></h3>
									<p><?= $item['mota'] ?></p>
									<a href=""><span class="glyphicon glyphicon-triangle-right"></span> Xem tiếp</a>
								</div>
								<div class="thumb">
									<img src="<?= _upload_tintuc_l.$item['thumb'] ?>">
									<a href="">Chi tiết</a>
								</div>
							</div>	
						<?php } ?>
					</div>
				<?php endforeach ?>
			</div>	
		</div>
	</div>
</section>