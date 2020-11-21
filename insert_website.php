<!DOCTYPE html>
<html>
<head>
	<title>Cyber Warriors Search Engine</title>

<style>
	input
	{
		width: 600px;
		height: 30px;
		font-size: 20px;
	}
	#addbtn
	{
		width: 150px;
		height: 35px;
		color: green;
		border: 1px solid green;
		background-color: white;
		border-radius: 5px;
		font-size: 18px;
	}
	#addbtn:hover
	{
		background-color: green;
		color: white;
	}
	#cancelbtn
	{
		width: 150px;
		height: 35px;
		color: red;
		border: 1px solid red;
		background-color: white;
		border-radius: 5px;
		font-size: 18px;
	}
	#cancelbtn:hover
	{
		background-color: red;
		color: white;
	}
</style>

</head>
<body>

<font size="7"><p align="center"><b>Add a Website</b></p></font>

<form action="" method="POST" enctype="multipart/form-data">

<table border="0" width="60%" cellspacing="10" align="center">
	<tr>
		<td width="25%">Website Title</td>
		<td><input type="text" name="websitetitle"></td>
	</tr>
	<tr>
		<td>Website Link</td>
		<td><input type="text" name="websitelink"></td>
	</tr>
	<tr>
		<td>Website Keywords</td>
		<td><input type="text" name="websitekeywords"></td>
	</tr>
	<tr>
		<td>Website Description</td>
		<td><textarea cols="83" rows="5" name="websitedescription"></textarea></td>
	</tr>
	<tr>
		<td>Website Images</td>
		<td><input type="file" name="uploadfile"></td>
	</tr>
	<tr>
		<td colspan="2" align="center" style="height: 100px;"><input type="submit" name="addWebsite" value="Add Website" id="addbtn">
			&nbsp &nbsp
		<input type="submit" name="cancel" value="Cancel" id="cancelbtn">	
		</td>
	</tr>
</table>

</body>
</html>

<?php
include("connection.php");
if($_POST['addWebsite'])
{
			$website_title=$_POST['websitetitle'];
			$website_link=$_POST['websitelink'];
			$website_keywords=$_POST['websitekeywords'];
			$website_description=$_POST['websitedescription'];
			$filename=$_FILES["uploadfile"]["name"];
			$tempname=$_FILES["uploadfile"]["tmp_name"];
			$folder = "website_images/".$filename;
			move_uploaded_file($tempname,$folder);

			if($website_title!="" && $website_link!="" && $website_keywords!="" && $website_description!="" && $filename!="")
			{ 
					$query="INSERT INTO add_website VALUES ('$website_title','$website_link','$website_keywords','$website_description','$folder')";
					$data = mysqli_query($conn,$query);
					
					if($data)
					{
						echo "<script>alert('Website Inserted')</script>";
					}
			}
					else
					{
						echo "<script>alert('Failed to Insert Website')</script>";
					}
					
}
?>
