<?php

include ("dbinfo3.php");

$array_last_name = array();

$query = "SELECT * FROM registered_users";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($result)){
    $last_name = $row['last_name'];
    array_push($array_last_name, $last_name);
}

sort($array_last_name);

for ($i=0; $i < count($array_last_name); $i++) { 
    $last_name = $array_last_name[$i];
    echo $last_name."<br><br>";
}

?>