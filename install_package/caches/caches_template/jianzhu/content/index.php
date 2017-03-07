<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<?php include template("content","banner"); ?>

</div>

<div class="main02">
<div class="category">
<div class="cate_top"><img src="<?php echo IMG_PATH;?>cate_top.jpg" /></div>
<div class="cate_list">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ed71a03f817303a6a372504cfad9a4e6&action=category&catid=13&num=6&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'13','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'6',));}?>
<ul>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
          <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</ul>
</div>
</div>
<div class="line"><img src="<?php echo IMG_PATH;?>line.jpg" /></div>
<div class="about">
<div class="about_top"><img src="<?php echo IMG_PATH;?>about_top.jpg" width="390" height="41" /></div>
<div class="about_pic"><img src="<?php echo IMG_PATH;?>about_pic.jpg" /></div>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a997734c014a43ffa113f76b125cdc39&action=lists&catid=9&order=id+DESC&num=1&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'9','order'=>'id DESC',)).'a997734c014a43ffa113f76b125cdc39');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','order'=>'id DESC','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
<div class="about_text"><a href="<?php echo $r['url'];?>"><?php echo $content;?>...</a>                         </div>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<div class="line"><img src="<?php echo IMG_PATH;?>line.jpg" /></div>
<div class="recommen">
<div class="recommen_top"><img src="<?php echo IMG_PATH;?>recomm_top.jpg" /></div>
<div  class="recommen_pic"><SCRIPT type=text/javascript>

<!--


    pict1="images/1.jpg"
	imgtext1=""
	imgLink1=""

	pict2="images/2.jpg"
	imgtext2=""
	imgLink2=""
    pict3="images/3.jpg"
	imgtext3=""
	imgLink3=""
	pict4="images/4.jpg"
	imgtext4=""
	imgLink4=""
	pict5="images/5.jpg"
	imgtext5=""
	imgLink5=""
	pict6="images/6.jpg"
	imgtext6=""
	imgLink6=""



	var focus_width=321
	var focus_height=177
	var text_height=0
	var pics=pict1+"|"+pict2+"|"+pict3+"|"+pict4+"|"+pict5+"|"+pict6
	var links=imgLink1+"|"+imgLink2+"|"+imgLink3+"|"+imgLink4+"|"+imgLink5+"|"+imgLink6
	var texts=imgtext1+"|"+imgtext2+"|"+imgtext3+"|"+imgtext4+"|"+imgtext5+"|"+imgtext6

		document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cabversion=6,0,0,0" width="'+focus_width+'" height="'+focus_height+'">');
	document.write('<param name="allowScriptAccess" value="sameDomain"><param name="movie" value="images/playswf.swf"><param name="quality" value="high"><param name="bgcolor" value="eeeeee">');
	document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
	document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'">');
	document.write('<embed src="images/playswf.swf" wmode="opaque" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'" menu="false" bgcolor="F0F0F0" quality="high" width="'+focus_width+'" height="'+focus_height+'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplxcer" />');
	document.write('</object>');
	//-->
	</SCRIPT></div>
</div>
</div>

<div class="main03">
<div class="new01">
<div class="new01_top"><img src="<?php echo IMG_PATH;?>new01_top.jpg" width="371" height="70" /></div>
<div class="new01_list">
<!--首页新闻调用开始-->
<ul class="topnews-ul">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d562d7702e8d3865465e666b15d63a6c&action=lists&catid=10&order=id+DESC&moreinfo=1&num=8&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'10','order'=>'id DESC','moreinfo'=>'1',)).'d562d7702e8d3865465e666b15d63a6c');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'10','order'=>'id DESC','moreinfo'=>'1','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
<li><span><?php echo date('Y-m-d',$r[inputtime]);?></span><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],54);?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</ul>
<!--首页新闻调用结束-->
</div>
</div>
<div class="line2"><img src="<?php echo IMG_PATH;?>line02.jpg" /></div>
<div class="new02">
<div class="new02_top"><img src="<?php echo IMG_PATH;?>new02_top.jpg" /></div>
<div class="new01_list">
<!--建筑知识首页调用开始-->
<ul class="topnews-ul">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d4ca99049aa9084e6eb08e6c9a7eb832&action=lists&catid=12&order=id+DESC&num=8&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'12','order'=>'id DESC',)).'d4ca99049aa9084e6eb08e6c9a7eb832');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'12','order'=>'id DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
<li><span><?php echo date('Y-m-d',$r[inputtime]);?></span><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r['title'],54);?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</ul>
<!--建筑知识首页调用结束-->
</div>
</div>
<div class="line2"><img src="<?php echo IMG_PATH;?>line02.jpg" /></div>
<div class="contact">
<div class="contact_top"><img src="<?php echo IMG_PATH;?>contact_top.jpg" /></div>
<div class="contact_list">
<!--<ul>
<li>地址：郑州市新107与机场高速交叉口</li>
<li>联系人：杜先生</li>
<li>电话：0371-66882963</li>
<li>传真：0371-66882889</li>
<li>手机:13283838311　13213055255：</li>
<li>E-mail：hongtaichugui@163.com</li>
<div class="zy_icon01"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=724296815&amp;site=qq&amp;menu=yes"><img src="<?php echo IMG_PATH;?>qq.jpg" border="0"  /></a></div>
</ul>-->
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="240" height="220">
         <param name="movie" value="Flvplayer.swf" />
         <param name="quality" value="high" />
         <param name="allowFullScreen" value="true" />
         <param name="FlashVars" value="vcastr_file=wtt.flv&LogoText=HONGTAI&BufferTime=3&IsAutoPlay=0&IsContinue=1&TextColor=#FFFFFF" />
         <embed src="Flvplayer.swf" allowfullscreen="true"  flashvars="vcastr_file=wtt.flv&LogoText=HONGTAI&IsAutoPlay=0&IsContinue=1"  quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="240" height="220"></embed></object>
</div>
</div>
</div>

<div class="main04">
<div class="main04_top"><a href="http://www.hongtai888.com/chugui/"><img src="<?php echo IMG_PATH;?>pro_top.jpg" border="0" /></a></div>
<div class="main04_border">
   <div id="demo">
<div id="indemo">
<div id="demo1">
<!--工程案例展示调用开始-->
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6ca70f2da6f3859438145c8a4221e57d&action=category&catid=11&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'11','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
<div style="float:left; width:200px; line-height:30px; color:#333333; margin-left:10px;  text-align:center"><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><img class="trans_img" onmouseover=transImg(this,0) onmouseout=transImg(this,1) src="<?php echo thumb($r['thumb'],190,140);?>" width="190" height="140" /></a><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></div>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<!--工程案例展示调用结束-->
</div>
<div id="demo2"></div>
</div>
</div>
<script>
<!--
var speed=20; //数字越大速度越慢
var tab=document.getElementById("demo");
var tab1=document.getElementById("demo1");
var tab2=document.getElementById("demo2");
tab2.innerHTML=tab1.innerHTML;
function Marquee(){
if(tab2.offsetWidth-tab.scrollLeft<=0)
tab.scrollLeft-=tab1.offsetWidth
else{
tab.scrollLeft++;
}
}
var MyMar=setInterval(Marquee,speed);
tab.onmouseover=function() {clearInterval=(MyMar)};
tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};
-->
</script>

</div>
</div>

<?php include template("content","footer"); ?>
