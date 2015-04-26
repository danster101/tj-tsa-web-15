<div class="member-info-widget">
	<img src="../images/team-small.jpg" class="blur"/>
	<img src="../images/team-small.jpg" class="sharp"/>
	<div class="name-label">Name Here</div>
</div>

<script>
	var data = [
		{
			cx: 310,
			cy: 221,
			radius: 32,
			name: "Matthew Savage"
		},
		{
			cx: 233,
			cy: 206,
			radius: 32,
			name: "Kyle Herndon"
		}
	];

	var width = 720;
	var height = 540;

	$(document).ready(function(){
		$(".member-info-widget").mousemove(function(e){
			var x = e.pageX - $(this).offset().left;
			var y = e.pageY - $(this).offset().top;
			for(var i = 0; i < data.length; i++){
				if(Math.pow(x - data[i].cx, 2) + Math.pow(y - data[i].cy, 2) <= Math.pow(data[i].radius, 2)){
					var rule = "circle(" + data[i].radius  + "px at " + data[i].cx + "px " + data[i].cy + "px)";

					$(".member-info-widget .sharp").css({
						"clip-path": rule,
						"-webkit-clip-path": rule
					});

					$(".member-info-widget .name-label").text(data[i].name);

					return;
				}
			}
			$(".member-info-widget .sharp").css({
				"clip-path": "",
				"-webkit-clip-path": ""
			});
			$(".member-info-widget .name-label").text("");
		});
	});
</script>