<!DOCTYPE html>
<html>
<head>
	<title>DELETE</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/delete.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="../js/list.js" type="text/javascript"></script>
	
</head>
<body>

<div class="innerContent">

	<div class="container">

		<div class="header">
			List of records
		</div>

		<div class="list">
			<ol>
			</ol>
		</div>

	</div>

	<div class="container">

		<div class="header">
			Delete Panel
		</div>
	
		<form method="post">
			<input type="text" placeholder="Enter Record Id" name="recordId">
			<input type="submit" name="submit">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</form>

	</div>

</div>
</body>
</html>