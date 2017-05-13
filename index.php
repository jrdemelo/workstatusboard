<html>
<head>
	<style>
	.ongrid {
		color:green;
	}
	.offgrid {
		color:red;
	}
	</style>
	<title>Where is James?</title>
</head>
<body>
	<table align="center" style="width: 95%" border="1">
	
	<th colspan="2" style="font-size:60px; vertical-align: middle">James is...</th>

	<tr>
		<td colspan="2" style="padding:10px; font-size:48px; color:red; vertical-align: middle; text-align:center;">
			<?php
			$status = fopen("html/status.txt", "r");
			// Read line from the text file and write the contents to the client
			echo fgets($status); 
			fclose($status);
			?>
		</td>

		</td>
	</tr>
	<tr>
		<td width="20%" align="center">Location: </td>
		<td width="80" style="padding:10px; font-size:24px; color:blue; vertical-align:center;">
			<?php
			$loc = fopen("html/loc.txt", "r");
			// Read line from the text file and write the contents to the client
			echo fgets($loc); 
			fclose($loc);
			?>
		</td>
	</tr>
	<tr>
		<td width="20%" align="center">Grid status:</td>
		<td width="80%" style="padding:10px; color:black; vertical-align:center;">
			<?php
			$grid = file_get_contents("html/grid.txt");
			// Read line from the text file and write the contents to the client
			if (trim($grid)=="On") {
				echo "<div style='font-size:24px;color:green'>$grid</div>";
			}
			else { 
				echo "<div style='font-size:24px;color:red'>$grid</div>";
			}
			?>
		</td>
	</tr>
	<tr>

	</table>
</body>
</html>