<style>
#customers {
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
}



#customers td, #customers th {
border: 1px solid #ddd;
padding: 8px;
}



#customers tr:nth-child(even){background-color:#6495ed;}



#customers tr:hover {background-color:#ddd;}



#customers th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #04AA6D;
color: white;
}
</style>

<?php
$connect = mysqli_connect("localhost", "root", "", "portal");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM resultinfo
	WHERE S_ID LIKE '%".$search."%'
	OR Name LIKE '%".$search."%'";
}
else
{
	$query = "
	SELECT * FROM resultinfo ORDER BY S_ID";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table id="customers" class="table table bordered">
						<tr>
							<th>ID</th>
							<th>NAME</th>
							<th>CGPA</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["S_ID"].'</td>
				<td>'.$row["Name"].'</td>
				<td>'.$row["CGPA"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>