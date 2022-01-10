<!DOCTYPE html>
<head>    
    <title>Assignment 4</title>
</head>

<body>

<?php
    include ("dbinfo3.php");
    $title = "";
    $country = "";
    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $street = $_POST['street'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $postal = $_POST['postal'];
        $country = $_POST['country'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        if(isset($_POST['news_letter'])){
            $news_letter = "Yes";
        } else{
            $news_letter = "No";
        }

        if(empty($title)){
            $errTitle = "Please select Title";
        }
        if(empty($first_name)){
            $errFn = "Please Enter the First Name";
        }
        if(empty($last_name)){
            $errLn = "Please Enter the Last Name";
        }
        if(empty($street)){
            $errStreet = "Please Enter the Street";
        }
        if(empty($city)){
            $errCity = "Please Enter the City";
        }
        if(empty($province)){
            $errProvince = "Please Enter the Province";
        }
        if(empty($postal)){
            $errPostal = "Please Enter the Postal Code";
        }
        if(empty($country)){
            $errCountry = "Please Enter the Country";
        }
        if(empty($phone)){
            $errPhone = "Please Enter the Phone";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errEmail = "Invalid email format";
        }
        if(empty($email)){
            $errEmail = "Please Enter the Email";
        }


        if(!isset($errTitle) && !isset($errFn) && !isset($errLn) && !isset($errStreet) && !isset($errCity) && !isset($errProvince) && !isset($errPostal) && !isset($errCountry) && !isset($errPhone) && !isset($errEmail)){
            
            $sql = "INSERT INTO `registered_users`(`title`, `first_name`, `last_name`, `street`, `city`, `province`, `postal_code`, `country`, `phone`, `email`, `newsletter_subscription`) VALUES ('$title','$first_name','$last_name','$street','$city','$province','$postal','$country','$phone','$email','$news_letter')";

            if(mysqli_query($conn, $sql)){
               header("Location: view_users.php?msg=New+User+Added+Succesfully");
            } else{
                echo "Something Went Wrong...";
            }



        }

    }
 

  

?>
    <div style="width: 70%; margin: auto; text-align: center">
    <h1>Sample Form</h1>

    <form action="" method="post">
        
    <label for="Title">Title</label>    
        <select name="title" id="Title">
            <option value="" <?php echo ($title == "")? "selected":"" ?>></option>
            <option value="Mr" <?php echo ($title == "Mr")? "selected":"" ?>>Mr</option>
            <option value="Mrs" <?php echo ($title == "Mrs")? "selected":"" ?>>Mrs</option>
            <option value="Ms" <?php echo ($title == "Ms")? "selected":"" ?>>Ms</option>
            <option value="Dr" <?php echo ($title == "Dr")? "selected":"" ?>>Dr</option>            
        </select>
        <?php echo isset($errTitle)?"<br><span style='color: red; font-size: 12px; text-align: center'>{$errTitle}</span><br>":""; ?>




        <label>First Name</label> 
        <input type="text" name="first_name" value="<?php echo isset($first_name)? $first_name:"" ?>" id="FirstName"><br>
        <?php echo isset($errFn)?"<span style='color: red; font-size: 12px; text-align: center'>{$errFn}</span><br>":""; ?>

        

        <label>Last Name</label> 
        <input type="text" name="last_name" value="<?php echo isset($last_name)? $last_name:"" ?>" id="LastName"><br>
        <?php echo isset($errLn)?"<span style='color: red; font-size: 12px; text-align: center'>{$errLn}</span><br>":""; ?>


        <label>Street</label> 
        <input type="text" name="street" value="<?php echo isset($street)? $street:"" ?>" id="Street"><br>
        <?php echo isset($errStreet)?"<span style='color: red; font-size: 12px; text-align: center'>{$errStreet}</span><br>":""; ?>

        <label>City</label> 
        <input type="text" name="city" value="<?php echo isset($city)? $city:"" ?>" id="City"><br>
        <?php echo isset($errCity)?"<span style='color: red; font-size: 12px; text-align: center'>{$errCity}</span><br>":""; ?>

        <label>Province</label>
        <input type="text" name="province" value="<?php echo isset($province)? $province:"" ?>" id="Province"><br>
        <?php echo isset($errProvince)?"<span style='color: red; font-size: 12px; text-align: center'>{$errProvince}</span><br>":""; ?>


        <label>Postal Code</label>
        <input type="text" name="postal" value="<?php echo isset($postal)? $postal:"" ?>" id="Postal"><br>
        <?php echo isset($errPostal)?"<span style='color: red; font-size: 12px; text-align: center'>{$errPostal}</span><br>":""; ?>
        

        
        <label for="Country">Country</label>
        <select name="country" id="Country">
                <option value="" <?php echo ($country == "")? "selected":"" ?>></option>            
                <option value="Cananda" <?php echo ($country == "Canada")? "selected":"" ?>>Canada</option>            
                <option value="United States" <?php echo ($country == "United States")? "selected":"" ?>>United States</option>            
        </select><br>
        <?php echo isset($errCountry)?"<span style='color: red; font-size: 12px; text-align: center'>{$errCountry}</span><br>":""; ?>


        <label>Phone</label>
        <input type="text" name="phone" value="<?php echo isset($phone)? $phone:"" ?>" id="Phone"></br>
        <?php echo isset($errPhone)?"<span style='color: red; font-size: 12px; text-align: center'>{$errPhone}</span><br>":""; ?>

            
        
        <label>Email</label>
        <input type="text" name="email" value="<?php echo isset($email)? $email:"" ?>" id="Email"></br>
        <?php echo isset($errEmail)?"<span style='color: red; font-size: 12px; text-align: center'>{$errEmail}</span><br>":""; ?>

        
    <label for="Newsletter">Check box to enable Email notifications for:</label><br>
        <input type="checkbox" name="news_letter">Newsletter Subscription    
<br>
    <button type="submit" name="submit" id="submit"> Save </button>      
        
    </form>

    </div>
    
</body>
</html>