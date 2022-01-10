<?php
    include ("dbinfo3.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
</head>
<body>

    <h1 style="text-align: center">Users Detail</h1>
    <?php
        if(isset($_GET['msg'])){
            echo '<p style="text-align: center">'.$_GET["msg"].'</p>';
        }
    ?>
    <table border="1" style="margin: auto">
        <thead>
            <tr>
                <td>Title</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Street</td>
                <td>City</td>
                <td>Province</td>
                <td>Postal Code</td>
                <td>Country</td>
                <td>Phone</td>
                <td>Email</td>
                <td>NewsLetter Subscription</td>
            </tr>
        </thead>
        <tbody>
            <?php

            $query = "SELECT * FROM registered_users";
            $result = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['street']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['province']; ?></td>
                    <td><?php echo $row['postal_code']; ?></td>
                    <td><?php echo $row['country']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['newsletter_subscription']; ?></td>
                </tr>

                <?php
            }

            ?>
        </tbody>
    </table>
</body>
</html>