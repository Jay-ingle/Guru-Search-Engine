<!DOCTYPE html>
<html>
<head>
	<title>Cyber Warriors Search Engine</title>
	<link rel="icon" href="favicon.png" type="image/x-icon"/>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

</head>
<body style="margin-top: 30px;" onload="ld()">

	<script>
		function ld()
		{
			document.search_box.search.focus();
		}
	</script>

<form name="search_box" action="result.php" method="GET">
	<center>
	<img src="img/searchlogo.jpg" class="img-fluid" alt="Search Image" width="20%">
	<input type="text" name="search" class="form-control" style="width: 60%; margin-top: 20px;">
	<input type="submit" name="search_button" class="btn btn-outline-primary" value="Search Now" style="margin-top: 15px;">
	</center>
</form>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>