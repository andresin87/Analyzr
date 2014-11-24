<?php require( "../../templates/config.php" );?>
<!DOCTYPE html>
<meta charset="utf-8">
<style>

body {
  font: 10px sans-serif;
}

.axis path,
.axis line {
  fill: none;
  stroke: #000;
  shape-rendering: crispEdges;
}

.area {
  fill: steelblue;
}

</style>
<body>
<script src="http://d3js.org/d3.v3.js"></script>
<script>

var margin = {top: 20, right: 20, bottom: 30, left: 50},
    width = 960 - margin.left - margin.right,
    height = 500 - margin.top - margin.bottom;

var interval = 1000;	// 1sec
var date = new Date();
var limitMeasure = 60	// 60 sec in a minute

var dataOutput = new Array();

var parseDate = d3.time.format("%a %b %d %Y %H:%M:%S GMT%Z (CEST)").parse;

var x = d3.time.scale()
    .range([0, width]);

var y = d3.scale.linear()
    .range([height, 0]);

var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom");

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left");

var area = d3.svg.area()
    .x(function(d) { return x(d.date); })
    .y0(height)
    .y1(function(d) { return y(d.close); });

var svg = d3.select("body").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

d3.json("../../templates/mediator.php?action=getListBySid&values=GAL", function(error, data) {
  //console.log("date:"+date.getTime());
  dataOutput['date'] = new Array();
  dataOutput['close'] = new Array();
  var i;
  for(i=0; i<limitMeasure; i++){
		//console.log(date.getTime());
		//console.log(date.getTime()-((limitMeasure-i)*interval));
		//console.log(Date(date.getTime()-((limitMeasure-i)*interval)));
		//console.log(parseDate(Date(date.getTime()-((limitMeasure-i)*interval))));
		//var temp = new Array();
		//temp['date']=parseDate(Date(date.getTime()-((limitMeasure-i)*interval)));
		//temp['close']=data[i][1];
		//dataOutput[i]= temp;
		console.log(date.getTime()-((limitMeasure-i)*interval));
		console.log(tempdate);
		var tempdate = new Date(date.getTime()-((limitMeasure-i)*interval));
		dataOutput['date'][i] = parseDate(tempdate);
		dataOutput['close'][i] = data[i][1]/1000;
  }
  console.log(dataOutput);
  
  //data.forEach(function(d) {
  //  d.date = parseDate(d.date);
  //  d.close = +d.close;
  //});

  x.domain(d3.extent(dataOutput, function(d) { return d.date; }));
  y.domain([0, d3.max(dataOutput, function(d) { return d.close; })]);

  svg.append("path")
      .datum(dataOutput)
      .attr("class", "area")
      .attr("d", area);

  svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
      .call(xAxis);

  svg.append("g")
      .attr("class", "y axis")
      .call(yAxis)
    .append("text")
      .attr("transform", "rotate(-90)")
      .attr("y", 6)
      .attr("dy", ".71em")
      .style("text-anchor", "end")
      .text("Price ($)");
});

</script>