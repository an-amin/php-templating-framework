<?php defined('BASE_PATH') OR die('Direct scripts is not allowed!');?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title><?=CONFIG['app-title'];?></title>
		<link rel="shortcut icon" href="<?=url(CONFIG['app-favicon']);?>">

		<link rel="stylesheet" href="<?=url('node_modules/bootstrap/dist/css/bootstrap.min.css');?>">
		<link rel="stylesheet" href="<?=url('node_modules/font-awesome/css/font-awesome.css');?>">
		<link rel="stylesheet" href="<?=url('node_modules/select2/dist/css/select2.min.css');?>">
		<link rel="stylesheet" href="<?=url('node_modules/sweetalert2/dist/sweetalert2.min.css');?>">
		<link rel="stylesheet" href="<?=url('template/default/assets/css/style.css');?>">
		<?=page_specific_css();?>

	</head>

	<body>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">TEMPLATE</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dropdown
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="search..." aria-label="Search" aria-describedby="button-addon2">
							<div class="input-group-append">
								<button id="button-addon2" class="btn btn-outline-secondary" type="button" style="border-color: #CCC;"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</nav>

		<section id="main">
			<?=load_view();?>
		</section>

		<footer class="footer">
			<div class="container-fluid text-muted">
				<div class="row">
					<div class="col-md-6 text-left">
						<p class="">
							<a href="javascript:void(0);" class="text-muted">About</a> | 
							<a href="javascript:void(0);" class="text-muted">Terms & Condition</a>
						</p>
					</div>

					<div class="col-md-6 text-right">
						<span class="">&copy; <?=date('Y');?>, Aminul Islam</span>
					</div>

				</div>
			  	
			</div>
		</footer>



		<script src="<?=url('node_modules/jquery/dist/jquery.min.js');?>"></script>
		<script src="<?=url('node_modules/popper.js/dist/popper.min.js');?>"></script>
		<script src="<?=url('node_modules/bootstrap/dist/js/bootstrap.min.js');?>"></script>
		<script src="<?=url('node_modules/select2/dist/js/select2.full.min.js');?>"></script>
		<script src="<?=url('node_modules/sweetalert2/dist/sweetalert2.all.min.js');?>"></script>
		<script src="<?=url('template/default/assets/js/app.js');?>"></script>
		<?=page_specific_js();?>
	</body>
</html>