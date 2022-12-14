<?php
/*
php-controllo-mail
1. Controllare che la mail passata in GET sia ben formata e contenga un punto e una chiocciola.
2. Se è corretta stampare un div che contenga “OK”, altrimenti che contenga “KO”.
*/
?>

<?php
	if (isset($_GET['mail'])) {
		$mail = $_GET['mail'];

		$pos_at = strpos($mail, '@');

		if ($pos_at && strpos($mail, '.', $pos_at)) {
			$message = 'OK mail valida!';
		} else {
			$message = 'KO mail NON valida!';
		}
	} else {
		$mail = '';
		$message = 'Mail non inserita';
	};
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
		<label for="mail">Email da controllare</label>
		<input type="text" name="mail" id="mail" value="<?= $mail ?>">
		<button>Controlla</button>
	</form>

	<h1><?= $message ?></h1>
</body>
</html>