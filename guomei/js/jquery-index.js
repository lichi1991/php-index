$(document).ready(function() {
  //懒加载
  // $("img").lazyload({ 
  // effect : "fadeIn"
  // }); 
  //头部下拉框
  $(".ywm-nav-user").hover(function() {
    $(".ywm-nav-username").attr("class", "ywm-nav-username-hover");
    $(this).children(".ywm-user-dropdown").eq(0).css("display", "block");
  }, function() {
    $(".ywm-nav-username-hover").attr("class", "ywm-nav-username");
    $(this).children(".ywm-user-dropdown").eq(0).css("display", "none");
  })

  // 购物车
  $(".ywm-shopcartbox").hover(function() {
    $(".ywm-menulink").addClass("ywm-hover");
    $(".ywm-overflow").eq(0).css("display", "block");
  }, function() {
    $(".ywm-overflow").eq(0).css("display", "none");
    $(".ywm-menulink").removeClass("ywm-hover");
  })
  //侧边栏的标签页效果
  var topnav = $(".ywm-navbox");
  var toptabnav = $(".ywm-navbox-ul li");
  var toptabcontent = $(".ywm-fullcategory");
  topnav.hover(toptabnav.hover(function() {
    $(".ywm-subnav").show();
    var topidx = toptabnav.index(this);
    toptabcontent.eq(topidx).show().siblings('.ywm-fullcategory').hide();
  }), function() {
    $(".ywm-subnav").hide()
  })
  // banner轮播------
  $(".ywm-banner-box>li").hide().eq(0).show();
  $(".ywm-editbtn>li").mouseover(function() {
    var index = $(this).index();
    $(".ywm-editbtn>li").removeClass().eq($(this).index()).addClass("active");
    $(".ywm-banner-box>li").fadeOut().eq($(this).index()).fadeIn();
  })
  //楼层banner轮播

  function bannerLoop() {
    var bigbox = $(".ywm-mc-c");
    for (var i = 1; i < bigbox.length; i++) {
      console.log( $(".ywm-nav>li", bigbox[i]));
      $(".ywm-slider>li", bigbox[i]).hide().eq(0).show();
      $(".ywm-nav>li", bigbox[i]).mouseover(function() {
        var index = $(this).index();
        $(".ywm-nav>li", bigbox[i]).removeClass().eq($(this).index()).addClass("ywm-cur");
        $(".ywm-slider>li", bigbox[i]).fadeOut().eq($(this).index()).fadeIn();
      })
    }
  }
  bannerLoop();
  //楼层的标签页效果
  var floor = $(".ywm-floor")
  var tabnav = $(".ywm-tab li");
  var tabcontent = $(".ywm-main");
  var tabhover = $(".ywm-tab a");
  tabnav.hover(function() {
    $(this).addClass('ywm-cur').siblings().removeClass('ywm-cur');
    var idx = tabnav.index(this);
    tabcontent.eq(idx).show().siblings('.ywm-main').hide();
  });
  //楼层跳转




})