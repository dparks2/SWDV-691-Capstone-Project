<!DOCTYPE html>
<html>
	<head>
        <title>Time Saver</title>
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
							<li><a href="daily.html" title='Dropdown 2'>Daily Sheet</a></li>
							<li><a href="contact.html" title='Dropdown 3'>Contact</a></li>
						  </ul>
				</nav>
			</header>
			<section class="courses" >
				<form class="myForm" method="post" action="staffForm.php" > 
          <h2>Daily Sheet</h2>
					<p>
					<label>First Name
					<input type="text" name="first_name" required>
					</label> 
					</p>
					  
					<p>
					<label>Last Name
					<input type="text" name="last_name" required>
					</label> 
					</p>
					
					<p>
					<label>Email 
					<input type="email" name="email_address">
					</label>
					</p>
					
					<fieldset>
					<legend>System Access?</legend>
					<label class="choice"> <input type="radio" name="taxi" required value="car"> Teacher </label>
					<label class="choice"> <input type="radio" name="taxi" required value="van"> Support </label>
					<label class="choice"> <input type="radio" name="taxi" required value="tuktuk"> Administrator </label>
					</fieldset>
						
					<p>
					<label>Class Room
					<select id="class_room" name="class_room">
					<option value="" selected="selected">Select One</option>
					<option value="creepers">Creepers</option>
					<option value="scooters">Scooters</option>
					<option value="troppers">Troppers</option>
					<option value="hopper">Hopper</option>
					<option value="snappers">Snappers</option>
					<option value="sparklers">Sparklers</option>
					<option value="rangers">Rangers</option>
					<option value="4K">4K</option>
					<option value="3K">3K</option>
					</select>
					</label> 
					</p>
					</p>
					
					<p>
					<label>Special Instructions
					<textarea name="comments" maxlength="500"></textarea>
					</label>
					</p>
					
					<p><button>Submit</button></p>
					
					</form>
			</section>
			<aside>
				<section class="popular-recipes">
					<h2>Quick Links</h2>
					<a href="">New User</a>
					<a href="">Daily Sheets</a>
				</section>
				<section class="contact-details">
					<h2>Contact</h2>
					<p>ABC Child Care<br />
						27 Redchurch Street<br />
						Oshkosh, WI 54901</p>
				</section>
			</aside>
			<footer>
				&copy; 2019 SWDV691
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>
