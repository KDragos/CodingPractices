<?php 

	$selection = $_get ["color"];

	$starter = "You've chosen";

if ($selection = "1"); {
	
	$item_message = "Red.";
} 

//else (selection = "2")

{
$item_message = "Blue.";
} 

//else if (selection = "3") {
$item_message = "Green.";
//} else {
$item_message = "a color that doesn't exist.";
//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Color Selection</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<main>
<div>
<p>Your selection:</p>
<h1><?php echo $starter . $item_message; ?>	
</div>
</h1>
</main>
</body>
</html>