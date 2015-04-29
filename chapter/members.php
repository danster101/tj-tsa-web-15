<p>Mouse over anyone in the picture to view their name, grade, and position within the chapter.</p>

<div class="member-info-widget">
	<img src="../images/team.jpg" class="blur ar-content"/>
	<img src="../images/team.jpg" class="sharp ar-content"/>
	<div class="name-label-container">
		<div class="name-label"></div>
	</div>
</div>

<script>
	var data = [
		{
			cx: 131,
			cy: 203,
			r: 30,
			name: "Matthew Savage",
			position: "Sergeant-at-Arms",
			grade: "Senior"
		},
		{
			cx: 347,
			cy: 191,
			r: 30,
			name: "Kyle Herndon",
			position: "President",
			grade: "Senior"
		},
		{
			cx: 441,
			cy: 152,
			r: 26,
			name: "Ben Zhang",
			position: "Member",
			grade: "Senior"
		},
		{
			cx: 193,
			cy: 218,
			r: 30,
			name: "George Perry",
			position: "Reporter",
			grade: "Junior"
		},
		{
			cx: 275,
			cy: 206,
			r: 30,
			name: "Danial Hussain",
			position: "Treasurer",
			grade: "Senior"
		},
		{
			cx: 405,
			cy: 215,
			r: 30,
			name: "Pranavi Nara",
			position: "Secretary",
			grade: "Junior"
		},
		{
			cx: 473,
			cy: 200,
			r: 30,
			name: "Lucas Lin",
			position: "Vice President",
			grade: "Senior"
		},
		{
			cx: 536,
			cy: 201,
			r: 30,
			name: "Pranay Singh",
			position: "Historian",
			grade: "Junior"
		},
		{
			cx: 615,
			cy: 206,
			r: 30,
			name: "Michael Piccione",
			position: "Advisor",
			grade: "Faculty"
		},
		{
			cx: 195,
			cy: 163,
			r: 26,
			name: "Justin Redman",
			position: "Member",
			grade: "Junior"
		},
		{
			cx: 263,
			cy: 173,
			r: 26,
			name: "Sruthi Jayaraman",
			position: "Member",
			grade: "Junior"
		},
		{
			cx: 319,
			cy: 174,
			r: 26,
			name: "Raksha Pothapragada",
			position: "Member",
			grade: "Junior"
		},
		{
			cx: 387,
			cy: 159,
			r: 26,
			name: "Zach Wade",
			position: "Member",
			grade: "Senior"
		},
		{
			cx: 509,
			cy: 178,
			r: 26,
			name: "Soham Ray",
			position: "Member",
			grade: "Freshman"
		},
		{
			cx: 573,
			cy: 159,
			r: 26,
			name: "Rohan Pandit",
			position: "Member",
			grade: "Junior"
		},
		{
			cx: 193,
			cy: 122,
			r: 22,
			name: "Peter Zhao",
			position: "Member",
			grade: "Junior"
		},
		{
			cx: 255,
			cy: 127,
			r: 22,
			name: "Ruiran Xun",
			position: "Member",
			grade: "Freshman"
		},
		{
			cx: 312,
			cy: 129,
			r: 22,
			name: "My-Linh Budzien",
			position: "Member",
			grade: "Freshman"
		},
		{
			cx: 377,
			cy: 120,
			r: 22,
			name: "Adam Kim",
			position: "Member",
			grade: "Junior"
		},
		{
			cx: 437,
			cy: 127,
			r: 22,
			name: "Sujay Ratna",
			position: "Member",
			grade: "Freshman"
		},
		{
			cx: 495,
			cy: 131,
			r: 22,
			name: "Siva Somayyajula",
			position: "Member",
			grade: "Senior"
		},
		{
			cx: 216,
			cy: 102,
			r: 18,
			name: "Paarth Jain",
			position: "Member",
			grade: "Freshman"
		},
		{
			cx: 267,
			cy: 98,
			r: 18,
			name: "Michael Krause",
			position: "Member",
			grade: "Freshman"
		},
		{
			cx: 327,
			cy: 104,
			r: 18,
			name: "Navya Kala",
			position: "Member",
			grade: "Freshman"
		},
		{
			cx: 377,
			cy: 98,
			r: 18,
			name: "Vaishnavi Nara",
			position: "Member",
			grade: "Freshman"
		},
		{
			cx: 431,
			cy: 102,
			r: 18,
			name: "Katherine Barbano",
			position: "Member",
			grade: "Freshman"
		},
		{
			cx: 471,
			cy: 110,
			r: 18,
			name: "Uzma Rentia",
			position: "Member",
			grade: "Freshman"
		},
		{
			cx: 523,
			cy: 104,
			r: 18,
			name: "Amee Kapadia",
			position: "Member",
			grade: "Junior"
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

					$(".member-info-widget .name-label").html(data[i].name.replace(/\s/g, "&nbsp;") + "<br />" + data[i].grade + "<br />" + data[i].position);

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