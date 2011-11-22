<?php

class Chart {
	
	function bar($data, $options = null) {
		
		if(!isset($options['percentage'])) {
			$options['percentage'] = false;
		}
		
		$bar = 
			'<dt style="left:%1$s%%; width: %5$s%%;">%4$s</dt>' .
			'<dd style="left:%1$s%%; width: %5$s%%; height:%3$s%%;">%2$s</dd>';
		
		$wrap = '<dl class=chart>%s</dl>';
		
		$output = '';
		$max = max($data);
		if($options['percentage'] && $max > 100) {
			trigger_error("The maximum value for a percentage based chart is 100.");
		}
				
		$i = 0;
		$total = count($data);
		
		foreach($data as $key => $val) {
			$spacing = $total / ($total ^ 2);
			$left = $spacing + ((100 / $total) * $i);
			$height = $options['percentage'] ? $val : (($val / $max) * 100);
			$width = (100 / $total) - ($spacing * 2);
			$output .= sprintf($bar, $left, $val, $height, $key, $width);
			$i ++;
		}
		return sprintf($wrap, $output);
	}
	
	
}

?>