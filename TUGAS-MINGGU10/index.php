<?php
require_once("dbConnection.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>

<head>
	<title>Homepage</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
	<style>
		th {
			font-weight: 700;
			font-size: 20px;
		}

		td {
			font-weight: 400;
			font-size: 18px;
		}

		table {
			border: black 3px solid;
		}

		.btn-lg {
			margin-bottom: 20px;
		}
	</style>
</head>
</head>

<body>
	<header class="d-flex justify-content-center my-5">
		<h1>Homepage</h1>
	</header>

	<table class="table table-hover" width='80%' border=0>
		<tr class="table-secondary" bgcolor='#DDDDDD'>
			<td><strong>Name</strong></td>
			<td><strong>Age</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Action</strong></td>
		</tr>
		<?php
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $res['name'] . "</td>";
			echo "<td>" . $res['age'] . "</td>";
			echo "<td>" . $res['email'] . "</td>";
			echo "<td><div class='d-grid gap-1 col-6 mx-auto'><a class='btn btn-warning text-light'  href=\"edit.php?id=$res[id]\">Edit</a>";
			echo "<a class='btn btn-danger text-light' href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></div></td>";
		}
		?>
	</table>
	<div class="col-12 d-flex justify-content-end gap-3">
		<a class="btn btn-primary btn-lg" href="add.php">Add New Data</a>
	</div>
</body>

</html>