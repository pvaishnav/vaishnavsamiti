  jQuery(document).ready(function($) {
  
  
   var color = $.cookie("corbiz_cookie_color");
   var defaultPattern = $.cookie("corbiz_cookie_defaultBg");
   var pattern = $.cookie("corbiz_cookie_pattern");
   var skins = $.cookie("corbiz_cookie_skin");
     
  /* Color Picker */

    $('#colorpicker').ColorPicker({
			onShow: function (colpkr) {
				$(colpkr).fadeIn("fast");
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut("fast");
				return false;
			},
			onChange: function (hsb, hex, rgb) {
        var colorpk = hex;
        var cookiepattern = $.cookie("corbiz_cookie_pattern");
        
        $('.header-wrapper, .header-wrapper-inner').css({
            backgroundColor: '#' + colorpk,
            backgroundImage : cookiepattern,
            backgroundRepeat: "repeat"
        });     
        
        $.cookie("corbiz_cookie_color", colorpk);     
        $.cookie("corbiz_cookie_bgImageUrl", null); 
			},
      color: '#6da000'
    });    
      
  /* skins */
  
  $('#style-switcher a.color-box').each(function (i) {
      var a = $(this);
      a.css({
          backgroundColor: '#' + a.attr('rel')
      })
  })  
  
  var switcher_skins = $('#style-switcher a.color-box');
  
  switcher_skins.each(function(i) {
   var skins = $(this).attr('rel');
   
   $('.header-wrapper, .header-wrapper-inner').css({
     backgroundColor : '#'+skins,
     backgroundImage : pattern,
     backgroundRepeat: "repeat"
   }); 
   
   $('a,a:link,a:visited,ul.tabs li a:hover,.toggle_title h5,.testiname,#profiles h4').css({'color' :'#' +skins });
   
   $('.jqueryslidemenu ul li a:link, .jqueryslidemenu ul li a:visited').css({'color':'#777777'});
   
   $('.jqueryslidemenu ul li a.selected').css({backgroundColor :'#' +skins,'color':'#ffffff'});
   
   $('.jqueryslidemenu ul li a').not(".selected").hover(function(){
     $(this).css({backgroundColor :'#' +skins,'color':'#ffffff'});
   },function(){
       $(this).css({backgroundColor :'','color':''});
   });
   
   
   $('.jqueryslidemenu ul li a.selected ul li a,.jqueryslidemenu ul li ul li a').hover(function(){
     $(this).css({backgroundColor :'#ffffff','color':'#'+skins});
   },function() {
     $(this).css({backgroundColor :'','color':''});
   });
   
   $('h3 a,h4 a, h5 a').hover(function(){
     $(this).css({'color':'#555555'}); 
   },function() {
     $(this).css({'color':'#'+skins}); 
   });
   
   $('#featureslist li h4 a').css({'color':'#666666'});
   $('#featureslist li h4 a').hover(function(){
      $(this).css({'color':'#555555'});
   })
   $('a.button').css({'color':'#858585'});     
   $('a.buttongreen').css({'color':'#6d9900'}); 
   $('a.buttonblue').css({'color':'#1b9ac6'}); 
   $('a.buttonred').css({'color':'#a53426'}); 
   $('a.buttongdark').css({'color':'#222222'}); 
   $('a.buttonbrown').css({'color':'#943b00'}); 
   $('a.buttonorange').css({'color':'#b87421'}); 
   $('a.buttonpurple').css({'color':'#a33daa'}); 
   $('a.buttonpink').css({'color':'#752b4e'}); 
   $('a.button').hover(function(){
     $(this).css({'color':'#555555'}); 
   },function() {
     $(this).css({'color':''}); 
   });
  });  
  
  switcher_skins.click(function(e) {
    e.preventDefault();
    var skins = $(this).attr('rel');
    
    $('.header-wrapper, .header-wrapper-inner').css({
      backgroundColor :'#'+ skins,
      backgroundImage: pattern,
      backgroundRepeat: "repeat"
    });
     
    $('a,a:link,a:visited,ul.tabs li a:hover,.toggle_title h5,.testiname,#profiles h4').css({'color' :'#' +skins });
    
    $('.jqueryslidemenu ul li a:link, .jqueryslidemenu ul li a:visited').css({'color':'#777777'});
    
    $('.jqueryslidemenu ul li a.selected').css({backgroundColor :'#' +skins,'color':'#ffffff'});
    
    $('.jqueryslidemenu ul li a').not(".selected").hover(function(){
      $(this).css({backgroundColor :'#' +skins,'color':'#ffffff'});
    },function(){
        $(this).css({backgroundColor :'','color':''});
    });
    
    
    $('.jqueryslidemenu ul li a.selected ul li a,.jqueryslidemenu ul li ul li a').hover(function(){
      $(this).css({backgroundColor :'#ffffff','color':'#'+skins});
    },function() {
      $(this).css({backgroundColor :'','color':''});
    });
    
    $('h3 a,h4 a, h5 a').hover(function(){
      $(this).css({'color':'#555555'}); 
    },function() {
      $(this).css({'color':'#'+skins}); 
    });
    
    $('#featureslist li h4 a').css({'color':'#666666'});
    $('#featureslist li h4 a').hover(function(){
      $(this).css({'color':'#555555'});
   })
    $('a.button').css({'color':'#858585'});     
    $('a.buttongreen').css({'color':'#6d9900'}); 
    $('a.buttonblue').css({'color':'#1b9ac6'}); 
    $('a.buttonred').css({'color':'#a53426'}); 
    $('a.buttongdark').css({'color':'#222222'}); 
    $('a.buttonbrown').css({'color':'#943b00'}); 
    $('a.buttonorange').css({'color':'#b87421'}); 
    $('a.buttonpurple').css({'color':'#a33daa'}); 
    $('a.buttonpink').css({'color':'#752b4e'}); 
    $('a.button').hover(function(){
      $(this).css({'color':'#555555'}); 
    },function() {
      $(this).css({'color':''}); 
    });
    
    $.cookie("corbiz_cookie_bgImageUrl",null);
    $.cookie("corbiz_cookie_color", null);
    $.cookie("corbiz_cookie_skin", skins);     
    
    Cufon.refresh();
    
   });  
   
   var skins = $.cookie("corbiz_cookie_skin");
   
   if (skins) {
     $('.header-wrapper, .header-wrapper-inner').css({
         backgroundColor: '#' + skins,
         backgroundImage : pattern,
         backgroundRepeat: "repeat"
     });
           
     $('a,a:link,a:visited,ul.tabs li a:hover,.toggle_title h5,.testiname,#profiles h4').css({'color' :'#' +skins });
     
     $('.jqueryslidemenu ul li a:link, .jqueryslidemenu ul li a:visited').css({'color':'#777777'});
     
     $('.jqueryslidemenu ul li a.selected').css({backgroundColor :'#' +skins,'color':'#ffffff'});
     
     $('.jqueryslidemenu ul li a').not(".selected").hover(function(){
       $(this).css({backgroundColor :'#' +skins,'color':'#ffffff'});
     },function(){
         $(this).css({backgroundColor :'','color':''});
     });
     
     $('.jqueryslidemenu ul li a.selected ul li a,.jqueryslidemenu ul li ul li a').hover(function(){
       $(this).css({backgroundColor :'#ffffff','color':'#'+skins});
     },function() {
       $(this).css({backgroundColor :'','color':''});
     });
     
     $('h3 a,h4 a, h5 a').hover(function(){
       $(this).css({'color':'#555555'}); 
     },function() {
       $(this).css({'color':'#'+skins}); 
     });

     $('#featureslist li h4 a').css({'color':'#666666'});
     $('#featureslist li h4 a').hover(function(){
      $(this).css({'color':'#555555'});
    })
     $('a.button').css({'color':'#858585'}); 
     $('a.buttongreen').css({'color':'#6d9900'}); 
     $('a.buttonblue').css({'color':'#1b9ac6'}); 
     $('a.buttonred').css({'color':'#a53426'}); 
     $('a.buttongdark').css({'color':'#222222'}); 
     $('a.buttonbrown').css({'color':'#943b00'}); 
     $('a.buttonorange').css({'color':'#b87421'}); 
     $('a.buttonpurple').css({'color':'#a33daa'}); 
     $('a.buttonpink').css({'color':'#752b4e'}); 
     $('a.button').hover(function(){
       $(this).css({'color':'#555555'}); 
     },function() {
       $(this).css({'color':''}); 
     });    
    } 
   
   $('#style-switcher a.pattern-box').each(function (i) {  
    var a = $(this);
      var patternUrl = 'url(templates/images/pattern/' + a.attr('rel') + '.png)';
      a.css({
          backgroundImage: patternUrl
      })
  })
  
  $('#style-switcher a.pattern-box').click(function (e) {
      e.preventDefault();
      var patternUrl = 'url(templates/images/pattern/' + $(this).attr('rel') + '.png)';
      $('.header-wrapper, .header-wrapper-inner').css({
          backgroundImage: patternUrl,
          backgroundRepeat: "repeat"
      });
      $.cookie("corbiz_cookie_bgImageUrl", null)
      $.cookie("corbiz_cookie_pattern", patternUrl)
  });
  
  $('#style-switcher a.bg-box').each(function (i) {  
    var a = $(this);
      var bgImageUrl = 'url(templates/images/bgimage/' + a.attr('rel') + '.jpg)';
      a.css({
          backgroundImage: bgImageUrl,
          backgroundRepeat: "no-repeat"
      })
  })
  
  $('#style-switcher a.bg-box').click(function (e) {
      e.preventDefault();
      var bgImageUrl = 'url(images/bgimage/' + $(this).attr('rel') + '.jpg)';
      $('.header-wrapper, .header-wrapper-inner').css({
          backgroundImage: bgImageUrl,
          backgroundRepeat: "no-repeat"
      });
      $.cookie("corbiz_cookie_bgImageUrl", bgImageUrl);
      $.cookie("corbiz_cookie_pattern", null); 
  });
  
  var defaultPattern = $.cookie("corbiz_cookie_defaultBg");
  var color = $.cookie("corbiz_cookie_color");
  if (color) {
      $('.header-wrapper, .header-wrapper-inner').css({
          backgroundColor: '#' + color,
          backgroundImage : defaultPattern
      });
  }
  
  var pattern = $.cookie("corbiz_cookie_pattern");
  if (pattern) {
      $('.header-wrapper, .header-wrapper-inner').css({
          backgroundImage: pattern,
          backgroundRepeat: "repeat"
      });
  } 
  
  
    var bgImageUrl = $.cookie("corbiz_cookie_bgImageUrl");
    if (bgImageUrl) {
        $('.header-wrapper, .header-wrapper-inner').css({
            backgroundImage: bgImageUrl,
            backgroundRepeat: "no-repeat"
        });
    } 
    
    $('#reset_style').click(function(){
      $.cookie("corbiz_cookie_bgImageUrl",null);
      $.cookie("corbiz_cookie_color", null);
      $.cookie("corbiz_cookie_skin", null);
      $.cookie("corbiz_cookie_pattern", null);
      location.reload();
    });
});   
 