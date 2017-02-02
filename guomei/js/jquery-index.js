$(document).ready(function(){


//头部下拉框
$(".ywm-nav-user").hover(function(){
		$(".ywm-nav-username").attr("class","ywm-nav-username-hover");
		$(this).children(".ywm-user-dropdown").eq(0).css("display","block");
	},function(){
		$(".ywm-nav-username-hover").attr("class","ywm-nav-username");
		$(this).children(".ywm-user-dropdown").eq(0).css("display","none");
})
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


	
})