<?php
session_start();
$search =$_POST['search'] ?? false;

$filmsJson = file_get_contents('films.json');
$films=json_decode($filmsJson,true);

foreach($films as $ title = $film)
{
	if($title != $search)
	{
		unset($films[$title]);
	}
}
$havefilms = count($films)>0;
$SESSION['result'] = [ 'films' => $films,
'havefilms'=>$havefilms,
'search'=>$search,];
header('Location: 3.php');
?>
