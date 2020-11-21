<!DOCTYPE html>
<html>
<head>
	<title>Cyber Warriors Result Page</title>

	<link rel="icon" href="favicon.png" type="image/x-icon"/>
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

</head>
<body>

<div class="container-fluid">
	<form action="result.php" method="GET">
		<div class="row" style="background:#f2f2f2;">
			<div class="col-sm-1">
				<a href="search.php"><img src="img/searchlogo.png" height="100px;"></a>
			</div>

			<div class="col-sm-6">
				<div class="input-group">
					<input type="text" name="search" class="form-control" style="margin-left: 30px; margin-top: 25px;">
					<span class="input-group-btn">
						<input class="btn btn-secondary" type="submit" name="search_button" value="Go!!!" style="margin-top: 25px;">
					</span>
				</div>
				
			</div>
			
		</div>
	</form>
	
</div>


<table>
	<tr>
		<?php
		error_reporting(0);
			include("connectionfile.php");
			if (isset($_GET['search_button'])) 
			{
				$search=$_GET['search'];

				if ($search=="") 
				{
					echo "<center><b>Please write someting to search</b> </center";
					exit();
				}
				$sql="select * from searchengine where site_key like '%$search'";
				$rs=mysql_query($sql);

				/*if(mysql_num_rows($rs)<1) 
				{
					echo "<center><h4><b>Oops !! no result found</b></h4></center>";
					exit();
				}*/

				echo "Images for $search";

				while ($row=mysql_fetch_array($rs)) 
				{
					echo "<td>
							<table>
								<tr>
									<td>
										<img src='img/$row[4]'>
									</td>
								</tr>
							</table>
						  <td>";
				}
			}
		?>
		
		
		<?php
		echo "<a href='#'><font size='4' color='#1a1aff'>More Images for $search </font></a>";
		
		echo "<hr>";
		
		$sql1="select * from searchengine where site_key like '$search'";

		$rs1=mysql_query($sql1);
		
		while($row=mysql_fetch_array($rs1))
		{
			echo "<font size='4' color='' $row[2] </font>";
		}
		?>
		
		
	</tr>
</table>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>