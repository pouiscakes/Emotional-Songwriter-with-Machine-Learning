<?php
// require 'dbserver_info.php';
// require 'redirect.php';

// session_save_path("/webpages/llin/coen174/sessions");
// session_start(); // must start session before any HTML

// error_reporting(0);
// ini_set('display_errors', 0);

// $conn = new mysqli($servername, $username, $password, $db_name);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $user_check = $_SESSION['login_user'];
// $ses_sql = mysqli_query($conn,"select username from users where username = '$user_check' ");
// $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
// $login_session = $row['username'];
// if(!isset($_SESSION['login_user'])){ // should check $login_session actually
//   redirect("login.php");
// }
?>

<!-- <script>
window.alert = function(msg) {
    console.log(msg);
}
</script> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Build Lyrics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <!-- <link href="css/style_courses.css" rel="stylesheet" media="screen"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="js/courses_filter_search.js"></script> -->
  </head>
  <body>
  	<h1>Suggested Lyrics</h1>
    <div class="add_course_form" id="add_course_form" >
    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post" >

  <?php
    // echo exec('/DCNFS/users/web/pages/llin/seniordesign/seniordesign/bin/python markov.py', $output, $result);
    exec('/Users/pouiscakes/.virtualenvs/seniordesign/bin/python markov.py', $output, $result);

    for ($i = 0; $i < count($output); $i++) {
      echo '<button type="submit" onclick="alert("Hello World!")">' . $output[$i] . '</button><br>';
    }
  ?>

      Write your own: <input type="text" name="notes">
      <button type="submit" onclick="alert('Hello World!')">Use this Lyric</button><br>
      <button type="submit" onclick="alert('Hello World!')">Regenerate Lyrics</button><br>
      <button type="submit" onclick="alert('Hello World!')">Finish Song</button>
    </form>
  </div>
 <?php
   


  // $ses_sql = mysqli_query($conn,"select user_type from users where username = '$login_session' ");
  // $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
  // $login_session = $row['user_type'];
  // if($login_session == 'advisor') { 
  //   require 'add_course_form.php';
  // }
  ?>

<?php
// // Create connection
// $conn = new mysqli($servername, $username, $password, $db_name);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 

// if($login_session == 'advisor') {     
//   // Check POST requests
//   if( !empty($_POST['outside_school']) ) $outside_school = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['outside_school']));
//   if( !empty($_POST['outside_course']) ) $outside_course = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['outside_course']));
//   if( !empty($_POST['scu_course']) ) $scu_course = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['scu_course']));
//   if( !empty($_POST['equivalent']) ) $equivalent = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['equivalent']));
//   if( !empty($_POST['notes']) ) {
//   	$notes = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['notes']));
//   } else{
//   	$notes = "";
//   }

//   //sql to insert data
//   if (!empty($outside_school) && !empty($outside_course) &&
//    	!empty($scu_course) && !empty($equivalent)) {
//   	$sql = "INSERT INTO courses (outside_school, outside_course, scu_course, equivalence, notes)
//   	VALUES ('$outside_school', '$outside_course', '$scu_course', '$equivalent', '$notes')";

//   	if ($conn->query($sql) === TRUE) {
//   	    // echo "New record created successfully<br>";
//   	} else {
//   	    echo "<div class='error'>Course could not be added! A duplicate course entry already exists.</div><br>";
//   	}
//   } else {
//   	if(!empty($equivalent))
//   		echo "<div class='error'>Error: One or more required fields missing in form</div><br>";
//   }
// }
?>

<!-- 	<input type="text" id="course_search" name="course_search" onkeyup="filterSearch()" placeholder="🔍 Search" onfocus="this.placeholder = ''"
onblur="this.placeholder = '🔍 Search'" />

  <div id="live_data"></div>  -->

<?php
// mysqli_close($conn);
?>

  </body>
</html>

<?php
  // if($login_session == 'advisor') { 
  //   require 'advisor_functions.php';
  // }
  // else {
  //   require 'student_functions.php';
  // }

?>

