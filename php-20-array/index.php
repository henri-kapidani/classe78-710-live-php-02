<?php
/*
1. Inserire delle parole all’interno di un array
2. controllare che la parola passata dall’utente è presente nell'array.
*/
?>

<?php
	// vecchia maniera di dichiarare gli array
	// $my_array = array(
	// 	'uno',
	// 	'due',
	// 	'tre',
	// 	'quattro',
	// );

	$my_array = [
		'uno',
		'due',
		'tre',
		'quattro',
	];

	$word = isset($_GET['word']) ? $_GET['word'] : '';

	if (in_array(strtolower($word), $my_array)) {
		$message = 'Parola trovata';
	} else {
		$message = 'Parola NON trovata';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<form action="" method="get">
		<label for="word">Parola da controllare</label>
		<input type="text" name="word" id="word" value=<?= $word ?>>
		<button>Controlla</button>
	</form>

	<?php var_dump($my_array) ?>

	<?= '<pre>' . print_r($my_array, true) . '<pre>' ?>

	<h1><?= $message ?></h1>
</body>
</html>