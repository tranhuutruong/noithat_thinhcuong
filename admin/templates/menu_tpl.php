<div class="logo"> <a href="#" target="_blank" onclick="return false;"> <img src="images/logo.png"  alt="" /> </a></div>
<div class="sidebarSep mt0"></div>
<!-- Left navigation -->
<ul id="menu" class="nav">
  <li class="dash" id="menu1"><a class=" active" title="" href="index.php"><span>Trang chủ</span></a></li>
  
  <li class="categories_li <?php if($_GET['type']=='dichvu') echo ' activemenu' ?>" id="menu_dv"><a href="" title="" class="exp"><span>Dịch vụ</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['act']=='man_cat' && $_GET['type']=='dichvu') echo ' class="this"' ?>><a href="index.php?com=news&act=man_cat&type=dichvu">Danh mục</a></li>
      <li<?php if($_GET['act']=='man' && $_GET['type']=='dichvu') echo ' class="this"' ?>><a href="index.php?com=news&act=man&type=dichvu">Quản lý dịch vụ</a></li>
    </ul>
  </li>


  <li class="categories_li <?php if($_GET['type']=='thietke') echo ' activemenu' ?>" id="menu2"><a href="" title="" class="exp"><span>Thiết kế</span><strong></strong></a>
    <ul class="sub">
     <li<?php if($_GET['act']=='man_danhmuc') echo ' class="this"' ?>><a href="index.php?com=product&act=man_danhmuc&type=thietke">Quản lý danh mục</a></li>
     <li<?php if($_GET['com']=='product' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=product&act=man&type=thietke">Quản lý thiết kế</a></li>
    </ul>
  </li>

  <li class="categories_li <?php if($_GET['type']=='tuvan') echo ' activemenu' ?>" id="menu_tv"><a href="" title="" class="exp"><span>Tư vấn</span><strong></strong></a>
    <ul class="sub">
      <li<?php if($_GET['act']=='man_cat' && $_GET['type']=='tuvan') echo ' class="this"' ?>><a href="index.php?com=news&act=man_cat&type=tuvan">Danh mục</a></li>
      <li<?php if($_GET['act']=='man' && $_GET['type']=='tuvan') echo ' class="this"' ?>><a href="index.php?com=news&act=man&type=tuvan">Quản lý tư vấn</a></li>
    </ul>
  </li>

  <li class="categories_li <?php if($_GET['type']=='congtrinh') echo ' activemenu' ?>" id="menu3"><a href="" title="" class="exp"><span>Công trình</span><strong></strong></a>
    <ul class="sub">
     <li<?php if($_GET['com']=='product' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=product&act=man&type=congtrinh">Quản lý công trinh</a></li>
    </ul>
  </li>

    <li class="categories_li <?php if($_GET['type']=='tintuc') echo ' activemenu' ?>" id="menu_tt"><a href="" title="" class="exp"><span>Tin tức - Sự kiện</span><strong></strong></a>
      <ul class="sub">
         <li<?php if($_GET['act']=='man' && $_GET['type']=='tintuc') echo ' class="this"' ?>><a href="index.php?com=news&act=man&type=tintuc">Quản lý tin tức</a></li>
      </ul>
    </li>

    <li class="categories_li <?php if($_GET['type']=='danhgia') echo ' activemenu' ?>" id="menu_dg"><a href="" title="" class="exp"><span>Đánh giá khách hàng</span><strong></strong></a>
      <ul class="sub">
         <li<?php if($_GET['act']=='man' && $_GET['type']=='danhgia') echo ' class="this"' ?>><a href="index.php?com=news&act=man&type=danhgia">Quản lý bài viết</a></li>
      </ul>
    </li>
      
    <li class="categories_li <?php if($_GET['com']=='newsletter') echo ' activemenu' ?>" id="menu_nt"><a href="" title="" class="exp"><span>Đăng ký nhận tin</span><strong></strong></a>
    	<ul class="sub">
      	 <li<?php if($_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=newsletter&act=man">Quản lý Đăng ký nhận tin</a></li>
      </ul>
    </li>
   
    <li class="gallery_li <?php if($_GET['com']=='background' || $_GET['com']=='slider' || $_GET['com']=='letruot') echo ' activemenu' ?>" id="menu_qc"><a href="" title="" class="exp"><span>Banner - Quảng cáo</span><strong></strong></a>
     <ul class="sub">
        <li<?php if($_GET['type']=='logo') echo ' class="this"' ?>><a href="index.php?com=background&act=capnhat&type=logo">Cập nhật logo</a></li>
        <li<?php if($_GET['type']=='banner') echo ' class="this"' ?>><a href="index.php?com=background&act=capnhat&type=banner">Cập nhật banner</a></li>
        <li<?php if($_GET['type']=='slider') echo ' class="this"' ?>><a href="index.php?com=slider&act=man_photo&type=slider">Cập nhật slider</a></li>
        <li<?php if($_GET['type']=='doitac') echo ' class="this"' ?>><a href="index.php?com=slider&act=man_photo&type=doitac">Quản lý đối tác</a></li>
        <li<?php if($_GET['type']=='footer') echo ' class="this"' ?>><a href="index.php?com=background&act=capnhat&type=footer">Cập nhật background footer</a></li>
      </ul>
    </li>

    <li class="categories_li <?php if($_GET['com']=='about' || $_GET['com']=='video') echo ' activemenu' ?>" id="menu_t"><a href="" title="" class="exp"><span>Trang tĩnh</span><strong></strong></a>
      <ul class="sub">
        <li<?php if($_GET['type']=='about') echo ' class="this"' ?>><a href="index.php?com=about&act=capnhat&type=about">Giới thiệu</a></li>
         <li<?php if($_GET['type']=='lienhe') echo ' class="this"' ?>><a href="index.php?com=about&act=capnhat&type=lienhe">Cập nhật liên hệ</a></li>
         <li<?php if($_GET['type']=='footer') echo ' class="this"' ?>><a href="index.php?com=about&act=capnhat&type=footer">Cập nhật footer</a></li>
      </ul>
    </li>
  
  <li class="setting_li <?php if($_GET['com']=='lkweb' || $_GET['com']=='yahoo' || $_GET['com']=='company' || $_GET['com']=='meta' || $_GET['com']=='about' || $_GET['com']=='user') echo ' activemenu' ?>" id="menu_cp"><a href="" title="" class="exp"><span>Nội dung khác</span><strong></strong></a>
    <ul class="sub">
    	<li<?php if($_GET['com']=='video') echo ' class="this"' ?>><a href="index.php?com=video&act=man">Video</a></li>
       <li<?php if($_GET['com']=='yahoo') echo ' class="this"' ?>><a href="index.php?com=yahoo&act=man">Quản lý hỗ trợ trực tuyến</a></li>
      <li<?php if($_GET['com']=='company') echo ' class="this"' ?>><a href="index.php?com=company&act=capnhat">Cập nhật thông tin công ty</a></li>
     <li<?php if($_GET['com']=='meta') echo ' class="this"' ?>><a href="index.php?com=meta&act=capnhat">Cập nhật thông tin SEO website</a></li>
     <li<?php if($_GET['act']=='admin_edit') echo ' class="this"' ?>><a href="index.php?com=user&act=admin_edit">Quản lý Tài Khoản</a></li>
    </ul>
  </li>
</ul>



