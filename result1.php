<!DOCTYPE html>
<html>
<head>
	<title>guru search......</title>

<style>
	#searchfield
	{
		width: 500px;
		height: 35px;
		border-radius: 5px;
		background-color: white;
		border: 1px solid green;
	}
	#gobtn
	{
		width: 100px;
		height: 38px;
		font-size: 18px;
		border-radius: 5px;
		background-color: white;
		border: 1px solid green;
	}
	#gobtn:hover
	{
		color: white;
		background-color: green;
	}
	a
	{
		color: blue;
		font-size: 20px;
		text-decoration: none;
	}
</style>

</head>
<body>

<form action="" method="GET">
<table border="0" width="100%" bgcolor="#f2f2f2">
	<tr>
		<td width="5%">
			<a href = "index.php"><img src="guru1search.png" width="100%"></a>
		</td>
		<td>
			<input type="text" name="" id="searchfield">
			<input type="submit" name="" value="Go!" id="gobtn">
		</td>
	</tr>
</table>

<table border="0" cellpadding="5" style="margin-left:100px;">

<tr>

<?php
include("connection.php");

if(isset($_GET['searchbtn']))
{
	$search = $_GET['search'];
	
	if($search == "")
	{
		echo "<center><b>Please write something in the Search Box</b></center>";
		exit();
	}
	$query = "select * from add_website where website_keywords like '%$search%' limit 0,4";
	$data = mysqli_query($conn,$query);
	
	if(mysqli_num_rows($data)<1)
	{
		echo "<center>No result found</center>";
		exit();
	}
	echo "<a href='#' style='margin-left:105px;'>More Images for $search</a>";
	
	while($row = mysqli_fetch_array($data))
	{
		echo 	"
					
							<td>
								<img src='$row[4]' width='200px'>
							</td>
						
				";
	}
}
?>
</tr>
</table>
<!-- code of the final result Display -->

<?php include("finalsearch.php"); ?>
</body>
</html>