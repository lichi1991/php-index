<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/newss.css">
<div class="banner-box">
		<div class="banner">
			<a href=""><img src="<?php echo IMG_PATH;?>myimg/ppbanner.jpg" alt=""></a>
		</div>
	</div>
	<!---->
	<div class="mid-box">
		<div class="leftbox">
			<div class="jieshao">
				<a href="<?php echo $CATEGORYS['2']['url'];?>"><div class="ppjs"><?php echo $CATEGORYS[$top_parentid]['catname'];?></div></a>
			</div>
		</div>
		<div class="rightbox">
			<div class="title">
				<a href=""><?php echo $CATEGORYS[$top_parentid]['catname'];?><span><?php echo $CATEGORYS[$top_parentid]['catdir'];?></span></a>
				<a href="<?php echo siteurl($siteid);?>" class="sp">首页<span>></span><?php echo $CATEGORYS[$top_parentid]['catname'];?></a>
			</div>
		<div class="Newslist">
               	<ul>            	                                
                                 
                <li><span>
                <article>
                	<?php echo $content;?>
                </article>
                </span>
					<em><?php echo $updatetime;?></em>
                </li>                     
            </ul>
            <div class="clear"></div>
            <div class="page"></div>
     </div>
     </div>
     </div>
     <div style="clear:both"></div>
<?php include template("content","footer"); ?>