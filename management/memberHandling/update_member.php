<?php
require_once('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $MemberId = $_POST['MemberId'];
    $MemberName = $_POST['MemberName'];
    $MemberRole = $_POST['MemberRole'];
    $MemberYear = $_POST['MemberYear'];   
    $MemberLinkedin = $_POST['MemberLinkedin'];

    // Check if a new image is uploaded
    if (isset($_FILES['newMemberImage']) && $_FILES['newMemberImage']['error'] == UPLOAD_ERR_OK) {

        // Handle file upload
        $targetDir = 'MembersUploads/'; // Specify your target directory relative to the current script's location
        $targetName = 'management/MemberHandling/MembersUploads/' . basename($_FILES["newMemberImage"]["name"]);
        $targetFile = $targetDir . basename($_FILES["newMemberImage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["newMemberImage"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["newMemberImage"]["size"] > 500000) {
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
            if (move_uploaded_file($_FILES["newMemberImage"]["tmp_name"], $targetFile)) {
                echo "The file " . basename($_FILES["newMemberImage"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        // Get the old image path from the database
        $stmt = $con->prepare("SELECT Picture FROM ourTeam WHERE id = ?");
        $stmt->bind_param("i", $MemberId);
        $stmt->execute();
        $stmt->bind_result($oldImagePath);
        $stmt->fetch();
        $stmt->close();

        // Update the database with the new image path
        $stmt = $con->prepare("UPDATE ourTeam 
                       SET Name = ?, 
                           Role = ?, 
                           Year = ?, 
                           Linkedin = ?, 
                           Picture = ? 
                       WHERE id = ?");
        $stmt->bind_param("sssssi", $MemberName, $MemberRole, $MemberYear, $MemberLinkedin, $targetName, $MemberId);

        $result = $stmt->execute();
        $stmt->close();

        // Delete the old image file
        // if ($result && !empty($oldImagePath) && file_exists('../uploads/' . $oldImagePath)) {
        //     unlink('../uploads/' . $oldImagePath);
        // }
    } else {
        // No new image uploaded, update the database without changing the image path
        $stmt = $con->prepare("UPDATE ourTeam 
                       SET Name = ?, 
                           Role = ?, 
                           Year = ?, 
                           Linkedin = ?
                       WHERE id = ?");
        $stmt->bind_param("ssssi", $MemberName, $MemberRole, $MemberYear, $MemberLinkedin, $MemberId);

        $result = $stmt->execute();
        $stmt->close();
    }

    if ($result) {
        // Member updated successfully, redirect back to TableMembers.php with success message
        $queryString = $_SERVER['QUERY_STRING'];
        header("Location:/TableMembers.php?success=Member: $MemberId updated successfully" . $queryString);
        die();
    } else {
        // Error updating Member, redirect back to TableMembers.php with error message
        $queryString = $_SERVER['QUERY_STRING'];
        header("Location:/TableMembers.php?error=Member: $MemberId update Failed" . $queryString);
        die();
    }
} else {
    // Wrong access, redirect back to TableMembers.php with error message
    $queryString = $_SERVER['QUERY_STRING'];
    header("Location:/TableMembers.php?error=Wrong Access" . $queryString);
    die();
}
?>
