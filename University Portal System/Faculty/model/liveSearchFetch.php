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
	SELECT * FROM faculty
	WHERE V_NAME LIKE '%".$search."%'
  OR EMAIL LIKE '%".$search."%'
	OR USERNAME LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM faculty ORDER BY USERNAME";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table id="customers" class="table table bordered">
						<tr>
							<th>NAME</th>
							<th>EMAIL</th>
							<th>USERNAME</th>
							<th>PHONE</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["V_NAME"].'</td>
				<td>'.$row["EMAIL"].'</td>
				<td>'.$row["USERNAME"].'</td>
				<td>'.$row["PHONE"].'</td>
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