<?php
require '1.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Version 1</title>
	<meta charset='utf-8'>
</head>
<body>
	<h1>Film Search</h1>
	<p> You search for <strong><?=sanitize($search)?></strong></p>
	<?php 
		foreach($films as $title => $film)
		<div class='film'>
			<?=$title;?>by<?=$film['author']?>
			<img src = '<?php echo $film['cover_url']; ?>'
		</div>
	<?php endforeach ?>
	<?php else : ?>
	<p> No results found </p>
	<?php endif ?>
	
	<p> 
		<a href='1.php'>&larr;Search again </a>
	</p>
</body>
</html>