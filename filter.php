<!DOCTYPE html>
<html>
<head>
	<title>Filter</title>
</head>
<body>
	<!-- 
	<table>
		<tr>
			<td>Tên bộ lọc</td>
			<td>ID bộ lọc</td>
			<?php
				foreach (filter_list() as $key => $value) {
					# code...
					echo "<tr><td>".$value."</td> <td>".filter_id($value)."</td></tr>";	
				}
			?>
		</tr>	
	</table>
	 -->

	
		<?php
			$songuyen = 1234;
			if(!filter_var($songuyen,FILTER_VALIDATE_INT) == false)
				echo "Số nguyên là phù hợp";
			else
				echo "Không phù hợp";
		?>

</body>
</html>