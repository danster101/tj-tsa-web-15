<script src="/tsa/js/jquery.sequence-min.js"></script>
<link rel="stylesheet" type="text/css" href="/tsa/css/slider.css" />
<script>
	$(document).ready(function(){
		$("#sequence").sequence({
			animateStartingFrameIn: true,
			transitionThreshold: true,
			autoPlay: true,
			reverseAnimationsWhenNavigatingBackwards: false,
			nextButton: ".seq-next",
			prevButton: ".seq-prev"
		}).data("sequence");
	});
</script>
<div class="slider-wrapper">
	<div class="slider-container">
		<div class="slider" id="sequence">
			<ul class="sequence-canvas">
				<li id="welcome">
					<img id="tsa-logo" src="/tsa/images/tsa-color.svg" />
					<img id="tj-logo" src="/tsa/images/tj-logo.jpg" />
					<img id="cube" src="/tsa/images/cube.png" />
					<div id="welcome-text">Welcome to TJHSST TSA</div>
				</li>
				<li id="renovation" link="/school/">
					<img id="tj-reno-sketch" src="/tsa/images/renovation.jpg" />
					<div id="new-tjhsst">Welcome to TJHSST.</div>
					<div id="read-more">Learn more about who we are and what we do &raquo;</div>
				</li>
				<li id="spintwo" link="/projects/#spintwo">
					<img id="spintwo-bg" src="/tsa/images/spintwo-bg.png" />
					<div id="spintwo-fg">
						<img id="spintwo-player" src="/tsa/images/spintwo-player.png" />
						<img id="spintwo-ground1" src="/tsa/images/spintwo-ground.png" />
						<img id="spintwo-ground2" src="/tsa/images/spintwo-ground.png" />
						<img id="spintwo-ground3" src="/tsa/images/spintwo-ground.png" />
					</div>
					<img id="spintwo-title" src="/tsa/images/spintwo-title.png" />
					<div id="read-more">Check out a video game made by TJ TSA students &raquo;</div>
				</li>
			</ul>
			<div class="seq-next">&rsaquo;</div>
			<div class="seq-prev">&lsaquo;</div>
		</div>
	</div>
</div>