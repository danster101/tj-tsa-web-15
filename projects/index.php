<html>
	<?php include("../includes.php"); ?>
	<?php make_head("Projects"); ?>
	<body>
		<?php make_header("Projects"); ?>
		<div class="flex" id="content-row">
			<?php make_sidebar(); ?>
			<main>
				<article>
					<p>In its two years of existence, TJHSST TSA has participated in almost every available competitive event offered by TSA.  Below we highlight some of the notable projects completed by our TSA chapter's members.</p>

					<h3>&Agrave; la Mod<a name="alamod"></a></h3>

					<figure float="right" style="width: 120px">
						<img src="/tsa/images/projects/alm.png" />
						<figcaption>The &Agrave; la Mod app logo, designed by Matthew Savage.</figcaption>
					</figure>

					<p><a target="_black" href="http://a-la-mod.herokuapp.com/"><b>&Agrave; la Mod</b></a> is a modular chat client which focuses on functionality and personalization for all members of a conversation.  The goal of &Agrave; la Mod is to create the perfect chat experience for everyone by allowing them to define how the chat behaves for them instead of vice versa.</p>

					<p>&Agrave; la Mod is curently entered in the Software Development competition for Technosphere 2015.</p>

					<h3>Spintwo<a name="spintwo"></a></h3>

					<figure float="left" style="width: 120px">
						<img src="/tsa/images/projects/spintwo.png" />
						<figcaption>Dr. Spintwo, the titular character of <i>Spintwo</i>.  (Art by Matthew Savage)</figcaption>
					</figure>

					<p><b>Spintwo</b> is a video game produced for the Video Game Design competition for the Northern Regional Fair in 2015.  In this puzzle-based platformer, players have the opportunity to explore what happens when they are given the power to turn gravity on and off for any object - including themselves - while discovering the story of the strange and mysterious Dr. Spintwo.</p>

					<h3>E-waste<a name="ewaste"></a></h3>

					<p><a target="_black" href="/tsa/ewaste"><b>E-waste</b></a> is this year's design brief for Webmaster, and it brings attention to a major problem facing the world today: the proper recycling of electronics products.  As these decompose slowly and are not environmentally friendly, it is important to find solutions to ensure proper recycling and disposal.</p>

					<p>E-waste is currently entered as part of the Webmaster event at Technosphere 2015.</p>

					<h3>htmlearn<a name="htmlearn"></a></h3>

					<p><a target="_blank" href="http://htmlearn.net"><b>htmlearn</b></a> is the TJ Webmaster Design Brief for the 2014 Webmaster event.  The theme for the Design Brief this year is "how to make my first website," and is aimed at middle-school students who want to learn the basics of HTML, CSS, and JavaScript to create a webpage.  Users are guided through a series of tutorials which bring them step-by-step through the coding process and give them hands-on experience in devleoping content.  Input HTML and CSS is rendered in real-time to allow users to easily explore how different stylings and tag combinations affect each other.</p>

					<p>htmlearn won first place at Technosphere 2014 and won sixth place at the National Conference.</p>

					<h3>Robox<a name="robox"></a></h3>

					<figure float="left" style="width: 200px">
						<img src="/tsa/images/projects/robox.png" width="200px" />
						<figcaption>The Robox logo.  (Designed by Ellis Tsung)</figcaption>
					</figure>

					<p><a target="_blank" href="http://netaro.com/robox/index.html"><b>Robox</b></a> is a game in which the player controls a one-armed robot that must grab and move walls and blocks to propel itself and solve puzzles.</p>

					<p>Robox won second place at the Northern Regional Fair and fifth place at Technosphere in 2014.</p>

					<h3><i>Flight Endurance</i> Promotional Graphic<a name="feprographic"></a></h3>

					<figure float="right" style="width: 200px">
						<img src="/tsa/images/projects/prographics-small.png" width="200px"/>
						<figcaption>Ellis Tsung's <i>Flight Endurance</i> Promotional Graphic.</figcaption>
					</figure>

					<p>This <a target="_blank" href="/tsa/images/projects/prographics.png"><b><i>Flight Endurance</i> Promotional Graphic</b></a> was created in 2014 by Ellis Tsung for the Promotional Graphics event.  The graphic won first place at the northern regional fair and third place at Technosphere..</p>

					<h3>The Dimensional Calculator<a name="dimcalc"></a></h3>

					<p><a target="_blank" href="http://bluepichu.com/sandbox/dimcalc/src/dimcalc.html"><b>The Dimensional Calculator</b></a> was a tool developed for the Open Source Software Development event in 2013.  The calculator allowed users to not only input numbers but units as well, thus adding "dimensions" to the calculator's responses.  Aimed at the sciences, the calculator supported many unique features such as unit conversion (including SI prefixes) and significant figures.  A later version of the calculator also supported some calculus operations - numeric differentiation and integration and some analytical differentiation.</p>

					<p>The calculator won third place at Technosphere 2013 and was taken to but did not win anything at the 2013 National Conference.</p>

					<h3>TJHSST TSA 2013 Website<a name="web2013"></a></h3>

					<figure float="left" style="width: 200px">
						<img src="/tsa/images/chapter/about/header-2013b.jpg" width="200px"/>
						<figcaption>The banner image used on the 2013 TJHSST TSA site.  (Designed by Matthew Savage)</figcaption>
					</figure>

					<p><a target="_blank" href="http://tsa.netaro.com"><b>The TJHSST TSA 2013 Website</b></a> was TJ's Webmaster entry in 2013.  It included much of the same information as this site, as well as that year's design brief - 21st-century news.</p>

					<p>The 2013 Webmaster entry won second place at Technosphere 2013 but did not win anything at the National Conference.</p>
				</article>
			</main>
		</div>
		<script>
			$(document).ready(function(){
				if(window.location.hash != null){
					setTimeout(function(){
						$(window).scrollTop($(window).scrollTop() - 200);
					}, 1000);
				}
			});
		</script>
		<?php make_footer(); ?>
	</body>
</html>