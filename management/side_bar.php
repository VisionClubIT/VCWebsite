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
<nav id="sidebar" class="col-md-3 col-lg-2 bg-dark sidebar">
    <div class="sidebar-sticky">

        <!-- Always visible logo and text in desktop view -->
        <div class="text-center mt-3 mb-4 d-none d-md-block">
            <img src="img/VCLogo.png" alt="Logo" class="img-fluid rounded" style="width: 75px;">
            <h5 class="text-white mt-2">VC2030</h5>
        </div>

        <!-- Logo and toggler button in mobile view -->
        <div class="text-center mt-3 mb-4 d-md-none">
            <div class="row">
                <!-- Toggler button in the first column -->
                <div class="col d-flex align-items-center ml-5">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars fa-lg text-white"></i></span>
                    </button>
                </div>

                <!-- Logo and text in the second column -->
                <div class="col">
                    <img src="img/VCLogo.png" alt="Logo" class="img-fluid rounded" style="width: 60px;">
                </div>
            </div>
        </div>

        <!-- Navigation links -->
        <div class="nav flex-column text-white text-center" id="navbarNav">
            <ul style="list-style: none; padding: 0;">
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
        
        <script>
            // JavaScript to check screen width and add collapse class if needed
            window.addEventListener('resize', function () {
                var isMobile = window.innerWidth < 768;
                var navbarNav = document.getElementById('navbarNav');
                if (isMobile) {
                    navbarNav.classList.add('collapse');
                } else {
                    navbarNav.classList.remove('collapse');
                }
            });

            // Initial check on page load
            var isMobile = window.innerWidth < 768;
            var navbarNav = document.getElementById('navbarNav');
            if (isMobile) {
                navbarNav.classList.add('collapse');
            }
        </script>
    </div>
</nav>
