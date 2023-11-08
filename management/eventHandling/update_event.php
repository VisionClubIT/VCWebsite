<?php
require_once('config/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eventId = $_POST['eventId'];
    $eventName = $_POST['eventName'];
    // ... other form fields ...

    // Perform the update
    $sql = "UPDATE events SET name = '$eventName' WHERE id = $eventId";
    if ($con->query($sql) === TRUE) {
        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}

$con->close();
?>
