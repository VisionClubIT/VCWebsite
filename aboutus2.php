<?php include_once 'Dynamic/Alert.php'; ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <!--White Header Head Include almost every thing--> 
        <?php include_once  'Header/HeaderWhiteHead.php'; ?>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        
        
        <link rel="stylesheet" href="css/megaProjectsSection.css">
        

        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function () {
                let tabs = document.querySelectorAll('.tab');
                let tabContents = document.querySelectorAll('.tab-detail');

                tabs.forEach(function (tab) {
                    tab.addEventListener('click', function () {
                        // Remove active classes from all tabs
                        tabs.forEach(function (innerTab) {
                            innerTab.classList.remove('active');
                        });
                        // Add active class to clicked tab
                        tab.classList.add('active');

                        // Get the content to show based on the clicked tab
                        let tabToShow = document.querySelector(tab.getAttribute('data-tab'));

                        // Hide all tab contents
                        tabContents.forEach(function (content) {
                            content.classList.remove('active-tab');
                        });

                        // Show the corresponding tab content
                        tabToShow.classList.add('active-tab');
                    });
                });
            });
                    
        </script>


    </head>
    <body>
    <?php include_once  'Header/HeaderWhiteBody.php'; ?>

    <section class="giga-projects-section">
        <div class="container-fluid" style="background-image: url('img/home/giga-projects-bg.png')">
            <div class="row">
                <div class="col-md-4 order-md-2">
                    <div class="tab-wrapper">
                        <div class="tabs">
                                <h2 data-aos="fade-right" data-aos-duration="500" data-aos-easing="linear" data-aos-anchor-placement="top-bottom" data-aos-once="true">
                                نادي رؤية ٢٠٣٠
                                </h2>
                                <div class="tab-inner-wrapper" data-aos="fade-right" data-aos-duration="500" data-aos-easing="linear" data-aos-anchor-placement="top-bottom" data-aos-once="true">
                                    <a data-tab="#project-item-1" class="tab active" href="javascript:;">الرسالة</a>
                                    <a data-tab="#project-item-2" class="tab " href="javascript:;">الهدف</a>
                                    <a data-tab="#project-item-3" class="tab " href="javascript:;">الرؤية</a>
                                </div>
                                <div class="view-all-btn-container">
                                    <!-- <a class="view-all-btn" href="/ar/v2030/v2030-projects/">    عرض</a> -->
                                </div>
                        </div>
                        <!--<div class="view-all-btn-mobile-container" style="background-image: url('img/home/giga-projects-bg.png')">
                             <a class="view-all-btn" href="/"> $  </a> 
                        </div>-->
                    </div>
                </div>
                <div class="col-md-8 order-md-2">
                    <div class="tab-container">
                                <div id="project-item-1" class="tab-detail active-tab">
                                    <div class="project-content" data-aos="fade-up" data-aos-duration="500" data-aos-easing="linear" data-aos-anchor-placement="top-center" data-aos-once="true">
                                        <h3>دعم الطاقات وتحفيزها لتكوين مجتمع ريادي متوافق مع اهداف رؤية المملكة العربية السعودية ٢٠٣٠</h3>
                                        <p dir="rtl"></p>
                                        <!-- <a href="" class="animated-link">
                                            <strong>Vision</strong>
                                            <span>
                                            <small>
                                            <i>
                                            <svg width="15" height="13" viewBox="0 0 15 13" fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="1">
                                            <path opacity="1" d="M1.94338 6.49071L12.6896 6.50974" stroke="#24B4BA" stroke-width="2" stroke-linecap="round"></path>
                                            <path opacity="1" d="M9.17697 1.80839L13.6241 6.36666L9.42935 10.6663" stroke="#24B4BA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                            </svg>
                                            </i>
                                            </small>
                                            </span>
                                        </a> -->
                                    </div>
                                    <img class="project-logo" src="" data-aos="fade-right" data-aos-duration="500" data-aos-easing="linear" data-aos-anchor-placement="bottom-bottom" data-aos-once="true">
                                    <div class="project-background-slider owl-carousel owl-theme">
                                        <div class="project-background" style="background:linear-gradient(to top, rgba(0,0,0,.5), rgba(0,0,0,.2)), url('media/1wtnhuf3/copy-of-jean-marie-del-moral_dsc2123_bajdah_rgb-hires_tourism.jpeg')">
                                        </div>
                                        <div class="project-background" style="background:linear-gradient(to top, rgba(0,0,0,.5), rgba(0,0,0,.2)), url('media/xxjlb5e4/pp.svg')">
                                        </div>
                                        <div class="project-background" style="background:linear-gradient(to top, rgba(0,0,0,.5), rgba(0,0,0,.2)), url('media/1wtnhuf3/copy-of-jean-marie-del-moral_dsc2123_bajdah_rgb-hires_tourism.jpeg')">
                                        </div>
                                        <div class="project-background" style="background:linear-gradient(to top, rgba(0,0,0,.5), rgba(0,0,0,.2)), url('media/5qfjrzkl/copy-of-marc-le-cornu_dji_0910-hdr_al-shaq_rgb-hires_tourism.jpeg')">
                                        </div>
                                        <div class="project-background" style="background:linear-gradient(to top, rgba(0,0,0,.5), rgba(0,0,0,.2)), url('media/wx2mpe2k/copy-of-marc-le-cornu_dji_0440_yabou-island_rgb-hires_tourism.jpeg')">
                                        </div>
                                    </div>
                                    </div>
                                    <div id="project-item-2" class="tab-detail ">
                                        <div class="project-content" data-aos="fade-up" data-aos-duration="500" data-aos-easing="linear" data-aos-anchor-placement="top-center" data-aos-once="true">
                                            <h3>تفعيل دور الشباب بما يتوافق مع سوق العمل حالياً ومستقبلياً</h3>
                                            <p>عن طريق إقامة برامج وورش عمل تدريبية و مجالس حوارية التي تسهم في تطوير مهاراتهم</p>
                                            <!-- <a href="" class="animated-link">
                                                <strong>محتوى  </strong>
                                                <span>
                                                <small>
                                                <i>
                                                <svg width="15" height="13" viewBox="0 0 15 13" fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="1">
                                                <path opacity="1" d="M1.94338 6.49071L12.6896 6.50974" stroke="#24B4BA" stroke-width="2" stroke-linecap="round"></path>
                                                <path opacity="1" d="M9.17697 1.80839L13.6241 6.36666L9.42935 10.6663" stroke="#24B4BA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                                </svg>
                                                </i>
                                                </small>
                                                </span>
                                            </a> -->
                                        </div>
                                        <img class="project-logo" src="" data-aos="fade-right" data-aos-duration="500" data-aos-easing="linear" data-aos-anchor-placement="bottom-bottom" data-aos-once="true">
                                        <div class="project-background-slider owl-carousel owl-theme">
                                            <div class="project-background" style="background:linear-gradient(to top, rgba(0,0,0,.5), rgba(0,0,0,.2)), url('media\w4vfurzv\trsdc-prst-09.jpg')">
                                            </div>
                                            <div class="project-background" style="background:linear-gradient(to top, rgba(0,0,0,.5), rgba(0,0,0,.2)), url('media\ahhiqogg\harrat-lunayyir-dormant-volcano.jpg')">
                                            </div>
                                            <div class="project-background" style="background:linear-gradient(to top, rgba(0,0,0,.5), rgba(0,0,0,.2)), url('media\pbjp1u5g\trsdc-prst-03.jpg')">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="project-item-3" class="tab-detail ">
                                        <div class="project-content" data-aos="fade-up" data-aos-duration="500" data-aos-easing="linear" data-aos-anchor-placement="top-center" data-aos-once="true">
                                            <h3>تمكين طلاب وطالبات جامعة الملك سعود للمشاركة في تحقيق رؤية المملكة العربية السعودية ٢٠٣٠</h3>
                                            <p dir="rtl"> </p>
                                            <!-- <a href="" class="animated-link">
                                                <strong>محتوى</strong>
                                                <span>
                                                <small>
                                                <i>
                                                <svg width="15" height="13" viewBox="0 0 15 13" fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="1">
                                                <path opacity="1" d="M1.94338 6.49071L12.6896 6.50974" stroke="#24B4BA" stroke-width="2" stroke-linecap="round"></path>
                                                <path opacity="1" d="M9.17697 1.80839L13.6241 6.36666L9.42935 10.6663" stroke="#24B4BA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                                </svg>
                                                </i>
                                                </small>
                                                </span>
                                            </a> -->
                                        </div>
                                        <img class="project-logo" src="" data-aos="fade-right" data-aos-duration="500" data-aos-easing="linear" data-aos-anchor-placement="bottom-bottom" data-aos-once="true">
                                        <div class="project-background-slider owl-carousel owl-theme">
                                            <div class="project-background" style="background:linear-gradient(to top, rgba(0,0,0,.5), rgba(0,0,0,.2)), url('media\o2ub0qsw\roshn-homepage.png')">
                                            </div>
                                            <div class="project-background" style="background:linear-gradient(to top, rgba(0,0,0,.5), rgba(0,0,0,.2)), url('media\odmiyj5l\roshn-homepage_1.png')">
                                            </div>
                                        </div>
                                    </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <script>
            $(document).ready(function(){
                $(".owl-carousel").owlCarousel({
                    // Options go here
                });
            });
        </script>
    </body>
</html>