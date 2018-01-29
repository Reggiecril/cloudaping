//item-image
$(function(){
  var $yin = $(".yin");
  $(".item-image-left-tab-Ul li img").mouseover(function(){
    $(this).parent().addClass("li").siblings().removeClass("li");
    $("#pian").attr("src",$(this).attr("src"));
    $("#zhao").attr("src",$(this).attr("src"));
  }).mouseout(function(){
    $(this).parent().removeClass("li");
  });

  var l = $(".shang").eq(0).offset().left;
  var t = $(".shang").eq(0).offset().top;
  var width1 = $(".yin").outerWidth()/2;
  var height1 = $(".yin").outerHeight()/2;
  var maxL = $(".shang").width() - $yin.outerWidth();
  var maxT = $(".shang").height() - $yin.outerHeight();
  var bili = $("#zhao").width()/$("#pian").width();

  $(".shang").mousemove(function(e){
    var maskL = e.clientX - l - width1,maskT = e.clientY - t - height1;
    if (maskL < 0) { maskL = 0};
    if (maskT < 0) { maskT = 0};
    if (maskL > maxL) {maskL = maxL};
    if (maskT > maxT) {maskT = maxT};

    $yin.css({"left":maskL,"top":maskT});
    $(".item-image-right").show();
    $(".yin").show();
    $("#zhao").css({"margin-left":-maskL*bili,"margin-top":-maskT*bili});

  });
  $(".shang").mouseleave(function(){
    $(".item-image-right").hide();
    $(".yin").hide();
  });

  var marginLeft = 0;
  $(".item-image-left-tab-right").click(function(){
    marginLeft = marginLeft - 64;
    if (marginLeft < -192) {marginLeft = -192};
    $(".item-image-left-tab ul").stop().animate({"margin-left":marginLeft},"fast");
  });

  $(".item-image-left-tab-left").click(function(){
    marginLeft = marginLeft + 64;
    if (marginLeft > 0) {marginLeft = 0};
    $(".item-image-left-tab ul").stop().animate({"margin-left":marginLeft},"fast");
  });

  $(".lie li").click(function(){
    var index=$(this).index();
    $(this).addClass("ll").siblings().removeClass("ll");
     $(".bao1>div").eq(index).show().siblings().hide();
  });
});

//item-tab
$(function(){
  $('.item-down-right-all .item-down-right-content ul').width(970*$('.item-down-right-all .item-down-right-content li').length+'px');
  $(".item-down-right-all .item-down-right-tab a").mouseover(function(){
    $(this).addClass('on').siblings().removeClass('on');
    var index = $(this).index();
    number = index;
    var distance = -970*index;
    $('.item-down-right-all .item-down-right-content ul').stop().animate({
      left:distance
    });
  });
  
  var auto = 1;  //等于1则自动切换，其他任意数字则不自动切换
  if(auto ==1){
    var number = 0;
    var maxNumber = $('.item-down-right-all .item-down-right-tab a').length;
    function autotab(){
      number++;
      number == maxNumber? number = 0 : number;
      $('.item-down-right-all .item-down-right-tab a:eq('+number+')').addClass('on').siblings().removeClass('on');
      var distance = -500*number;
      $('.item-down-right-all .item-down-right-content ul').stop().animate({
        left:distance
      });
    }
    }  
});
//cart
$(function(){  
    $(".add").click(function(){  
    var t=$(this).parent().find('input[name*=item-category-quantity]');  
        t.val(parseInt(t.val())+1)  
        setTotal();  
    })  
    $(".min").click(function(){  
        var t=$(this).parent().find('input[name*=item-category-quantity]');  
        t.val(parseInt(t.val())-1)  
        if(parseInt(t.val())<0){  
        t.val(0);  
        }  
        setTotal();  
    }) 
      
})  