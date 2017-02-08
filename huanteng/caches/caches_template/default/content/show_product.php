<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?> <?php include template("content","header"); ?>
     <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/product.css">
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
				<a href="<?php echo $CATEGORYS['3']['url'];?>"><div class="ppjs"><?php echo $CATEGORYS[$top_parentid]['catname'];?></div></a>
			</div>
		</div>
		<div class="rightbox">
			<div class="title">
				<a href=""><?php echo $CATEGORYS[$top_parentid]['catname'];?><span><?php echo $CATEGORYS[$top_parentid]['catdir'];?></span></a>
				<a href="<?php echo siteurl($siteid);?>" class="sp">首页<span>></span><?php echo $CATEGORYS[$top_parentid]['catname'];?></a>
			</div>
        <div class="Products_list">
                 <article style="text-align:center;">
                	<?php echo $content;?>
                </article>
        </div>
        		                <div style="margin-bottom: 0px;">
    <span style="float:left; margin-left:20px;">上一篇：<a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a></span>
    <span style="float:right; margin-right:20px;">下一篇：<a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a></span>
</div>
		</div>
</div>
	<?php include template("content","footer"); ?>