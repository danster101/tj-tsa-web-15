<p>Mouse over anyone in the picture to view their name, grade, and position within the chapter.</p>

<div class="member-info-widget">
	<img src="../images/team-small.jpg" class="blur ar-content"/>
	<img src="../images/team-small.jpg" class="sharp ar-content"/>
	<div class="name-label-container">
		<div class="name-label"></div>
	</div>
</div>

<script>
	var data = [
		{
			cx: 310,
			cy: 221,
			r: 32,
			name: "Matthew Savage",
			position: "Sergeant-at-Arms",
			grade: "Senior"
		},
		{
			cx: 233,
			cy: 206,
			r: 32,
			name: "Kyle Herndon",
			position: "President",
			grade: "Senior"
		}
	];

	var width = 720;
	var height = 540;

	$(document).ready(function(){
		$(".member-info-widget").mousemove(function(e){
			var x = e.pageX - $(this).offset().left;
			var y = e.pageY - $(this).offset().top;
			x *= width / $(".member-info-widget").width();
			y *= height / $(".member-info-widget").height();
			for(var i = 0; i < data.length; i++){
				if(Math.pow(x - data[i].cx, 2) + Math.pow(y - data[i].cy, 2) <= Math.pow(data[i].r, 2)){
					var rule = "circle(" + (data[i].r * $(".member-info-widget").width() / width)  + "px at " + (data[i].cx * $(".member-info-widget").width() / width) + "px " + (data[i].cy * $(".member-info-widget").height() / height) + "px)";

					$(".member-info-widget .sharp").css({
						"clip-path": rule,
						"-webkit-clip-path": rule
					});

					$(".member-info-widget .name-label").html(data[i].name + "<br />" + data[i].grade + "<br />" + data[i].position);

					$(".member-info-widget .name-label-container").css({
						top: (data[i].cy + data[i].r + 16) * $(".member-info-widget").height() / height,
						left: (data[i].cx) * $(".member-info-widget").width() / width
					});

					$(".member-info-widget .name-label").addClass("active");

					return;
				}
			}
			$(".member-info-widget .sharp").css({
				"clip-path": "",
				"-webkit-clip-path": ""
			});
			$(".member-info-widget .name-label").removeClass("active");
		});
	});
</script>