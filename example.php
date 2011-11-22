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
			'Option 1' => 80,
			'Option 2' => 57,
			'Option 3' => 39,
			'Option 4' => 59
		), array('percentage' => true));

		?>

</body>
</html>