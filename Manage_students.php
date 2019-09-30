<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php include "header.php";?>
	
	<div class="container-fluid">
		<div class="row" style="height: 600px">
			<?php include "Sidebar.php";?>
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-6 text-left">
						<h1>Manage Students</h1>Control Pannel
					</div><!--end of col-md-6-->
					<div class="col-md-6 text-right">
						<i class="fa fa-home" aria-hidden="true"></i>Home > Manage Students
					</div><!--end of col-md-6-->
				</div><!--end of row-->
				<br>
				<?php include "all_student.php";?>
			</div><!--end of col-md-10-->
		</div><!--end of row-->
	</div><!--end of container-fluid-->
</body>
</html>