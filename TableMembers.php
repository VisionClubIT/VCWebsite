<?php require_once('config/database.php'); // Include your database configuration ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Member Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v6.4.2/js/all.js"></script>
    <script src="management/MemberHandling/MemberFunctions.js"></script>


    <link rel="stylesheet" href="management/css/styles.css">

</head>
<body>
    <div class="container-fluid admin-view">
        <div class="row">
            <?php include_once ('management/side_bar.php');?>


            <!-- Main content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Member Management</h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMemberModal">
                        <i class="fas fa-plus"></i> Add Member
                    </button>
                </div>

                <!-- Add Member Modal -->
                <div class="modal fade" id="addMemberModal" tabindex="-1" role="dialog" aria-labelledby="addMemberModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addMemberModalLabel">Add Member</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Add Member Form -->
                                <form id="addMemberForm" action="management/MemberHandling/add_Member.php" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="MemberName">Name</label>
                                            <input type="text" class="form-control" id="MemberName" name="MemberName" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="MemberRole">Role</label>
                                        <select class="form-control" id="MemberRole" name="MemberRole" required>
                                            <option value="الرئيس">الرئيس</option>
                                            <option value="نائب الرئيس">نائب الرئيس</option>
                                            <option value="رئيس و مؤسس النادي">رئيس و مؤسس النادي</option>
                                            <option value="قائد الفريق التقني">قائد الفريق التقني</option>
                                            <option value="قائد فريق العلاقات العامة">قائد فريق العلاقات العامة</option>
                                            <option value="قائد التنظيم والدعم اللوجستي">قائد التنظيم والدعم اللوجستي</option>
                                            <option value="قائد فريق الإعلام والتسويق">قائد فريق الإعلام والتسويق</option>
                                            <option value="قائد الإدارة القانونية">قائد الإدارة القانونية</option>
                                            <option value="قائد فريق الموارد البشرية">قائد فريق الموارد البشرية</option>
                                            <option value="قائد فريق الأداء والجودة">قائد فريق الأداء والجودة</option>
                                            <option value="قائد الإدارة المالية">قائد الإدارة المالية</option>
                                        </select>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="MemberLinkedin">Linkedin</label>
                                            <input type="url" class="form-control" id="MemberLinkedin" name="MemberLinkedin" placeholder="Enter a valid URL">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="MemberImage">Picture File</label>
                                            <input type="file" class="form-control-file" id="MemberImage" name="MemberImage" accept="image/*" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="MemberYear">Year</label>
                                        <input type="text" class="form-control" id="MemberYear" name="MemberYear" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Add Member</button>
                                        <button type="button" class="btn btn-secondary" onclick="cancelAddMember()"><i class="fas fa-times"></i> Cancel</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Display Members table here -->
                <?php
                // Fetch Members from the database
                $sql = "SELECT * FROM ourTeam";
                $result = $con->query($sql);

                // Display Members in a table
                if ($result->num_rows > 0) {
                ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Linkedin</th>
                                    <th>Year</th>
                                    <th>Picture</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                ?>
                                    <tr id="MemberRow_<?php echo $row['id']; ?>">
                                        <td><?php echo $row['Name']; ?></td>
                                        <td><?php echo $row['Role']; ?></td>
                                        <td><a href="<?php echo $row['Linkedin']; ?>" target="_blank">Linkedin Account</a></td>
                                        <td><?php echo $row['Year']; ?></td>
                                        <td><img src="<?php echo $row['Picture']; ?>" alt="Member Image" style="max-width: 100px;"></td>
                                        <td class="text-center">
                                            <button class="btn btn-outline-primary btn-sm mb-1" onclick="editMember(<?php echo $row['id']; ?>)">
                                                <i class="fas fa-edit"></i> Edit
                                            </button>
                                            <form id="deleteForm_<?php echo $row['id']; ?>" action="management/MemberHandling/delete_Member.php" method="post">
                                                <input type="hidden" name="MemberId" value="<?php echo $row['id']; ?>">
                                                <button class="btn btn-outline-danger btn-sm" onclick="confirmDelete(<?php echo $row['id']; ?>)">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr id="editForm_<?php echo $row['id']; ?>" style="display: none;">
                                        <td colspan="7">
                                            <form id="MemberForm_<?php echo $row['id']; ?>" action="management/MemberHandling/update_Member.php" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="MemberId" value="<?php echo $row['id']; ?>">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="MemberName_<?php echo $row['id']; ?>">Name</label>
                                                        <input type="text" class="form-control" id="MemberName_<?php echo $row['id']; ?>" name="MemberName" value="<?php echo $row['Name']; ?>" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="MemberRole_<?php echo $row['id']; ?>">Role</label>
                                                        <select class="form-control" id="MemberRole_<?php echo $row['id']; ?>" name="MemberRole" required>
                                                            <option value="الرئيس" <?php echo ($row['Role'] == 'الرئيس') ? 'selected' : ''; ?>>الرئيس</option>
                                                            <option value="نائب الرئيس" <?php echo ($row['Role'] == 'نائب الرئيس') ? 'selected' : ''; ?>>نائب الرئيس</option>
                                                            <option value="رئيس و مؤسس النادي" <?php echo ($row['Role'] == 'رئيس و مؤسس النادي') ? 'selected' : ''; ?>>رئيس و مؤسس النادي</option>
                                                            <option value="قائد الفريق التقني" <?php echo ($row['Role'] == 'قائد الفريق التقني') ? 'selected' : ''; ?>>قائد الفريق التقني</option>
                                                            <option value="قائد فريق العلاقات العامة" <?php echo ($row['Role'] == 'قائد فريق العلاقات العامة') ? 'selected' : ''; ?>>قائد فريق العلاقات العامة</option>
                                                            <option value="قائد التنظيم والدعم اللوجستي" <?php echo ($row['Role'] == 'قائد التنظيم والدعم اللوجستي') ? 'selected' : ''; ?>>قائد التنظيم والدعم اللوجستي</option>
                                                            <option value="قائد فريق الإعلام والتسويق" <?php echo ($row['Role'] == 'قائد فريق الإعلام والتسويق') ? 'selected' : ''; ?>>قائد فريق الإعلام والتسويق</option>
                                                            <option value="قائد الإدارة القانونية" <?php echo ($row['Role'] == 'قائد الإدارة القانونية') ? 'selected' : ''; ?>>قائد الإدارة القانونية</option>
                                                            <option value="قائد فريق الموارد البشرية" <?php echo ($row['Role'] == 'قائد فريق الموارد البشرية') ? 'selected' : ''; ?>>قائد فريق الموارد البشرية</option>
                                                            <option value="قائد فريق الأداء والجودة" <?php echo ($row['Role'] == 'قائد فريق الأداء والجودة') ? 'selected' : ''; ?>>قائد فريق الأداء والجودة</option>
                                                            <option value="قائد الإدارة المالية" <?php echo ($row['Role'] == 'قائد الإدارة المالية') ? 'selected' : ''; ?>>قائد الإدارة المالية</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="MemberYear_<?php echo $row['id']; ?>">Year</label>
                                                    <textarea class="form-control" id="MemberYear_<?php echo $row['id']; ?>" name="MemberYear" required><?php echo $row['Year']; ?></textarea>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="MemberLinkedin_<?php echo $row['id']; ?>">Linkedin</label>
                                                        <input type="url" class="form-control" id="MemberLinkedin_<?php echo $row['id']; ?>" name="MemberLinkedin" value="<?php echo $row['Linkedin']; ?>" placeholder="Enter a valid URL">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="newMemberImage_<?php echo $row['id']; ?>">New Image File</label>
                                                        <input type="file" class="form-control-file" id="newMemberImage_<?php echo $row['id']; ?>" name="newMemberImage" accept="image/*">
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
                    echo '<p>No Members found.</p>';
                }
                $con->close();
                ?>
            </main>

        </div>
    </div>

</body>
</html>
