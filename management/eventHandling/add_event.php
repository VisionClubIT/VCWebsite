<?php
// Include your database configuration
require_once('database.php');

// Get data from the form submission
$eventName = $_POST['eventName'];
$eventDate = $_POST['eventDate'];
$eventDescription = $_POST['eventDescription'];  
$eventTweet = $_POST['eventTweet'];
$eventImage = $_POST['eventImage'];
$eventButtonText = $_POST['eventButtonText'];

// Prepare and execute the SQL query
$sql = "INSERT INTO events (name, date, description, tweet, image_events, buttonText) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $con->prepare($sql);
$result = $stmt->execute([$eventName, $eventDate, $eventDescription, $eventTweet, $eventImage, $eventButtonText]);

// Close the database connection
$stmt->close();
$con->close();

// Check if the query was successful
if ($result) {
    // Event added successfully, redirect back to EventsTable.php with success message
    $queryString =  $_SERVER['QUERY_STRING'];   
    header("Location:http://localhost/vcwebsite/EventsTable.php?success=Event added successfully".$queryString);
    die();
} else {
    // Error adding event, redirect back to EventsTable.php with error message
    $queryString =  $_SERVER['QUERY_STRING'];   
    header("Location:http://localhost/vcwebsite/EventsTable.php?EventsTable.php?error=" . urlencode('Error adding event: ' . $stmt->error).$queryString);
    die();
}
?>
