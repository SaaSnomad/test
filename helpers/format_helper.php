<?php 

function shortenText($text, $chars = 450) {
	$text = $text." ";
	$text = substr($text, 0, $chars);
	$text = substr($text, 0, strpos($text, " "));
	$text = $text."...";
	return $text;
}