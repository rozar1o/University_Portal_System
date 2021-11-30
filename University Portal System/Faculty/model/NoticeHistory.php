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
	SELECT * FROM providenotice
	WHERE DATE LIKE '%".$search."%'";
}
else
{
	$query = "
	SELECT * FROM providenotice ORDER BY F_ID";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table id="customers" class="table table bordered">
						<tr>
							<th>ID</th>
							<th>TITLE</th>
							<th>NOTICE</th>
                            <th>DATE</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["F_ID"].'</td>
				<td>'.$row["TITLE"].'</td>
				<td>'.$row["DESCRIPTION"].'</td>
                <td>'.$row["DATE"].'</td>
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