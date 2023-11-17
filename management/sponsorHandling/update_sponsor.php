<?php
require_once('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $SponsorId = $_POST['SponsorId'];
    $SponsorName = $_POST['SponsorName'];

    // Check if a new image is uploaded
    if (isset($_FILES['newSponsorImage']) && $_FILES['newSponsorImage']['error'] == UPLOAD_ERR_OK) {

        // Handle file upload
        $targetDir = 'SponsorsUploads/'; // Specify your target directory relative to the current script's location
        $targetName = 'management/SponsorHandling/SponsorsUploads/' . basename($_FILES["newSponsorImage"]["name"]);
        $targetFile = $targetDir . basename($_FILES["newSponsorImage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["newSponsorImage"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["newSponsorImage"]["size"] > 500000) {
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
            if (move_uploaded_file($_FILES["newSponsorImage"]["tmp_name"], $targetFile)) {
                echo "The file " . basename($_FILES["newSponsorImage"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        // Get the old image path from the database
        $stmt = $con->prepare("SELECT logo FROM Sponsors WHERE id = ?");
        $stmt->bind_param("i", $SponsorId);
        $stmt->execute();
        $stmt->bind_result($oldImagePath);
        $stmt->fetch();
        $stmt->close();

        // Update the database with the new image path
        $stmt = $con->prepare("UPDATE Sponsors 
                       SET companyName = ?,  
                           logo = ? 
                       WHERE id = ?");
        $stmt->bind_param("ssi", $SponsorName, $targetName, $SponsorId);

        $result = $stmt->execute();
        $stmt->close();

        // Delete the old image file
        // if ($result && !empty($oldImagePath) && file_exists('../uploads/' . $oldImagePath)) {
        //     unlink('../uploads/' . $oldImagePath);
        // }
    } else {
        // No new image uploaded, update the database without changing the image path
        $stmt = $con->prepare("UPDATE Sponsors 
                       SET companyName = ?
                       WHERE id = ?");
        $stmt->bind_param("si", $SponsorName, $SponsorId);

        $result = $stmt->execute();
        $stmt->close();
    }

    if ($result) {
        // Sponsor updated successfully, redirect back to TableSponsors.php with success message
        $queryString = $_SERVER['QUERY_STRING'];
        header("Location:/TableSponsors.php?success=Sponsor: $SponsorId updated successfully" . $queryString);
        die();
    } else {
        // Error updating Sponsor, redirect back to TableSponsors.php with error message
        $queryString = $_SERVER['QUERY_STRING'];
        header("Location:/TableSponsors.php?error=Sponsor: $SponsorId update Failed" . $queryString);
        die();
    }
} else {
    // Wrong access, redirect back to TableSponsors.php with error message
    $queryString = $_SERVER['QUERY_STRING'];
    header("Location:/TableSponsors.php?error=Wrong Access" . $queryString);
    die();
}
?>
