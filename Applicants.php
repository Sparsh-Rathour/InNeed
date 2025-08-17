<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicants</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/price_rangs.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    button:active {
        background: gray;
    }
    button:hover {
        background: red;
    }
</style>
</head>



<body>
<?php
	if(!empty($_SESSION['EMP_ID']) || !empty($_SESSION['SEEK_ID']))
	{ include 'navbar.loggedin.php';  }
	else {	include 'navbar.php';  }
?>

    <table>
        <thead>
            <tr>
            <body style-"margin: 50px;">
<div class="section-tittle text-center">
                            <span>Applicants</span>
                            <h4>All Applicants</h4>
                        </div>
	<table class="table"><thead class="thead-dark">
		<tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">UserID</th>
                <th scope="col">Phone</th>
                <th scope="col">Gender</th>
                <th scope="col">Country</th>
                <th scope="col">State</th>
                <th scope="col">City</th>
                <th scope="col">Pincode</th>
                <th scope="col">Key Skill</th>
                <th scope="col">Accept/Reject</th>
		</tr>
	  </thead>	
	
<tbody>
            </tr>
            <tr>
                <td>Antrang</td>
                <td>Agrawal</td>
                <td>Q Block, Vellore Institute of Technology, Vellore</td>
                <td>wajom@gmail.com</td>
                <td>wajom123</td>
                <td>9749495977</td>
                <td>Male</td>
                <td>India</td>
                <td>Karnataka</td>
                <td>Vellore</td>
                <td>632014</td>
                <td>C,C++,PHP</td>
                <td><button>Accept</button></td>
            </tr>
            <tr>
                <td>Sparsh</td>
                <td>Rathour</td>
                <td>E Block, Vellore Institute of Technology, Vellore</td>
                <td>wado@gmail.com</td>
                <td>wadom123</td>
                <td>9742459775</td>
                <td>Male</td>
                <td>India</td>
                <td>Karnataka</td>
                <td>Vellore</td>
                <td>632014</td>
                <td>Python</td>
                <td><button>Accept</button></td>
            </tr>
            <tr>
                <td>Vandit</td>
                <td>Gabani</td>
                <td>L Block, Vellore Institute of Technology, Vellore</td>
                <td>walom@gmail.com</td>
                <td>walom123</td>
                <td>8749495977</td>
                <td>Male</td>
                <td>India</td>
                <td>Karnataka</td>
                <td>Vellore</td>
                <td>632014</td>
                <td>Javascript</td>
                <td><button>Accept</button></td>
            </tr>
        </thead>

    </table>
</body>
</html>