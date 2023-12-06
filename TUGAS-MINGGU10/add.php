<html>
<head>
	<title>Add Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
	<style>
		form {
			margin: 0 25%;
		}
		.form-group{
			margin: 28px 0;
		}
		footer input, a{
			font-weight: 500;
			font-size: 20px;
			color: white;
			padding: 8px 15px;
			text-decoration: none;
			background-color: blue;
			border: blue;
			border-radius: 8px;
			margin-bottom: 100px;
		}


		footer input:hover, a:hover {
			background-color: rgb(0, 0, 90);
			border: rgb(0, 0, 90);
		}
	</style>
</head>

<body>
	<header class="d-flex justify-content-center my-5">
        <h1>Add Data</h1>
    </header>

	<form action="addAction.php" method="post" name="add">
		<div class="container">
			<div class="form-group d-flex flex-column">
				<label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
				<input type="text" name="name" class="form-control" id="exampleFormControlInput1">
			</div>
			<div class="form-group d-flex flex-column">
				<label for="exampleFormControlInput1" class="form-label">Umur</label>
				<input type="text" name="age" class="form-control" id="exampleFormControlInput1" >
			</div>
			<div class="form-group d-flex flex-column">
				<label for="exampleFormControlInput1" class="form-label"> Alamat Email</label>
				<input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
			</div>
		</div>
		<footer class="d-flex justify-content-between">
            <input class="btn btn-primary" type="submit" value="add" name="submit"/>
			<a class="btn btn-primary" href="index.php"> << Home</a>
        </footer>
		
	</form>
</body>
</html>