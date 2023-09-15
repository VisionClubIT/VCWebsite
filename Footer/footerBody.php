<style>
    .footer2023 {
        background-color: #274365;
        font-family: 'bukra bold', sans-serif; /* assuming 'bukra-bold' is the font name, adjust accordingly */
        color: #FFFFFF
    }
    .footer2023  ul{
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .footer2023 li {
        display: inline-block;
    }

    @media (max-width: 992px) {
        .footer2023 .navbar-nav {
            flex-direction: column !important;
        }
    }


    .footer2023 li #headerTextSize{
            font-size: 13px !important;
            color: #FFFFFF;
            font-weight: 900 !important;
            font-family:"Bukra Bold" !important;
    }
    .footer2023 #subPages{
            font-size: 11px !important;
            color: #FFFFFF;
            font-weight: 700 !important;
            font-family:"Bukra Bold" !important;
    }

    .footer2023 .btn-floating i {
        color: #FFFFFF;
    }

    .footer2023 .dropdown-menu{
        background-color: #274365;
    }
    
</style>


<footer class="footer2023 text-center text-white">    <!-- Navbar -->
    <div class="container d-flex justify-content-between align-items-center flex-column flex-md-row">

        <!-- Logo -->
        <div class="text-center my-3">
            <img src="img/VCLogo.png" alt="شعار نادي 2030" width="70" height="70" class="img-fluid">
        </div>

        <!-- Vertical Navbar and Icons -->
        <div class="text-center">
            <!-- Nav Bar Items -->
            <div class="navbar navbar-light mx-auto align-items-center text-center justify-content-center">
                <ul class="navbar-nav text-center flex-column flex-sm-row align-items-center mx-auto">
                
                <li class="nav-item text-center">
                    <a class="nav-link" id="headerTextSize" href="index.php">الصفحة الرئيسية</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" id="headerTextSize" href="aboutus2.php">عن النادي</a>
                </li>
                <li class="nav-item mr-3 dropdown">
                    <a class="nav-link dropdown-toggle" id="headerTextSize" href="Events.php" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    الفعاليات والأنشطة
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                    <a class="dropdown-item" id="subPages" href="Events.php">الفعاليات الحالية</a>
                    <a class="dropdown-item" id="subPages" href="Events.php">الفعاليات القادمة</a>
                    </div>
                </li>
                <li class="nav-item mr-3 dropdown">
                    <a class="nav-link dropdown-toggle" id="headerTextSize" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    التواصل
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                    <a class="dropdown-item" id="subPages" href="ContactUs.php">تواصل معنا</a>
                    <a class="dropdown-item" id="subPages" href="https://forms.gle/1kPdPC4cBMiDhBuw7">التقييم</a>
                    </div>
                </li>
                </ul>
            </div>
            <!-- Navbar ends -->

            <!-- Social Media -->
            <div class="pt-4 d-flex flex-column align-items-center justify-content-center">
                <!-- Section: Social media -->
                <section class="mb-4">
                <!-- Facebook -->
                <a
                    class="btn btn-link btn-floating btn-lg text-light m-1"
                    href="#!"
                    role="button"
                    data-mdb-ripple-color="dark"
                    ><i class="fab fa-facebook-f"></i
                ></a>

                <!-- Twitter -->
                <a
                    class="btn btn-link btn-floating btn-lg text-light m-1"
                    href="https://twitter.com/ksuvc2030"
                    role="button"
                    data-mdb-ripple-color="dark"
                    ><i class="fab fa-twitter"></i
                ></a>

                <!-- Instagram -->
                <a
                    class="btn btn-link btn-floating btn-lg text-light m-1"
                    href="https://www.instagram.com/ksuvc2030"
                    role="button"
                    data-mdb-ripple-color="dark"
                    ><i class="fab fa-instagram"></i
                ></a>

                <!-- Linkedin -->
                <a
                    class="btn btn-link btn-floating btn-lg text-light m-1"
                    href="https://www.linkedin.com/company/visionclub2030/"
                    role="button"
                    data-mdb-ripple-color="dark"
                    ><i class="fab fa-linkedin"></i
                ></a>
                <!-- Github -->
                <a
                    class="btn btn-link btn-floating btn-lg text-light m-1"
                    href="#!"
                    role="button"
                    data-mdb-ripple-color="dark"
                    ><i class="fab fa-github"></i
                ></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Social Media  -->
        </div>

        <!-- Back to top button -->
        <div class="text-center my-3">
            <button type="button" class="btn text-light btn-lg" id="btn-back-to-top">
                <i class="fas fa-arrow-up"></i>
            </button>
        </div>

    </div>

    <!-- Copyright -->
    <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        &copy; 2030 نادي الرؤية
    </div>
    <!-- Copyright -->
</footer>

<script>
    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
</script>