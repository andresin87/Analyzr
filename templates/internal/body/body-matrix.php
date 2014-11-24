<div id="chart"></div>

<script type="text/javascript">
  var o = Object();
  
  function getTheRectBorder(px0,py0,width,height,radius){
	  x0 = px0+width/2;
	  y0 = py0;
	  return (
		  " M " + (x0) + "," + (y0) +
		  " L " + (px0+width/2+width/2-radius) + "," + (py0) +
		  " a " + radius + "," + radius + " 0 0,1 " + radius + "," + radius +
		  " L " + (px0+width) + "," + (py0+height-radius) +
		  " a " + radius + "," + radius + " 0 0,1 " + -radius + "," + radius +
		  " L " + (px0+radius) + "," + (py0+height) +
		  " a " + radius + "," + radius + " 0 0,1 " + -radius + "," + -radius +
		  " L " + (px0) + "," + (py0+radius) +
		  " a " + radius + "," + radius + " 0 0,1 " + radius + "," + -radius +
		  " L " + (x0) + "," + (y0)
	  );
  }
  
  function getRectPerimeter(width, height, radius){
	  return (2*Math.PI*radius+2*width+2*height);
  }
  
  function getKeys(obj) {
    var r = []
    for (var k in obj) {
        if (!obj.hasOwnProperty(k)) 
            continue;
        r.push(k);
    }
    return r;
  }
  function getKeysByVal(obj, value) {
    var r = []
    for (var k in obj) {
        if (!obj.hasOwnProperty(k)) 
            continue;
        if(obj[k]==value){
        	r.push(k);
        }
    }
    return r;
  }
  var margin = { top: 50, right: 20, bottom: 100, left: 50 },
      width = 800 - margin.left - margin.right,
      height = 880 - margin.top - margin.bottom,
      gridSize = Math.floor(width / 27),
      buckets = 21,
      legendElementWidth = width / buckets,
      //colors = ["#ffffd9","#edf8b1","#c7e9b4","#7fcdbb","#41b6c4","#1d91c0","#225ea8","#253494","#081d58"]; // alternatively colorbrewer.YlGnBu[9]
      colors = ["rgb(0,220,255)","rgb(0,220,243)","rgb(0,220,231)","rgb(0,220,220)","rgb(0,225,220)","rgb(0,230,220)","rgb(0,235,220)","rgb(0,240,220)","rgb(0,245,220)","rgb(0,250,220)", "rgb(0,255,220)", "rgb(32,255,168)", "rgb(64,255,116)", "rgb(128,255,64)", "rgb(192,255,12)", "rgb(255,255,0)", "rgb(255,210,0)", "rgb(255,170,0)", "rgb(255,130,0)", "rgb(255,90,0)", "rgb(255,50,0)"]; // alternatively colorbrewer.YlGnBu[9]
	  var ISPs;
	  function setISP(data){
		  ISPs=data;
	  }
  var nodes = Array();
    d3.json("/project/assets/json/rediris.json", function(data) {
  		setISP(data);
  		for (var i = 0; i < data['nodes'].length; i++){
	  		nodes[i]=data['nodes'][i].name;
  		}
  		//console.log(nodes);
  	});
  
  function nodesData(){
		var x = new XMLHttpRequest(); 
		x.open("GET","http://www.summitsofourlifes.com/project/templates/mediator.php?action=getActualGeneralNodeStatus",false);
		x.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=ISO-8859-1') 
		x.send();
		return JSON.parse(x.responseText);
		//return JSON.parse('<?php echo JSON::getActualGeneralNodeStatus() ?>');
	}
	
	var x = new XMLHttpRequest(); 
	x.open("GET","http://www.summitsofourlifes.com/project/templates/mediator.php?action=getActualGeneralNodeStatus",false);
	x.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=ISO-8859-1') 
	x.send();
	o.nData = JSON.parse(x.responseText)[0];

	
	function linksData(){
		var x = new XMLHttpRequest(); 
		x.open("GET","http://www.summitsofourlifes.com/project/templates/mediator.php?action=getActualGeneralLinkStatus",false);
		x.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=ISO-8859-1') 
		x.send();
		return JSON.parse(x.responseText);
		//return JSON.parse('<?php echo JSON::getActualGeneralLinkStatus() ?>');
	}
	
	console.log(o);
	
	x.open("GET","http://www.summitsofourlifes.com/project/templates/mediator.php?action=getActualGeneralLinkStatus",false);
	x.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=ISO-8859-1') 
	x.send();
	o.lData = JSON.parse(x.responseText)[0];
	
	function getPosition(Node){
  	  if(o.nData.hasOwnProperty(Node)){
	  	  pos = getKeysByVal(o.nData,o.nData[Node]);
	  	  for(var i = pos.length/2; i<pos.length; i++){
		  	  if(pos[i]==Node)
		  	  	return pos[parseInt(i/2)];
	  	  }
  	  }
	  return undefined;
	}
	function getLinkPosition(origin, destination){
		var x = getPosition(origin);
		var y = getPosition(destination);
		//console.log("o-d:" + origin + "-" + destination + " --> " + x + " * " + Object.keys(o.nData).length / 2 + " + " + y + " = " + (x*Object.keys(o.nData).length/2)+y);
		//var result = (x * (Object.keys(o.nData)).length/2);
		//console.log(parseInt(result)+parseInt(y));
		return (parseInt(x * (Object.keys(o.nData)).length/2) + parseInt(y));
	}
	function separeOriginDestination(origin_destination){
		var keys = Object.keys(o.nData);
		var realKeys=Array();
		var result = Array();
		for(var i = Object.keys(o.nData).length/2; i<Object.keys(o.nData).length; i++){
			realKeys.push(keys[i]);
			if(origin_destination.match(keys[i])!=null){
				if(origin_destination.match(keys[i]).index==0)
					result[0]=keys[i];
				else{
					result[1]=keys[i];
				}
			}
		}
		//console.log(realKeys);
		//console.log("AST-GAL".match("GAL"));
		//return getLinkPosition(origin,destination);
		return result;
	}
	
	function updateLinks(){
		var temp = Array();
		var keys = Object.keys(o.nData);
		var x = 0, y = 0;    
		for(var i = 0; i<Object.keys(o.nData).length/2*Object.keys(o.nData).length/2; i++){
		  	var oTemp = Object();
		  	oTemp.link=keys[Object.keys(o.nData).length/2+x]+"-"+keys[Object.keys(o.nData).length/2+y];
		  	oTemp.origin = keys[Object.keys(o.nData).length/2+x];
		  	oTemp.destination = keys[Object.keys(o.nData).length/2+y];
		  	oTemp.value = 0;
			  temp[x*Object.keys(o.nData).length/2+y] = oTemp;
			  if(x==y){
			  	temp[x*Object.keys(o.nData).length/2+y].value = null;
			  }
			  //console.log(keys[Object.keys(o.nData).length/2+x]+"-"+keys[Object.keys(o.nData).length/2+y]);
			  if(x==Object.keys(o.nData).length/2 - 1 && y==Object.keys(o.nData).length/2 - 1){
			  	  o.links = temp;
				  break;
			  }
			  y++;
			  if(y==Object.keys(o.nData).length/2)
			  {	x++; y=0; }
		  }
		  keys = Object.keys(o.lData);
		  for(var i = keys.length/2; i<keys.length; i++){
		    //console.log(keys[i]);
		    var t = separeOriginDestination(keys[i]);
		    //console.log(t);
		    //console.log(getLinkPosition(t[0],t[1]));
		    if(getLinkPosition(t[0],t[1])){
		    	//console.log(getLinkPosition(t[0],t[1]));
		    	o.links[getLinkPosition(t[0],t[1])].value=o.lData[keys[i]]/1000;
		    }
		    //console.log(o.links[getLinkPosition(keys[i])]);
		}
	}
	//console.log(getPosition("CIEMAT"));
  d3.json("/project/assets/json/data.json", function(d) {
    	
  		var data = d;
  		
  		o.origin = data;
  		
      var colorScale = d3.scale.quantile()
          .domain([0, 100])
          .range(colors);

      var svg = d3.select("#chart").append("svg")
          .attr("width", width + margin.left + margin.right)
          .attr("height", height + margin.top + margin.bottom)
          .append("g")
          .attr("transform", "translate(" + margin.left + "," + margin.top + ")");
      
      
      updateLinks();
      
	  console.log(o);
      var dayLabels = svg.selectAll(".dayLabel")
          .data(nodes)
          .enter().append("text")
            .text(function (d) { return d; })
            .attr("x", 0)
            .attr("y", function (d, i) { return i * gridSize; })
            .style("text-anchor", "end")
            .attr("transform", "translate(-6," + gridSize / 1.5 + ")")
            .attr("class", function (d, i) { return ((i >= 0 && i <= 4) ? "mono axis axis-workweek" : "mono axis"); });

      var timeLabels = svg.selectAll(".timeLabel")
          .data(nodes)
          .enter().append("text")
            .text(function(d) { return d; })
            .attr("y", function(d, i) { return 6+(i * gridSize); })
            .attr("x", 0)
            .style("text-anchor", "start")
            .attr("transform", "translate(" + gridSize / 2 + ", -6) rotate(270)")
            .attr("class", function(d, i) { return ((i >= 7 && i <= 16) ? "mono axis axis-worktime" + data.name : "mono axis" + data.name); });
            
      var heatmapGroup = svg.selectAll(".hour")
	      .data(o.links)
      	  .enter().append("svg:g")
      	  .attr("class", function(d){ return "group " + d.origin+"-"+d.destination; });
      	  
      var heatMapBorder = heatmapGroup.append("svg:path")
      	  .data(o.links)
          .attr("d", function(d){
	          //console.log("<path d='"+getTheRectBorder(getPosition(d.destination) * gridSize, getPosition(d.origin) * gridSize, gridSize, gridSize, 4)+"' fill-opacity='0' stroke='rgb(0, 220, 255);' stroke-opacity='.3' stroke-width='2'/>");
	          	return getTheRectBorder(getPosition(d.destination) * gridSize, getPosition(d.origin) * gridSize, gridSize - 3, gridSize - 3, 4);
	          })
          .attr("class", function(d){ return "border " + d.origin+"-"+d.destination; })
          .attr("width", gridSize)
          .attr("height", gridSize)
          .attr("stroke", function(d){ if(d.value==null) return "FFF"; else return colorScale(d.value);})
          .attr("stroke-opacity", ".15")
		  .attr("stroke-width", 2)
          .attr("fill", "#FFF")
          .attr("stroke-dasharray", function(d){ return getRectPerimeter(gridSize-3, gridSize-3, 4); })
		  .attr("stroke-dashoffset", function(d){ return 0; })
          .attr("fill-opacity","0");
		  
      heatMapBorder.transition().duration(1000)
          .style("stroke-dasharray", function(d){ return getRectPerimeter(gridSize-3, gridSize-3, 4); })
          .style("stroke-dashoffset", function(d){ return -getRectPerimeter(gridSize-3, gridSize-3, 4); })
          .ease('sine')
          ;
	  
      var heatMapRect = heatmapGroup.append("rect")
      	  .data(o.links)
          .attr("x", function(d) { return getPosition(d.destination) * gridSize + 2; })
          .attr("y", function(d) { return getPosition(d.origin) * gridSize + 2; })
          .attr("rx", 4)
          .attr("ry", 4)
          .attr("class", function(d){ return "bordered " + d.origin+"-"+d.destination; })
          .attr("width", gridSize-7)
          .attr("height", gridSize-7)
          .attr("stroke", "rgb(255, 255, 255)")
          .style("fill", "#FFF")
          .style("opacity",".3");
          
      heatMapRect.transition().duration(1000)
          .style("fill", function(d){ if(d.value==null) return "FFF"; else return colorScale(d.value);})
          .style("stroke", function(d){ if(d.value==null) return "FFF"; else return colorScale(d.value);});

      heatMapRect.append("title").text(function(d) { return d.value; });
          
      var legend = svg.selectAll(".legend")
          .data([0].concat(colorScale.quantiles()), function(d) { return d; })
          .enter().append("g")
          .attr("class", "legend");

      legend.append("rect")
        .attr("x", function(d, i) { return legendElementWidth * i; })
        .attr("y", height)
        .attr("width", legendElementWidth)
        .attr("height", gridSize / 2)
        .style("fill", function(d, i) { return colors[i]; })
        .style("opacity",.3);

      legend.append("text")
        .attr("class", "mono")
        .text(function(d) { return "≥ " + Math.round(d); })
        .attr("x", function(d, i) { return legendElementWidth * i; })
        .attr("y", height + gridSize);
        
        
    ///Upfdates every 1000 ms
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
		var changeNode = false;
		var changeLink = false;
		if (JSON.stringify(o.nData) != JSON.stringify(nodesData()[0])){
			o.nData = nodesData()[0];
			changeNode = true;
			//console.log("nodeChange");
		}
		if (JSON.stringify(o.lData) != JSON.stringify(linksData()[0])){
			o.lData = linksData()[0];
			updateLinks();
			changeLink = true;
			
			d3.selectAll("rect.bordered")
			.data(o.links)
			.transition()
			.duration(duration)
			.each("start", function(){
	          var temp = d3.select(this);
	          temp
	          	.style("fill", function(d){ if(d.value==null) return "FFF"; else {console.log(colorScale(d.value)); return colorScale(d.value);}})
	          	.style("stroke", function(d){ if(d.value==null) return "FFF"; else return colorScale(d.value);});
			  console.log("linkChange");
			});
		}
		d3.selectAll("path.border")
			.data(o.links)
			.transition()
			.attr("stroke", function(d){ if(d.value==null) return "FFF"; else return colorScale(d.value);})
			.duration(duration)
			.each("start", function(){
	          var temp = d3.select(this);
	          temp
				.style("stroke-dasharray", function(d){ return getRectPerimeter(gridSize-3, gridSize-3, 4); })
		        .style("stroke-dashoffset", function(d){ return 0; })
		        .transition().duration(duration-duration*0.1)
		        .style("stroke-dasharray", function(d){ return getRectPerimeter(gridSize-3, gridSize-3, 4); })
		        .style("stroke-dashoffset", function(d){ return -getRectPerimeter(gridSize-3, gridSize-3, 4); })
		        .attr("stroke", function(d){ if(d.value==null) return "FFF"; else return colorScale(d.value);})
		        .ease('sine')
		        ;
		     });
	}
	
  });
</script>