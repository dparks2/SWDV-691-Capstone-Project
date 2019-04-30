<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "id9445115_user", "password", "id9445115_timesaver");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$middle_name = mysqli_real_escape_string($link, $_REQUEST['middle_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$class_room = mysqli_real_escape_string($link, $_REQUEST['class_room']);
$allergies = mysqli_real_escape_string($link, $_REQUEST['allergies']);
$allergies_type = mysqli_real_escape_string($link, $_REQUEST['allergies_type']);
$comments = mysqli_real_escape_string($link, $_REQUEST['comments']);

// Attempt insert query execution
$sql = "INSERT INTO students (student_fname, student_mname, student_lname, student_class, student_allergies, student_allergies_type, student_comments) VALUES ('$first_name', '$middle_name', '$last_name', '$class_room', '$allergies', '$allergies_type', '$comments')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

    <script>
        setTimeout(function() {
            window.location.href = 'index.html';
        }, 5000);
    </script>