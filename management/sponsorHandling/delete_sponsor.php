<?php
require_once('database.php');

if (isset($_POST['SponsorId'])) {
    $SponsorId = $_POST['SponsorId'];

    // Perform the deletion
    $sql = "DELETE FROM Sponsors WHERE id = $SponsorId";
    if ($con->query($sql) === TRUE) {
        // Sponsor deleted successfully, redirect back to TableSponsors.php with success message
        $queryString =  $_SERVER['QUERY_STRING'];   
        header("Location:/TableSponsors.php?success=Sponsor: $SponsorId deleted successfully".$queryString);
        die();
    } else {
        // Sponsor deletion faild
        $queryString =  $_SERVER['QUERY_STRING'];   
        header("Location:/TableSponsors.php?error=Sponsor: $SponsorId deletion failed".$queryString);
        die();
    }
} else {
    // Sponsor deletion faild
    $queryString =  $_SERVER['QUERY_STRING'];   
    header("Location:/TableSponsors.php?error=no SponsorId found".$queryString);
    die();
}

$con->close();
?>
