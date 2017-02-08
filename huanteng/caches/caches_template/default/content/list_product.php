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
				<a href=""><div class="ppjs"><?php echo $CATEGORYS[$top_parentid]['catname'];?></div></a>
			</div>
		</div>
		<div class="rightbox">
			<div class="title">
				<a href=""><?php echo $CATEGORYS[$top_parentid]['catname'];?><span><?php echo $CATEGORYS[$top_parentid]['catdir'];?></span></a>
				<a href="<?php echo siteurl($siteid);?>" class="sp">首页<span>></span><?php echo $CATEGORYS[$top_parentid]['catname'];?></a>
			</div>
        <div class="Products_list">
        	<ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=40741d73488ec5f02b44d18644fbb991&action=lists&catid=%24catid&num=9&page=%24page&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <li>
                    <a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>" alt="" style="width: 205px;height: 145px;"></a>
                    <p><a href=""><?php echo $v['title'];?></a></p>
                </li>
                <?php $n++;}unset($n); ?>

            </ul>
            <div class="clear"></div>

                <div class="page">
                    <?php echo $pages;?>
                    <!--<div class="clear"></div>-->
			    </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
		</div>
</div>
	<?php include template("content","footer"); ?>