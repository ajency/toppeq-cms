$(document).ready(function () {
    
    $('#form-one').on('hidden.bs.modal', function () {
        $(".frm_message").remove();
    });

    $('#form-two').on('hidden.bs.modal', function () {
        $(".frm_message").remove();
    });

    $('#form-three').on('hidden.bs.modal', function () {
        $(".frm_message").remove();
    });

    $('#exampleModalCenter').on('hidden.bs.modal', function () {
        $(".frm_message").remove();
    });

    $(document).on("click", ".card-body .btn", function () {
        var myBookId = $(this).data('title');
        console.log(myBookId);
        $(".modal-careers .modal-header .modal-title .c-title").text(myBookId);
        $('#exampleModalCenter').modal('show');
        $("#exampleModalCenter .modal-body #field_hidden_title").val(myBookId);
   });

    $slideshow = $('.mainSlider').slick({
        slidesToScroll: 1,
        arrows: false,
    		dots: true,
    		infinite: true,
    		autoplaySpeed: 8000,
    		fade: true,
    		cssEase: 'linear',
    		autoplay: true,
    		//swipe: false        
    });
    $('.slick-slide').click(function() {
      $slideshow.slick('slickGoTo', parseInt($slideshow.slick('slickCurrentSlide'))+1);
    });
	
	$(".mainSlider").on("beforeChange", function() {
		$('.item-text').removeClass('in');
		$('.item-count').removeClass('in-bottom');
		$('.item picture').removeClass('in-left');
		setTimeout(function() {
			$('.item-text').addClass('in');
			$('.item-count').addClass('in-bottom');
			$('.item picture').addClass('in-left');
		}, 50);
    });
    
	$(".homeSlider").on("beforeChange", function() {
		$('.block').removeClass('in-left');
		$('.img-block').removeClass('in-right');
		setTimeout(function() {
			$('.block').addClass('in-left');
			$('.img-block').addClass('in-right');
		}, 10);
	});
	
	$('.pageSlider').slick({
		dots: true,
		infinite: true,
		speed: 500,
		slidesToShow:3,
		slidesToScroll: 3,
		arrows: true,
		prevArrow:'<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
		nextArrow:'<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
		responsive: [
		    {
		      breakpoint: 767,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  ]
	});
	var animateHTML = function() {
	var elems, elemTop,elemRight,
	windowHeight

	var init = function() {
		elems = document.getElementsByClassName("hidden");
	 	elemTop = document.getElementsByClassName("hidden_block");
	 	elemRight = document.getElementsByClassName("hidden_right");
		windowHeight = window.innerHeight;
		_addEventHandlers();
	}

	var _addEventHandlers = function() {
		window.addEventListener("scroll", _checkPosition);
		window.addEventListener("resize", init)
	}
	var _checkPosition = function() {
	for ( var i = 0; i < elems.length; i++ ) {
		var posFromTop = elems[i].getBoundingClientRect().top;
		if ( posFromTop - windowHeight <= 0) { 
			elems[i].className = elems[i].className.replace( "hidden", "in-left" );
		}
	}    
	for ( var i = 0; i < elemTop.length; i++ ) {
		var posFromTop = elemTop[i].getBoundingClientRect().top;
		if ( posFromTop - windowHeight <= 0) { 
			elemTop[i].className = elemTop[i].className.replace( "hidden_block", "in-top" );
		}
	} 
	for ( var i = 0; i < elemRight.length; i++ ) {
		var posFromTop = elemRight[i].getBoundingClientRect().top;
		if ( posFromTop - windowHeight <= 0) { 
			elemRight[i].className = elemRight[i].className.replace( "hidden_right", "in-right" );
		}
	}   
}

  return {
    init: init
  }
}

animateHTML().init();

	$('.homeSlider').slick({
		dots: true,
		infinite: true,
		speed: 1000,
		slidesToShow:1,
		slidesToScroll: 1,
		arrows: true,
		adaptiveHeight: true,
		fade: true,
		cssEase: 'linear',
		prevArrow:'<button type="button" class="slick-prev"><i class="fa fa-angle-left fa-2x font-weight-bold"></i></button>',
		nextArrow:'<button type="button" class="slick-next"><i class="fa fa-angle-right fa-2x font-weight-bold"></i></button>',
	});

    $(".hamburger-menu").click(function(e) {
		e.preventDefault();
        $(".site-menu").addClass("visible");
        $("body").addClass("overflow-hidden");
    });
    
    $(".menu-close-btn").click(function(e) {
		e.preventDefault();
        $(".site-menu").removeClass("visible");
        $("body").removeClass("overflow-hidden");
	});


	$('.nav-item.click a[href*="#"]').on('click', function(e) {
        // e.preventDefault();	  
        $(".menu-close-btn").trigger("click");
		$('html, body').animate({
			scrollTop: $($(this).attr('href')).offset().top-100,
		  },
		  900,
		  'linear'
        );
    });

    if(window.location.hash.substr(1)=== "services-section") {
        $('.detailed-page').removeClass('hidden_block').addClass('in-top');
    }

	window.onscroll = function() {stickyHeader()};
	var header = document.getElementById("site-header");
	var sticky = header.offsetTop;
	function stickyHeader() {
		if (window.pageYOffset > sticky) {
			header.classList.add("sticky");
		} else {
			header.classList.remove("sticky");
		}
	}

	$('.nav-tabs li:first-child').find('a').addClass('active');
    $('.tabcontent').hide();
    $('.tabcontent:first-child').show();

   	// $(".navbar-nav li a").click(function () {
    //     if(!$(this).hasClass('active'))
    //     {
    //         $(".navbar-nav li a.active").removeClass("active");
    //         $(this).addClass("active");        
    //     }
    // });


    (function(e) {
      e.fn.circle = function(t) {
          var n = e.extend({
              speed: "3000"
          }, t);
          return this.each(function() {
              function t() {
                  var e = i.find("li.block.active").index();
                  c.removeClass("active"), c.eq(e).addClass("active")
              }

              function o() {
                  var n;
                  i.addClass("disable-hover"), i.stop(!0, !0).animate({
                      rotatedeg: p.deg += p.step
                  }, {
                      duration: 400,
                      step: function(t) {
                          t >= 360 ? t -= 360 : t <= -360 && (t += 360), e(this).css("transform", "rotate(" + t + "deg)"), e(this).css("-webkit-transform", "rotate(" + t + "deg)")
                      },
                      complete: function() {
                          p.active = i.find("li.active").removeClass("active"), "right" == p.direction && p.step == d && (p.active.prev() && p.active.prev().length ? (n = p.active.prev().index(), p.active.prev().addClass("active")) : (p.active.siblings(":last-child").addClass("active"), n = 9)), "left" == p.direction && p.step == u && (p.active.next() && p.active.next().length ? (n = p.active.next().index(), p.active.next().addClass("active")) : (p.active.siblings(":first-child").addClass("active"), n = 0)), i.is(":animated"), i.removeClass("disable-hover"), t()
                      }
                  }, "ease")
              }

              function r() {
                  i.addClass("disable-hover"), 
                    i.stop(!0, !0).animate(
                    {
                      rotatedeg: p.deg += p.step
                    }, 
                    {
                      duration: 400,
                      step: function(t) {
                          t >= 360 ? t -= 360 : t <= -360 && (t += 360), 
                            e(this).css("transform", "rotate(" + t + "deg)"), 
                            e(this).css("-webkit-transform", "rotate(" + t + "deg)")
                      },
                      complete: function() {
                          p.active = i.find("li.active"), 
                            i.is(":animated"), 
                            i.removeClass("disable-hover")
                      }
                  }, "ease")
              }
              var i = e(this),
                  s = i.find("li").length,
                  a = i.find(" > li .icon"),
                  l = "count" + s,
                  u = 0,
                  c = i.next().find(".animate"),
                  p = {
                      duration: n.speed,
                      deg: 0,
                      step: u,
                      active: i.find("li.active"),
                      direction: "left"
                  };
              switch (s) {
                  case 14:
                      u = -26;
                      break;
                  case 13:
                      u = -27.5;
                      break;
                  case 12:
                      u = -36;
                      break;
                  case 11:
                      u = -36;
                      break;
                  case 10:
                      u = -36;
                      break;
                  case 9:
                      u = -40;
                      break;
                  case 8:
                      u = -45;
                      break;
                  case 7:
                      u = -51.5;
                      break;
                  case 6:
                      u = -60;
                      break;
                  case 5:
                      u = -72;
                      break;
                  case 4:
                      u = -90;
                      break;
                  case 3:
                      u = -120;
                      break;
                  case 2:
                      u = -180;
                      break;
                  case 1:
                      u = -360
              }
              i.addClass(l);
              var d = u - 2 * u;
              i.find("> li").first().addClass("active"),
                i.find("> li").first().find("a").attr("href"),
                c.eq(0).addClass("active"), 
                e(a).on("click", function() {
                  var n = e(this).parent().index() - i.find("li.active").index();
                  i.children("li").removeClass("active"), 
                    e(this).parent().addClass("active"), 
                    p.step = -n * d, n * d >= 288 && (p.step = -n * d + 360), 
                    n * d <= -288 && (p.step = -n * d - 360), 
                    r(), p.step = u, p.direction = "left", t()
              });
              var f = i.parent().find("div.next"),
                  h = i.parent().find("div.prev");
              f.on("click", function() {
                  i.is(":animated") || (p.direction = "left", p.step = u, o())
              }), h.on("click", function() {
                  i.is(":animated") || (p.direction = "right", p.step = d, o())
              })
          })
      }
  }(jQuery));


$(function () {
  //Background image
  $('div').each(function () {
      var url = $(this).attr('data-image');
      if (url) {
          $(this).css('background-image', 'url(' + url + ')');
      }
  });

  $('section').each(function () {
      var url = $(this).attr('data-image');
      if (url) {
          $(this).css('background-image', 'url(' + url + ')');
      }
  });
  
  // Service Auto height circle 
  function autoHeightCircle() {
      var circle = $('.circle--rotate'),
          circleInner = $('.animate-wrapper'), 
          circleH = circle.width(),
          circleInnerH = circleInner.width();
      circle.height(circleH);
      circleInner.height(circleInnerH);
  }

  $("#circle--rotate").circle();
  autoHeightCircle();
  $(window).resize(function () {
      autoHeightCircle();
  });
});

$('a[href="#tab1"]').on('shown.bs.tab', function (e) {
  $('.contact-mails').addClass('d-none');
  $('.contact-invest').removeClass('d-none');
})
$('a[href="#tab2"]').on('shown.bs.tab', function (e) {
  $('.contact-mails').addClass('d-none');
  $('.contact-client').removeClass('d-none');
})
$('a[href="#tab3"]').on('shown.bs.tab', function (e) {
  $('.contact-mails').addClass('d-none');
  $('.contact-hr').removeClass('d-none');
});

    $('.article-slider').slick({
        dots: false,
        infinite: false,
        speed: 500,
        slidesToShow:1,
        slidesToScroll: 1,
        arrows: true,
        adaptiveHeight: false,
        prevArrow:'<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
        nextArrow:'<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
        responsive: [
		    {
		      breakpoint: 767,
		      settings: {
                dots: true,
                arrows: false,
		      }
		    }
		]
    });


    jQuery(document).on('click', '#more_posts', function () {
        load_posts();
    });

    // var pageNumber = 1;

    var post_pagenumber = 0;

    function load_posts(){
        post_pagenumber++;
        post_type = jQuery('#more_posts').data('post_type');
        post_terms = jQuery('#more_posts').data('post_terms');
        post_exclude = jQuery('#more_posts').data('posts_exclude');
        // post_pagenumber = parseInt(jQuery('#more_posts').data('posts_pagenumber'));
        console.log(post_pagenumber);
        jQuery.ajax({
            type: "post",
            dataType: "json",
            url: myAjax.ajaxurl,
            data: {action: "more_post_ajax", pageNumber: post_pagenumber, post_type: post_type, post_terms: post_terms, post_exclude: post_exclude},
            success: function (response) {
                jQuery("#ajax-posts").append(response.html);
                // post_pagenumber++;
                // console.log(post_pagenumber);
                jQuery('#more_posts').attr('data-posts_pagenumber', post_pagenumber);
                if(response.last == true){
                    jQuery('.center').hide();
                    jQuery('.center').addClass("done");
                }
            }
        });
        return false;
    }

    jQuery(document).on('click', '#more_posts_full', function () {
        load_posts_full();
    });

    var pageNumberF = 1;

    function load_posts_full(){
        pageNumberF++;
        post_type = jQuery('#more_posts_full').data('post_type');
        post_terms = jQuery('#more_posts_full').data('post_terms');
        jQuery.ajax({
            type: "post",
            dataType: "json",
            url: myAjax.ajaxurl,
            data: {action: "more_post_fullstack_ajax", pageNumber: pageNumberF, post_type: post_type, post_terms: post_terms},
            success: function (response) {
                jQuery("#ajax-posts-full").append(response.html);
                if(response.last == true){
                    jQuery('.centerF').hide();
                    jQuery('.centerF').addClass("done");
                }
            }
        });
        return false;
    }
    
});
