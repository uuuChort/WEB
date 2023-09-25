<?php
//1.a
$str = 'ahb acb aeb aeeb adcb axeb';
$regexp = '/a[a-z]{2}b/ui';
$matches = array();
$count = preg_match_all($regexp, $str, $matches );
echo "Найдено: {$count}<br/>";
var_dump($matches);
echo "<br/>";

//1.b
$str = 'a1b2c3';
$patterns = ['/1/', '/2/', '/3/'];
$replacements = [1, 8, 27];
echo preg_replace($patterns, $replacements, $str), "<br>";

//2.a






