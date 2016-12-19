

$(document).ready(function($) {
	
	function setAnim(){

		var $container = $(this),
				way = ($container.parent().hasClass("bottom")) ? 1 : -1,
				show = TweenMax.fromTo($(this),1, {"opacity":0}, {"opacity":1});
				scene = new ScrollScene({triggerElement:$container, duration: 5, triggerHook:"onEnter"})
		
		scene.setTween(show).addTo(controller)
		//scene.addIndicators();

		$container.find('span').each(function() {
		
			var $letter = $(this),
					duration = rand((wHeight/4),(wHeight * .8)),
	
					tween = TweenMax.fromTo($letter, duration, 
						{"top": (wHeight + 200 ) * way +"px"},
						{"top":0}
					),
					scene = new ScrollScene({triggerElement: $container, duration: duration, triggerHook:"onEnter"})
			
			$letter.addClass("animated");
			scene.setTween(tween).addTo(controller)
			scene.addIndicators();

		})
	}

	function rand(min,max){ return Math.floor(Math.random()*(max-min+1)+min); }; 

	var controller, wHeight = $(window).height();

	controller = new ScrollMagic();

	console.log(wHeight);


	$('#messages h1 em, #messages h2 em').lettering('words').each(setAnim);
	$('#messages h1 strong, #messages h2 strong').lettering().each(setAnim);

	$('#messages p em').lettering('lines').each(setAnim);
	$('#messages p strong').lettering('words').each(setAnim);
	

	$('#messages pre code').lettering().each(setAnim);	

	 //$("body").scrollTo('100%', *60*1000);

})