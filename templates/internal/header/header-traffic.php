<title>REDIRIS internet Traffic Map</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="../assets/css/style.css"/>

<!--<link type="text/css" rel="stylesheet" href="../assets/css/cubism.css"/>-->
<script type="text/javascript" src="../assets/js/htmlparser.js"></script>

<!--<script type="text/javascript" src="../assets/d3/d3.js"></script>-->

<script type="text/javascript" src="http://d3js.org/topojson.v1.min.js"></script>

<script type="text/javascript" src="../assets/d3/d3.v2.js"></script>
<script type="text/javascript" src="../assets/d3/d3.csv.js"></script>
<script type="text/javascript" src="../assets/d3/d3.geo.js"></script>
<script type="text/javascript" src="../assets/d3/d3.geom.js"></script>
<script type="text/javascript" src="../assets/d3/cubism.v1.js"></script>

<style type="text/css">
	#cominidades_autonomas .active polygon.active{
	  fill:  #ffc400 !important;
	}
	
	#cominidades_autonomas .active path.active{
	  fill:  #ffc400 !important;
	}
	
	path.line {
	  pointer-events: all;
	  fill: none;
	}
	
	path.cell {
	  fill: none;
	  pointer-events: all;
	}
	
	isp {
	  fill: blue;
	  fill-opacity: .8;
	  stroke: #fff;
	}
	
	text {
	  font-size: 10px;	
	  fill: #DEDEDE;	
	  font-weight: 500;  
	}
	
	#cells path.cell {
	  display: none;
	}
	
	#cells.voronoi path.cell {
	  display: inline;
	  stroke: brown;
	  stroke-opacity: .1;
	}
	
	#cells.voronoi path.cell:hover {
	  display: inline;
	  fill: rgb(0,255,255);
	  opacity: .05;
	}
	
	#lines line.link_line {
		display: none;
	}
	#lines path.link_effect {
		display: none;
	}
	#lines.traffic line.link_line {
	  display: inherit;
	  stroke: rgba(125,125,125,0.59);
	  z-index: 10;
	  stroke-width: 3;
	  stroke-opacity: .2;
	}
	#lines.traffic path.link_effect {
	  display: inherit;
	  stroke: rgba(125,125,125,0.59);
	  z-index: 9;
	}
	#lines.traffic line.link_line:hover {
	  stroke-opacity: 1;
	}
	.background{
	  /*stroke: lightblue;*/
	  fill: transparent;
	  pointer-events: all;
	}
</style>