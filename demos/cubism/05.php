<!DOCTYPE html>
<?php require( "../../templates/config.php" );?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Cubism Page Template</title>

        <!-- Import Cubism and its dependency D3 -->
        <script type="text/javascript" src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
        <script type="text/javascript" src="https://rawgit.com/square/cubism/master/cubism.v1.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <div id="demo"></div>

        <script type="text/javascript">
        	
        	var spectral = ["#66c2a5", "#abdda4", "#fee08b", "#f46d43", "#d53e4f", // negative scale, won't be used 
                			"#66c2a5", "#abdda4", "#fee08b", "#f46d43", "#d53e4f"];
                			
            var scale = d3.time.scale().domain([0, 100]).range([0,100]);
            //var scale = d3.scale.threshold().domain([0,.20,.40,.60,.80,1]).range([0,.20,.40,.60,.80,1]);
            //var scale = d3.scale.quantize().domain([0,20,40,60,80,100]).range([0,20,40,60,80,100])
            //console.log(scale(1)) // returns 0
            //console.log(scale(.20)) // returns 0
            //console.log(scale(.30)) // returns 0
			//console.log(scale(.999)) // returns 0
			//console.log(scale(.889)) // returns 0
			//console.log(scale(1)) // returns 100
            var context = cubism.context()
                                .step(1e3) // Distance between data points in milliseconds
                                .clientDelay(0)
                                .size(60); // Number of data points
                                //.stop();   // Fetching from a static data source; don't update values

            d3.select("body").append("div") // Add a vertical rule
              .attr("class", "rule")        // to the graph
              .call(context.rule());

			var values= new Array();
			var valuesIndex=0;
			var data;
            function stock(name) {
                return context.metric(function(start, stop, step, callback) {
                	var compare;
                	var value;
                	if (values.length<60){
                		data = <?php print_r(JSON::getListBySid("GAL")); ?>;
	                    compare = data[0][1];
	                    value = data[0][1]/100000;
	                    values = [value];
	                	//console.log("compare: "+compare+" vale: "+value+" values: "+values);                    
	                    // Creates an array of the price differences throughout the day
	                    data.forEach(function(d) {
	                        //values.push(value = (d[1] - compare) / compare);
	                        values.push(value = (d[1] / 100000));
	                        //console.log("value: "+value);
	                        
	                    });
	                    //console.log(values);
                    }else{
                    	$.ajax({ // ajax call starts
                    		url: '../../templates/mediator.php', // JQuery loads mediator.php
                    		dataType: 'json', // Choosing a JSON datatype
							success: function(d) // Variable data contains the data we get from serverside
							{
								//console.log(data);
								if(d[0][0]!=data[0][0]){
									data = d;
									//console.log(data[0][1]/100000);
									value = data[0][1]/100000;
									//values.push(value = (d[1] / 100000));
									//console.log(values.length-1);
									valuesIndex++;
									//values = null;
									values.push(value);
									var inutil = values.shift();
									//console.log(valuesIndex+" new "+values);									
								}
								else{
									//console.log("null");
									//value=null;
								}
							}
                    	});
                    }
                    //console.log("values: "+values.length);
                    callback(null, values);
                }, name); 
            }


            function draw_graph(stocks_list) {
                d3.select("#demo")                 // Select the div on which we want to act           
                  .selectAll(".axis")              // This is a standard D3 mechanism to
                  .data(["top"])                   // bind data to a graph. In this case
                  .enter()                         // we're binding the axes "top" and "bottom".
                  .append("div")                   // Create two divs and 
                  .attr("class", function(d) {     // give them the classes
                    return d + " axis";            // top axis and bottom axis
                  })                               // respectively 
                  .each(function(d) {              // For each of these axes,
                    d3.select(this)                // draw the axes with 4 intervals
                      .call(context.axis()         // and place them in their proper places
                      .ticks(8).orient(d)
                      .tickSize(2)
                      ); 
                  });


                d3.select("#demo")                 
                  .selectAll(".horizon")           
                  .data(stocks_list.map(stock))    
                  .enter()                         
                  .insert("div", ".bottom")        // Insert the graph in a div  
                  .attr("class", "horizon")        // Turn the div into
                  .call(context.horizon()          // a horizon graph
                  .format(d3.format("+,.2p"))	   // Format the values to 2 floating-point decimals
                  .height(100)
                  .extent([0, 5])
                  .colors(spectral)
                  .scale(scale)
                  .title("GAL")
                  );    


                context.on("focus", function(i) {
                    d3.selectAll(".value").style("right",                  // Make the rule coincide 
                        i == null ? null : context.size() - i + "px"); // with the mouse
                });
            } 

            draw_graph(["GAL"]);
        </script>
    </body>
</html>