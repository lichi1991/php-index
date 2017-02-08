<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">

	<script type="text/javascript" src="<?php echo JS_PATH;?>myjs/jquery-1.12.4.min.js"></script>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/index.css">
	<script src="<?php echo JS_PATH;?>myjs/function.js"></script>
	<script src="<?php echo JS_PATH;?>myjs/animate.js"></script>
	<script src="<?php echo JS_PATH;?>myjs/jquery-1.12.4.min.js"></script>
	<script src="<?php echo JS_PATH;?>myjs/indexjq.js"></script>
	
</head>

<body>
<!-- 顶部导航开始 -->
<div class="header">
<div class="topnavbox">
	<div class="topnv-son">
		<div class="searchbox">
			<input type="text" value="请输入关键字"  id="search">
			<a href="">ENGLISH</a>
		</div>
		<ul class="topnav">
			<li class="lis">
				<a href="<?php echo siteurl($siteid);?>" class="lis2">首页</a>
				<dl class="twonav" style="opacity: 0">
				</dl>
			</li>
		<?php $a=9?>
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6caa7ba4ec395355e30b69e4aaea72df&action=category&catid=0&num=25&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'listorder ASC','limit'=>'25',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li class="lis">
				<a href="<?php echo $r['url'];?>" class= <?php if($r[catid]==$top_parentid) { ?>lis2<?php } ?>><?php echo $r['catname'];?></a>
				<dl class="twonav">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5d47081ba88c06d5c4d4dc0a6e76e439&action=category&catid=%24r%5Bcatid%5D&num=25&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'order'=>'listorder ASC','limit'=>'25',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $d) { ?>
							<dd><a href="<?php echo $d['url'];?>"><?php echo $d['catname'];?></a></dd>
						<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</dl>
				<?php $a++; ?>
			</li>
			<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</ul>
	</div>
</div>
</div>
