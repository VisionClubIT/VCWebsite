<!-- index.php -->
<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'AboutUs':
        include 'aboutUs.php';
        break;
    case 'ContactUs':
        include 'ContactUs.php';
        break;
    case 'Events':
        include 'Events.php';
        break;
    case 'OurTeam':
        include 'ourTeam.php';
        break;
    case 'TableEvents':
        include 'TableEvents.php';
        break;
    case 'TableMembers':
        include 'TableMembers.php';
        break; 
    case 'TableSponsors':
        include 'TableSponsors.php';
        break;   
    case 'Home':
        include 'home.php';
        break;     
    default:
        include 'home.php';
        break;
}
?>
