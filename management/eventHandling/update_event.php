<?php
require_once('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eventId = $_POST['eventId'];
    $eventName = $_POST['eventName'];
    $eventDate = $_POST['eventDate'];
    $eventDescription = $_POST['eventDescription'];
    $eventTweet = $_POST['eventTweet'];
    $eventButtonText = $_POST['eventButtonText'];

    // Check if a new image is uploaded
    if (isset($_FILES['newEventImage']) && $_FILES['newEventImage']['error'] == UPLOAD_ERR_OK) {

        // Handle file upload
        $targetDir = 'eventsUploads/'; // Specify your target directory relative to the current script's location
        $targetName = 'management/eventHandling/eventsUploads/' . basename($_FILES["newEventImage"]["name"]);
        $targetFile = $targetDir . basename($_FILES["newEventImage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["newEventImage"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["newEventImage"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["newEventImage"]["tmp_name"], $targetFile)) {
                echo "The file " . basename($_FILES["newEventImage"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        // Get the old image path from the database
        $stmt = $con->prepare("SELECT image_events FROM events WHERE id = ?");
        $stmt->bind_param("i", $eventId);
        $stmt->execute();
        $stmt->bind_result($oldImagePath);
        $stmt->fetch();
        $stmt->close();

        // Update the database with the new image path
        $stmt = $con->prepare("UPDATE events 
                               SET name = ?, 
                                   date = ?, 
                                   description = ?, 
                                   tweet = ?, 
                                   image_events = ?, 
                                   buttonText = ? 
                               WHERE id = ?");
        $stmt->bind_param("ssssssi", $eventName, $eventDate, $eventDescription, $eventTweet, $targetName, $eventButtonText, $eventId);
        $result = $stmt->execute();
        $stmt->close();

        // Delete the old image file
        // if ($result && !empty($oldImagePath) && file_exists('../uploads/' . $oldImagePath)) {
        //     unlink('../uploads/' . $oldImagePath);
        // }
    } else {
        // No new image uploaded, update the database without changing the image path
        $stmt = $con->prepare("UPDATE events 
                               SET name = ?, 
                                   date = ?, 
                                   description = ?, 
                                   tweet = ?, 
                                   buttonText = ? 
                               WHERE id = ?");
        $stmt->bind_param("sssssi", $eventName, $eventDate, $eventDescription, $eventTweet, $eventButtonText, $eventId);
        $result = $stmt->execute();
        $stmt->close();
    }

    if ($result) {
        // Event updated successfully, redirect back to TableEvents.php with success message
        $queryString = $_SERVER['QUERY_STRING'];
        header("Location:/TableEvents.php?success=Event: $eventId updated successfully" . $queryString);
        die();
    } else {
        // Error updating event, redirect back to TableEvents.php with error message
        $queryString = $_SERVER['QUERY_STRING'];
        header("Location:/TableEvents.php?error=Event: $eventId update Failed" . $queryString);
        die();
    }
} else {
    // Wrong access, redirect back to TableEvents.php with error message
    $queryString = $_SERVER['QUERY_STRING'];
    header("Location:/TableEvents.php?error=Wrong Access" . $queryString);
    die();
}
?>
