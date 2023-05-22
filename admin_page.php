<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylee.css">
   <link rel="stylesheet" href="css/styl.css">
   <title>Admin Page</title>
	<style>
		table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
		body {
			font-family: Arial, sans-serif;
			background-color: #f1f1f1;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
			margin-bottom: 50px;
		}
		table {
			border-collapse: collapse;
			margin: auto;
			margin-top: 50px;
			margin-bottom: 50px;
		}
		th, td {
			padding: 10px;
			border: 1px solid #ddd;
			text-align: center;
		}
		th {
			background-color: #4CAF50;
			color: white;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
	</style>

</head>
<body>
<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a class="active" href="index.html">Home</a></li>
							
					
							
							<li><a href="contact.html">Contact</a></li>
							<li><a href="login_form.php" >Login</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
	  <b class="btn">--Admin Info--</b>
      <table>
		<thead>
			<tr>
            <th>Admin Name</th>
				<th>Admin User ID</th>
				<th>Password</th>
			</tr>
		</thead>
		<tbody>
			<tr>
            <td>Pratik Borade</td>
				<td>kbtug21532@kbtcoe.org</td>
				<td>kbtug21532</td>
			</tr>
			<tr>
         <td>Rushikesh Kushare</td>
				<td>admin02</td>
				<td>qwerty123</td>
			</tr>
			<tr>
         <td>Yash Patil</td>
				<td>admin03</td>
				<td>admin123</td>
			</tr>
         <tr>
         <td>Yash Deore</td>
				<td>admin03</td>
				<td>admin123</td>
			</tr>
         <tr>
         <td>Aditya Bankar</td>
				<td>admin03</td>
				<td>admin123</td>
			</tr>
         <tr>
         <td>Pankaj Dhondage</td>
				<td>admin03</td>
				<td>admin123</td>
			</tr>
		</tbody>
	</table>
	


	<b class="btn">--Customer Info--</b>
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>User type</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "hotel");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, name, email,  user_type FROM user_data";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
	echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>" . $row["email"]. "</td><td>" .  $row["user_type"]. "</td></tr>";
  }
  
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>