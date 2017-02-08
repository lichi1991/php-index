<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>广州欢腾鞋业-首页</title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/publics.css">
</head>
<body>
	<!--顶部-->
	<div class="top-box">
		<div class="tmid-box">
			<a href="" class="tleft"><span>▪</span>欢迎进入本网站!</a>
			<a href="" class="tright">
				<span><img src="<?php echo IMG_PATH;?>myimg/home.png" alt="">设为首页</span>
				<span><img src="<?php echo IMG_PATH;?>myimg/sc.png" alt="">加入收藏</span>
				<span><img src="<?php echo IMG_PATH;?>myimg/phone.png" alt="">联系我们</span>
			</a>
		</div>
	</div>
	<!--logo-->
	<div class="logo">
		<div class="logo-mid">
			<div class="lleft"></div>
			<div class="lright">
				<a href="<?php echo siteurl($siteid);?>"><div style="border-left:1px solid #333333"></div></a>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7eeecc38843927e01e060b69712aa594&action=category&catid=0&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','limit'=>'6',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				<a href="<?php echo $v['url'];?>"></a>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
		</div>
	</div>