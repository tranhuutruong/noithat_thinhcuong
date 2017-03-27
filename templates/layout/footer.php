<?php	
	$company_contact = getOne("select noidung$lang as noidung from #_about where type='footer' limit 0,1");
    $bg_footer=getOne("select photo from #_background where hienthi=1 and type='footer' limit 0,1");
?>
<style type="text/css">
    footer{
        background:url('<?= _upload_hinhanh_l.$bg_footer['photo'] ?>') no-repeat;
        background-size: cover;
    }
</style>
<div class="container">
    <div class="row">
        <div id="main_footer">
            <h3>Thông tin liên hệ</h3>
            <?=$company_contact['noidung'];?>
            <div id="lienket">
                <a href="<?=$company['facebook']?>" target="_blank"><img src="images/facebook.png" alt="Facebook" /></a>
                <a href="<?=$company['tiwtter']?>" target="_blank"><img src="images/twitter.png" alt="tiwtter" /></a>
                <a href="<?=$company['google']?>" target="_blank"><img src="images/google.png" alt="google" /></a>
                <a href="<?=$company['youtube']?>" target="_blank"><img src="images/youtube.png" alt="youtube" /></a>
            </div>
        </div>

        <div id="fanpage">
            <h3>Fanpage - Facebook</h3>
            <div style="width: 335px;">
              <!-- Page plugin's width will be 500px -->
              <div class="fb-page" data-href="<?= $company['fanpage'] ?>" data-width="335"></div>
            </div>
        </div>

        <div id="thongke">
            <?php include _template.'/layout/dangkynhantin.php' ?>
                <h3><?=_thongketruycap?></h3>
                <ul>
                    <li><img src="images/dangonl.png" alt="Online" />Online: <span><?php $count=count_online();echo $tong_xem=$count['dangxem'];?></span></li>
                    <li><img src="images/tong.png" alt="<?=_tongtruycap?>" /><?=_tongtruycap?>: <span><?php $count=count_online();echo $tong_xem=$count['daxem'];?></span></li>
                </ul>
            </div><!---END #thongke-->
    </div>
</div>
<div id="copyright">
    <p><?= date('Y') ?> Copyright &copy; noi that thinh cuong. Web Design by <?= $company['ten'] ?>.</p>
</div>
