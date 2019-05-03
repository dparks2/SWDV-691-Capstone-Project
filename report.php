<?php
           $hostname = "localhost";
           $username = "id9445115_user";
           $password = "password";
           $databaseName = "id9445115_timesaver";
           // connect to mysql database
           $connect = mysqli_connect($hostname, $username, $password, $databaseName);
           $sql = 'SELECT * FROM students';
           $query = mysqli_query($connect, $sql);
                if (!$query) {
                    die ('SQL Error: ' . mysqli_error($connect));
}
?>

<!DOCTYPE html>
<html>
	<head>
        <title>Time Saver - Reports</title>
        <link href="css/mystyle.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="wrapper">
			<header>
				<h1>ABC Child Care</h1>
				<nav>
						<ul id='menu'>
						  <li><a class='home' href='index.html'>Home</a></li>
						  <li><a class='prett' title='Menu'>Menu</a>
							<ul class='menus'>
							  <li class='has-submenu'><a class='prett' title='Dropdown 1'>Add Users</a>
								<ul class='submenu'>
								  <li><a href="studentForm.html" title="Sub Menu">Student</a></li>
								  <li><a href="staff.html" title="Sub Menu">Staff</a></li>
								</ul>
							  </li>
							  <li><a href="daily.php" title='Dropdown 2'>Daily Sheet</a></li>
								<li><a href="report.php" title='Dropdown 3'>Student List</a></li>
								<li><a href="report2.php" title='Dropdown 3'>Staff List</a></li>
							</ul>
						  </li>
						</ul>
					  </nav>
			</header>
			<section class="courses">
					<form action="action_page.php">
							<div class="imgcontainer">
								<img src="images/time_saver.png" alt="Avatar" class="avatar">
							</div>
							<h1>Student List</h1>
	<table border="1">
		<caption class="title">Current Student List</caption>
		<thead>
			<tr>
				<th></th>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Class Room</th>
				<th>Allergies</th>
				<th>Allergies Type</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['student_fname'].'</td>
					<td>'.$row['student_mname'].'</td>
					<td>'.$row['student_lname'].'</td>
					<td>'.$row['student_class'].'</td>
					<td>'.$row['student_allergies'].'</td>
					<td>'.$row['student_allergies_type'].'</td>
				</tr>';
				$no++;
		}?>
		</tbody>
	</table>
						</form>
			</section>
			<aside>
				<section class="popular-recipes">
					<h2>Quick Links</h2>
					<a href="staff.html">New Staff</a>
					<a href="studentForm.html">New Student</a>
					<a href="daily.php">Daily Sheets</a>
					<a href="report.php">Student List</a>
					<a href="report2.php">Staff List</a>
				</section>
				<section class="contact-details">
					<h2>Contact</h2>
					<p>ABC Child Care<br />
						27 Redchurch Street<br />
						Oshkosh, WI 54901</p>
				</section>
			</aside>
			<footer>
				&copy; 2019 SWDV691 - Danny Parks
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>