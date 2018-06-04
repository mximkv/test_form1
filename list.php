
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minimal Form Interface</title>
    <meta name="description" content="Хули палиш мой сайтец, бог сайтостроительства" />
    <meta name="keywords" content="form, minimal, interface, single input, big form, responsive form, transition" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>
</head>

<body>


<h1 style="text-align:center;">ок теперь кароч ваше имя</h1>
<p style="text-align:center;">не сцы:</p>


<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$name = ($_POST['name']);
$sql = "INSERT INTO table1 (name)  VALUES ('$name')";


if (mysqli_query($conn, $sql)) {
    echo "<h1 style=\"text-align:center;\"> вот имецо: $name <h1 /> <br />";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



$sql = "SELECT name FROM `table1`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo " - имо: " . $row["name"]. " "  . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);







?>
<br/> <br/> <br/>
<a href="index.php">Logout</a>
<br/>




</body>


</html>