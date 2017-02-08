<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?> <?php include template("content","header"); ?>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/news.css">
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
			 <div class="News_list">
        	<ul>               	
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=11e982198282a77f17ebf8d7a1dede5e&action=lists&catid=%24catid&num=10&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>    
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>                                 
                <li><span>
                <a href="<?php echo $v['url'];?>">
                <?php echo $v['title'];?>
                </a>
                </span>
                    <em><?php echo date('Y-m-d H:i:s',$v[inputtime]);?></em>
                </li>       
             <?php $n++;}unset($n); ?>

             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>       		 
            </ul>
        </div>

	</div>
</div>
	<?php include template("content","footer"); ?>