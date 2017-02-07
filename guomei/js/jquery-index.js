$(document).ready(function(){
//懒加载
// $("img").lazyload({ 
// effect : "fadeIn"
// }); 
//头部下拉框
$(".ywm-nav-user").hover(function(){
		$(".ywm-nav-username").attr("class","ywm-nav-username-hover");
		$(this).children(".ywm-user-dropdown").eq(0).css("display","block");
	},function(){
		$(".ywm-nav-username-hover").attr("class","ywm-nav-username");
		$(this).children(".ywm-user-dropdown").eq(0).css("display","none");
})

// 购物车
$(".ywm-shopcartbox").hover(function(){
	    $(".ywm-menulink").addClass("ywm-hover");
		$(".ywm-overflow").eq(0).css("display","block");
	},function(){
		$(".ywm-overflow").eq(0).css("display","none");
		$(".ywm-menulink").removeClass("ywm-hover");
})
//侧边栏的标签页效果
        var topnav=$(".ywm-navbox");
		var toptabnav=$(".ywm-navbox-ul li");
		var toptabcontent=$(".ywm-fullcategory");
		topnav.hover(toptabnav.hover(function(){
		$(".ywm-subnav").show();
		var topidx=toptabnav.index(this);
		toptabcontent.eq(topidx).show().siblings('.ywm-fullcategory').hide();
		}),function(){$(".ywm-subnav").hide()})

//楼层的标签页效果
        var floor=$(".ywm-floor")
		var tabnav=$(".ywm-tab li");
		var tabcontent=$(".ywm-main");
		var tabhover=$(".ywm-tab a");
		tabnav.hover(function() {
			$(this).addClass('ywm-cur').siblings().removeClass('ywm-cur');
			var idx=tabnav.index(this);
			tabcontent.eq(idx).show().siblings('.ywm-main').hide();
		});
//楼层跳转
	$(".ywm-fl-nav li a").click(function(event) { 
      var index=this.title
      var id='#'+'index_'+index
     $("html,body").animate({scrollTop: $(id).offset().top}, 1000);
   });
   $(".taoba").click(function(event) { 
      var index=this.title
      var id='#'+'index_'+index
     $("html,body").animate({scrollTop: $(id).offset().top}, 1000);
   });
   function a(x,y){
    l = $('#main').offset().left;
    w = $('#main').width();
    $('#tbox').css('left',(l + w + x) + 'px');
    $('#tbox').css('bottom',y + 'px');
}//获取#tbox的div距浏览器底部和页面内容区域右侧的距离函数#main为页面的可视宽度
$(function() {  
    $(window).scroll(function(){
    t = $(document).scrollTop();
    if(t>500){
      $('#tbox').show();
    }else{
      $('#tbox').hide();
    }
    if(t > 50){
        $('#gotop').fadeIn('slow');
    }else{
        $('#gotop').fadeOut('slow');
    }       
})   
    a(10,100);//#tbox的div距浏览器底部和页面内容区域右侧的距离
    $('#gotop').click(function(){ 
        $('body,html').animate({
            scrollTop: 0
        },
        800);//点击回到顶部按钮，缓懂回到顶部,数字越小越快
        return false;  
    })
});

})