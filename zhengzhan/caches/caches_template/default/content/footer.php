<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/index.css">
<div class="footer">
		<div class="footer_top">
			<div class="footer_topInfo">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=e250b594f6f6cd6b3cb5fc2d35b94933&action=type_list&typeid=0&siteid=0&linktype=0&order=listorder+DESC&num=8&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('typeid'=>'0','siteid'=>'0','linktype'=>'0','order'=>'listorder DESC','limit'=>'8',));}?>
				<ul class="foot_sel">
					<li class="foot_selLi">
						<div class="selCont">
							<select id="my-dropdown3" name="my-dropdown" onchange="">
							<?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $c) { ?>
			             		<a href="<?php echo $c['url'];?>">
			             		<option >
			             		<?php echo $c['name'];?></option>
			             		</a>
			             		<?php $n++;}unset($n); ?>
			             		<option value=""></option>
							</select>
						</div>
					</li>
					

					<li class="foot_selLi">
			          <div class="selCont">
			            <select id="my-dropdown3" name="my-dropdown" onchange="">
			              <option value="" selected="selected">集团下属企业</option>
			             <option value="http://www.gzsz.com.cn"><a href="http://www.gzsz.com.cn"></a>市政集团</option>
			             <option value="http://www.gecg.com.cn/">总承包集团</option>
			             <option value="http://www.gzietcot.com/">中广国际</option>
			             <option value="http://www.gzyj.com">一建公司</option>
			             <option value="http://www.gej.cc/gb/index.html">二建公司</option>
			             <option value="http://www.gz3ce.com">三建公司</option>
			             <option value="http://www.gzsj.com.cn">四建公司</option>
			             <option value="http://www.gzsjjs.com">机施集团</option>
			             <option value="http://www.gzja.com.cn/">机安公司</option>
			             <option value="http://www.gzbm123.com">建材公司</option>
			             <option value="http://www.gibs.com.cn">建科院</option>
			             <option value="http://www.gzalu.com/">铝质公司</option>
			             <option value="http://www.gzhsc.com.cn">恒盛公司</option>
			             <option value="http://dunjian.com">盾建公司</option>
			             <option value="http://www.gzjgy.com/">建工设计院</option>
			            </select>
			          </div>
			        </li>
			        <li class="foot_selLi">
				         <div class="selCont">
				            <select id="my-dropdown4" name="my-dropdown" onchange="">
				              <option value="" selected="selected">行业网站</option>
				              <option value="http://www.zhulong.com/index.asp">筑龙网</option>
				              <option value="http://www.gcia.org.cn">广州建筑业联合会</option>
				              option value="http://www.cacem.com.cn">中国施工企业管理协会网</option>
				              <option value="http://www.zgjzy.org">中国建筑业协会</option>
				            </select>
				          </div>
				     </li>
				     <li>






					<div class="bdsharebuttonbox" style="float:right">
							
							<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
							<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
							<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
							<a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
							<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
							<a href="#" class="bds_more" data-cmd="more"></a>
							<a title="累计分享91次" href="" class="shareCount">91</a>
					</div>
					<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

				</ul>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
		</div>
		<div class="footer_bom">
			<div class="footer_bomInfo">
				<p>Copyright(c)2013 广州市建筑集团有限公司  | <a href="<?php echo $CATEGORYS['20']['url'];?>">联系我们</a> </p>
				<p>
					<img src="<?php echo IMG_PATH;?>myimg/qrcode.png" alt="" class="footerimg">
					<a href="javascript:void(0)">
						<img src="<?php echo IMG_PATH;?>myimg/qrcode.png" height="20" width="20" class="toer">
					</a>
					<span id="cnzz">
						<a href="" title="站长统计">
							<img src="<?php echo IMG_PATH;?>myimg/pic1.gif" alt="">
						</a>
					</span>
					&nbsp;
					<a href="">粤ICP备13083209号</a>
					&nbsp;&nbsp;
					<a title="专业广州网站建设|专业深圳网站建设|优网科技" class="cgray" target="_blank" href="http://www.uweb.net.cn/">Design by uweb</a>
				</p>
			</div>
		</div>
</div>
	<!-- 上 -->
	<a href="##" class="TOP"  ></a>
</div>
</body>
</html>