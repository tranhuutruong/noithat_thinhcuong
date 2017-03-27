<?php  if(!defined('_source')) die("Error");
	$gioithieu=getOne("select id,tenkhongdau,ten$lang as ten,mota$lang as mota,photo from #_about where type='about' limit 0,1");
	$tieudiem=getAll("select id,ten$lang as ten,tenkhongdau,mota$lang as mota,thumb,ngaytao from #_news where hienthi=1 and type='tintuc' and noibat=1 limit 0,3");
	$congtrinh=getALl("select id,ten$lang as ten,tenkhongdau,thumb,mota from #_product where hienthi=1 and type='congtrinh' and noibat=1 order by stt,id desc limit 0,8");
	$dichvu=getAll("select id,ten$lang as ten,tenkhongdau,mota$lang as mota,thumb,ngaytao from #_news where hienthi=1 and type='dichvu' and noibat=1 limit 0,5");
	$tuvan=getAll("select id,ten$lang as ten,tenkhongdau,mota$lang as mota,thumb,ngaytao from #_news where hienthi=1 and type='tuvan' and noibat=1 limit 0,5");
	$tintuc=getAll("select id,ten$lang as ten,tenkhongdau,mota$lang as mota,thumb,ngaytao from #_news where hienthi=1 and type='tintuc' and noibat=1 limit 0,4");
?>