<?php
/*
Plugin Name: CleanCut
Plugin URI: http://p.contraculto.com/cleancut
Description: Strip of HTML and cut a piece of text, either by character or word count.
Version: 1.2.0
Author: Rodrigo Lanas van Lamoen
Author URI: http://contraculto.com

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

//	Word count.

function cleancut_w($string,$length=50) {
	$string_clean = strip_tags($string);
	$words = explode(' ', $string_clean);
	if (count($words) > $length):
		array_splice($words, $length);
		$string_clean = implode(' ', $words);
	endif;
	return $string_clean;
}

//	Character count.

function cleancut_c($string,$length=50) {
	$string_clean = strip_tags($string);
	$words = str_split($string_clean);
	if (count($words) > $length):
		while ($words[$length] !== ' '):
			$length--;
		endwhile;
		$check = $length-1;
		if ($words[$check] == '.' || $words[$check] == ',' || $words[$check] == ':'):
			$length--;
		endif;
		$final = array_slice($words, 0, $length);
		$string_clean = implode($final);
	endif;
	return $string_clean;
}

?>