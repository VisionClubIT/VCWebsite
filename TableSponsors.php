<?php require_once('config/database.php'); // Include your database configuration 

session_start();
if(!isset($_SESSION['email'])){  
        header("Location: login.php");
        exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sponsor Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v6.4.2/js/all.js"></script>
    <script src="management/SponsorHandling/SponsorFunctions.js"></script>


    <link rel="stylesheet" href="management/css/styles.css">

</head>
<body>
    <div class="container-fluid admin-view">
        <div class="row">
            <?php include_once ('management/side_bar.php');?>


            <!-- Main content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Sponsor Management</h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSponsorModal">
                        <i class="fas fa-plus"></i> Add Sponsor
                    </button>
                </div>

                <!-- Add Sponsor Modal -->
                <div class="modal fade" id="addSponsorModal" tabindex="-1" role="dialog" aria-labelledby="addSponsorModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addSponsorModalLabel">Add Sponsor</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Add Sponsor Form -->
                                <form id="addSponsorForm" action="management/SponsorHandling/add_Sponsor.php" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="SponsorName">Name</label>
                                            <input type="text" class="form-control" id="SponsorName" name="SponsorName" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="SponsorImage">Picture File</label>
                                            <input type="file" class="form-control-file" id="SponsorImage" name="SponsorImage" accept="image/*" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Add Sponsor</button>
                                        <button type="button" class="btn btn-secondary" onclick="cancelAddSponsor()"><i class="fas fa-times"></i> Cancel</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Display Sponsors table here -->
                <?php
                // Fetch Sponsors from the database
                $sql = "SELECT * FROM Sponsors";
                $result = $con->query($sql);

                // Display Sponsors in a table
                if ($result->num_rows > 0) {
                ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Logo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                ?>
                                    <tr id="SponsorRow_<?php echo $row['id']; ?>">
                                        <td><?php echo $row['companyName']; ?></td>
                                        <td><img src="<?php echo $row['Logo']; ?>" alt="Sponsor Image" style="max-width: 100px;"></td>
                                        <td class="text-center">
                                            <button class="btn btn-outline-primary btn-sm mb-1" onclick="editSponsor(<?php echo $row['id']; ?>)">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <form id="deleteForm_<?php echo $row['id']; ?>" action="management/SponsorHandling/delete_Sponsor.php" method="post">
                                                <input type="hidden" name="SponsorId" value="<?php echo $row['id']; ?>">
                                                <button class="btn btn-outline-danger btn-sm" onclick="confirmDelete(<?php echo $row['id']; ?>)">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr id="editForm_<?php echo $row['id']; ?>" style="display: none;">
                                        <td colspan="7">
                                            <form id="SponsorForm_<?php echo $row['id']; ?>" action="management/SponsorHandling/update_Sponsor.php" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="SponsorId" value="<?php echo $row['id']; ?>">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="SponsorName_<?php echo $row['id']; ?>">Name</label>
                                                        <input type="text" class="form-control" id="SponsorName_<?php echo $row['id']; ?>" name="SponsorName" value="<?php echo $row['companyName']; ?>" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="newSponsorImage_<?php echo $row['id']; ?>">New Image File</label>
                                                        <input type="file" class="form-control-file" id="newSponsorImage_<?php echo $row['id']; ?>" name="newSponsorImage" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                                                    <button type="button" class="btn btn-secondary" onclick="cancelEdit(<?php echo $row['id']; ?>)"><i class="fas fa-times"></i> Cancel</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                <?php
                } else {
                    echo '<p>No Sponsors found.</p>';
                }
                $con->close();
                ?>
            </main>

        </div>
    </div>

</body>
</html>
