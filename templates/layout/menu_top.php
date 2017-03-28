<?php
	
	$menu_dichvu=getAll("select ten$lang as ten,tenkhongdau,id from #_news_item where type='dichvu' and hienthi=1 order by stt,id desc");
	$menu_thietke=getAll("select ten$lang as ten,tenkhongdau,id from #_product_danhmuc where type='thietke' and hienthi=1 order by stt,id desc");
	$menu_tuvan=getAll("select ten$lang as ten,tenkhongdau,id from  #_news_item where type='tuvan' and hienthi=1 order by stt,id desc");
?>

<div class="container">
    <div class="row">
        <ul>	
            <li><a class="<?php if((!isset($_REQUEST['com'])) or ($_REQUEST['com']==NULL) or $_REQUEST['com']=='index') echo 'active'; ?>" href="index.html"><?=_trangchu?></a></li>
            <li><a class="<?php if($_REQUEST['com'] == 'gioi-thieu') echo 'active'; ?>" href="gioi-thieu.html"><?=_gioithieu?></a></li>
            <li><a class="<?php if($_REQUEST['com'] == 'dich-vu') echo 'active'; ?>" href="dich-vu.html"><?=_dichvu?></a>
            	<ul>
            		<?php foreach ($menu_dichvu as $item): ?>
            			<li><a href="dich-vu/<?= $item['tenkhongdau'] ?>-<?= $item['id'] ?>"><?= $item['ten'] ?></a></li>
            		<?php endforeach ?>
            	</ul>
            </li>
            <li><a class="<?php if($_REQUEST['com'] == 'thiet-ke') echo 'active'; ?>" href="thiet-ke.html"><?=_thietke?></a>
				<ul>
            		<?php foreach ($menu_thietke as $item): ?>
            			<li><a href="thiet-ke/<?= $item['tenkhongdau'] ?>-<?= $item['id'] ?>"><?= $item['ten'] ?></a></li>
            		<?php endforeach ?>
            	</ul>
            </li>
            <li><a class="<?php if($_REQUEST['com'] == 'tu-van') echo 'active'; ?>" href="tu-van.html"><?=_tuvan?></a>
				<ul>
            		<?php foreach ($menu_tuvan as $item): ?>
            			<li><a href="tu-van/<?= $item['tenkhongdau'] ?>-<?= $item['id'] ?>"><?= $item['ten'] ?></a></li>
            		<?php endforeach ?>
            	</ul>
            </li>
            <li><a class="<?php if($_REQUEST['com'] == 'cong-trinh') echo 'active'; ?>" href="cong-trinh.html"><?=_congtrinh?></a></li>
            <li><a class="<?php if($_REQUEST['com'] == 'tin-tuc') echo 'active'; ?>" href="tin-tuc.html"><?=_tintucsukien?></a></li>
            <li><a class="<?php if($_REQUEST['com'] == 'video') echo 'active'; ?>" href="video.html">Video</a></li>
            <li><a class="<?php if($_REQUEST['com'] == 'lien-he') echo 'active'; ?>" href="lien-he.html"><?=_lienhe?></a></li>
        </ul>
    </div>
</div>
<!-- <div id="search">
    <input type="text" name="keyword" id="keyword" onKeyPress="doEnter(event,'keyword');" value="<?=_nhaptukhoatimkiem?>..." onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}">
    <img src="images/i_search.png" alt="<?=_timkiem?>" style="cursor:pointer;" onclick="onSearch(event,'keyword');" />
</div>-END #search -->