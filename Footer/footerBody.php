
        <style>
            .footer2023 {
                background-color: #274365;
                font-family: 'bukra bold', sans-serif; /* assuming 'bukra-bold' is the font name, adjust accordingly */
                color: #FFFFFF;
            }
            .footer2023  ul{
                list-style-type: none;
                padding: 8px 16px !important;
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: flex-start;  /* Aligns items to the top */
            }

            .footer2023 ul .nav-item{
                margin: 0 1.5rem; /* Adjust the margin as needed to create space between items */
                text-align: center!important;            
            }


            .footer2023 .navbar-light .navbar-nav .show>.nav-link {
                color: #4895c5cf !important;

            }
            .footer2023 ul .nav-item .nav-link{
                    font-size: 15px !important;
                    color: #FFFFFF;
                    font-weight: 900 !important;
                    font-family:"Bukra Bold" !important;
                    text-align: center!important;
            }

            .footer2023 .dropdown{
                width: fit-content;
            }

            .footer2023 .dropdown .dropdown-menu{
                background-color: #274365;
                padding: 0 !important;
                margin: 0 !important;
                text-align: center;
                border: none;
            }

            .footer2023 .dropdown-menu .dropdown-item{
                    font-size: 11px !important;
                    color: #FFFFFF;
                    font-weight: 700 !important;
                    font-family:"Bukra Bold" !important;
            }
            .footer2023 .dropdown-menu .dropdown-item:hover,
            .footer2023 ul .nav-item .nav-link:hover,
            .footer2023 .footer-to-top-btn button svg:hover,
            .footer2023 a.btn.btn-link.btn-floating.btn-lg.text-light.m-1 svg:hover
            .footer2023 ul .nav-item .show .nav-link{
                color: #4895c5cf !important;
            }

            .footer2023 a.btn.btn-link.btn-floating.btn-lg.text-light.m-1 svg{
                margin: 4px 6px !important;
                padding: 3px !important;
                height: 28px !important;
                width: 28px !important;
                color: #FFFFFF;
            }

            .footer2023 .text-center{
                margin: 0 !important;
            }

            .footer2023 .footer-to-top-btn button{
                background-color: #274365 !important;
                font-size: 20px !important;
                padding: 8px 16px   !important;

            }

            .footer2023 .footer-copyrights{
                margin: 0 !important;
                font-size: 16px !important;
                padding: 16px !important;
            }

            
            @media (max-width: 992px) {
                .footer2023 .navbar-nav {
                    flex-direction: column !important;
                }
                .footer2023 ul {
                    align-items: center;
                }
                .footer2023 .navbar-nav .nav-item {
                    margin: 0;
                    margin-bottom: 1rem;


                }
            }
        </style>
        <footer class="footer2023 text-center text-white" style="margin: 0;">    <!-- Navbar -->
            <div class="container d-flex justify-content-between align-items-center flex-column flex-md-row" style="padding-top:10px">

                <!-- Logo -->
                <div class="footer-image text-center my-3">
                    <img src="img/VCLogo.png" alt="شعار نادي 2030" width="70" height="70" class="img-fluid">
                </div>

                <!-- Vertical Navbar and Icons -->
                <div class="text-center">
                    <!-- Nav Bar Items -->
                    <div class="footer-navbar navbar navbar-light mx-auto text-center justify-content-center">
                        <ul class="navbar-nav text-center flex-column flex-sm-row mx-auto">
                        
                        <li class="nav-item">
                            <a class="nav-link"  href="Home">الصفحة الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="Events">الفعاليات والأنشطة</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  href="AboutUs" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            عن النادي
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <a class="dropdown-item" id="subPages" href="AboutUs">الرسالة والرؤية</a>
                            <a class="dropdown-item" id="subPages" href="OurTeam">الهيكل التنظيمي</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="ContactUs">تواصل معنا</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            تواصل معنا
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" id="subPages" href="ContactUs.php">تواصل معنا</a>
                            <a class="dropdown-item" id="subPages" href="https://forms.gle/1kPdPC4cBMiDhBuw7">التقييم</a>
                            </div>
                        </li> -->
                        </ul>
                    </div>
                    <!-- Navbar ends -->

                    <!-- Social Media -->
                    <div class="footer-social-media-icons pt-4 d-flex flex-column align-items-center justify-content-center">
                        <!-- Section: Social media -->
                        <section class="mb-4">

                        <!-- Twitter/x -->
                        <a
                            class="btn btn-link btn-floating btn-lg text-light m-1"
                            href="https://twitter.com/ksuvc2030"
                            role="button"
                            target="_blank"
                            data-mdb-ripple-color="dark"
                            ><i class="fa-brands fa-x-twitter"></i>
                        </a>

                        <!-- Instagram -->
                        <a
                            class="btn btn-link btn-floating btn-lg text-light m-1"
                            href="https://www.instagram.com/ksuvc2030"
                            target="_blank"
                            role="button"
                            data-mdb-ripple-color="dark"
                            ><i class="fab fa-instagram"></i
                        ></a>

                        <!-- Linkedin -->
                        <a
                            class="btn btn-link btn-floating btn-lg text-light m-1"
                            href="https://www.linkedin.com/company/visionclub2030/"
                            role="button"
                            target="_blank"
                            data-mdb-ripple-color="dark"
                            ><i class="fab fa-linkedin"></i
                        ></a>
                        </section>
                        <!-- Section: Social media -->
                    </div>
                    <!-- Social Media  -->
                </div>

                <!-- Back to top button -->
                <div class="footer-to-top-btn text-center my-3">
                    <button type="button" class="btn text-light btn-lg" id="btn-back-to-top">
                        <i class="fas fa-arrow-up"></i>
                    </button>
                </div>

            </div>

            <!-- Copyright -->
            <div class="footer-copyrights text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
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