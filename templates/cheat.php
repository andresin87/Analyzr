<!DOCTYPE html>
<?php require( "../templates/config.php" );?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Cheat</title>

        <!-- Import Cubism and its dependency D3 -->
        <script type="text/javascript" src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <style>
			.bar {  fill: steelblue;	}
			.bar:hover {	 fill: brown;	}
			.axis {	  font: 10px sans-serif;	}
			.axis path,
			.axis line {
			  fill: none;
			  stroke: #000;
			  shape-rendering: crispEdges;
			}
			.x.axis path {  display: none; background-color: 	}
			
			.btn{
				width:40px;
				height: 15px;
				background-color: rgba(0,0,0,0.25);
				margin: 1px;
				float: left;
				font-family: sans-serif;
				font-size: 8px;
				text-align: center;
				padding-top: 5px;
			}
			.btn.active{
				background-color: rgba(255,200,90,0.1)
			}
			.btn:hover{
				background-color: rgba(255,223,97,0.5)
			}
			#line{
				float: left;
			}
		</style>
    </head>
    <body>
    	<script type="text/javascript">
    		function sleep(milliseconds) {
			  var start = new Date().getTime();
			  for (var i = 0; i < 1e7; i++) {
			    if ((new Date().getTime() - start) > milliseconds){
			      break;
			    }
			  }
			}
			
    		$(function() {
	    		$('.btn').on('click', function() {
	    		//function switchfunc(){
		    		$('.btn.active').toggleClass("active");
		    		var central = $(this).addClass("active");
		    		//var central = $(this).innerHTML;
		    		//console.log(central[0].innerHTML);
		    		
		    		action = "getListBySid";
					values = central[0].innerHTML;
					
					var parametros = {
			            action: action,
			            values: values
			    	};
			    	//console.log(parametros);
				      
			    	first = true;
	    		});
	    	});
    	</script>
    	<div id="line">
	    	<div class="btn active">GAL</div>
	    	<div class="btn">AST</div>
	    	<div class="btn">CAB</div>
	    	<div class="btn">UVA</div>
	    	<div class="btn">CYL</div>
	    	<div class="btn">PAV</div>
	    	<div class="btn">NAV</div>
	    	<div class="btn">RIO</div>
	    	<div class="btn">UNIZAR</div>
	    	<div class="btn">ARA</div>
	    	<div class="btn">CAT</div>
	    	<div class="btn">CIEMAT</div>
	    	<div class="btn">TELMAD</div>
	    	<div class="btn">MAD</div>
	    	<div class="btn">BAL</div>
	    	<div class="btn">UIB</div>
	    	<div class="btn">UV</div>
	    	<div class="btn">EXT</div>
	    	<div class="btn">CLM</div>
	    	<div class="btn">VAL</div>
	    	<div class="btn">MUR</div>
	    	<div class="btn">AND</div>
	    	<div class="btn">CICA</div>
	    	<div class="btn">CAN-L</div>
	    	<div class="btn">ULPGC</div>
	    	<div class="btn">IAC</div>
	    	<div class="btn">CAN-T</div>
    	</div>
		<div id="demo"></div>
        <script type="text/javascript">
    		var action = "getListBySid";
    		var values = "GAL";
    		var parametros;
    		
    		var NewData;
        	function answer(r){
        		console.log(r);
        		NewData = null;
        		NewData = r["respuesta"];
        		//console.log(NewData);
		        return r;
		    }
		    
		    function error(e){
		        alert('Ocurrió un error al realizar la petición: '+e.statusText);
		    }
			
        	var parametros = {
	            action: action,
	            values: values
	    	};
	    	
        	var post = $.post("http://www.summitsofourlifes.com/project/templates/mediator.php", parametros, answer, 'json');
        	post.error(error);
        	
            var data = {
			  "0": 0.08167,
			  "1": 0.01492,
			  "2": 0.02782,
			  "3": 0.04253,
			  "4": 0.12702,
			  "5": 0.02288,
			  "6": 0.02015,
			  "7": 0.06094,
			  "8": 0.06966,
			  "9": 0.00153,
			  "10": 0.00772,
			  "11": 0.04025,
			  "12": 0.02406,
			  "13": 0.06749,
			  "14": 0.07507,
			  "15": 0.01929,
			  "16": 0.00095,
			  "17": 0.05987,
			  "18": 0.06327,
			  "19": 0.09056,
			  "20": 0.02758,
			  "21": 0.00978,
			  "22": 0.02360,
			  "23": 0.00150,
			  "24": 0.08167,
			  "25": 0.01492,
			  "26": 0.02782,
			  "27": 0.04253,
			  "28": 0.12702,
			  "29": 0.02288,
			  "30": 0.02015,
			  "31": 0.06094,
			  "32": 0.06966,
			  "33": 0.00153,
			  "34": 0.00772,
			  "35": 0.04025,
			  "36": 0.02406,
			  "37": 0.06749,
			  "38": 0.07507,
			  "39": 0.01929,
			  "40": 0.00095,
			  "41": 0.05987,
			  "42": 0.06327,
			  "43": 0.09056,
			  "44": 0.02758,
			  "45": 0.00978,
			  "46": 0.02360,
			  "47": 0.00150,
			  "48": 0.02288,
			  "49": 0.02015,
			  "50": 0.06094,
			  "51": 0.06966,
			  "52": 0.00153,
			  "53": 0.00772,
			  "54": 0.04025,
			  "55": 0.02406,
			  "56": 0.06749,
			  "57": 0.07507,
			  "58": 0.01929,
			  "59": 0.00095
			}
			//console.log(data);
			//xconsole.log(NewData);
        	var margin = {top: 20, right: 20, bottom: 30, left: 40},
			    width = 1200 - margin.left - margin.right,
			    height = 500 - margin.top - margin.bottom;
			
			var x = d3.scale.ordinal()
			    .rangeRoundBands([0, width], .1);
			
			var y = d3.scale.linear()
			    .range([height, 0]);
			
			var xAxis = d3.svg.axis()
			    .scale(x)
			    .orient("bottom");
			
			var yAxis = d3.svg.axis()
			    .scale(y)
			    .orient("left")
			    .ticks(10, "%");
			
			var svg = d3.select("body").append("svg")
			    .attr("width", width + margin.left + margin.right)
			    .attr("height", height + margin.top + margin.bottom)
			  .append("g")
			    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");
			
			  var letters = new Array();
			  var freq = new Array();
			  for(var name in data) {
				    letters.push(name);
				    freq.push(data[name]);
				}
				
			  x.domain(letters.map(function(d) { return d; }));
			  y.domain([0, d3.max(freq, function(d) { return d; })]);
			  
			  data = new Array();
			  for(var i=0; i<freq.length;i++){
				  var sample = new Object();
				  sample.frequency = freq[i];
				  sample.letter = letters[i];
				  //console.log(sample);
				  data.push(sample);
			  }
			  //data = new Object();
			  //data.frequency = freq;
			  //data.letter = letters;
			  //console.log(data);
			
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
			      .text("Frequency");
			 
			  svg.selectAll(".bar")
			      .data(data)
			    .enter().append("rect")
			      .attr("class", "bar")
			      .attr("x", function(d,i) { return x(d.letter); })
			      .attr("width", x.rangeBand())
			      .attr("y", function(d) { return y(d.frequency); })
			      .attr("height", function(d) { return height - y(d.frequency); });
			
			
			function type(d) {
			  d.frequency = +d.frequency;
			  return d;
			}
			
			var interval = 60000; // one second
			var first = true;
			var makeCallback = function() {
				return function() {
					if( NewData.length == 60){
						first=false;
					    // note that we're returning a new callback function each time
					    
				        //console.log(NewData);
				        //var post = $.post("http://www.summitsofourlifes.com/project/templates/mediator.php", parametros, answer, 'json');
						//post.error(error);
				        data = new Array();
						for(var i=0; i<freq.length;i++){
							var sample = new Object();
							freq[i] = NewData[i][1]/100000;
							sample.frequency = NewData[i][1]/100000;
							sample.letter = letters[i];
							//console.log(sample);
							data.push(sample);
						}
						//console.log(NewData);
						
						//x.domain(letters.map(function(d) { return d; }));
						y.domain([0, d3.max(freq, function(d) { return d; })]);
						
						svg.selectAll("g .y.axis")
						  .transition()
						  .duration(1000) 
						  .call(yAxis);
						
						svg.selectAll("rect") 
					      .data(data)
					      .transition()
						  .duration(1000)
					      .attr("y", function(d) { return y(d.frequency); })
					      .attr("height", function(d) { return height - y(d.frequency); });
						//console.log(data);
						//console.log(true);
				        d3.timer(makeCallback(),interval);
				        action = "getLastBySid";
					    
				    }
					else{
			        	var temp = data;
			        	data = new Array();
			        	for(var i=0; i<freq.length-1;i++){
							var sample = new Object();
							freq[i] = freq[i+1];
							sample.frequency = temp[i+1].frequency;
							sample.letter = letters[i+1];
							//console.log(sample);
							data.push(sample);
						}
						//console.log(data);
						//console.log(NewData);
						var sample = new Object();
						freq[i] = freq[i+1];
						sample.frequency = NewData[0][1]/100000;
						sample.letter = data[data.length-1].letter+1%60;
						data.push(sample);
						
						y.domain([0, d3.max(freq, function(d) { return d; })]);
						
						svg.selectAll("g .y.axis")
						  .call(yAxis);
						
						svg.selectAll("rect")
					      .data(data)
					      .attr("y", function(d) { return y(d.frequency); })
					      .attr("height", function(d) { return height - y(d.frequency); });
									        	
				    	//console.log(false);
				    	d3.timer(makeCallback(),interval);
				    }
			    var parametros = {
		            action: action,
		            values: values
		    	};
			    var post = $.post("http://www.summitsofourlifes.com/project/templates/mediator.php", parametros, answer, 'json');
			    post.error(error);
			    return true;
			    }
			};
			
			d3.timer(makeCallback(),interval);
			
        </script>
    </body>
</html>