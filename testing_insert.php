<!DOCTYPE html>
<html>
<head>
	<title>Cyber Warriors Search Engine</title>
	<link rel="icon" href="favicon.png" type="image/x-icon"/>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">



</head>
<body>

<div class="container">
	<br>
	<center><h2><b>Insert Website</b></h2></center>
	<br>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<div class="row">
				<label class="col-sm-2" for="stitle">Site Title	
				</label>
				<div class="col-sm-10">
					<input type="text" name="s_title" class="form-control" id="stitle" placeholder="Enter Website Title">
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<label class="col-sm-2" for="slink">Site Title	
				</label>
				<div class="col-sm-10">
					<input type="text" name="s_link" class="form-control" id="slink" placeholder="Enter Website Link">
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<label class="col-sm-2" for="skey">Site Title	
				</label>
				<div class="col-sm-10">
					<input type="text" name="s_key" class="form-control" id="skey" placeholder="Enter Website keywords">
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<label class="col-sm-2" for="stitle">Site Description	
				</label>
				<div class="col-sm-10">
					<textarea name="s_desc" class="form-control" id="sdesc" placeholder="Enter Website Description"></textarea>
				</div>
			</div>
		</div>

	<div class="form-group">
			<div class="row">
				<label class="col-sm-2" for="uploadfile">Site Image	
				</label>
				<div class="col-sm-10">
					<input type="file" name="uploadfile" class="form-control">
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<center>
					<input type="submit" name="submit" class="btn btn-outline-success" value="Add Website">
						&nbsp; &nbsp;  
						&nbsp; &nbsp;  
						&nbsp; &nbsp; 
					<input type="reset" name="cancel" class="btn btn-outline-danger" value="Cancel">
				</center>
			</div>
		</div>
	</form>
	
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>
</html>

<?php
include("connectionfile.php");
if($_POST['submit'])
	{
	$s_title=$_POST["s_title"];
	$s_link=$_POST["s_link"];
	$s_key=$_POST["s_key"];
	$s_desc=$_POST["s_desc"];
	//$name=$_POST["uploadfile"];

	$filename=$_FILES["uploadfile"]["name"];
	$tempname=$_FILES["uploadfile"]["tmp_name"];
	$folder="img/".$filename;
	echo $folder;
	move_uploaded_file($tempname,$folder);

		if($s_title!="" && $s_link!="" && $s_key!="" && $s_desc!="" && $filename!="")
		{

			$query="insert into test values ('$s_title','$s_link','$s_key','s_desc','$folder')";
			$data=mysqli_query($conn,$query);

				if($data)
				{
				echo "data inserted into database";
				}
		}
						else 
						{
						echo "All fields are Reuired";
						}
}
?>