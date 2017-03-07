<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="foot">
<div class="foot01">
<div class="foot_line"><img src="<?php echo IMG_PATH;?>foot_line.jpg" /></div>
<div class="yqlj">
<div class="yqlj_top"><img src="<?php echo IMG_PATH;?>link_top.jpg" /></div>
<div class="yqlj_list">
<ul class="links">
<!--网站友情链接-->
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=99c32cd273c57223c20074bf5196e97a&action=type_list&siteid=%24siteid&order=listorder+DESC&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'10',));}?>
<?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
<li><a href="<?php echo $v['url'];?>" target="_blank title="<?php echo $v['name'];?>"><?php echo $v['name'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

</ul>
</div>
</div>
<div class="note"><img src="<?php echo IMG_PATH;?>note_pic.jpg" width="334" height="179" border="0" usemap="#Map" />
  <map name="Map" id="Map">
    <area shape="rect" coords="4,125,120,163" href="/liuyan/" />
  </map>
</div>

</div>
<div class="foot02">
                                      版权所有：监理部（www.jianlibu.com.cn）主营产品：<A href="<?php echo siteurl($siteid);?>/"  target="_blank">不锈钢橱柜</A> <A href="<?php echo siteurl($siteid);?>/"  target="_blank">不锈钢台面</A> <A href="<?php echo siteurl($siteid);?>/"  target="_blank">不锈钢柜体</A> <A href="<?php echo siteurl($siteid);?>"  target="_blank">不锈钢门板</A> 　地址：广东省佛山市禅城区<br />　 联系人：杜泓锦 手机：13283838311 15538183887 E-mail:jianlibu@gmail.com传真：0371-66882766
400-168-6688  技术支持：<a>郑州新动力</a>
<!--站点访问统计开始-->
<!--站点访问统计结束-->
</div>
</div>
</body>
</html>
