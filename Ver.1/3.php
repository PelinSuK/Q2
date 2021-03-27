<?php

$search = $_GET['search'] ?? false;
$filmsJson = file_get_contents('films.json');
$films = json_decode($filmsJson,true);

foreach($films as $title => $film)
{
	if($title != $search)
	{
		unset($films[$title]);
	}
}
$havefilm = count($films)>0;
?>