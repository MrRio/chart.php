<?php


class Chart {
	
	function bar($data, $options = null) {
		
		$bar = 
			'<dt style="left:%1$spx">%4$s</dt>' .
			'<dd style="left:%1$spx; height:%3$s%%;">%2$s</dd>';
		
		$wrap = '<dl class=chart>%s</dl>';
		
		$output = '';
		$max = max($data);
				
		$i = 0;
		foreach($data as $key => $val) {
			$left = 10 + ($i * 60);
			$output .= sprintf($bar, $left, $val, (($val / $max) * 100), $key);
			$i ++;
		}
		return sprintf($wrap, $output);
	}
	
	
}

?>