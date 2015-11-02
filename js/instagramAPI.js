$(function() {
//41557553
	var apiurl = "https://api.instagram.com/v1/locations/41557553/media/recent?access_token=1282853413.5ba2931.da04c2cfaff54d4f973385e8767419d1&callback=?&count=8"
	var access_token = location.hash.split('=')[1];
	var html = ""

		$.ajax({
			type: "GET",
			dataType: "json",
			cache: false,
			url: apiurl,
			success: parseData
		});

html += "<h3>Pictures from the Orange County BOE:</h3>";

		function parseData(json){
			// console.log(json);

			$.each(json.data,function(i,data){



				html += "<img class='insta-img' src ='" + data.images.low_resolution.url + "' />";


			});

			// console.log(html);
			$("#results").append(html);

		}


 });
