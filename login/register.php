<!DOCTYPE html>
<html>

<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="../img/favicon.png">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 form-block px-4">
				<div class="col-lg-8 col-md-6 col-sm-8 col-xs-12 form-box">
					<div class="text-center mb-3 mt-5">
						<img src="logo.png" width="150px">
					</div>
					<h4 class="text-center mb-4">
						Create an account
					</h4>
					<form action="../functions/users/register.php" method="post" enctype="multipart/form-data">

						<div class="form-input">
							<span><i class="fa fa-user-o"></i></span>
							<input type="text" name="username" placeholder="Full Name" required />
						</div>

						<div class="form-input">
							<span><i class="fa fa-envelope-o"></i></span>
							<input type="email" name="email" placeholder="Email Address" tabindex="10" required />
						</div>

						<div class="form-input">
							<span><i class="fa fa-key"></i></span>
							<input type="password" name="password1" placeholder="Password" required />
						</div>

						<div class="form-input">
							<span><i class="fa fa-key"></i></span>
							<input type="password" name="password2" placeholder="Password" required />
						</div>

						<div class="form-input">
							<span><i class="fa-solid fa-location-dot"></i></span>
							<input type="text" name="address1" placeholder="Address 1" required />
						</div>

						<div class="form-input">
							<span><i class="fa-solid fa-location-dot"></i></span>
							<input type="text" name="address2" placeholder="Address 2" required />
						</div>

						<div class="form-input">
							<span><i class="fa-solid fa-phone"></i></span>
							<input type="text" name="phone" placeholder="Phone" required />
						</div>

						<div class="form-input">
							<span><i class="fa-regular fa-flag"></i></span>
							<input type="text" name="county" placeholder="County" required />
						</div>

						<div class="form-input">
							<span><i class="fa-solid fa-city"></i></span>
							<input type="text" name="city" placeholder="city" required />
						</div>

						<div class="col-lg-6 form-group">
							<label class="text-small text-uppercase" for="country">Country</label>
							<select name="country" aria-label="Default select example" class="form-select selectpicker country w-75" id="country" data-width="fit" data-style="form-control form-control-lg" data-title="Select your country"></select>
						</div>

						<div class="mb-3">
							<label for="image" class="form-label">You'r image</label>
							<input class="form-control" type="file" name="image" id="image">
						</div>

						<div class="form-input pl-2">
							<span style="position: relative;" class="d-block pl-0"><i class="d-block mb-2 fa-solid fa-venus-mars"></i></span>
							<label class="mb-0">Gender</label><br>
							<input style="width:10px;height:10px" class="mb-0" type="radio" name="gender" value="0" required /> male <br>
							<input style="width:10px;height:10px" class="" type="radio" name="gender" value="1" required /> female
						</div>

						<div class="mb-3 d-flex align-items-center">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="cb1">
								<label class="custom-control-label" for="cb1">I agree all terms & conditions</label>
							</div>
						</div>

						<div class="mb-3">
							<button type="submit" class="btn btn-block">
								Register
							</button>
						</div>

						<div class="text-center mb-3">
							or register with
						</div>

						<div class="row mb-3">

							<div class="col-4">
								<a href="" class="btn btn-block btn-social btn-facebook">
									<i class="fa fa-facebook"></i>
								</a>
							</div>

							<div class="col-4">
								<a href="" class="btn btn-block btn-social btn-google">
									<i class="fa fa-google"></i>
								</a>
							</div>

							<div class="col-4">
								<a href="" class="btn btn-block btn-social btn-twitter">
									<i class="fa fa-twitter"></i>
								</a>
							</div>

						</div>

						<div class="text-center mb-5">
							Already have an account
							<a class="login-link" href="login.php">Login here</a>
						</div>
					</form>
				</div>
			</div>

			<div class="col-lg-6 d-none d-lg-block image-container"></div>
		</div>
	</div>
	<script src="../vendor/jquery/jquery.min.js"></script>
	<script>
		$.getJSON('../js/countries.json', function(data) {
			$.each(data, function(key, value) {
				var selectOption = "<option value='" + value.name + "' data-dial-code='" + value.dial_code + "'>" + value.name + "</option>";
				$("select.country").append(selectOption);
			});
		})
	</script>
</body>

</html>