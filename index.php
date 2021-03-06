<?php
	require_once "db/db.php";
	require_once "include/sanitize.php";
	require_once "include/signin/checkSignIn.php";
	require_once "include/signup/checkSignUp.php";
	require_once "include/signout.php";
	require_once "include/dashboard/dashCheckAddProduct.php";
?>
<!doctype html>
<html lang="en">

<head>
	<title>BeautyBuy</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- BeautyBuy CSS -->
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/landing.css">
	<link rel="stylesheet" type="text/css" href="style/cardStyle.css">
	<link rel="stylesheet" type="text/css" href="style/browse.css">
	<link rel="stylesheet" type="text/css" href="style/product.css">
	<link rel="stylesheet" type="text/css" href="style/payment.css">
	<link rel="stylesheet" type="text/css" href="style/dashboard.css">
	<link rel="stylesheet" type="text/css" href="style/signin.css">
	<link rel="stylesheet" type="text/css" href="style/signup.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">

	<!-- Google Fonts-->

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">

</head>

<body>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>

	<?php

	// Header
	require_once('include/header.php');

	?>

	<main>

		<?php

	if (!isset($_GET['page'])) { 						// page not set, display landing page

		// Landing page
		require_once('include/landing.php');

	} else if ($_GET['page'] == "browse") { 			// page == browse

		require_once('include/browse.php');

	} else if ($_GET['page'] == "product") { 			// page == product

		require_once('include/product.php');

	} else if ($_GET['page'] == "signin") { 			// page == signin

		require_once('include/signin.php');

	} else if ($_GET['page'] == "signup") { 			// page == signup

		require_once('include/signup.php');

	} else if ($_GET['page'] == "payment") { 			// page == payment

		require_once('include/payment.php');

	} else if ($_GET['page'] == "faq") { 			// page == faq

		require_once('include/faq.php');

	} else if ($_GET['page'] == "feedback") { 			// page == feedback

		require_once('include/feedback.php');

	}  else if ($_GET['page'] == "dashboard") { 		// page == dashboard

		require_once('include/dashboard.php');

	} 
	?>

	</main>

	<?php
	// Footer
	require_once('include/footer.php');

	?>

</body>

</html>