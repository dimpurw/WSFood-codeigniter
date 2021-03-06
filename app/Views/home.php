<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>WSFood</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<!-- Styles -->
	<!-- my css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light">
		<nav class="navbar navbar-light">
			<a class="navbar-brand" href="/">
				<img src="<?php echo base_url('assets/images/fast-food.png'); ?>" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
				WSFood
			</a>
		</nav>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/food">Food</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Drinks</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Snack</a>
				</li>
			</ul>
			<nav class="navbar navbar-light">
				<div class="btn-group" >
					<button type="button" class="btn btn-info mr-2" data-toggle="modal" data-target="#upload">Upload</button>
				</div>
                <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle mr-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $nama ?>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url('users/profile/'.$id) ?>">Settings</a>
                        <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                </div>
			</nav>
		</div>
	</nav>
	<!-- end navbar -->

	<?php include 'auth/login.php' ?>
	<?php include 'auth/register.php' ?>

	<!-- modal upload -->
	<div class="modal fade" id="upload" tabindex="-1" aria-labelledby="upload" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Upload</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>     
				<form method="post" action="<?= base_url('users/posts') ?>" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Judul</label>
							<input type="text" class="form-control" id="judul" name="judul">
						</div>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Image</label>
							<input type="file" class="form-control" id="image" name="image">
						</div>
						<div class="form-group">
							<label for="message-text" class="col-form-label">Deskripsi:</label>
							<textarea class="form-control" id="message-text" name="deskripsi"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end modal upload -->

	<!-- jumbotron -->
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4 text-light font-weight-bold mt-5">Fluid jumbotron</h1>
			<p class="lead text-light" id="write-text"></p>
		</div>
	</div>
	<!-- end jumbotron -->

	<!-- description wsfood -->
	<div class="bg-view">
		<p class="text-md-center description">wsfood is a web about various foods, <br> drinks and snacks, with the addition of this website can make it easier for us to find food</p>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<button class="btn btn-primary">Centered button</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end description -->

	<!-- card view -->
	<div class="card-deck card-view">
		<?php foreach ($posts as $d) : ?>
		<div class="card">
			<img src="<?= base_url('img/'.$d->image) ?> " class="card-img-top h-50" alt="jumbotron-image">
			<div class="card-body">
				<h5 class="card-title"><?= $d->judul ?></h5>
				<p class="card-text"><?= $d->deskripsi ?></p>
			</div>
			<div class="card-footer">
				<small class="text-muted"><?= $d->nama ?></small>
			</div>
		</div>
		<?php endforeach ?>
	</div>
	<!-- end card -->
	
	<!-- page our visitor -->
	<p class="text-md-center description"><span>our visitor</span><br> below is the opinion of our web visitors about the WSFood web</p>
	<div class="container px-lg-5">
		<div class="row mx-lg-n5">
			<div class="col py-3 px-lg-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</div>
			<div class="col py-3 px-lg-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</div>
		</div>
		<div class="row mx-lg-n5">
			<div class="col py-3 px-lg-5"><span class="font-weight-bolder">Name :</span> Dimas Pratama</div>
			<div class="col py-3 px-lg-5"><span class="font-weight-bolder">Name :</span> Purwadinata</div>
		</div>
	</div>
	<!-- end page our visitor -->

	<!-- Footer -->
	<footer class="page-footer font-small bg-footer pt-4">
		<div class="container-fluid text-center text-md-left">
			<div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
				<div class="col-md-8 col-12 mt-5">
					<p style="line-height: 1.7rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturLorem ipsum dolor sit amet, consectetur adipiscing elit,
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
				</div>
			</div>
			<div class="footer-copyright text-center py-3">© 2020 Copyright:
				<span>WSFood-laravel</span>
			</div>
	</footer>
	<!-- end footer -->

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<!-- my js -->
	<script src="<?php echo base_url('assets/js/script.js') ?>"></script>
</body>

</html>