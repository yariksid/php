<!DOCTYPE html>
<html>
<head>
	<title>ITMail.ru</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<div class="container" style="text-align: center">
	<form method="POST" action="mail.php" class="mx-auto">
		<p class="h5">Кому:</p><input class="input col-5" type="" name="Komy">
		<p class="h5">Тема:</p><input class="input col-5" type="" name="Tema">
		<p class="h5">Письмо:</p><input class="input col-5" type="" name="Pismo">
		<br>
		<button class="btn btn-dark mt-2">Отправить</button>
	</form>
		<h3 class="success mx-auto"><?php echo $_GET['txt'] ?></h3>
	</div>
	
</body>
</html>
