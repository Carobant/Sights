<!DOCTYPE html>
<html>
<head>
	<title>CREATE</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/create.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="#" type="text/javascript"></script>
	
</head>
<body>

<div class="innerContent">
	<div class="container">
		<div class="header">
			Admin Panel
		</div>
	
		<form method="post">

			<input type="text" placeholder="Enter Location Name" name="title">
			<input type="text" placeholder="Enter description" name="description">
			<input type="datetime-local" name="date">
			<input type="text" placeholder="Enter latitude" name="lat">
			<input type="text" placeholder="Enter longitude" name="long">
			<label><input type="radio" name="type" value="1">Location</label>
			<label><input type="radio" name="type" value="2">Event</label>
			<input type="submit" name="submit">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</form>
	</div>
</div>
</body>
</html>