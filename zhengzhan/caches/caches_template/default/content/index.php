<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

	<!-- banner -->
	<div class="banner_box">
		<div class="bannerbox">
    <div class="banner">
        <img src="http://localhost/zhengzhan/statics/images/myimg/banner01.jpg" class="banner01" style="opacity: 0;">
        <img src="http://localhost/zhengzhan/statics/images/myimg/banner02.jpg" class="banner02" style="opacity: 1;">
        <img src="http://localhost/zhengzhan/statics/images/myimg/banner03.jpg" class="banner03" style="opacity: 0;">
    </div>
    <ul class="btnbox">
        <li class="btns" style="background: rgb(170, 170, 170);"></li>
        <li class="btns" style="background: rgb(240, 111, 49);"></li>
        <li class="btns" style="background: rgb(170, 170, 170);"></li>
    </ul>
</div>
	</div>
	<!-- 要闻 动态 -->
	<div class="content">
		<div class="con_top">
			<div class="slideTxtBox">
				<div class="hb">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b9400220e23b392f2d3a20584aa36b59&action=category&catid=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'4','limit'=>'20',));}?>
					
					<ul>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

						<li class="">
							<a href="<?php echo $r['url'];?>"></a>
							<?php echo $r['catname'];?>
						</li>
						<?php $n++;}unset($n); ?>
					</ul>
					
						<a href="<?php echo $r['url'];?>">MORE+</a>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
				<div class="bd">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4b19ef3a54a8910272e193fe665440e6&action=lists&catid=24&order=id+ASC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'24','order'=>'id ASC','limit'=>'6',));}?> 
					<ul style="display:block;">
					<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
						<li>
							<a href="<?php echo $v['url'];?>">
								<span class="date"><?php echo date("Y-m-d",$v[inputtime]);?></span>
								·<?php echo str_cut($v[title],50,'...');?>
							</a>
						</li>
						<?php $n++;}unset($n); ?>
					</ul>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
				<div class="bd">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=55b14e4499771d1ec9d8dd0137620270&action=lists&catid=25&order=id+ASC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'25','order'=>'id ASC','limit'=>'6',));}?> 
					<ul style="display:none;">
					<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
						<li>
							<a href="<?php echo $v['url'];?>">
								<span class="date"><?php echo date("Y-m-d",$v[inputtime]);?></span>
								·<?php echo str_cut($v[title],50,'...');?>
							</a>
						</li>
						<?php $n++;}unset($n); ?>
					</ul>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
				<div class="bd">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=af9ef7e72f28afc04e38be5ec238cd5e&action=lists&catid=26&order=id+ASC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'26','order'=>'id ASC','limit'=>'6',));}?> 
					<ul style="display:none;">
					<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
						<li>
							<a href="<?php echo $v['url'];?>">
								<span class="date"><?php echo date("Y-m-d",$v[inputtime]);?></span>
								·<?php echo str_cut($v[title],50,'...');?>
							</a>
						</li>
						<?php $n++;}unset($n); ?>
					</ul>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
			</div>
			<!-- /*右边新闻*/ -->
			<div class="newsBanner">
				<div class="newsBannerTit">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9fe094e369ca6c5cd361cb72516296a1&action=category&catid=24\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'24','limit'=>'20',));}?>
					<p class="tit1"></p>
					
					<a href="<?php echo $r['url'];?>" class="newslist aspx">MORE+</a>
					
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
				<div class="mF_YSlider_wrap">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2e74a57a19e753b674f897047827fdfd&action=position&posid=18&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder DESC','limit'=>'5',));}?>
					<div id="myFocus" class="mF_YSlider mF_YSlider_myFocus">
						<div class="pic">
							<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
							 <img src='<?php echo $v['thumb'];?>' alt='<?php echo $v['title'];?>' text='' />
                       		 <a href='<?php echo $v['url'];?>'></a>
                       		<?php $n++;}unset($n); ?>
							<p><?php echo $v['title'];?></p>
                    	</div>
					</div>
                    	<div class="num">
                    		<ul>
                    		<?php $i=1?>
                    		<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    			<li>
                    				<a><?php echo $i;?></a>
                    				<b></b>
                    			</li>
                    			<?php $i++; ?>
                    		<?php $n++;}unset($n); ?>
                    		</ul>
                    	</div>
                    </div>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
			</div>
		</div>
		<!-- 理念 -->
		<div class="con_con fixed">
			<ul>
				<li>
					<a href="<?php echo $CATEGORYS['34']['url'];?>" class="con_conPic1" title="企业理念"></a>
				</li>
				<li>
					<a href="<?php echo $CATEGORYS['34']['url'];?>" class="con_conPic2" title="文化活动" href=" ">
            </a>
				</li>
				<li>
					<a href="<?php echo $CATEGORYS['19']['url'];?>" class="con_conPic3" title="社会责任报告" href="">
            </a>
				</li>
			</ul>
		</div>
		<!-- 重点发展方向 -->
		<div class="con_bom">
			<div class="con_bomleft">
				<div class="con_bomTit">
					<p class="tit2">
						<a href="<?php echo $CATEGORYS['30']['url'];?>">MORE+</a>
					</p>
				</div>
				<div class="sideMenu">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c88b28aea583f2771df50c07e52b3c8b&action=category&catid=17&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'17','limit'=>'3',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
					<h3 class="hoot">
						<p>
							<a href="<?php echo $CATEGORYS['15']['url'];?>"><?php echo $v['catname'];?></a>
						</p>
					</h3>
					
					<ul >
						<li>
							<div>
                            <?php echo $v['description'];?>
							</div>
						</li>
					</ul>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					
				</div>
				

			</div>

			<div class="con_bomright">
				<ul id="indexPicOn" style="width: 627px; margin: 0px auto;">
					<li>
						<a href="<?php echo $CATEGORYS['15']['url'];?>">
							<p class="ttit1"></p>
						</a>
						<div class="sfqMenu">
							<div class="sfqMenuImg" style="display:block">
								<a href="" title="第四资源热力电厂项目">
									<img src="<?php echo IMG_PATH;?>myimg/93fce32a-7da6-4015-a628-a49def67fa23.jpg" alt="">
								</a>
							</div>
							<h3 class="on">第四资源热力电厂项目</h3>

							<div class="sfqMenuImg" >
								<a href="" title="广州南沙区芦湾项目">
									<img src="<?php echo IMG_PATH;?>myimg/eb5b695f-cf28-45da-90e6-84b1ecde3cae.jpg" alt="">
								</a>
							</div>
							<h3 class="">广州南沙区芦湾项目</h3>
							<div class="sfqMenuImg" >
								<a href="" title="噪音区保良北地块项目">
									<img src="<?php echo IMG_PATH;?>myimg/0784cb0d-24ce-4d44-998e-92aef7571746.jpg" alt="">
								</a>
							</div>
							<h3 class="">噪音区保良北地块项目</h3>

						</div>
					</li>

					<li>
						<a href="">
							<p class="ttit2"></p>
						</a>
						<div class="sfqMenu">
							<div class="sfqMenuImg" style="display:block">
								<a href="" title="广州新城">
									<img src="<?php echo IMG_PATH;?>myimg/57b37cfd-113a-4367-8863-81e8c6524d5a.jpg" alt="">
								</a>
							</div>
							<h3 class="on">广州新城</h3>
							
							<div class="sfqMenuImg" style="display: none;">
								<a href="" title="南湖一品湖山">
									<img src="<?php echo IMG_PATH;?>myimg/99e66099-2797-42b6-81e3-42336e3cdbc0.bmp" alt="">
								</a>
							</div>
							<h3 class="">南湖一品湖山</h3>
							<div class="sfqMenuImg" style="display: none;">
								<a href="" title="福基苑">
									<img src="<?php echo IMG_PATH;?>myimg/3c58489b-3e43-41d1-8fb7-e891cdff038b.jpg" alt="">
								</a>
							</div>
							<h3 class="">福基苑</h3>

						</div>
					</li>

					<li>
						<a href="">
							<p class="ttit3"></p>
						</a>
						<div class="sfqMenu">
							<div class="sfqMenuImg" style="display:block">
								<a href="" title="环保型多功能建筑材料-无...">
									<img src="<?php echo IMG_PATH;?>myimg/3c3d28a8-6032-43b0-a653-e4f49a7295e0.jpg" alt="">
								</a>
							</div>
							<h3 class="on">环保型多功能建筑材料-无...</h3>
							
							<div class="sfqMenuImg" style="display: none;">
								<a href="" title="环保型多功能建筑材料-混...">
									<img src="<?php echo IMG_PATH;?>myimg/b05b2ab2-ab2b-44c2-902b-0b3132c4a6e0.jpg" alt="">
								</a>
							</div>
							<h3 class="">环保型多功能建筑材料-混...</h3>
							<div class="sfqMenuImg" style="display: none;">
								<a href="" title="环保型多功能建筑材料-多...">
									<img src="<?php echo IMG_PATH;?>myimg/3be86194-9003-43bc-89cd-a73f633f7029.jpg" alt="">
								</a>
							</div>
							<h3 class="">环保型多功能建筑材料-多...</h3>

						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>


	<!-- <hr>
	<hr>
	<div style="border:1px solid red;width:1000px;height:300px">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=5b58b407520f2a28d0e2a158c6a2c983&action=type_list&typeid=0&linktype=0&order=listorder+ASC&num=8&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('typeid'=>'0','linktype'=>'0','order'=>'listorder ASC','limit'=>'8',));}?>
				<ul >
					<?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $c) { ?>
					<?php var_dump($c)?>
					<li><a href="<?php echo $c['url'];?>"><?php echo $c['name'];?></a></li>
					<?php $n++;}unset($n); ?>
					</ul>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</div> -->
	



<?php include template("content","footer"); ?>
