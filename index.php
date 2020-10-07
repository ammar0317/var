<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
<?php     
 
 if(isset($_POST['add']))
 {
 echo $name = $_POST['name'];
 echo $roll =$_POST['roll'];
 echo $email = $_POST['email'];
 echo $cell = $_POST['cell'];
 echo $age = $_POST['age'];
 
 $cell_len = strlen($cell);


 if (empty($name)|| empty($email) ||empty($cell) || empty($age) || empty($uname)||empty($roll)){
	$mess = '<p class = "alert alert-danger"> All field are requred ! <button class = "close" data-dismiss ="alert"> &times; </button> </p>';
 }
 elseif(filter_var($roll,FILTER_VALIDATE_INT)==false)
 {
	$mess = '<p class = "alert alert-danger" > Invalid roll number ! <button class = "close" data-dismiss = "alert"> &times; </button> </p>';
 }
  elseif (filter_var($email,FILTER_VALIDATE_EMAIL) == false){
	$mess = '<p class = "alert alert-danger" > Invalid Email number !<button class = "close" data-dismiss = "alert"> &times; </button> </p>';
 }
 elseif($$age>=20 || $age <=50)
{
	$mess = '<p class = "alert alert-danger"> Invalid Age! <button class = "close" data-dismiss ="alert"> &times; </button> </p>'; 
}
 elseif($cell_len != 11)
 {
	$mess = '<p class = "alert alert-danger"> Incorrect cell number! <button class = "close" data-dismiss ="alert"> &times; </button> </p>';
 }
	 else {
		$mess = '<p class = "alert alert-success"> Data Stable ! <button class = "close" data-dismiss ="alert"> &times; </button> </p>';
 }
 
 
 }
 
 
 ?> 
	 

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Add student</h2>
				<?php
			if(isset($mess)){
  			  echo $mess;
							}
				?>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Roll</label>
						<input name="roll" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Photo</label>
						<input name="photo" class="form-control" type="file">
					</div>
					<div class="form-group">
						<input name="add" class="btn btn-primary" type="submit" value="Add new student">
					</div>
				</form>
			</div>
		</div>
	</div>
	






	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>





</body>
</html>