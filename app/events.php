<?php

Event::listen('manga.load', function() {

	//initialize guzzle in IoC container to use
	$guzzle = App::make('\GuzzleHttp\Client');

	//get json from initial api query and output all manga array items
	$manga = $guzzle->get('https://www.mangaeden.com/api/list/0')->json()['manga'];

	//first we loop through all manga results, because we want to add to the current array
	foreach($manga as $i => $chap) 
	{
		$temp = [];

		//var_dump(Carbon::parse($chap['ld']));

		//then we use the "i" param which is the ID of the manga in the api to retrieve
		//more detailed chapter info
		$m = $guzzle->get("https://www.mangaeden.com/api/manga/{$chap['i']}")->json();

		//add params that are needed for manga chapters
		$chap['g'] = $m['categories'];
		$chap['d'] = $m['description'];
		$chap['h'] = $m['hits'];

		echo "<pre>";
			print_r($chap);
			//print_r($m);
		echo "</pre>"; 

	}

	echo "<pre>";
		print_r($manga);
	echo "</pre>";

	//var_dump($guzzle->get('http://google.com'));

});