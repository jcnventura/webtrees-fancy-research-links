<?php

class nl_stamboomzoeker_plugin extends research_base_plugin {
	static function getName() {
		return 'NL | Stamboomzoeker';
	}

	static function create_link($fullname, $givn, $first, $middle, $prefix, $surn, $surname) {
		return $link = 'http://stamboomzoeker.nl/search.php?l=nl&fn=' . $givn . '&sn=' . $surname . '&m=1&bd1=0&bd2=0&bp=&t=1&submit=Zoeken';
	}
	
	static function encode_plus() {
		return true;	
	}
}
