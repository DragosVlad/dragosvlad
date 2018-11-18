;jQuery(function($) {

	console.log('yeyy');

	var theme_url = directory_uri.stylesheet_directory_uri;


	var scrollTop = $(window).scrollTop();


	

	// init controller
	var controller = new ScrollMagic.Controller();


	var heroText = new TimelineMax({repeat: -1});
	heroText
		.to('.home-hero__bio .secondary-title span', 0.5, {text: ' ', ease: Power1.Linear}, '=+2')
		.to('.home-hero__bio .secondary-title span', 1, {text: 'WordPress', ease: Power1.easeIn})
		.to('.home-hero__bio .secondary-title span', 0.5, {text: ' ', ease: Power1.Linear}, '=+2')
		.to('.home-hero__bio .secondary-title span', 1, {text: 'Front-End', ease: Power1.easeIn})
		.to('.home-hero__bio .secondary-title span', 0.5, {text: ' ', ease: Power1.Linear}, '=+2')
		.to('.home-hero__bio .secondary-title span', 1, {text: 'Web', ease: Power1.easeIn});



	var heroTitle = new TimelineMax({delay: 1});
		heroTitle
			.from('.home-hero__title .span1', 1, {y: '-100px', filter: 'blur(10px)',  autoAlpha: 0, ease: Power3.easeInOut})
			.from('.home-hero__title .span2', 1, {y: '-100px', filter: 'blur(10px)',  autoAlpha: 0, ease: Power3.easeInOut})
			.from('.home-hero__title .name', 1, {y: '-100px', filter: 'blur(10px)',  autoAlpha: 0, ease: Power3.easeInOut})
			.from('.home-hero__bio', 1, {y: '-100px', filter: 'blur(10px)',  autoAlpha: 0, ease: Power3.easeInOut}, '+=0.5')
			.add('textChange')
			.add(heroText, 'textChange')
			.from('.home-hero__description', 1, {y: '-50px', filter: 'blur(10px)', autoAlpha: 0, ease: Power3.easeInOut}, 'textChange')
			;





	if (scrollTop > 0) {
		$('.scroll-notice').addClass('hide');
		
	} else {
		heroTitle.to('.scroll-notice', 1, {className:"-=hide", ease: Power1.easeIn});
	};

	$(window).scroll(function() {
		if ($(window).scrollTop() > 0) {
			$('.scroll-notice').addClass('hide');
		} else {
			$('.scroll-notice').removeClass('hide');
		};
	});




	var workTl = new TimelineLite();
	workTl
		.fromTo('.project__thumb', 2, {y: '50px'}, {y: '-30px'});

	new ScrollMagic.Scene({
		triggerElement: '.home-work',
		triggerHook: 0.3,
        duration: '80%',
    })
    .setTween(workTl)
    .addIndicators()
    .addTo(controller);


    var workTl2 = new TimelineLite();
    workTl2
    	.to('.home-work', 0.4, {backgroundColor: '#0F1623', ease: Power3.easeInOut})
    	.to('.home-work .title', 0.4, {color: '#ECECEC', ease: Power3.easeInOut}, '0')
    	.to('.home-hero__intro', 0.1, {className:'+=bg-change blur', ease: Power3.easeInOut}, '0');

	new ScrollMagic.Scene({
		triggerElement: '.home-work',
		triggerHook: 0.6,
    })
    .setTween(workTl2)
    .addIndicators()
    .addTo(controller);




    var request = null;
      var mouse = {
        x: 0,
        y: 0
      };
      var cx = window.innerWidth / 2;
      var cy = window.innerHeight / 2;

      $('.project__container1').mousemove(function(event) {

        mouse.x = event.pageX;
        mouse.y = event.pageY;

        cancelAnimationFrame(request);
        request = requestAnimationFrame(update1);
      });

      function update1() {

        dx = mouse.x - cx;
        dy = mouse.y - cy;

        tiltx = (dy / cy);
        tilty = -(dx / cx);
        radius = Math.sqrt(Math.pow(tiltx, 2) + Math.pow(tilty, 2));
        degree = (radius * 1.5);
        TweenLite.to(".work__project1", 2, {
          transform: 'rotate3d(0, ' + tilty + ', 0, ' + degree + 'deg)' + 'rotate3d(' + tiltx + ', 0, 0, ' + degree / 1.5 + 'deg)',
          ease: Power2.easeOut
        });

        

        var cpos = { top: mouse.y - 40, left: mouse.x - 40 };
             $('.mouse-text1').offset(cpos);
      }

      $(".project__container1").mouseenter(function(){
      	$('.mouse-text1').addClass('show');
  	  });


      $(".project__container1").mouseleave(function(){
      	TweenMax.to('.work__project1', 0.5, {transform: 'translateZ(-100px) rotate3d(0, 0, 0, 0)', ease: Power3.easeInOut});
      	$('.mouse-text1').removeClass('show');
      });





      $('.project__container2').mousemove(function(event) {

        mouse.x = event.pageX;
        mouse.y = event.pageY;

        cancelAnimationFrame(request);
        request = requestAnimationFrame(update2);
      });

      function update2() {

        dx = mouse.x - cx;
        dy = mouse.y - cy;

        tiltx = (dy / cy);
        tilty = -(dx / cx);
        radius = Math.sqrt(Math.pow(tiltx, 2) + Math.pow(tilty, 2));
        degree = (radius * 1.5);
        TweenLite.to(".work__project2", 2, {
          transform: 'rotate3d(0, ' + tilty + ', 0, ' + degree + 'deg)' + 'rotate3d(' + tiltx + ', 0, 0, ' + degree / 2 + 'deg)',
          ease: Power2.easeOut
        });

        var cpos = { top: mouse.y - 40, left: mouse.x - 40 };
             $('.mouse-text2').offset(cpos);
      }

      $(".project__container2").mouseenter(function(){
      	$('.mouse-text2').addClass('show');
  	  });


      $(".project__container2").mouseleave(function(){
      	TweenMax.to('.work__project2', 0.5, {transform: 'translateZ(-100px) rotate3d(0, 0, 0, 0)', ease: Power3.easeInOut});
      	$('.mouse-text2').removeClass('show');
      });

      $(window).resize(function() {
        cx = window.innerWidth / 2;
        cy = window.innerHeight / 2;
      });



      // $(".owl-carousel").owlCarousel();

 

      // $('.owl-carousel').owlCarousel({autoplay: true});
     


});


