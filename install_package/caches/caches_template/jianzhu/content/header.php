<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="description" content="<?php echo $SEO['description'];?>" />
<meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
<link rel="canonical" href="<?php echo siteurl($siteid);?>/"/>
<link href="<?php echo CSS_PATH;?>style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<!--首页幻灯JS-CSS调用开始-->
<LINK href="<?php echo CSS_PATH;?>alixixi.css" type=text/css rel=stylesheet>
<SCRIPT src="<?php echo JS_PATH;?>jquery-2.4.2.min.js" type=text/javascript></SCRIPT>
<SCRIPT src="<?php echo JS_PATH;?>alixixi.js" type=text/javascript></SCRIPT>
<!--首页幻灯JS-CSS调用结束-->
<base target=_blank>
<meta name="baidu-site-verification" content="3BwIX5kQCz8fCX8d" />
</head>
<body bgcolor="#eaeaea">
<div class="main01">
<div class="top">
<div class="logo"><img src="<?php echo IMG_PATH;?>logo.png" width="215" height="68" /></div>
<div class="nav1">
<!--网站导航调用开始-->
<ul>
<li id="nav01"><a href="<?php echo siteurl($siteid);?>/" >首页</a></li>
<li id="nav02"><a href="<?php echo $CATEGORYS['9']['url'];?>"><?php echo $CATEGORYS['9']['catname'];?></a></li>
<li id="nav03"><a href="<?php echo $CATEGORYS['10']['url'];?>"><?php echo $CATEGORYS['10']['catname'];?></a></li>
<li id="nav04"><a href="<?php echo $CATEGORYS['11']['url'];?>"><?php echo $CATEGORYS['11']['catname'];?></a></li>
<li id="nav05"><a href="<?php echo $CATEGORYS['12']['url'];?>"><?php echo $CATEGORYS['12']['catname'];?></a></li>
<li id="nav06"><a href="<?php echo $CATEGORYS['13']['url'];?>"><?php echo $CATEGORYS['13']['catname'];?></a></li>
<li id="nav07"><a href="<?php echo $CATEGORYS['14']['url'];?>"><?php echo $CATEGORYS['14']['catname'];?></a></li>
<li id="nav08"><a href="<?php echo $CATEGORYS['15']['url'];?>"><?php echo $CATEGORYS['15']['catname'];?></a></li>
</ul>
<!--网站导航调用结束-->
</div>
</div>
