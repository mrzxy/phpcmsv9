<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="banner">
<!--首页焦点图调用开始-->
<tbody style="text-align:center">
<DIV id=imgPlay>
<UL class=imgs id=actor>
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dcd1c47627b910509414b85662be50cc&action=position&posid=1&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

  <LI><A href="<?php echo $r['url'];?>" target=_blank><IMG title=<?php echo str_cut($r['title'],30);?> src="<?php echo thumb($r['thumb'],958,302);?>"></A><DIV class=btn><A title=立即查看 href="<?php echo $r['url'];?>" target=_blank>立即查看</A></DIV></LI>
         <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</UL>
<DIV class=num>
<P class=lc></P>
<P class=mc></P>
<P class=rc></P></DIV>
<DIV class=num id=numInner></DIV>
<DIV class=prev>上一张</DIV>
<DIV class=next>下一张</DIV></DIV>
</tbody>
<!--首页焦点图调用结束-->

</div>