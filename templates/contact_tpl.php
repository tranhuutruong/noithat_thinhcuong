<div class="container">
    <div class="row">
        <div class="title-service">
            <h3><?=$title_cat?></h3><span></span>
        </div>
        <div class="col-md-4">
            <?=$company_contact['noidung'];?> 
            <?= $toado_2 ?>
        </div>

        <div class="col-md-4">
            <div class="frm_lienhe">
                <form method="post" name="frm" class="frm" action="ajax/contact.php" enctype="multipart/form-data">
                    <div class="loicapcha thongbao"></div>
                    <div class="item_lienhe"><p><?=_hovaten?>:<span>*</span></p><input name="ten_lienhe" type="text" id="ten_lienhe" /></div>
                    
                    <div class="item_lienhe"><p><?=_diachi?>:<span>*</span></p><input name="diachi_lienhe" type="text" id="diachi_lienhe" /></div>
                    
                    <div class="item_lienhe"><p><?=_dienthoai?>:<span>*</span></p><input name="dienthoai_lienhe" type="text" id="dienthoai_lienhe" /></div>
                    
                    <div class="item_lienhe"><p>Email:<span>*</span></p><input name="email_lienhe" type="text" id="email_lienhe" /></div>
                    
                    <div class="item_lienhe"><p><?=_chude?>:<span>*</span></p><input name="tieude_lienhe" type="text" id="tieude_lienhe" /></div>
                    
                    <div class="item_lienhe"><p><?=_noidung?>:<span>*</span></p><textarea name="noidung_lienhe" id="noidung_lienhe" rows="5"></textarea></div>
                    
                    <div class="item_lienhe"><p><?=_mabaove?>:<span>*</span></p>
                    <img src="sources/captcha.php" id="hinh_captcha">
                            <a href="#reset_capcha" id="reset_capcha" title="<?=_doimakhac?>"><img src="images/refresh.png" alt="reset_capcha" /></a></div>

                    <div class="item_lienhe"><p>&nbsp;</p><input name="capcha" type="text" id="capcha" /></div>
                    
                    <div class="item_lienhe" >
                        <p>&nbsp;</p>
                        <input type="button" value="<?=_gui?>" class="click_ajax" />
                        <input type="button" value="<?=_nhaplai?>" onclick="document.frm.reset();" />
                    </div>
                </form>
            </div><!--.frm_lienhe-->   
        </div>

        <div class="col-md-4">
            <h4>Miền Bắc</h4>
            <div id="map_canvas"></div> 
            <h4>Miền Nam</h4>
            
            <div class="col-md-12">
                <div class="row">
                    <div id="map_canvas2" style=" height: 200px;width: 99%;margin:0px auto;border:1px solid #BBB;"></div>
                </div>
            </div>
            
        </div>
    </div>
</div>