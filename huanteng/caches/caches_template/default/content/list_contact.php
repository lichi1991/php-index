<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--引用百度地图API-->
<style type="text/css">
    html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=dXL9P8m9j4dszlkxzSwFn1HBqa0EXOGU"></script>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/contacts.css">
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
			  
			  	<p>
	             <span style="font-size:16px;line-height:2;">广州欢腾鞋业有限公司</span> 
                </p>
                 <p>
	             <span style="line-height:2;">地址：广州市白云区德康路10-12号B座801房</span> 
                 </p>
                 <p>
	              <span style="line-height:2;">联系人：马总</span> 
                 </p>
                 <p>
	              <span style="line-height:2;">联系电话：18734563166&nbsp; 400-6505-778</span> 
                 </p>
                 <div style="width:697px;height:550px;border:#ccc solid 1px;" id="dituContent"></div>  
             </div>

	</div>
</div>
<div style="clear:both;"></div>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(113.234354,23.193764);//定义一个中心点坐标
        map.centerAndZoom(point,14);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
    var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
    map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
    var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
    map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
    var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
    map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"广州欢腾鞋业有限公司",content:"地址：广州市白云区德康路10-12号B座801房<br/>联系人：马总<br/>联系电话：18734563166&nbsp;&nbsp;400-6505-778",point:"113.245825|23.18384",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
         ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
            var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
            var iw = createInfoWindow(i);
            var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
            marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
            
            (function(){
                var index = i;
                var _iw = createInfoWindow(i);
                var _marker = marker;
                _marker.addEventListener("click",function(){
                    this.openInfoWindow(_iw);
                });
                _iw.addEventListener("open",function(){
                    _marker.getLabel().hide();
                })
                _iw.addEventListener("close",function(){
                    _marker.getLabel().show();
                })
                label.addEventListener("click",function(){
                    _marker.openInfoWindow(_iw);
                })
                if(!!json.isOpen){
                    label.hide();
                    _marker.openInfoWindow(_iw);
                }
            })()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://localhost/huanteng/statics/images/myimg/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>
	<?php include template("content","footer"); ?>