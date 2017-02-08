<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/abouts.css">
	<!--banner-->
	<div class="banner-box">
		<div class="banner">
			<a href=""><img src="<?php echo IMG_PATH;?>myimg/ppbanner.jpg" alt=""></a>
		</div>
	</div>
	<!---->
	<div class="mid-box">
		<div class="leftbox">
			<div class="jieshao">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=27905759bd2191051fad1311daef7a6f&action=category&catid=%24catid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'limit'=>'20',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				<a href="<?php echo $v['url'];?>"><div class="ppjs"><?php echo $v['catname'];?></div></a>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
		</div>
		<div class="rightbox">
			<div class="title">
				<a href=""><?php echo $CATEGORYS[$top_parentid]['catname'];?><span><?php echo $CATEGORYS[$top_parentid]['catdir'];?></span></a>
				<a href="<?php echo siteurl($siteid);?>" class="sp">首页<span>></span><?php echo $CATEGORYS[$top_parentid]['catname'];?></a>
			</div>
			<div class="nr">
		     <p style="text-indent:2em;text-align: center;">
		          <span style="line-height:2.5;"><strong><span style="font-size:24px;"><span style="line-height:2;">品牌</span><span style="font-size:32px;color:#E53333;line-height:2;">故事</span></span></strong><br/>
			      </span> 
			  </p>
			  <p>
				<span style="line-height:2.5;font-size:12px">OMAONT0是一个能缔造奇迹的女鞋品牌，由广州市欢腾鞋业有限公司聘请著名设计师设计。OMAONT0崇尚简约而不失简单的设计，以新鲜多变、端庄典雅的格式，紧跟时尚的设计理念，融入当季顶尖的流行元素，辅以潮流、别致的颜色和面料，让您在任何场所，衣着品味的韵味都能于不经意间自然流露!OMAONT0以精选的皮料、时尚的款式、优质的服务、精湛的工艺、合理的售价、自然洒脱的元素、内敛含蓄的设计，不断为中国20—45岁时尚魅力的都市女性推出时尚、舒适、优雅的鞋品。</span> 
			  </p>
			  <p>
	            <span style="line-height:2.5;">OMAONTO愿与您共同见证品牌成长，一同分享财富模式，共创品牌美好未来! <br />
                </span> 
              </p>
              <p>
	            <span style="line-height:2.5;"><span style="font-size:24px;color:#E53333;"><strong>品味另一种高度</strong></span></span> 
              </p>
		</div>
		<div class="ptu">
			<img src="<?php echo IMG_PATH;?>myimg/mn.jpg" alt="">
		</div>
	</div>
</div>
	<?php include template("content","footer"); ?>