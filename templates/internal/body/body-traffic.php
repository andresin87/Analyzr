<!--<h2 class="legend rediris">
  <span>Spain Rediris internet traffic map</span>, 2014<br>
</h2>-->
<div class="rediris" id="redirismap">
<!--<div style="position:absolute;left:-100px;top:0px;font-size:18px;">
  <input type="checkbox" id="voronoi"> <label for="voronoi">show Cells</label>
</div>-->
<!--<div style="position:absolute;left:-100px;top:20px;font-size:18px;">
  <input type="checkbox" id="traffic"> <label for="traffic">show Traffic Lines</label>
</div>-->
<script type="text/javascript">
	var w = 839,
	    h = 534,
	    centered;
		    
	var frequency = 1e3;
	var timelines = 2;
	var size = 600;
	var ticks = 8;
	var posX = w-size;
	var posY = h-500;
	var radio = 7;
	
	// convert 0..255 R,G,B values to binary string
	RGBToBin = function(r,g,b){
	    var bin = r << 16 | g << 8 | b;
	    return (function(h){
	        return new Array(25-h.length).join("0")+h
	    })(bin.toString(2))
	}
	 
	// convert 0..255 R,G,B values to a hexidecimal color string
	RGBToHex = function(r,g,b){
	    var bin = r << 16 | g << 8 | b;
	    return (function(h){
	        return new Array(7-h.length).join("0")+h
	    })(bin.toString(16).toUpperCase())
	}
	 
	// convert a 24 bit binary color to 0..255 R,G,B
	binToRGB = function(bin){
	    var pbin = parseInt(bin,2);
	    var r = pbin >> 16;
	    var g = pbin >> 8 & 0xFF;
	    var b = pbin & 0xFF;
	    return [r,g,b];
	}
	 
	// convert a hexidecimal color string to 0..255 R,G,B
	hexToRGB = function(hex){
	    var r = hex >> 16;
	    var g = hex >> 8 & 0xFF;
	    var b = hex & 0xFF;
	    return [r,g,b];
	}
	
	function nodesData(){
		var x = new XMLHttpRequest(); 
		x.open("GET","http://www.summitsofourlifes.com/project/templates/mediator.php?action=getActualGeneralNodeStatus",false);
		x.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=ISO-8859-1') 
		x.send();
		return JSON.parse(x.responseText);
		//return JSON.parse('<?php echo JSON::getActualGeneralNodeStatus() ?>');
	}
	var nData = nodesData();
	
	function linksData(){
		var x = new XMLHttpRequest(); 
		x.open("GET","http://www.summitsofourlifes.com/project/templates/mediator.php?action=getActualGeneralLinkStatus",false);
		x.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=ISO-8859-1') 
		x.send();
		return JSON.parse(x.responseText);
		//return JSON.parse('<?php echo JSON::getActualGeneralLinkStatus() ?>');
	}
	var lData = linksData();
	
	// Replace this with context.graphite and graphite.metric!
	function RandomValue(x) {
	  var value = 0,
	      values = [],
	      i = 0,
	      last;
	  return context.metric(function(start, stop, step, callback) {
	    start = +start, stop = +stop;
	    if (isNaN(last)) last = start;
	    while (last < stop) {
	      last += step;
	      value = Math.max(-10, Math.min(10, value + .8 * Math.random() - .4 + .2 * Math.cos(i += x * .02)));
	      values.push(value);
	    }
	    callback(null, values = values.slice((start - stop) / step));
	  }, x);
	}
	
	var cLevel = d3.scale.quantize().domain([100000,0]).range(['1','2','3','4','5','6','7','8','9']);
	function getLevel(d, dataArray){ return cLevel(dataArray[0][d.name]); }
	/*************
		00: 0
		7F: 128	+128
		BF: 192 +64
		DF: 224 +32
		FF:	256 +32
	*************/
	var cColor = d3.scale.quantize().domain([100000,0]).range(['#00FF00','#7FFF00','#BFFF00','#DFFF00','#FFFF00','#FFDF00','#FFBF00','#FF7F00','#FF0000']);
	function getColor(d, dataArray){
		//console.log(d);
		return cColor(dataArray[0][d.name]);
	}
	function name(d) { return d.name; }
	function tooltipClass(d){
		return "_tooltip " + name(d);
	}
	function classType(d, type){
		if(type=="node_circle")
			return type + " " + name(d);
		if(type=="link_line")
			return type + " " + name(d);
		if(type=="link_effect")
			return type + " " + name(d);
		else
			return name(d);
	}
	
	var projection = d3.geo.azimuthal()
	    .mode("equidistant")
	    .origin([-98, 38])
	    .scale(1400)
	    .translate([640, 360]);
	
	var path = d3.geo.path()
	    .projection(projection);
	    
	//var interpolateline = d3.svg.line()
	//    .x(function(d) { return d.x; })
	//    .y(function(d) { return d.y; })
	//    .interpolate("basis");
	
	var svg = d3.select("#redirismap").insert("svg:svg", "h2")
	    .attr("width", w)
	    .attr("height", h);
	
	var clicklayer = svg.append("svg:g")
	  .attr("class","clicklayer");
	clicklayer.append("svg:rect")
		.attr("class", "background")
		.attr("width", "1085")
		.attr("height", "699")
		.on("click", clicked);
	clicklayer.append("svg:rect")
		.attr("class", "mark")
		.attr("xmlns","http://www.w3.org/2000/svg")
		.attr("width", "271.534")
		.attr("height", "190")
		.attr("x", "10")
		.attr("y",10)
		.attr("style","fill-opacity:0.0;stroke:#FFFFFF;stroke-width:.4;stroke-linecap:square;stroke-linejoin:bevel;")
		.attr("transform","matrix(2.8,0,0,2.8,50,-27)");
	
	var states = clicklayer.append("svg:g")
	    .attr("id", "comunidades_autonomas")
	    .attr("transform","matrix(2.8,0,0,2.8,50,-27)");
	
	var cells = clicklayer.append("svg:g")
	    .attr("id", "cells");
	
	/****/
		
	var lines = clicklayer.append("svg:g")
	    .attr("id", "lines");
	
	var isp = clicklayer.append("svg:g")
	    .attr("id", "isp");
	
	var redirismapTrafficMenuSelector=false;
	d3.select("#redirismapTrafficMenuSelector").on("click", function() {
	  if(redirismapTrafficMenuSelector==false){
	  	redirismapTrafficMenuSelector=true;
	  	lines.classed("traffic", true);
	  	d3.select("#redirismapTrafficMenuSelector").classed("selected", true);
	  	d3.select("#button-lines").classed("pure-button-active", true);
	  }
	  else{
	  	d3.select("#redirismapTrafficMenuSelector").classed("selected", false);
	  	d3.select("#button-lines").classed("pure-button-active", false);
	  	lines.classed("traffic", false);
		redirismapTrafficMenuSelector=false;  
	  }
	  
	});
	
	var redirismapCellsMenuSelector=false;
	d3.select("#redirismapCellsMenuSelector").on("click", function() {
	  if(redirismapCellsMenuSelector==false){
	  	redirismapCellsMenuSelector=true;
	  	cells.classed("voronoi", true);
	  	d3.select("#redirismapCellsMenuSelector").classed("selected", true);
	  	d3.select("#button-cells").classed("pure-button-active", true);
	  }
	  else{
	  	d3.select("#redirismapCellsMenuSelector").classed("selected", false);
	  	d3.select("#button-cells").classed("pure-button-active", false);
	  	cells.classed("voronoi", false);
		redirismapCellsMenuSelector=false;  
	  }
	  
	});
	
	d3.json("/project/assets/json/rediris.json", function(collection) {
	  var countries = new Array();
	  var nodes = new Array();
	  var edges = new Array();
	  var traffic = new Array();
	  
	  countries = collection.svg;
	  nodes = collection.nodes;
	  edges = collection.edges;
	  		  			  
	  for(var i = 0; i<countries.length; i++ ){
	  	  var str;
	  	  var x = new XMLHttpRequest(); 
		  x.open("GET","http://www.summitsofourlifes.com/project/assets/svg/" + countries[i].img,false);
		  x.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=ISO-8859-1') 
		  x.send();
		  str = x.responseText; 
		  countries[i].svg = str;
	  }
	
	  states.selectAll("path")
	      .data(countries)
	    .enter().append("svg:g")
	      .attr("id", function(d){ return d.name; })
	      .attr("transform", function(d){ return d.transform; })
		  .html(function(d){ return d.svg; })
		  .on("click", clicked);
	  
	  
	  var isp_nodes = isp.selectAll("path")
	  	  .data(nodes)
	      .enter().append("svg:g");
	  //TOOLTIP ISP TEXT
	  var tooltip = isp_nodes
	    .append("svg:text")
	      .html(function(d){ return d.name; })
	      .attr("class",function(d){return tooltipClass(d) })
		  .attr("x", function(d){ return d.x - (radio + 3+this.getBBox().width)/2; })
		  .attr("y", function(d){ return d.y + (radio+this.getBBox().height)/2; })
		  .style("display", "none");
	  // Circle
	  isp_nodes
	    .append('circle')
	      .attr("class", function(d){return classType(d, "node_circle")})
	      .attr("cx", function(d){ return d.x - radio/2; })
		  .attr("cy", function(d){ return d.y + radio*3; })
	      .attr('r', radio)
	      .attr('stroke', function(d){
	          return(getColor(d, nData));
	        })
	      .attr('stroke-opacity', 0.5)
	      .attr('stroke-width', 1.5)
	      .attr('fill-opacity', 0)
	      .on("mouseover", function(){
	      		var c = this.className['baseVal'].split(" ");
		  		$("._tooltip."+c[1]).css('display','inline');
		  	})
		  //.on("mousemove", function(){return tooltip.style("top",(d3.event.pageY-radio)+"px").style("left",(d3.event.pageX+radio)+"px");})
		  .on("mouseout", function(){
			  var c = this.className['baseVal'].split(" ");
		  		$("._tooltip."+c[1]).css('display','none');
		  });
	      
	  var locationByNode = {};
	  var positions = new Array();
	  for(var i = 0; i<nodes.length; i++ ){
	  	 var location = [+nodes[i].x, +nodes[i].y];
	  	 positions.push((location));
	  	 locationByNode[nodes[i].name] = {x:nodes[i].x, y:nodes[i].y};
	  }
	  nodes.positions = positions;
	  var polygons = d3.geom.voronoi(nodes.positions);
	  //console.log(locationByNode);
	  
	  //console.log(nodes);
	  var g = cells.selectAll("#cells")
	      .data(nodes);

	  g.enter().append("svg:path")
	      .attr("class", "cell")
	      .attr("d", function(d, i) { return "M" + polygons[i].join("L") + "Z"; });
	  
	  for(i = 0; i<edges.length; i++ ){
	  	var pathinfo = {};
	    //console.log(edges[i].name, edges[i].dest);
	  	pathinfo = {"name":edges[i].name+"-"+edges[i].dest, "0":[locationByNode[edges[i].name], locationByNode[edges[i].dest]]};
	  	//console.log(edges.length + "-->" + i + ": (" + pathinfo[i][0].x + "," + pathinfo[i][0].y + ") (" + pathinfo[i][1].x + "," + pathinfo[i][1].y + ") "+ d3line(pathinfo[i]));
	  	traffic[i] = pathinfo;
	  }
	  
	  
	  /*********	LINES	*********/

      var h = lines.selectAll("#lines");
        h.data(traffic)
        .enter().append("svg:path")
          .attr("class", function(d){return classType(d, "link_effect") })
          .attr('d', function(d){
          	//console.log("M " + (d[0][0].x - radio/2) + " " + (d[0][0].y + radio * 3) + " L " + ((d[0][1].x - d[0][0].x)/2 + d[0][0].x - radio/2) + " " + ((d[0][1].y - d[0][0].y)/2 + d[0][0].y + radio * 3));
          	return "M " + (d[0][0].x - radio/2) + " " + (d[0][0].y + radio * 3) + " L " + ((d[0][1].x - d[0][0].x)/2 + d[0][0].x - radio/2) + " " + ((d[0][1].y - d[0][0].y)/2 + d[0][0].y + radio * 3);
          	})
	      .style('stroke', function(d){
	          return(getColor(d, lData));
	        });
        h.data(traffic)
	    .enter().append("svg:line")
	      //.attr("class", "line")
	      .attr("class", function(d){return classType(d, "link_line") })
	      .attr("x1", function(d) { return d[0][0].x - radio/2 })
	      .attr("y1", function(d) { return d[0][0].y + radio * 3})
	      .attr("x2", function(d) { return (d[0][1].x - d[0][0].x)/2 + d[0][0].x - radio/2})
	      .attr("y2", function(d) { return (d[0][1].y - d[0][0].y)/2 + d[0][0].y + radio * 3})
	      .style('stroke', function(d){
	          return(getColor(d, lData));
	        });
	      

	});	// End of d3.json
	
	function clicked(d) {
	  var x, y, k;
	  console.log(d);
	  var el = HTMLtoXML(d.svg);
	  dom = (new DOMParser()).parseFromString(el, "text/xml");
	  d=dom;
	  //d=document.createElement(d.svg);
	  console.log(dom);
	  console.log("clicked");
	  if (d && centered !== d) {
	    var centroid = path.centroid(d);
	    x = centroid[0];
	    y = centroid[1];
	    k = 4;
	    centered = d;
	  } else {
	    x = w / 2;
	    y = h / 2;
	    k = 1;
	    centered = null;
	  }
	
	  states.selectAll("g")
	      .classed("active", centered && function(d) { return d === centered; });
	
	  clicklayer.transition()
	      .duration(750)
	      .attr("transform", "translate(" + w / 2 + "," + h / 2 + ")scale(" + k + ")translate(" + -x + "," + -y + ")")
	      .style("stroke-width", 1.5 / k + "px");
	}
	
	d3.timer(function(elapsed) {
		var link_effect = d3.selectAll(".link_effect")
		for(var i = 0; i< link_effect[0].length; i++){
			var temp = d3.select(link_effect[0][i]);
			//console.log(temp.data()[0]);
			temp.attr("stroke-dasharray", function(){  return Math.sqrt(Math.pow((temp.data()[0][0][1].x-temp.data()[0][0][0].x), 2)+Math.pow(temp.data()[0][0][1].y-temp.data()[0][0][0].y, 2))/(2*10) ; });
			temp.attr("stroke-dashoffset", function(){ return (-(elapsed * (12-getLevel(temp.data()[0], lData)) /1000 ))%Math.sqrt(Math.pow((temp.data()[0][0][1].x-temp.data()[0][0][0].x), 2)+Math.pow(temp.data()[0][0][1].y-temp.data()[0][0][0].y, 2)); });
		}
		//console.log(link_effect);
	});
	
	var duration = 1000, last = 0, t=0, t_last=0;
	d3.timer(function(elapsed) {
	    t = (t + (elapsed - last) / duration) % 1;
	    last = elapsed;
	    //console.log("last: "+last+" t: "+t);
	    if(t<t_last)
	    	update(elapsed);
	    t_last = t;
	});
	
	function update(elapsed){
		var s = nodesData();
		var t = linksData();
		
		d3.selectAll(".node_circle").transition()
		.duration(duration)
		.each("start", function(){
			var temp = d3.select(this);
			var parentTemp = d3.select(this.parentNode);
			var actualColor = temp.attr('stroke');
			var cCol = getColor(temp.data()[0], s);
			if(actualColor!=cCol){	// Si cambia el elemento de estado
				temp.attr('stroke', function(d){
				  return(getColor(d, s));
				});
				circleTemp = parentTemp.insert('circle', ':first-child')
			      .attr("cx", function(d){ return d.x - 7/2; })
				  .attr("cy", function(d){ return d.y + 7*3; })
			      .attr('r', 1)
			      .attr('stroke', function(d){
			          return(getColor(d, s));
			        })
			      .attr('fill-opacity', 0)
			      .attr('stroke-opacity', 0.5)
			      .attr('stroke-width', 7)
			      .transition()
			      	.duration(duration/2)
			        .attr('stroke-width', 1)
			        .attr("r", 7)
			        .transition()
			        .duration(duration/2)
			        .attr("stroke-width",7)
			        .attr("r", 1)
			        .ease('sine');
			    circleTemp.transition()
			    	.delay(duration)
			    	.remove();
			    	
				
			}
			else{	// Si no cambia de estado el elemento
				circleTemp = parentTemp.insert('circle', ':first-child')
			      .attr("cx", function(d){ return d.x - 7/2; })
				  .attr("cy", function(d){ return d.y + 7*3; })
			      .attr('r', 1)
			      .attr('stroke', "#00FFFF")
			      .attr('fill-opacity', 0)
			      .attr('stroke-opacity', 0.2)
			      //.attr('fill', function(d){
			      //    return(getColor(d, nData));
			      //  })
			      //.attr('stroke-opacity', 0.5)
			      .attr('stroke-width', 5.5)
			      //.attr('fill-opacity', 1)
			      .transition()
			      	.duration(500)
			        .attr('stroke-width', 1)
			        .attr("r", 5.5)
			        .transition()
			        .duration(500)
			        .attr("stroke-width",5.5)
			        .attr("r", 1)
			        .ease('sine');
			    circleTemp.transition()
			    	.delay(duration/2)
			    	.remove();
			}
			
		});
	  
        d3.selectAll(".link_line").transition()
        .duration(duration)
        .each("start", function(){
        	var temp = d3.select(this);
        	//var parentTemp = d3.select(this.parentNode);
			var actualColor = temp[0][0].style.stroke;
			var cCol = getColor(temp.data()[0], t);
			//if(temp.data()[0].name=="GAL-UVA"){
				//console.log(temp);
				//console.log(temp[0][0].style.stroke);
				//console.log(parseInt(cCol.substr(1, 6),16));
				//console.log(hexToRGB(parseInt(cCol.substr(1, 6),16))[0]);
				//console.log("rgb("+hexToRGB(parseInt(cCol.substr(1, 6),16))[0]+", "+hexToRGB(parseInt(cCol.substr(1, 6),16))[1]+", "+hexToRGB(parseInt(cCol.substr(1, 6),16))[2]+")");
				//console.log(temp.data()[0]);
				//console.log(parentTemp);
			//}
			//console.log("actualColor: "+actualColor+" cCol: "+cCol);
			if(actualColor!="rgb("+hexToRGB(parseInt(cCol.substr(1, 6),16))[0]+", "+hexToRGB(parseInt(cCol.substr(1, 6),16))[1]+", "+hexToRGB(parseInt(cCol.substr(1, 6),16))[2]+")"){	// Si cambia el elemento de estado
				temp.style('stroke', function(d){
		          return(getColor(d, t));
		        });
		        /*
		        lineEffect = parentTemp.insert("svg:path",':first-child')
		          .data(temp.data())
		          .attr("class", "link_effect" )
		          .attr('d', function(d){
		          	//console.log("M " + (d[0][0].x - radio/2) + " " + (d[0][0].y + radio * 3) + " L " + ((d[0][1].x - d[0][0].x)/2 + d[0][0].x - radio/2) + " " + ((d[0][1].y - d[0][0].y)/2 + d[0][0].y + radio * 3));
		          	return "M " + (d[0][0].x - radio/2) + " " + (d[0][0].y + radio * 3) + " L " + ((d[0][1].x - d[0][0].x)/2 + d[0][0].x - radio/2) + " " + ((d[0][1].y - d[0][0].y)/2 + d[0][0].y + radio * 3);
		          	})
			      .style('stroke', function(d){
			          return(getColor(d, t));
			        })
			      .transition()
			    	.delay(60*1000)
			    	.remove();
		        console.log("Change line color!");
		        */
	        }
	    });
	    d3.selectAll(".link_effect").transition()
        .duration(duration)
        .each("start", function(){
        	var temp = d3.select(this);
			var actualColor = temp[0][0].style.stroke;
			var cCol = getColor(temp.data()[0], t);
			if(actualColor!="rgb("+hexToRGB(parseInt(cCol.substr(1, 6),16))[0]+", "+hexToRGB(parseInt(cCol.substr(1, 6),16))[1]+", "+hexToRGB(parseInt(cCol.substr(1, 6),16))[2]+")"){	// Si cambia el elemento de estado
				temp.style('stroke', function(d){
		          return(getColor(d, t));
		        });
		       }
	    });

	}
</script>
