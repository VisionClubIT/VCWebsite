<?php
require_once('database.php');

if (isset($_POST['MemberId'])) {
    $MemberId = $_POST['MemberId'];

    // Perform the deletion
    $sql = "DELETE FROM ourTeam WHERE id = $MemberId";
    if ($con->query($sql) === TRUE) {
        // Member deleted successfully, redirect back to TableMembers.php with success message
        $queryString =  $_SERVER['QUERY_STRING'];   
        header("Location:/TableMembers.php?success=Member: $MemberId deleted successfully".$queryString);
        die();
    } else {
        // Member deletion faild
        $queryString =  $_SERVER['QUERY_STRING'];   
        header("Location:/TableMembers.php?error=Member: $MemberId deletion failed".$queryString);
        die();
    }
} else {
    // Member deletion faild
    $queryString =  $_SERVER['QUERY_STRING'];   
    header("Location:/TableMembers.php?error=no MemberId found".$queryString);
    die();
}

$con->close();
?>
