$(document).ready(function(){
	s.ajax({
		url: "http://localhost/network/Networkcongestion/.idea/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var Time = [];
			var Traffic = [];

			for(var i in data){
				Time.push("Time " + data[i].Time);
				Traffic.push(data[i].Traffic);
			}

			var chardata = {
				labels:Time,
				datasets:[
				{
					label : 'Time Traffic',
					fill: false,
					lineTension: 0.1,
					backgroundColor: 'rgba(29,202,255,0.75)',
					borderColor: 'rgba(29, 202,255,1)',
					pointHoverBackgroundColor: 'rgba(29,202,255,)',
					pointHoverBackgroundColor: 'rgba(29,202,255,1)',
					data:Traffic
				}


				]

			};
			var ctx = $("mycanvas");

			var LineGarph = new Chart(ctx,{ 
				type :'line'
				data: chardata
			 });

		},
		error: function(data) 
			
		
	});
});