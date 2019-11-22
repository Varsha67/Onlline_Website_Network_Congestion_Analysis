<?php
 
$dataPoints = array(

	array("y" => 765, "label" => "30-12-2018"),
	array("y" => 735, "label" => "22-12-2018"),
	array("y" => 678, "label" => "12-12-2018"),
	array("y" => 654, "label" => "05-12-2018"),
	array("y" => 567, "label" => "17-11-2018"),
	array("y" => 567, "label" => "15-08-2018"),
	array("y" => 543, "label" => "14-08-2018"),
	array("y" => 456, "label" => "30-12-2018"),
	array("y" => 456, "label" => "22-12-2018"),
	array("y" => 435, "label" => "12-12-2018"),
	array("y" => 345, "label" => "05-12-2018"),
	array("y" => 345, "label" => "17-11-2018"),
	array("y" => 234, "label" => "15-08-2018"),
	array("y" => 234, "label" => "14-08-2018"),
	array("y" => 765, "label" => "30-12-2018"),
	array("y" => 234, "label" => "22-12-2018"),
	array("y" => 234, "label" => "12-12-2018"),
	array("y" => 234, "label" => "05-12-2018"),
	array("y" => 234, "label" => "17-11-2018"),
	array("y" => 123, "label" => "15-08-2018"),
	array("y" => 123, "label" => "14-08-2018"),
	array("y" => 101, "label" => "30-12-2018"),
	array("y" => 345, "label" => "22-12-2018"),
	array("y" => 349, "label" => "12-12-2018"),
	array("y" => 435, "label" => "05-12-2018"),
	array("y" => 456, "label" => "17-11-2018"),
	array("y" => 500, "label" => "15-08-2018"),
	array("y" => 543, "label" => "14-08-2018"),
	array("y" => 564, "label" => "30-12-2018"),
	array("y" => 586, "label" => "22-12-2018"),
	array("y" => 635, "label" => "12-12-2018"),
	array("y" => 645, "label" => "05-12-2018"),
	array("y" => 654, "label" => "17-11-2018"),
	array("y" => 654, "label" => "15-08-2018"),
	array("y" => 687, "label" => "29-05-2018"),
	array("y" => 694, "label" => "30-05-2018"),
	array("y" => 723, "label" => "09-05-2018"),
	array("y" => 765, "label" => "30-04-2018"),
	array("y" => 765, "label" => "27-04-2018"),
	array("y" => 768, "label" => "19-04-2018"),
	array("y" => 804, "label" => "08-04-2018"),
	array("y" => 875, "label" => "14-08-2018"),
	array("y" => 785, "label" => "30-12-2018"),
	array("y" => 777, "label" => "22-12-2018"),
	array("y" => 771, "label" => "12-12-2018"),
	array("y" => 765, "label" => "05-12-2018"),
	array("y" => 745, "label" => "17-11-2018"),
	array("y" => 666, "label" => "15-08-2018"),
	array("y" => 589, "label" => "14-08-2018"),
	array("y" => 564, "label" => "30-12-2018"),
	array("y" => 555, "label" => "22-12-2018"),
	array("y" => 547, "label" => "12-12-2018"),
	array("y" => 544, "label" => "05-12-2018"),
	array("y" => 471, "label" => "17-11-2018"),
	array("y" => 456, "label" => "15-08-2018"),
	array("y" => 453, "label" => "14-08-2018"),
	array("y" => 423, "label" => "30-12-2018"),
	array("y" => 344, "label" => "22-12-2018"),
	array("y" => 342, "label" => "12-12-2018"),
	array("y" => 341, "label" => "05-12-2018"),
	array("y" => 333, "label" => "17-11-2018"),
	array("y" => 234, "label" => "15-08-2018"),
	array("y" => 434, "label" => "14-08-2018"),
	array("y" => 443, "label" => "30-12-2018"),
	array("y" => 445, "label" => "22-12-2018"),
	array("y" => 445, "label" => "12-12-2018"),
	array("y" => 445, "label" => "05-12-2018"),
	array("y" => 555, "label" => "17-11-2018"),
	array("y" => 564, "label" => "15-08-2018"),
	array("y" => 564, "label" => "14-08-2018"),
	array("y" => 564, "label" => "30-12-2018"),
	array("y" => 564, "label" => "22-12-2018"),
	array("y" => 567, "label" => "12-12-2018"),
	array("y" => 567, "label" => "05-12-2018"),
	array("y" => 567, "label" => "17-11-2018"),
	array("y" => 576, "label" => "15-08-2018"),
	array("y" => 655, "label" => "14-08-2018"),
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	axisX: {
		title: "Dates"
	},

	axisY: {
		title: "Traffic"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>  