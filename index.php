<?php

$ip = "localhost";
$uid = "root";
$pw = "";
$db = "roca12-talentshow";

$conn = new mysqli($ip, $uid, $pw, $db);
$GLOBALS['server'] = $conn;

if(mysqli_connect_errno())
{
  echo "Could not connect to database! Tell a programmer!";
  exit();
}
else
{
  echo "Connected to database\n";
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Talent Show | ROC A12</title>
</head>

<body>
  <form method = "post">
    First Name: <input type="text" name="firstname" value="David"><br>
    Last Name: <input type="text" name="lastname" value="Nap"><br>
    Talent: <br>
    <textarea name="desc" rows="10" cols="30">Absolutely nothing.</textarea>
    <br>
    <input type="submit" name="signup" value="Sign Up">
  </form>
</body>

</html>

<?php

if(array_key_exists('signup', $_POST))
{
  SignUp();
}

function SignUp()
{
  $conn = $GLOBALS['server'];
  $fName = $_POST["firstname"];
  $lName = $_POST["lastname"];
  $description = $_POST["desc"];

  echo "fuck off ";

  $insertquery = "INSERT INTO contestants (name, lastname, descrip) VALUES ('" . $fName . "', '" . $lName . "', '" . $description . "');";
  mysqli_query($conn, $insertquery) or die("4: Failed :(");
}

 ?>
