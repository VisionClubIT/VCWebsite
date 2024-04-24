<?php
require_once('config/database.php'); // Include your database configuration
$id = 61;
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <?php include_once 'Header/HeaderHead.php';?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سجل</title>
    <style>
        .no-event {
            text-align: center;
            font-size: 20px;
            color: red;
            margin-top: 20px;
        }
        
    </style>
</head>

<body class="bg-white" style="margin:0">
    <?php include_once 'Header/HeaderBody.php';?>

    <?php
        $sql = "SELECT * FROM events WHERE id = $id";
        $result = $con->query($sql);
        if($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $eventId = $row['registrationForm'];
    ?>
            <iframe src="https://docs.google.com/forms/d/e/<?php echo $eventId; ?>/viewform?embedded=true" width="1040" height="1445" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
    <?php
        } else {
            echo '<div class="no-event">No event found.</div>';
        }
    ?>

    <?php include_once 'Footer/footerBody.php' ?>

</body>

</html>
