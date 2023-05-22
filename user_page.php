<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hotel Booking Template</title>
	<style>
		.container {
			margin: auto;
			width: 50%;
			padding: 10px;
			background-color: #f2f2f2;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		h1 {
			text-align: center;
			margin-top: 0;
		}

		form {
			display: grid;
			grid-template-columns: 1fr 1fr;
			grid-gap: 10px;
			margin-top: 20px;
		}

		label {
			font-weight: bold;
			display: block;
			margin-bottom: 5px;
		}

		input[type="text"],
		input[type="email"],
		input[type="date"],
		select {
			padding: 5px;
			width: 100%;
			border-radius: 5px;
			border: 1px solid #ccc;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px;
			border-radius: 5px;
			border: none;
			cursor: pointer;
			font-size: 16px;
			margin-top: 10px;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<h1>Hotel Booking Form</h1>
		<form method="post" action="book.php">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>

			<label for="checkin">Check-in:</label>
			<input type="date" id="checkin" name="checkin" required>

			<label for="checkout">Check-out:</label>
			<input type="date" id="checkout" name="checkout" required>

			<label for="rooms">Rooms:</label>
			<select id="rooms" name="rooms" required>
				<option value="">--Select--</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>

			<label for="adults">Adults:</label>
			<select id="adults" name="adults" required>
				<option value="">--Select--</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>

			<label for="children">Children:</label>
			<select id="children" name="children" required>
				<option value="">--Select--</option>
				<option value="0">0</option>
				<option value="1">1</option>
         </select>
         <label for="room-type">Room Type:</label>
		<select id="room-type" name="room-type" required>
			<option value="">--Select--</option>
			<option value="standard">Standard</option>
			<option value="deluxe">Deluxe</option>
			<option value="suite">Suite</option>
		</select>

		<label for="special-requests">Special Requests:</label>
		<textarea id="special-requests" name="special-requests"></textarea>

		<input type="submit" value="Book Now">
	</form>
</div>
</body>
</html>
<!-- book.php -->
<?php
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the values submitted by the user
    $name = $_POST['name'];
    $email = $_POST['email'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $rooms = $_POST['rooms'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $room_type = $_POST['room-type'];
    $special_requests = $_POST['special-requests'];

    // TODO: Save the booking to the database

    // Redirect to the booking confirmation page
    header('location: booking_confirmation.php');
}
?>
