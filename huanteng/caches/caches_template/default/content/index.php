<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/indexs.css">
	<!--banner-->
	<div class="banner">
			<div class="bannerbox">
				<img src="<?php echo IMG_PATH;?>myimg/banner1.jpg" alt="">
				<img src="<?php echo IMG_PATH;?>myimg/banner2.jpg" alt="">
				<img src="<?php echo IMG_PATH;?>myimg/banner3.jpg" alt="">
				<div class="bannerd">
					<ul>
						<li class="active"></li>
						<li></li>
						<li></li>
					</ul>
				</div>
			</div>
		</div>
	<!--选项卡-->
	<div class="middle-box">
		<div class="midimg-box">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ad6100e5c81bbe89f3b433ae14ca1645&action=category&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('limit'=>'1',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
			<a href="<?php echo $CATEGORYS['1']['url'];?>" class="hibox"></a>
			<a href="<?php echo $CATEGORYS['3']['url'];?>" class="hellobox"></a>
			<a href="<?php echo $CATEGORYS['6']['url'];?>" class="nhbox"></a>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
	</div>
	<?php include template("content","footer"); ?>