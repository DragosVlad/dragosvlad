;jQuery(function($) {


	var theme_url = directory_uri.stylesheet_directory_uri;

	var controller = new ScrollMagic.Controller();




	// var text = $('.project-text');

	// new ScrollMagic.Scene({
	// 	triggerElement: text,
	// 	triggerHook: 0.5,
	// })
	// .setPin(text)
	// .addIndicators()
	// .addTo(controller);


	var projectTween1 = TweenMax.fromTo('.project-thetrimtab .project-text', 0.5, {y:'50px', autoAlpha: 0}, {y:'-50%', autoAlpha: 1, ease: Power1.easeInOut, paused: false});
	var projectTween2 = TweenMax.fromTo('.project-hollandzone .project-text', 0.5, {y:'50px', autoAlpha: 0}, {y:'-50%', autoAlpha: 1, ease: Power1.easeInOut, paused: true});
	var projectTween3 = TweenMax.fromTo('.project-wedding .project-text', 0.5, {y:'50px', autoAlpha: 0}, {y:'-50%', autoAlpha: 1, ease: Power1.easeInOut, paused: true});


	$(window).on('scroll resize', function (event) {

	  var scroll = $(window).scrollTop();
	  var height = $(window).height();

	  var project1 = $('.project-thetrimtab').offset().top;
	  var project2 = $('.project-hollandzone').offset().top;
	  var project3 = $('.project-wedding').offset().top;
	  var projectHeight1 = $('.project-thetrimtab').height();
	  var projectHeight2 = $('.project-hollandzone').height();
	  var projectHeight3 = $('.project-wedding').height();
	  var workBg = $('.work-background-image');

	  

	  // var isProject1 = (scroll > project1) & (scroll < project1 + projectHeight1);
	  var isProject1 = scroll < project1 + projectHeight1;
	  var isProject2 = (scroll > project2) & (scroll < project2 + projectHeight2);
	  var isProject3 = (scroll > project3) & (scroll < project3 + projectHeight3);
	  

	  if ( isProject1 ) {
	  	workBg.addClass('thetrimtab');
	    projectTween1.play();
	  } else {
	  	workBg.removeClass('thetrimtab');
	  	projectTween1.reverse();
	  }


	  if ( isProject2 ) {
	    workBg.addClass('hollandzone');
	    projectTween2.play();
	  } else {
	    workBg.removeClass('hollandzone');
	    projectTween2.reverse();
	  };

	  if ( isProject3 ) {
	    workBg.addClass('wedding');
	    projectTween3.play();
	  } else {
	    workBg.removeClass('wedding');
	    projectTween3.reverse();
	  };

	
	});


	// TweenMax.from(this, 1, {y:'-50px', autoAlpha: 0, ease: Power3.easeInOut});

	// $('.project-text').each(function() {

	// 	new ScrollMagic.Scene({
	// 		triggerElement: this,
	// 		triggerHook: 0.8,
	// 	})
	// 	.setTween(TweenMax.from(this, 1, {y:'50px', autoAlpha: 0, ease: Power3.easeInOut}))
	// 	.addIndicators()
	// 	.addTo(controller);

	// });


	

});