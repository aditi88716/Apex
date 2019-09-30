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
						<h1>Dashboard</h1>Control Pannel
					</div><!--end of col-md-6-->
					<div class="col-md-6 text-right">
						<i class="fa fa-home" aria-hidden="true"></i>Home > Dashboard
					</div><!--end of col-md-6-->
				</div><!--end of row-->
				<br>
				<div class="card-columns">
					<div class="card bg-primary w-100" style="height: 158px">
						<div class="row">
							<div class="col-md-6">
    							<div class="card-body text-left text-white">
      								<h1>1</h1>
      								<p style="font-size: 18px">Total Franchise</p>
    							</div>
    						</div>
    						<div class="col-md-6">
    							<div class="card-body text-right">
      								<i class="fa fa-shopping-bag" aria-hidden="true" style="font-size:60px; color: #444a5045!important; padding: 20px"></i>
    							</div>
    						</div>
    					</div><!--end of row-->
  					</div><!--end of card bg-primary-->
  					<div class="card bg-success" style="height: 158px">
    					<div class="row">
							<div class="col-md-6 w-100 h-100" >
    							<div class="card-body text-left text-white">
      								<h1>1</h1>
      								<p style="font-size: 15px">Total Result Upload</p>
    							</div>
    						</div>
    						<div class="col-md-6">
    							<div class="card-body text-right">
      								<i class="fa fa-bar-chart" aria-hidden="true" style="font-size:60px; color: #444a5045!important; padding: 20px"></i>
    							</div>
    						</div>
    					</div><!--end of row-->
  					</div><!--end of card bg-success-->
  					<div class="card bg-warning w-100 h-100" style="height: 158px">
    					<div class="row">
							<div class="col-md-6 w-100 h-100" >
    							<div class="card-body text-left text-white">
      								<h1>1</h1>
      								<p style="font-size: 15px">Total Students in all franchise</p>
    							</div>
    						</div>
    						<div class="col-md-6 w-100 h-100">
    							<div class="card-body text-right">
      								<i class="fa fa-user-plus" aria-hidden="true" style="font-size:60px; color: #444a5045!important; padding: 20px"></i>
    							</div>
    						</div>
    					</div><!--end of row-->
  					</div><!--end of card bg-warning-->
				</div><!--end of card-columns-->
			</div><!--end of col-md-10-->
		</div><!--end of row-->
	</div><!--end of container-fluid-->
</body>
</html>

