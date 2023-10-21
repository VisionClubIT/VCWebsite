<?php require_once('config/database.php'); // Include your database configuration ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Event Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script defer src="https://use.fontawesome.com/releases/v6.4.0/js/all.js"></script>


    <link rel="stylesheet" href="management/css/styles.css">
    <script src="management/eventHandling/EventFunctions.js"></script>
</head>
<body>
    <div class="container-fluid admin-view">
        <div class="row">
            <?php include_once ('management/side_bar.php');?>


            <!-- Main content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Event Management</h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEventModal">
                        <i class="fas fa-plus"></i> Add Event
                    </button>
                </div>

                <!-- Add Event Modal -->
                <div class="modal fade" id="addEventModal" tabindex="-1" role="dialog" aria-labelledby="addEventModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addEventModalLabel">Add Event</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Add Event Form -->
                                <form id="addEventForm" action="management/eventHandling/add_event.php" method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="eventName">Name</label>
                                            <input type="text" class="form-control" id="eventName" name="eventName" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="eventDate">Date</label>
                                            <input type="text" class="form-control" id="eventDate" name="eventDate" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="eventDescription">Description</label>
                                        <textarea class="form-control" id="eventDescription" name="eventDescription" required></textarea>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="eventTweet">Tweet</label>
                                            <input type="text" class="form-control" id="eventTweet" name="eventTweet" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="eventImage">Image URL</label>
                                            <input type="text" class="form-control" id="eventImage" name="eventImage" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="eventButtonText">Button Text</label>
                                        <input type="text" class="form-control" id="eventButtonText" name="eventButtonText" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Add Event</button>
                                        <button type="button" class="btn btn-secondary" onclick="cancelAddEvent()"><i class="fas fa-times"></i> Cancel</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Display events table here -->
                <?php
                // Fetch events from the database
                $sql = "SELECT * FROM events";
                $result = $con->query($sql);

                // Display events in a table
                if ($result->num_rows > 0) {
                ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Tweet</th>
                                    <th>Date</th>
                                    <th>Image</th>
                                    <th>Button Text</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                ?>
                                    <tr id="eventRow_<?php echo $row['id']; ?>">
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['description']; ?></td>
                                        <td><a href="<?php echo $row['tweet']; ?>" target="_blank">Link</a></td>
                                        <td><?php echo $row['date']; ?></td>
                                        <td><img src="<?php echo $row['image_events']; ?>" alt="Event Image" style="max-width: 100px;"></td>
                                        <td><?php echo $row['buttonText']; ?></td>
                                        <td class="text-center">
                                            <button class="btn btn-outline-primary btn-sm mb-1" onclick="editEvent(<?php echo $row['id']; ?>)">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <button class="btn btn-outline-danger btn-sm" onclick="confirmDelete(<?php echo $row['id']; ?>)">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr id="editForm_<?php echo $row['id']; ?>" style="display: none;">
                                        <td colspan="7">
                                            <form id="eventForm_<?php echo $row['id']; ?>" onsubmit="saveEvent(<?php echo $row['id']; ?>); return false;">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="eventName_<?php echo $row['id']; ?>">Name</label>
                                                        <input type="text" class="form-control" id="eventName_<?php echo $row['id']; ?>" name="eventName" value="<?php echo $row['name']; ?>" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="eventDate_<?php echo $row['id']; ?>">Date</label>
                                                        <input type="text" class="form-control" id="eventDate_<?php echo $row['id']; ?>" name="eventDate" value="<?php echo $row['date']; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="eventDescription_<?php echo $row['id']; ?>">Description</label>
                                                    <textarea class="form-control" id="eventDescription_<?php echo $row['id']; ?>" name="eventDescription" required><?php echo $row['description']; ?></textarea>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="eventTweet_<?php echo $row['id']; ?>">Tweet</label>
                                                        <input type="text" class="form-control" id="eventTweet_<?php echo $row['id']; ?>" name="eventTweet" value="<?php echo $row['tweet']; ?>" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="eventImage_<?php echo $row['id']; ?>">Image URL</label>
                                                        <input type="text" class="form-control" id="eventImage_<?php echo $row['id']; ?>" name="eventImage" value="<?php echo $row['image_events']; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="eventButtonText_<?php echo $row['id']; ?>">Button Text</label>
                                                    <input type="text" class="form-control" id="eventButtonText_<?php echo $row['id']; ?>" name="eventButtonText" value="<?php echo $row['buttonText']; ?>" required>
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
                    echo '<p>No events found.</p>';
                }
                $con->close();
                ?>
            </main>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
