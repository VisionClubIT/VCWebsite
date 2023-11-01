<?php
require_once('config/database.php'); // Include your database configuration

// Query to select the data for the latest date event
$q = "SELECT image_events, name, description, tweet, buttonText FROM events ORDER BY date DESC LIMIT 1";
$r = mysqli_query($con, $q);

// Check if there is a result
if ($r && mysqli_num_rows($r) > 0) {
    $row = mysqli_fetch_assoc($r);
    $backgroundImage = $row['image_events'];
    $eventName = $row['name'];
    $eventDescription = $row['description'];
    $eventTweet = $row['tweet'];
	$buttonText = $row['buttonText'];
} else {
    // Default values if no events are found
    $backgroundImage = 'uploads/events/default.png'; // Replace with your default image URL
    $eventName = 'No Event Available';
    $eventDescription = 'There are currently no events.';
    $eventTweet = '#'; // Replace with your default tweet URL or handle
}


?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <?php include_once 'Header/headerhead.php';?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/events.css?v=<?php echo time(); ?>">
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="js/filterEv.js"></script>
</head>

<body class="bg-white" style="margin:0">
    <?php include_once 'Header/headerbody.php';?>
    <div class="promotional-event">

        <div class="promotional-overlay"></div> <!-- Grey overlay for text -->
        <div class="promo-rectangle">
            <div class="event-details">
                <h2><?php echo $eventName; ?></h2>
                <p><?php echo $eventDescription; ?></p>
                <a href="<?php echo $eventTweet; ?>" class="event-button"><?php echo $buttonText; ?></a>
            </div>
        </div>
    </div>

    <div class="past-events">
        
        <div class="event-list">
            <?php
            $result = mysqli_query($con, "SELECT * FROM `events`order by date desc");
            while ($row = mysqli_fetch_assoc($result)) {
                $tweet = $row['tweet'];
            ?>
                <div class="event-card">
                    <div class="event-image" style="background-image: url(<?php echo $row['image_events']; ?>);"></div>
                    <div class="event-details">
                       <div class=card-content> <span class="event-date"><?php echo $row['date']; ?></span>
                        <h3 class="eventname"><?php echo $row['name']; ?></h3>
                        <p class="eventdes"><?php echo $row['description']; ?></p>
                        <a href="<?php echo $tweet; ?>" class="event-link"><?php echo $row['buttonText']; ?></a></div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <?php include_once 'Footer/footerbody.php' ?>

</body>

</html>
