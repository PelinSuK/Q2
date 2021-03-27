<?php
require '3.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Version 2</title>
	<meta charset='utf-8'>
</head>
<body>
<h1>Book Search</h1>
<p>
you search for <strong><?=sanitize($result['search'])?></strong></p>
	<?php if($result['havefilms']):?>
	<h2>Result:</h2>
	<?php
		foreach($result['films'] as $title => $film)
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