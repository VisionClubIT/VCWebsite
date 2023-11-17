<?php
// Start the session
session_start();

// Check if the logout form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page or wherever you want
    header("Location: login.php");
    exit();
}
?>


<!-- Sidebar -->
<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
    <div class="sidebar-sticky">
        <div class="text-center mt-3 mb-4">
            <img src="img/VCLogo.png" alt="Logo" class="img-fluid rounded" style="width: 75px;">
            <h5 class="text-white mt-2">VC2030</h5>
        </div>

        <ul class="nav flex-column text-white text-center">
            <li class="nav-item">
                <div class="nav-link-container">
                    <a class="nav-link active" href="TableEvents.php">
                        <i class="fas fa-home fa-fw mr-2"></i>Events
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <div class="nav-link-container">
                    <a class="nav-link" href="TableMembers.php">
                        <i class="fas fa-users fa-fw mr-2"></i>Members
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <div class="nav-link-container">
                    <a class="nav-link" href="TableSponsors.php">
                        <i class="fas fa-handshake fa-fw mr-2"></i>Sponsors
                    </a>
                </div>
            </li>
            <!-- Logout Button -->
            <li class="nav-item">
                <div class="nav-link-container">
                    <form action="#" method="post">
                        <button type="submit" class="nav-link" style="border: none; background: none; cursor: pointer;">
                            <i class="fas fa-sign-out-alt fa-fw mr-2"></i>Logout
                        </button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
