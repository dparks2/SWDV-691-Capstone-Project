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
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email_address = mysqli_real_escape_string($link, $_REQUEST['email_address']);
$taxi = mysqli_real_escape_string($link, $_REQUEST['taxi']);
$class_room = mysqli_real_escape_string($link, $_REQUEST['class_room']);
$comments = mysqli_real_escape_string($link, $_REQUEST['comments']);

// Attempt insert query execution
$sql = "INSERT INTO staff (staff_fname, staff_lname, email_address, system_access, class_room, staff_comments) VALUES ('$first_name', '$last_name', '$email_address', '$taxi', '$class_room', '$comments')";
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