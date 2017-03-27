<?php
	session_start();
	$session=session_id();

	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './admin/lib/');
	
	if(!isset($_SESSION['lang']))
	{
		$_SESSION['lang']='';
	}
	$lang=$_SESSION['lang'];
		
	require_once _source."lang$lang.php";	
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";	
	include_once _lib."class.database.php";
	include_once _lib."functions_user.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."file_requick.php";
	include_once _source."counter.php";	
	
	if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
	$pid=$_REQUEST['productid'];
		addtocart($pid,1);
		redirect("gio-hang.html");}
?>
<!doctype html>
<html lang="vi">

<head>
	<base href="http://<?=$config_url?>/"  />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">   
	<?php include _template."layout/seoweb.php";?>
	<?php include _template."layout/all_css.php";?>
</head>

<body onLoad="<?php if(@$_GET['com']=='lien-he') echo 'initialize();'; ?>"  itemscope itemtype="http://schema.org/<?= $config_url ?>">
<!-- <div id="pre-loader"><div id="wrap"><div id="preloader_1"><span></span><span></span><span></span><span></span><span></span></div></div></div> -->
<h1 class="vcard fn" style="position:absolute; top:-1000px;"><?php if($title!='')echo $title;else echo $seo['title'];?></h1>
<h2 style="position:absolute; top:-1000px;"><?php if($title!='')echo $title;else echo $seo['title'];?></h2>
<h3 style="position:absolute; top:-1000px;"><?php if($title!='')echo $title;else echo $seo['title'];?></h3>

<div id="wapper">
	<div id="header">
        <?php include _template."layout/header.php";?>
    </div><!---END #header-->
    
    <div id="menu">
            <?php include _template."layout/menu_top.php";?>
    </div><!---END #menu-->  
    
    <div id="menu_mobi"> 
		<?php include _template."layout/menu_mobi.php";?>
    </div><!---END #menu_mobi-->   
    <?php if($_REQUEST['com']=='index' || $_REQUEST['com']==''){ ?>
	    <div id="slider" class="bg-img">
	        <?php include _template."layout/slider_jssor.php";?>
	    </div><!---END #slider-->
	    <div class="clear"></div>
    <?php } ?>

    <div id="main_content">
    	<?php include _template.$template."_tpl.php"; ?> 
    </div><!---END #main_content-->
    
    <section id="partner">
        <?php include _template."layout/doitac.php";?>
        <div class="clear"></div>
    </section><!---END #menu_bottom-->
</div><!---END #wapper-->

<footer>
	<?php include _template."layout/footer.php";?>
</footer><!---END #footer-->   


<?php include _template."layout/all_js.php";?>
</body>
</html>
