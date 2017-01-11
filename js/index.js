//banner

$(".btn").eq(0).css({"background":"#fff"}).css({"width":"8px","height":"8px"})
$(".btn").mouseover(function(){
	var index=$(this).index();
	$(".banner>a").css("opacity","0").eq(index).css("opacity","1");
	$(".btn").css({"background":"#ffb267"}).css({"width":"6px"}).css({"height":"6px"}).eq(index).css({"background":"#ffffff"}).css({"width":"8px"}).css({"height":"8px"});
	});