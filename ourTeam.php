<?php
include_once 'Header/header.php';
require_once('config/database.php');

// Function to retrieve hierarchy data
function getHierarchyData($year, $role, $con) {
    $query = "SELECT * FROM ourTeam WHERE year = $year AND role = '$role'";
    $result = mysqli_query($con, $query);
    return mysqli_fetch_assoc($result);
}

// Get the latest year
$query = "SELECT MAX(year) AS latest_year FROM ourTeam";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$latestYear = $row['latest_year'];

// Define roles for the main block
$Presidency = ["الرئيس", "نائب الرئيس","رئيس و مؤسس النادي"];
$leaders = ["قائد الفريق التقني", "قائد فريق العلاقات العامة", "قائد التنظيم والدعم اللوجستي", "قائد فريق الإعلام والتسويق", "قائد الإدارة القانونية", "قائد فريق الموارد البشرية", "قائد فريق الأداء والجودة", "قائد الإدارة المالية"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>الهيكل التنظيمي</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/ourTeam.css">
</head>
<body>
    <!-- Container with background image, text, and overlay -->
    <div class="container-bg custom-page" style="background-image: url('uploads/groupPhoto.jpeg');">
    <div class="background-content custom-page">
        <div class="overlay"></div>
        <h1 class="text">"نكون معاً هذه هي البداية، والبقاء معاً هو التقدم، والعمل معاً هو النجاح"</h1>
    </div>
</div>

<!-- Main Block -->
<div class="container">
    <div class="row">
        <div class="tree">
        <h2 class="subtitle">فريق عمل نادي رؤية ٢٠٣٠</h2>
            <ul>
                <?php
                // Loop through presidency
                foreach ($Presidency as $role) {
                    $data = getHierarchyData($latestYear, $role, $con);
                    if ($data) {
                        echo "<li><a href='{$data['Linkedin']}' target='_blank'><img src='{$data['Picture']}'>$role<span>{$data['Name']}</span></a>";
                            echo "<ul>";
                        
                    }
                }

                 // Loop through leaders
                 foreach ($leaders as $role) {
                    $data = getHierarchyData($latestYear, $role, $con);
                    if ($data) {
                        echo "<li class='leader-item'><a href='{$data['Linkedin']}' target='_blank'><img src='{$data['Picture']}'>$role<span>{$data['Name']}</span></a></li>";
                    }
                }
                // Close ul elements
                echo str_repeat("</ul></li></li>", count($leaders) - 1);
                ?>
            </ul>
        </div>
    </div>
</div>
<hr>

<!-- Horizontal line to separate the main team hierarchy -->
<div class="separator"></div>
<h2 class="subtitle">رئاسة النادي خلال السنوات</h2>

<!-- Four horizontal blocks at the bottom of the page -->
<div class="horizontal-blocks">
    <?php
    for ($i = 0; $i < 4; $i++) {
        $blockYear = $latestYear - $i - 1;
        $prevYear = $blockYear-1;

        
        echo "<div class='block'><span class='year'>$prevYear/$blockYear</span><ul class='tree'>";
        foreach (['الرئيس','رئيس و مؤسس النادي','نائبة الرئيس', 'نائب الرئيس'] as $role) {
            $data = getHierarchyData($blockYear, $role, $con);
            if ($data && $role == 'الرئيس' || $data && $role == 'رئيس و مؤسس النادي') {
                echo "<li><a href='{$data['Linkedin']}' target='_blank'><img src='{$data['Picture']}'>$role<span>{$data['Name']}</span></a><ul>";
            }
           
            if ($data && $role == 'نائب الرئيس') {
                echo "<li><a href='{$data['Linkedin']}' target='_blank'><img src='{$data['Picture']}'>$role<span>{$data['Name']}</span></a></li>";
            }
            if ($data && $role == 'نائبة الرئيس'){
                echo "<li><a href='{$data['Linkedin']}' target='_blank'><img src='{$data['Picture']}'>$role<span>{$data['Name']}</span></a></li>";
            }
        
        }
        echo "</ul></div>";
    }
    
    ?>
</div>
</body>
</html>

<?php include_once 'Footer/footer.php'?>

