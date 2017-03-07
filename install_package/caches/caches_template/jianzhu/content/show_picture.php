<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div class="banner2">
<!--内容页广告调用开始-->
<!--内容页广告调用结束-->
</div>

</div>
<div class="zy">
<div class="zy_left">
<div class="zy_fl">
<div class="zy_fl_top"><?php echo $CAT['catname'];?><span>RODUCT CATEGORY</span></div>
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
<div class="zy_right_top_right"><span>您当前的位置:<a style=" color:#333; text-decoration:none;" href="<?php echo siteurl($siteid);?>">首页</a> <a  style=" color:#333; text-decoration:none;" href="<?php echo siteurl($siteid);?>"> > <?php echo catpos($catid);?></a></div>
</div>
<div class="about-mid">
<!--内容页调用开始-->
           <h1><?php echo $title;?></h1>
         <!--  <div style="text-align:center; margin-top:20px;">作者<?php echo $copyfrom;?> 发表时间：<?php echo $inputtime;?> 阅读：<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script><?php echo $views;?> 次</div> -->
          <img src="<?php echo thumb($thumb,150,112);?>"  alt="$title" style="margin-left:30px">
          <div style="margin-top:20px; width:700px; line-height:22px; padding:0px 20px 0px 50px;"><?php echo $description;?>
          <BR>　<?php echo $content;?>
               <Br />
       上一个产品：：<a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a>
       下一个产品：<a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a>
           </div></div>
<!--内容页调用结束-->
</div>
<div class="zy_right_foot"><img src="<?php echo IMG_PATH;?>zy_right_foot.jpg" /></div>
</div>
</div>

<?php include template("content","footer"); ?>