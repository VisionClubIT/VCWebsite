<?php
require_once('config/database.php');

if (isset($_POST['eventId'])) {
    $eventId = $_POST['eventId'];

    // Perform the deletion
    $sql = "DELETE FROM events WHERE id = $eventId";
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
