<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div class="banner2">
<!--内容页广告开始-->
<!--内容页广告结束-->
</div>

</div>
<div class="zy">
<div class="zy_left">
<div class="zy_fl">
<div class="zy_fl_top">产品分类<span>RODUCT CATEGORY</span></div>
<div class="zy_fl_list">
<ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9eca38a3485e9841d7aed0fe7ab50478&action=category&catid=0&order=listorder+ASC&siteid=%24siteid&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'listorder ASC','siteid'=>$siteid,'limit'=>'10',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?> </a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</ul>
</div>
</div>
<div class="zy_icon01"><a href="http://wpa.qq.com/msgrd?v=3&uin=724296815&site=qq&menu=yes"><img src="<?php echo IMG_PATH;?>icon01.jpg" border="0"  /></a></div>
<div class="zy_icon01"><img src="<?php echo IMG_PATH;?>icon02.jpg" /></div>
<div class="zy_icon01"><a href="/liuyan/"><img src="<?php echo IMG_PATH;?>icon03.jpg" border="0" /></a></div>


</div>
<div class="zy_right">
<div class="zy_right01">
<div class="zy_right_top"><div class="zy_right_top_left"><table width="100%" border="0" cellpadding="0"  cellspacing="0" align="center">
  <tr>
    <td  align="center" height="30"><span>NEWS</span></td>
  </tr>
  <tr>
    <td align="center"><?php echo $CAT['catname'];?></td>
  </tr>
</table>
</div>
<div class="zy_right_top_right">您当前的位置:<a style=" color:#333; text-decoration:none;" href="<?php echo siteurl($siteid);?>">首页</a> > <a  style=" color:#333; text-decoration:none;" href="<?php echo siteurl($siteid);?>"><?php echo catpos($catid);?></a> > 正文</div>
</div>
<div class="about-mid">
         <div class="about-new">
       <ul class="classnews">
       <!--列表页内容调用开始-->
       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6401a2ce199d1b88bccfc45608b989cc&action=lists&catid=%24catid&num=15&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 15;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
       <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li style="width: 95%;"><span><?php echo date('Y-m-d',$r[inputtime]);?></span><a href="<?php echo $r['url'];?>"  title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></li>
<?php $n++;}unset($n); ?>
</ul>
	     <p style="margin:0 auto; padding:0;text-align:center;font-size:14px; color:#636363; margin-top:20px; font-weight:bold;">
	  <a class="page" href=""><strong><?php echo $pages;?></strong></a>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<!--列表页内容调用结束-->
    </div></div>

<div class="zy_fy"></div>
</div>
<div class="zy_right_foot"><img src="<?php echo IMG_PATH;?>zy_right_foot.jpg" /></div>
</div>
</div>
<?php include template("content","footer"); ?>