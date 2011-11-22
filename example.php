<!DOCTYPE html>
<html>
<head>
<link rel=stylesheet href=chart.css>
</head>
<body>


	<h1>Semantic, accessible bar-chart in PHP, HTML and CSS</h1>
	    <h2>By <a href=http://twitter.com/csswizardry title="Follow Harry Roberts on Twitter">Harry Roberts</a>, <a href=http://twitter.com/dan_bentley title="Follow Dan Bentley on Twitter">Dan Bentley</a> and <a href=http://twitter.com/MrRio title="Follow James Hall on Twitter">James Hall</a></h2>
	
		<p>A thin PHP wrapper around the <a href="http://dl.dropbox.com/u/2629908/sandbox/css-bar-chart/index.html">Original HTML and CSS chart</a>.</p>
		
		<h3>Number of Drinks Consumed</h3>
		
		<?php
		require_once 'chart.php';
		echo Chart::bar(array(
			'Ben' => 50,
			'Bill' => 25,
			'Jeff' => 75,
			'Gill' => 37,
			'Sarah' => 82,
			'Phil' => 11,
			'Steve' => 60,
			'Lil' => 34
		), array('percentage' => true));

		?>

</body>
</html>