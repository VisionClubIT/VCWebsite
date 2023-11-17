<?php
// Include your database configuration
require_once('database.php');

// Get data from the form submission
$MemberName = $_POST['MemberName'];
$MemberRole = $_POST['MemberRole'];
$MemberYear = $_POST['MemberYear'];   
$MemberLinkedin = $_POST['MemberLinkedin'];

// Handle file upload
$targetDir = 'MembersUploads/'; // Specify your target directory relative to the current script's location
$targetName = 'management/MemberHandling/MembersUploads/' . basename($_FILES["MemberImage"]["name"]);
$targetFile = $targetDir . basename($_FILES["MemberImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["MemberImage"]["tmp_name"]);
if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
} else {
    echo "File is not an image.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["MemberImage"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["MemberImage"]["tmp_name"], $targetFile)) {
        echo "The file " . basename($_FILES["MemberImage"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Check if file upload was successful before proceeding with the database insertion
if ($uploadOk == 1) {
    // Prepare and execute the SQL query
    $sql = "INSERT INTO ourTeam (name, role, year, linkedin, picture) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $result = $stmt->execute([$MemberName, $MemberRole, $MemberYear, $MemberLinkedin, $targetName]);

    // Close the database connection
    $stmt->close();
    $con->close();

    // Check if the query was successful
    if ($result) {
        // Member added successfully, redirect back to TableMembers.php with success message
        $queryString = $_SERVER['QUERY_STRING'];
        header("Location:/TableMembers.php?success=Member added successfully" . $queryString);
        die();
    } else {
        // Error adding Member, redirect back to TableMembers.php with error message
        $queryString = $_SERVER['QUERY_STRING'];
        header("Location:/TableMembers.php?error=" . urlencode('Error adding Member: ' . $stmt->error) . $queryString);
        die();
    }
} else {
    // File upload failed, handle the error as needed
    // You might want to redirect the user back to the form with an error message
    // You can customize this part based on your specific requirements
    echo "File upload failed. Please check the file and try again.";
}
?>
