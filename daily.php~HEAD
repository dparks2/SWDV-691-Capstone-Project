<?php
            $hostname = "localhost";
            $username = "id9445115_user";
            $password = "password";
            $databaseName = "id9445115_timesaver";

            // connect to mysql database
            $connect = mysqli_connect($hostname, $username, $password, $databaseName);

            // mysql select query
            $query = "SELECT  * FROM `classrooms`";
            $query2 = "SELECT * FROM `students` ORDER BY student_fname ASC";
            $query3 = "SELECT * FROM `amounts`";
            $query4 = "SELECT * FROM `time`";

            // for class room
            $result1 = mysqli_query($connect, $query);

            // for  student
            $result2 = mysqli_query($connect, $query2);
            $options = "";
            while($row2 = mysqli_fetch_array($result2))
            {
                $options = $options."<option>$row2[0] $row2[2]</option>";
            }

            // for amounts
            $result3 = mysqli_query($connect, $query3);
            $result4 = mysqli_query($connect, $query3);
            $result5 = mysqli_query($connect, $query3);

            // for percents
            $result6 = mysqli_query($connect, $query4);
           ?> 

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
							<li><a href="daily.php" title='Dropdown 2'>Daily Sheet</a></li>
              <li><a href="report.php" title='Dropdown 3'>Student List</a></li>
              <li><a href="report2.php" title='Dropdown 3'>Staff List</a></li>
						  </ul>
				</nav>
			</header>
			<section >
				<form class="myForm2" method="post" action="staffForm.php" > 
		  <h2 align="center">My Day at ABC Child Care</h2>
					<table align="center">
						<tr><td></td>
						 <td id="date">
								<script>
									n =  new Date();
									y = n.getFullYear();
									m = n.getMonth() + 1;
									d = n.getDate()
									document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
								</script>
							 </td>
							<td></td>
							
						</tr>
						<tr>
							<td><p>
									<label>Class Room:
                    <select>
                        <?php while($row1 = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>
                        <?php endwhile;?>
                      </select>
									</label> 
								</p>
							</td>
						</td><td>
							<p>
					<label> Student:
                    <select>
                       <?php echo $options;?>
                    </select>
					</label> 
								</p>
							</td>
            </tr>
            <p></p>
						<tr>
							<td>
                <h3>Diaper Change:</h3>
              <fieldset>
                <legend>Diaper 1: 8:00AM</legend>
                <label class="choice"> <input type="radio" name="diaper1" required value="wet"> Wet </label>
					      <label class="choice"> <input type="radio" name="diaper1" required value="dry"> Dry </label>
				      	<label class="choice"> <input type="radio" name="diaper1" required value="spoiled"> Spoiled </label>
              </fieldset>
              <fieldset>
                <legend>Diaper 2: 10:00AM</legend>
                <label class="choice"> <input type="radio" name="diaper2" required value="wet"> Wet </label>
					      <label class="choice"> <input type="radio" name="diaper2" required value="dry"> Dry </label>
				      	<label class="choice"> <input type="radio" name="diaper2" required value="spoiled"> Spoiled </label>
              </fieldset>
              <fieldset>
                <legend>Diaper 3: 12:00PM</legend>
                <label class="choice"> <input type="radio" name="diaper3" required value="wet"> Wet </label>
					      <label class="choice"> <input type="radio" name="diaper3" required value="dry"> Dry </label>
				      	<label class="choice"> <input type="radio" name="diaper3" required value="spoiled"> Spoiled </label>
              </fieldset>
              <fieldset>
                <legend>Diaper 4: 2:00PM</legend>
                <label class="choice"> <input type="radio" name="diaper4" required value="wet"> Wet </label>
					      <label class="choice"> <input type="radio" name="diaper4" required value="dry"> Dry </label>
				      	<label class="choice"> <input type="radio" name="diaper4" required value="spoiled"> Spoiled </label>
              </fieldset>
              <fieldset>
                <legend>Diaper 5: 4:00PM</legend>
                <label class="choice"> <input type="radio" name="diaper5" required value="wet"> Wet </label>
					      <label class="choice"> <input type="radio" name="diaper5" required value="dry"> Dry </label>
				      	<label class="choice"> <input type="radio" name="diaper5" required value="spoiled"> Spoiled </label>
              </fieldset>
							</td>
							 
							<td>
              <h3>Food:</h3>
              <fieldset>
                <legend>Breakfast</legend>
                <select>
                    <?php while($row3 = mysqli_fetch_array($result3)):;?>
                    <option value="<?php echo $row3[1];?>"><?php echo $row3[0];?></option>
                    <?php endwhile;?>
              </select>
              </fieldset>
              <fieldset>
                <legend>Lunch</legend>
                <select>
                    <?php while($row3 = mysqli_fetch_array($result4)):;?>
                    <option value="<?php echo $row3[1];?>"><?php echo $row3[0];?></option>
                    <?php endwhile;?>
              </select>
              </fieldset>
              <fieldset>
                <legend>Snack</legend>
                <select>
                    <?php while($row3 = mysqli_fetch_array($result5)):;?>
                    <option value="<?php echo $row3[1];?>"><?php echo $row3[0];?></option>
                    <?php endwhile;?>
              </select>
              </fieldset>
              <p></p>
              <h3>Nap:</h3>
              <fieldset>
                <legend>Sleep Time</legend>
                <select>
                    <?php while($row4 = mysqli_fetch_array($result6)):;?>
                    <option value="<?php echo $row4[1];?>"><?php echo $row4[0];?></option>
                    <?php endwhile;?>
              </select>
              </fieldset>
              </td>
              </tr>
              <tr>
              <td>
                  <fieldset>
            <legend>Any Medicine Today?</legend>
            <label class="choice"> <input type="radio" name="medicine" value="no"> No </label><br>
            <input type="radio" id="show" name="medicine" value="yes" /> <label for="show">Yes</label>
            <p><label>Medications
                <textarea name="comments" maxlength="100"></textarea>
              </label>
            </p><br>
          </fieldset>
		</p>
              </td>
              <td>
                <fieldset>
            <legend>Supplies Needed:</legend>
            <label class="choice"> <input type="radio" name="allergies" value="no"> No </label><br>
            <input type="radio" id="show" name="allergies" value="yes" /> <label for="show">Yes</label>
            <p><label>Supplies <br>
                  <input type="checkbox" name="supplies" value="diapers"> Diapers/Pull-ups<br>
                  <input type="checkbox" name="supplies" value="wipes"> Wipes<br>
                  <input type="checkbox" name="supplies" value="clothes"> Clothes<br>
                  <input type="checkbox" name="supplies" value="cup"> Water Bottle<br>
                  <input type="checkbox" name="supplies" value="shoes"> Snow Boots<br>
                  <input type="checkbox" name="supplies" value="shoes2"> Rain Boots<br>
                </select>
              </label>
            </p><br>  
              </td>
							</tr>
							<tr>
							    <td colspan=2>
							      
					<p>
					<label>Today I worked on:
					<textarea name="today_comments" rows="2" cols="50"></textarea>
					</label>
					</p>
					<p>
					<label>The book I read today is:
					<textarea name="book_comments" rows="2" cols="50"></textarea>
					</label>
					</p>
					<p>
					<label>Today's Activity was:
					<textarea name="today_comments" rows="2" cols="50"></textarea>
					</label>
					</p>
					<p>
					<label>Notes about my day:
					<textarea name="notes_comments" rows="2" cols="50"></textarea>
					</label>
					</p>
					<p> <input type="button" value="Print this page" onclick="myFunction()"> </p>  
							    </td>
							</tr>
					</table>
					</form>
			</section>
			<footer>
				&copy; 2019 SWDV691 - Danny Parks
			</footer>
		</div><!-- .wrapper -->
</body>
</html>	

<script>
function myFunction() {
  window.print();
}
</script>