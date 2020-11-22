<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>{{ config('app.name', 'Tire packages') }}</title>

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap" rel="stylesheet">
</head>
<body>
	<h3>Тема: {{$theme}}.</h3>
	<h3>Ім'я':  {{$name}}.</h3>
	<h3>Телефон: {{$phone}}.</h3>
	<h3>Додатково: {{$checkbox}}.</h3>
</body>
</html>
