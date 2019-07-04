(function($){
  $.fn.Carousel = function(option){
    var option = $.extend({
      id:window.location.hash||"#page1",
      width:950,
      height:600,
      hasIndicator:false,
      hasToolbar:false,
      hasNavPanel:false,
      hasPagination:false
    },option||{});

    // base
    var that = this.css({
      width:option.width
    }).children(".container").css({
      height:option.height
    }).end();
  
    var pages = $("section",that).css({
      height:option.height
    }).hide().each(function(i){
      $(this).attr("rel","#page"+(i+1));
    });
  
    var index = $("section[rel="+option.id+"]",that).index()+1;
    var total = pages.size();

    // goto 
    $(".goto",that).click(function(){
      var id = $(this).attr("href");
      var index = $(pages+"[rel="+id+"]").index()+1;
      scrollPage(index);
    });

    // cover 
    $(".cover",that).click(function(){
      scrollPage(2);
      return false;
    });

    // catalog
    $(".catalog a",that).each(function(i){
      $(this).click(function(){
        var index = pages.index(pages.find("h2,h3").eq(i).parents("section"))+1;
        scrollPage(index);
        return false;
      });
    });

    // indicator
    if(option.hasIndicator){
      that.append("<div class='indicator'></div>");
      
      pages.each(function(i){
        $(".indicator",that).append("<a href='#'><span></span></a>");
      });

      $(".indicator a",that).each(function(i){
        $(this).click(function(){
          scrollPage(i+1);
          return false;
        });
      });
    }

    // toolbar
    if(option.hasToolbar){
      var toolbar = "<div class='toolbar'>"+
                      "<div class='pagenav'><a href='#' class='prev'>上一页</a><a href='#' class='next'>下一页</a></div>"+
                      "<a class='catalog-button' title='目录' href='#'></a>"+
                      "<span class='pagination'></span>"+
                    "</div>"
      that.append(toolbar);
    }

    // pagination
    if(option.hasPagination){
      $(".pagination",that).show();
    }

    // initNavPanel
    if(option.hasNavPanel){
      $(".navpanel",that).css({
        height:option.height
      }).find("a").each(function(i){
        $(this).click(function(){
          var index = pages.index(pages.find("h2,h3").eq(i).parents("section"))+1;
          scrollPage(index);
          $(".navpanel",that).animate({
              top:40,
              opacity:0
            },
            500,
            function(){
              $(this).hide();
            }
          )
          return false;
        });
      });

      $(".catalog-button",that).show().click(function(){
        if(!$(".navpanel",that).is(":visible")){
          $(".navpanel",that).css({
            display:"block",
            top:40,
            opacity:0
          }).animate({
            top:0,
            opacity:0.9
            },
            500
          );
        }else{
          $(".navpanel",that).animate({
            top:0,
            opacity:0
            },
            500,
            function(){
              $(this).hide();
            }
          );
        }
        return false;
      });
    }
      
    // scrollPage
    function scrollPage(n){
      //n:your target page
      if(n>=1&&n<=total){
        window.location.hash = pages.eq(n-1).attr("rel");
        $(".pagination",that).text(n+"/"+total);
        $(".indicator a",that).removeClass("current").eq(n-1).addClass("current");
        $(".pagenav .prev",that).removeClass("disable").addClass(n==1?"disable":"");
        $(".pagenav .next",that).removeClass("disable").addClass(n==total?"disable":"");

        if(n<index){
          //prev
          //current page 
          pages.eq(index-1).css({left:0,opacity:1,display:"block"}).animate({
              left:30,
              opacity:0
            },
            500,
            function(){
              $(this).hide();
            }
          );
          //target page 
          pages.eq(n-1).css({left:-100,opacity:0,display:"block"}).animate({
              left:0,
              opacity:1 
            },
            700
          );
        }else if(n>index){
          //next
          //current page 
          pages.eq(index-1).css({left:0,opacity:1,display:"block"}).animate({
              left:-30,
              opacity:0
            },
            500,
            function(){
              $(this).hide();
            }
          );
          //target page
          pages.eq(n-1).css({left:100,opacity:0,display:"block"}).animate({
              left:0,
              opacity:1
            },
            700
          );
        }else{
          if(!pages.eq(n-1).is(":visible")){
            pages.eq(n-1).css({opacity:0,display:"block"}).animate({
                opacity:1
              },
              700
            );
          }
        }
        index = n;
      }
    }

    that.swipe( {
      swipeLeft:function() {
        scrollPage(index+1);
      },
      swipeRight:function() {
        scrollPage(index-1);
      }
    });

    scrollPage(index);

    $(".next",that).click(function(){
      scrollPage(index+1);
      return false;
    });

    $(".prev",that).click(function(){
      scrollPage(index-1);
      return false;
    });

    return this;
  }
})(jQuery);