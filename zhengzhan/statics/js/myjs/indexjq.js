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

// 集团要闻
	var hb=$('.hb ul li');
	var bd=$('.bd ul');
	hb.first().addClass('on');
	hb.mouseover(function(){
	 	var index=$(this).index();
		hb.eq(index).addClass('on').siblings().removeClass('on');
		bd.hide().eq(index).fadeIn(300)
	})


	var sideMenu = $(".sideMenu")[0];
		var btnMebu=$('h3',sideMenu);
		var itemMebu=$('ul',$(".sideMenu")[0]);  //注意获取方式
	 	

		for (var i =0;i< btnMebu.length ;i++) {
			itemMebu.first().css({display:"block"})
			// Li[i].index=i;
	     	btnMebu[i].onmouseover=(function(aa){
	     		function bb(){
				for (var i =0;i< btnMebu.length ;i++) {
					btnMebu[i].className="";
					itemMebu[i].style.display="none";
				};
					btnMebu[aa].className="hoot";
					itemMebu[aa].style.display="block";
				}
				return bb;
			})(i)	
		};


	var sfqMenu = $(".sfqMenu")[0];
		var btnMenu=$('h3',sfqMenu);
		var itemMenu=$('div',$(".sfqMenu")[0]);  //注意获取方式
		for (var i =0;i< btnMenu.length ;i++) {
			// Li[i].index=i;
	     	btnMenu[i].onmouseover=(function(aa){
	     		function bb(){
				for (var i =0;i< btnMenu.length ;i++) {
					btnMenu[i].className="";
					itemMenu[i].style.display="none";
				};
					btnMenu[aa].className="on";
					itemMenu[aa].style.display="block";
				}
				return bb;
			})(i)	
		};

		var sfqMenu1 = $(".sfqMenu")[1];
		var btnMenu1=$('h3',sfqMenu1);
		var itemMenu1=$('div',$(".sfqMenu")[1]);  //注意获取方式
		for (var i =0;i< btnMenu1.length ;i++) {
			// Li[i].index=i;
	     	btnMenu1[i].onmouseover=(function(aa){
	     		function bb(){
				for (var i =0;i< btnMenu1.length ;i++) {
					btnMenu1[i].className="";
					itemMenu1[i].style.display="none";
				};
					btnMenu1[aa].className="on";
					itemMenu1[aa].style.display="block";
				}
				return bb;
			})(i)	
		};

		var sfqMenu2 = $(".sfqMenu")[2];
		var btnMenu2=$('h3',sfqMenu2);
		var itemMenu2=$('div',$(".sfqMenu")[2]);  //注意获取方式
		for (var i =0;i< btnMenu2.length ;i++) {
			// Li[i].index=i;
	     	btnMenu2[i].onmouseover=(function(aa){
	     		function bb(){
				for (var i =0;i< btnMenu2.length ;i++) {
					btnMenu2[i].className="";
					itemMenu2[i].style.display="none";
				};
					btnMenu2[aa].className="on";
					itemMenu2[aa].style.display="block";
				}
				return bb;
			})(i)	
		};
		// ******************************************


		var bannerFocus = $(".pic")[0];
		var imgFocus=$('img',bannerFocus);
		var imgWFocus=parseInt(getStyle(imgFocus[0],'width'));
		var btnsFocus=$('li',$(".num")[0]);  //注意获取方式
	 	btnsFocus.first().addClass('current');

		console.log(btnsFocus);

		var boxFocus=$(".mF_YSlider_wrap")[0];

		var timee=2000/60; //定义一个可变的运动时间参数

		 bannerFocus.style.width=imgFocus.length*imgWFocus+'px';  //改变最大承载图片容器的width（一个图片的width乘上图片的长度）
		var indexx=0;   //定义一个下标
		var twen=setInterval(movee,3000)  //保留进程数，也可以说是一个封装函数
		// var t=setInterval(function(move){}) 
		function movee(){
			indexx++;  
			if (indexx==imgFocus.length) {   //判断当下标的大小等于图片的长度时重新从第一个开始
				indexx=0;
			}
			animate( bannerFocus,{left:-indexx*imgWFocus},timee);  
			//给承载很多图片的容器添加animate动画
			for (var i = 0; i < btnsFocus.length; i++) {
				btnsFocus[i].className="";  //利用className来改变样式
			};
				btnsFocus[indexx].className="current"
		}

		for (var i = btnsFocus.length - 1; i >= 0; i--) {
			btnsFocus[i].indexx=i;
			btnsFocus[i].onmouseover=function(){
				animate(bannerFocus,{left:-indexx*imgWFocus},timee)
				for (var i = 0; i < btnsFocus.length; i++) {
					btnsFocus[i].className="";
				};
				this.className="current";
				// indexx=this.index;
			}
		};

		boxFocus.onmouseover=function(){
			clearInterval(twen)
		}
		boxFocus.onmouseout=function(){
			twen=setInterval(movee,3000)
		}







})

