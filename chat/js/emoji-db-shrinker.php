<?php
$jsonFile = __DIR__.'/emoji-db.js';
$jsonContent = trim(str_replace('window.emojis = ', '', file_get_contents($jsonFile)), "\n ;");
$data = json_decode($jsonContent, true);
$dataShrinked = [];
foreach ($data as $key => $emoji) {
	$dataShrinked[$key] = [
		's' => $emoji['shortname'],
		'a' => $emoji['shortname_alternates'],
		'k' => $emoji['keywords'],
	];
}
echo 'window.emojis = '.json_encode($dataShrinked)."\n";
