<?php
require_once('database.php');

if (isset($_POST['eventId'])) {
    $eventId = $_POST['eventId'];

    // Perform the deletion
    $sql = "DELETE FROM events WHERE id = $eventId";
    if ($con->query($sql) === TRUE) {
        // Event deleted successfully, redirect back to TableEvents.php with success message
        $queryString =  $_SERVER['QUERY_STRING'];   
        header("Location:/TableEvents.php?success=Event: $eventId deleted successfully".$queryString);
        die();
    } else {
        // Event deletion faild
        $queryString =  $_SERVER['QUERY_STRING'];   
        header("Location:/TableEvents.php?error=Event: $eventId deletion failed".$queryString);
        die();
    }
} else {
    // Event deletion faild
    $queryString =  $_SERVER['QUERY_STRING'];   
    header("Location:/TableEvents.php?error=no eventId found".$queryString);
    die();
}

$con->close();
?>
