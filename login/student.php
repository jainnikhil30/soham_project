<?php
$username = "sql6411807";
$password = "password";
$database = "sql6411807";
$mysqli = new mysqli("sql6.freemysqlhosting.net", $username, $password, $database);

$query = "SELECT * FROM Students";

if ($result = $mysqli->query($query)) {
    echo "<b> <center>Database Output</center> </b> <br> <br>";

    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["first_name"];
        $field3name = $row["last_name"];
        $field4name = $row["dob"];
        $field5name = $row["class"];
        $field6name = $row["uniform_no"];

        echo '<b>'.$field2name.$field3name.'</b><br />';
        echo $field3name.'<br />';
        echo $field4name.'<br />';
        echo $field5name;
        echo $field6name;
    }

/*freeresultset*/
$result->free();
}
?>
