<?php

include ("dbinfo3.php");

$all_users_array = array();

$query = "SELECT * FROM registered_users";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($result)){
    $user_id = $row['user_id'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];

    $current_user_array = array($user_id, $first_name, $last_name);

    array_push($all_users_array, $current_user_array);
}


echo '<table border="1" style="margin: auto">
        <thead>
            <tr>
                <th>User ID</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
        <tbody>';

for ($i=0; $i < count($all_users_array); $i++) { 
    $current_user = $all_users_array[$i];
    $user_id = $current_user[0];
    $first_name = $current_user[1];
    $last_name = $current_user[2];

    echo "<tr>
            <td>".$user_id."</td>
            <td>".$first_name."</td>
            <td>".$last_name."</td>
        </tr>";
}

echo "</tbody></table>";

?>