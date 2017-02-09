$(function () {
	//下拉菜单

	$(".lis").hover(function(){
		var index=$(this).index();
		var twolis=$("dd",$(".twonav")[index])
		$(".twonav").eq(index).css("paddingTop",5)
		$(".twonav").eq(index).animate({height:twolis[0].offsetHeight*twolis.length},300)
	},function(){
		var index=$(this).index();
		$(".twonav").eq(index).animate({height:0,padding:0},300)
	});


//固定定位事件
	var fixed=$(".fixed")[0]
	window.onscroll=function(){
		var obj=document.documentElement.scrollTop?document.documentElement:document.body;
		var tops=document.documentElement.scrollTop||document.body.scrollTop;
		if (tops>3) {
			fixed.style.display="block"
		}else{
			fixed.style.display="none"
		}

		fixed.onclick=function(){
			animate(obj,{scrollTop:0})
		}
	}


//获取焦点与失去焦点
	var search=$("#search")
	search.onfocus=function(){
		if (search.value=="请输入关键字") {
			search.value=""
			search.style.color="#333"
		}
		search.style.width="250px"
	}
	search.onblur=function(){
		if (search.value=="") {
			search.value="请输入关键字"
			search.style.width="177px"
			search.style.color=" #CCCCD3"
		}
	}
	// banner
		setInterval(moves,3000)
	var nums=0;
	function moves() {
		nums++;
		if(nums>=$(".banner img").length){
			nums=0
		}
		$(".banner img").css({opacity:0}).eq(nums).animate({opacity:1})
		$(".btnbox .btns").css("background","#aaa").eq(nums).css("background","#F06F31")
	}


})

