;jQuery(function($) {

	var scrollTop = $(window).scrollTop();


	

	// init controller
	var controller = new ScrollMagic.Controller();





	new ScrollMagic.Scene({
	  triggerElement: '.about-hero',
	  triggerHook: 0,

	})
	.setPin('.about-hero', {pushFollowers: false})
	.addIndicators()
	.addTo(controller);



	var aboutHero = $(['.about-intro', '.about-photo']);
	var aboutHeroTl = new TimelineMax();
	    aboutHeroTl
	      .to(aboutHero, 1, {scale: '0.8', y:'-200px', ease: Power3.easeInOut})
	      .to('.about-hero', 1, {backgroundColor: '#ececec', ease: Power3.easeInOut}, '-=1')
	      .to('.about-intro .title', 1, {color: 'black', ease: Power3.easeInOut}, '-=1')
	    ;

	new ScrollMagic.Scene({
	  triggerElement: '.about-hero',
	  triggerHook: 0,
	  duration: '200%',
	})
	.setTween(aboutHeroTl)
	.addIndicators()
	.addTo(controller);








	var bioText = $('.bio-paragraph');

	$(bioText).each(function() {
	  var bioTextTween = TweenMax.from(this, 0.4, {y:'+=50px', autoAlpha: 0, ease: Power1.easeInOut});
	  new ScrollMagic.Scene({
	    triggerElement: this,
	    triggerHook: 0.8,
	  })
	  .setTween(bioTextTween)
	  .addIndicators()
	  .addTo(controller);
	});



	// About Page Title Changes

	var titleBioTween = TweenMax.fromTo('.about-title--bio', 0.4, {x:'-100px', autoAlpha: 0}, {x:'0', autoAlpha: 0.4, ease: Power1.easeInOut, paused: true});
	var titleTechTween = TweenMax.fromTo('.about-title--tech', 0.4, {x:'+100px', autoAlpha: 0}, {x:'0', autoAlpha: 0.4, ease: Power1.easeInOut, paused: true});
	var titleProcessTween = TweenMax.fromTo('.about-title--process', 0.4, {x:'-100px', autoAlpha: 0}, {x:'0', autoAlpha: 0.4, ease: Power1.easeInOut, paused: true});

	$(window).on('scroll resize', function (event) {

	    var scroll = $(window).scrollTop();
	    var height = $(window).height();

	    var bioTop = $('.about-bio').offset().top;
	    var bioHeight = $('.about-bio').height();

	    var techTop = $('.about-technical').offset().top;
	    var techHeight = $('.about-technical').height();

	    var processTop = $('.about-process').offset().top;
	    var processHeight = $('.about-process').height();

	    var isBioSection = (scroll > bioTop) & (scroll < bioTop + bioHeight);
	    var isTechSection = (scroll > techTop) & (scroll < techTop + techHeight);
	    var isProcessSection = (scroll > processTop) & (scroll < processTop + processHeight);
	    
	    if ( isBioSection ) {
	      titleBioTween.play();
	    } else {
	      titleBioTween.reverse();
	    };

	    if ( isTechSection ) {
	      titleTechTween.play();
	    } else {
	      titleTechTween.reverse();
	    };

	    if ( isProcessSection ) {
	      titleProcessTween.play();
	    } else {
	      titleProcessTween.reverse();
	    }

	});


	var skillsTitle = $('.skills-title');
	var toolsTitle = $('.tools-title');
	var processTitle = $('.process-title');
	var skillsHeight = $('.skills-list').height();
	var toolsHeight = $('.tools-list').height();
	var processHeight = $('.process-list').height();
	var navHeight = $('.navbar').height();

	var skillsPin = new ScrollMagic.Scene({
	  triggerElement: $('.skills-title'),
	  triggerHook: 0,
	  offset: -navHeight - 16,
	  duration: skillsHeight,
	})
	.setPin(skillsTitle, {pushFollowers: false})
	.addTo(controller);

	var toolsPin = new ScrollMagic.Scene({
	  triggerElement: $('.tools-title'),
	  triggerHook: 0,
	  offset: -navHeight - 16,
	  duration: toolsHeight,
	})
	.setPin(toolsTitle, {pushFollowers: false})
	.addTo(controller);

	var processPin = new ScrollMagic.Scene({
	  triggerElement: $('.process-title'),
	  triggerHook: 0,
	  offset: -navHeight - 16,
	  duration: processHeight,
	})
	.setPin(processTitle, {pushFollowers: false})
	.addTo(controller);





});