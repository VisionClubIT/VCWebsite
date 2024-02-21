<?php
require_once('config/database.php'); // Include your database configuration
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <?php include_once 'Header/HeaderHead.php';?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سجل</title>
</head>

<body class="bg-white" style="margin:0">
    <?php include_once 'Header/HeaderBody.php';?>

    <!--
        Content Here
    -->
    <form action="#" method="post">
        <div>
            <label for="regFirstName">First Name:</label>
            <input type="text" id="regFirstName" name="regFirstName" required>
        </div>
        <div>
            <label for="regLastName">Last Name:</label>
            <input type="text" id="regLastName" name="regLastName" required>
        </div>
        <div>
            <label for="regEmail">Email:</label>
            <input type="email" id="regEmail" name="regEmail" required>
        </div>
        <div>
            <label for="regPhoneNumber">Phone Number:</label>
            <input type="tel" id="regPhoneNumber" name="regPhoneNumber" required>
        </div>
        <button type="submit">Submit</button>
    </form>


    <?php include_once 'Footer/footerBody.php' ?>
</body>

</html>
