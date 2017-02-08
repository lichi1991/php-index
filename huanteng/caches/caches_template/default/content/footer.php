<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!--版权-->
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/footer.css">
<div class="bt-box">
		<div class="btmid">
			<div class="erwei">
				<img src="<?php echo IMG_PATH;?>myimg/eww1.jpg" alt="">
				<img src="<?php echo IMG_PATH;?>myimg/eww.jpg" alt="" style="margin-right:0">
			</div>
			<div class="wenzi">
				<div class="wz">
					<sapn>
						<a  href="<?php echo siteurl($siteid);?>">首页</a>
						<a>|</a>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7eeecc38843927e01e060b69712aa594&action=category&catid=0&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','limit'=>'6',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
						<a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a>
						<a  href="javascript:;">|</a>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</sapn>
					<br><a href="">
						<span style="margin-right:8px">版权所有:广州欢腾鞋业有限公司</span>
						<span style="margin-right:7px">备案号:晋ICP备*****号</span>
						<span style="margin-right:17px">手机:18734563166</span>
						<span>固话:400-6505-778</span>
					</a>
				</div>
			</div>
			<div class="tu">
				<img src="<?php echo IMG_PATH;?>myimg/logo2.png" alt="">
			</div>
		</div>
	</div>
</body>
<script src="<?php echo JS_PATH;?>myjs/jquery.1.12.3.js"></script>
<script src="<?php echo JS_PATH;?>myjs/indexs.js"></script>
</html>
<!-- 
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f035abc9c95f2b23c4fc15597f157e22&action=lists&catid=17&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'17','moreinfo'=>'1','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $s) { ?>
					<br><a href="">
						<span style="margin-right:8px">版权所有:<?php echo $s['copyright'];?></span>
						<span style="margin-right:7px">备案号:<?php echo $s['beian'];?></span>
						<span style="margin-right:17px">手机:<?php echo $s['phone'];?></span>
						<span>固话:<?php echo $s['tel'];?></span>
					</a>
					<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> -->