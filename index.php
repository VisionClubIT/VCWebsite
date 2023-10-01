<?php
// require  'config/database.php';
// require  'config/app.php';
// $q1 =  $con->query('select * from media order by id ')->fetch_all(MYSQLI_ASSOC);
// $events = $con->query('select * from events order by id ')->fetch_all(MYSQLI_ASSOC);
include('Header/headerVideoIndex.php');
?>

<!-- خاتة الحاوية 1- تعريف رؤية 2030 -->
<?php include('DefinitionOfVision2030/2030.php');?>

    <link rel="stylesheet" href="css/main-166.css">
    <link rel="stylesheet" href="css/vendors-166.css">
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="stylesheet" href="css/header1.css">
    <!-- <link rel="stylesheet" href="css/ssss.css"> -->


<?php include('Dynamic/Alert.php');?>
        <!-- <section Align="center" class=" c-block b-header">
                    <article Align="center" class="article-card">
                        <div Align="center" class="img-box">
                          <img src="img/theline.jpeg" alt="" class="article-banner">
                        </div>
                        <?php foreach( $posts as $post ) { ?>
                        <div Align="center" class="article-content">
            
                          <h3 class="article-title"> <?php echo $post['article-title']; ?></h3>
                          </a>
                          <p class="article-text"> <?php echo $post['article-text']; ?></p>
                          <p class="article-text"> <?php echo $post['article-textR']; ?> </p>&nbsp;
                          <?php } ?>

                          <div Align="center" class="acticle-content-footer">
                            <div class="author">
                              <!-- <img src="img/VCLogo.png" alt="" class="author-avater">-->
                    
                              <div class="author-info">
                                <a href="#"> 
                                  <!--<h4 class="author-name"> <?php echo $post['author-name']; ?></h4>-->
                                </a>
                                <div class="publish-date"></div>
                              </div>
                            </div>
                            <!-- <div class="share">
                              <button class="share-button">
                                <ion-icon name="arrow-redo"></ion-icon>
                              </button> -->
                              <!--<div class="share-option">-->
                                <!--<span>مشاركة</span>-->
                    
                                <!--<a href="https://www.linkedin.com/company/visionclub2030/">-->
                                <!--  <ion-icon name="logo-linkedin"></ion-icon>-->
                                <!--</a>-->
                                <!--<a href="https://twitter.com/ksuvc2030">-->
                                <!--  <ion-icon name="logo-twitter"></ion-icon>-->
                                <!--</a>-->
                                <!--<a href="https://www.instagram.com/ksuvc2030">-->
                                <!--  <ion-icon name="logo-instagram"></ion-icon>-->
                                <!--</a>-->
                              <!--</div>-->
                            <!-- </div> -->
                          </div>
                        </div>
                      </article>
                      <script>
                        const shareOption = document.querySelector('.share-option');
                        document.querySelector('.share-button').addEventListener('click', function () {
                          this.classList.toggle('active');
                          shareOption.classList.toggle('active');
                        });
                      </script>
        </section> 
        <section class=" c-block b-header">
            <!-- <img class="a" src="img/Rectangle.svg">&nbsp; -->
            <!--<img  class="s"  src="img/black-quote-marks-isolated-white-flat-reading-icon-vector-illustration-quotation-logo-140878774 1.svg">&nbsp;-->

        </section>              
        <section class="c-block--remove-top-padding c-block b-featured-stories">
                    <!-- <div class="bottom4-line"></div> -->
                    &nbsp; 
                    &nbsp;  
                    <div class="wp-container-4 wp-block-group t-sink l-sink s-sink alignfull is-style-group-dark-bg"><div class="wp-block-group__inner-container">
          
                        &nbsp; 
                        &nbsp;             <h2  class="h-default alignfull has-text-align-center is-style-XX-Large">  <?php echo $post['HOMLA']; ?></h2>&nbsp;

                    <p Align="center"><?php echo $post['HOMLA2']; ?></p>
                                        <div class="dd">    <img src="img/IMG_3725 2.svg" alt="" class="ac"></div>

                    </div></div>     
                    
                    <section  class="c-block--remove-padding c-block b-media-text c-block--layout-left c-block--width-grid t-theme--light content-vertical" >
                        <div  class="b-media-text__container l-container">
                            <div  class="b-media-text__media">
                                                <div class="b-media-text__img-wrap">
                                        
                    <figure	 class="c-image"	>
                            <img  class="c-image__image lazyload" alt="" data-expand="200" data-parent-fit="width" data-src="https://www.harvard.edu/wp-content/uploads/2022/09/MLP-5Y4A7309-768x576.jpeg" srcset="https://www.harvard.edu/wp-content/themes/core/assets/img/theme/shims/four-three.png" data-sizes="(min-width: 1260px) 1260px, 100vw" data-srcset="img/DSC04303.JPG" src="https://www.harvard.edu/wp-content/themes/core/assets/img/theme/shims/four-three.png" />
                            &nbsp;&nbsp;
                            &nbsp;&nbsp;
                    </figure>
                    
                                    </div>
                                    &nbsp;&nbsp;

                                        </div>
                                        &nbsp;&nbsp;
                            <div  class="b-media-text__content">
                                &nbsp;&nbsp;

                    <div	 class="c-block__content-block c-block__header b-media-text__content-container c-content-block c-content-block--layout-left"	>
                    &nbsp;
                        <div class="c-content-block__content-wrap">
                            &nbsp;&nbsp;

                            <div class="c-block__description b-media-text__text t-sink s-sink c-content-block__content">
                                &nbsp;&nbsp;

                    </div>
                    &nbsp;&nbsp;

                                </div>
                                &nbsp;&nbsp;

                    
                    </div>
                    &nbsp;&nbsp;

                            </div>
                            &nbsp;&nbsp;

                        </div>
                        &nbsp;&nbsp;
                        <div Align="center"class="model">
                            <a href="#" class="btn1">شاهد هنا</a>
                        
                            <div class="video-container">
                              <span class="close">&#10006;</span>
                              <video src="media/RPReplay_Final1667322701.mov" controls></video>
                            </div>
                          </div>
                          <script>
                            const btn1 = document.querySelector('.btn1');
                        
                        const videoContainer = document.querySelector('.video-container');
                        
                        const close = document.querySelector('.close');
                        
                        btn1.addEventListener('click', () => {
                          videoContainer.classList.add('show');
                        })
                        close.addEventListener('click', () => {
                          videoContainer.classList.remove('show');
                        })
                        </script>
                                        &nbsp;&nbsp;

                    
                        <div  class="b-media-text__container l-container">
                            &nbsp;&nbsp;

                            <div  class="b-media-text__media">
                                                <div class="b-media-text__img-wrap">

                    <figure	 class="c-image"	>                   
                            <div class="view-all-1-container">
                               <h2> <a class="view-all-btn" href="/ar/v2030/v2030-projects/">
            عرض
            </a></h2>
                            </div>
                            
                        &nbsp;
                        &nbsp;

                    </figure>
                    
                                    </div>
                                        </div>
                    
                            <div  class="b-media-text__content">
                                
                    <div	 class="c-block__content-block c-block__header b-media-text__content-container c-content-block c-content-block--layout-left"	>
                    
                        
                   
                        
                        <div class="c-content-block__content-wrap">
                            <div class="c-block__description b-media-text__text t-sink s-sink c-content-block__content">
                    </div>
                                </div> 
                    </div>
                            </div>
                        </div>   
                    </section>
                    <section class="dg">
                            <div class="wp-container-4 wp-block-group t-sink l-sink s-sink alignfull is-style-group-dark-bg"><div class="wp-block-group__inner-container">

                                &nbsp; 
                                &nbsp;             <h2  class="h-default alignfull has-text-align-center is-style-XX-Large">  </h2>&nbsp;
        
                            
                            <!-- <p> <?php echo $post['RUN']; ?>  -->
                            <p Align="center">
                            بدايةً من التاريخ المعدود ٢٠١٦، نرسم للحلم صورة 
                            <br>
                            <br>
                            <br>
                            مرورا بالتاريخ المشهود ٢٠٢٢،نرفع للتميز راية 
                            <br>
                            <br>
                            <br>
                            وصولًا للتاريخ الموعود ٢٠٣٠،نروي قصة وعد وجدارة
                            </p>
                            <div class="dd">    <img src="img/IMG_3725 2.svg" alt="" class="ac"></div>

                            </div></div>     
</section>
                
                    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SGSF6G"
                        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
                        <!-- End  -->	
                        <div class="l-wrapper" data-js="site-wrap">
                        
        <script src='js/v.js' id='core-166.js'></script>
        <script id='core-166.js'>
        var modern_tribe_i18n = {"help_text":{"msg_limit":"There is a limit to the messages you can post.","secondary_nav_toggle":"Explore this section"},"tooltips":{"add_to_save":"Add Photo to Saved Items","in_this_photo":"Products in this photo"}};
        var modern_tribe_config = {"images_url":"https:\/\/www.harvard.edu\/wp-content\/themes\/core\/assets\/img\/theme","template_url":"https:\/\/www.harvard.edu\/wp-content\/themes\/core\/","script_debug":"","hmr_dev":"","block_theme_service_worker":"","ppp":"12","home_url":"\/\/"};
        </script>
        <script src='js/vv2.js' id='tribe-scripts-scripts-js'></script>

        <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"NRJS-415bcf4c4af1a9108ef","applicationID":"400299824","transactionName":"YVcDYRYDVhdVUBFcWlgdIFYQC1cKG18EW1FfXAYYFANfAQ==","queueTime":0,"applicationTime":530,"atts":"TRAAF14ZRRk=","errorBeacon":"bam.nr-data.net","agent":""}</script>
    </body>

            </section>

            <section class="c-block--remove-top-padding c-block b-featured-stories">

                <section class=" c-block b-heade">
                    <!-- <img class="a" src="img/Rectangle.svg">&nbsp; -->

                    <!--<img  class="s"  src="img/ddd.svg">&nbsp;-->
                </section>

                <!--<section class=" c-block b-heade">-->
                <!--    <img class="op" src="img/ss.svg">-->

                <!--    <img class="oo" src="img/af4312eb52cabadc8cda1e962b104341 1.svg">-->
                <!--        <img class="uu" src="img/69dc8770fddba82ad2f21ec30d793c3f 1.svg">-->

                <!--<style>-->

                <!--    .b-heade .op{-->
                <!--    width: 10%;-->
                <!--    display: flex;-->
                <!--    margin-bottom: 18rem;-->


                <!--}-->
                <!--.b-heade .oo{-->
                <!--    width: 20%;-->
                <!--    margin-top: -300px;-->
                <!--    margin-right: 20px;-->
                <!--}-->

                <!--.b-heade .uu{-->
                <!--    width: 20%;-->
                <!--    margin-top: -200px;-->
                <!--    margin-left: 20px;-->
                <!--}-->
                <!--@media screen and (max-width: 768px) {-->
                <!--    .b-heade .op{-->
                <!--    width: 10%;-->
                <!--    display: flex;-->
                <!--    margin-bottom: 15rem;-->


                <!--}-->

                <!--.b-heade .oo{-->
                <!--    width: 20%;-->
                <!--    margin-top: -200px;-->
                <!--    margin-right: 20px;-->
                <!--}-->

                <!--.b-heade .uu{-->
                <!--    width: 20%;-->
                <!--    margin-top: -45px;-->
                <!--    margin-left: 20px;-->
                <!--}-->
                <!--}-->



                <!--    </style>-->
<!--</section>-->



                <!-- <section class="giga-projects-section">
                    <div class="tab-wrapper">
                        <div class="tabs" style="background-image: url('img/home/giga-projects-bg.png')">
                            <h2 data-aos="fade-right" data-aos-duration="500" data-aos-easing="linear" data-aos-anchor-placement="top-bottom" data-aos-once="true">
                            <?php echo $post['tabs']?>;
                            </h2>
                            <div class="tab-inner-wrapper" data-aos="fade-right" data-aos-duration="500" data-aos-easing="linear" data-aos-anchor-placement="top-bottom" data-aos-once="true">
                                <a data-tab="#project-item-1" class="tab active" href="javascript:;"> <?php echo $post['Message']?></a>
                                <a data-tab="#project-item-2" class="tab " href="javascript:;"> <?php echo $post['Club']?></a>
                                <a data-tab="#project-item-3" class="tab " href="javascript:;"><?php echo $post['2030']?> </a>
                            </div>
                            <div class="view-all-btn-container">
                                <a class="view-all-btn" href="/ar/v2030/v2030-projects/">
                                    عرض
                                </a>
                            </div>
                        </div>
                        <div class="tab-container">
                            <div id="project-item-1" class="tab-detail active-tab">
                                <div class="project-content" data-aos="fade-up" data-aos-duration="500" data-aos-easing="linear" data-aos-anchor-placement="top-center" data-aos-once="true">
                                    <h3><?php echo $post['M']?> </h3>
                                    <p dir="rtl"> <?php echo $post['M1']?> </p>
                                    <a href="" class="animated-link">
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
                                    </a>
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
                                    <h3> <?php echo $post['M2']?> </h3>
                                    <p>  <?php echo $post['M3']?>  </p>
                                    <a href="" class="animated-link">
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
                                    </a>
                                </div>
                                <img class="project-logo" src="media/heaf0eqy/red-sea-logo.png" data-aos="fade-right" data-aos-duration="500" data-aos-easing="linear" data-aos-anchor-placement="bottom-bottom" data-aos-once="true">
                                <div class="project-background-slider owl-carousel owl-theme">
                                    <div class="project-background" style="background:linear-gradient(to top, rgba(0,0,0,.5), rgba(0,0,0,.2)), url('/media/w4vfurzv/trsdc-prst-09.jpg')">
                                    </div>
                                    <div class="project-background" style="background:linear-gradient(to top, rgba(0,0,0,.5), rgba(0,0,0,.2)), url('/media/ahhiqogg/harrat-lunayyir-dormant-volcano.jpg')">
                                    </div>
                                    <div class="project-background" style="background:linear-gradient(to top, rgba(0,0,0,.5), rgba(0,0,0,.2)), url('/media/pbjp1u5g/trsdc-prst-03.jpg')">
                                    </div>
                                </div>
                            </div>
                            <div id="project-item-3" class="tab-detail ">
                                <div class="project-content" data-aos="fade-up" data-aos-duration="500" data-aos-easing="linear" data-aos-anchor-placement="top-center" data-aos-once="true">
                                    <h3> <?php echo $post['M4']?></h3>
                                    <p dir="rtl"> <?php echo $post['M5']?></p>
                                    <a href="" class="animated-link">
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
                                    </a>
                                </div>
                                            <img class="project-logo" src="" data-aos="fade-right" data-aos-duration="500" data-aos-easing="linear" data-aos-anchor-placement="bottom-bottom" data-aos-once="true">
                                <div class="project-background-slider owl-carousel owl-theme">
                                                <div class="project-background" style="background:linear-gradient(to top, rgba(0,0,0,.5), rgba(0,0,0,.2)), url('/media/o2ub0qsw/roshn-homepage.png')">
                                                </div>
                                    <div class="project-background" style="background:linear-gradient(to top, rgba(0,0,0,.5), rgba(0,0,0,.2)), url('/media/odmiyj5l/roshn-homepage_1.png')">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="view-all-btn-mobile-container" style="background-image: url('/img/home/giga-projects-bg.png')">
                            <a class="view-all-btn" href="/">
                                $
                            </a>
                        </div>
                    </div>
                </section> -->
                <div id="divstatistics" runat="server"  class="fadeIn">
                    <div class="section section-facts p-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 d-flex align-items-center side-one">
                                    <div class="text-center">
                                        <div class="heading-subtitle section-facts-subtitle"><img src="img/VCLogo.png"></div>
                                        <h2 class="mt-3">  <?php echo $post['M10']?> </h2>
                                        <div class="facts-cont-box mt-4">  
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 side-two">
                                    <div class="w-100">
                                        <div class="facts-cont-box">
                                            <div class="item col-12 col-md-6">
                                                <div class="item-icon"><img src="img/icons/ico-green-5.svg" alt="img"></div>
                                                <div class="item-content">
                                                    <h2>
                                                        ١٠٣
                                                        <!-- <asp:Label runat="server" ID="HealthCount">199</asp:Label> -->
                                                    </h2>
                                                    <h4><?php echo $post['M7']?>   </h4>

                                                </div>
                                            </div>
                                            <div class="item col-12 col-md-6">
                                                <div class="item-icon"><img src="img/icons/ico-green-2.svg" alt="img"></div>
                                                <div class="item-content">
                                                    <h2>
                                                        ٢١
                                                        <!-- <asp:Label runat="server" ID="BuildCount">20</asp:Label> -->
                                                    </h2>
                                                    <h4>  <?php echo $post['M8']?> </h4>

                                                </div>
                                            </div>
                                            <div class="item col-12 col-md-6">
                                                <div class="item-icon"><img src="img/icons/ico-green-3.svg" alt="img"></div>
                                                <div class="item-content">
                                                    <h2>
                                                        ٦٦٠٠
                                                        <!-- <asp:Label runat="server" ID="AreaCount">150</asp:Label> -->
                                                    </h2>
                                                    <h4>  <?php echo $post['M9']?></h4>
                                                    <script>
                                                        var project = setInterval(projectDone, 500)
                                                        var clients = setInterval(happyClients, 1000)
                                                        var coffee = setInterval(cupsCoffee, 150)
                                                        let count1 = 1;
                                                        let count2 = 1;
                                                        let count3 = 1;
                                                        function projectDone() {
                                                            count1++
                                                            document.querySelector("#HealthCount").innerHTML = count1
                                                            if (count1 == 200) {
                                                                clearInterval(project)
                                                            }
                                                        }
                                                        function happyClients() {
                                                            count2++
                                                            document.querySelector("#BuildCount").innerHTML = count2
                                                            if (count2 == 200) {
                                                                clearInterval(clients)
                                                            }
                                                        }
                                                        function cupsCoffee() {
                                                            count3++
                                                            document.querySelector("#AreaCount").innerHTML = count3
                                                            if (count3 == 198) {
                                                                clearInterval(coffee)
                                                            }
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section>
            <?php include('review.php');?> 
        </section> -->                                   
                                            
        <?php include_once 'Footer/Footer.php'?>
<!-- <?php include('review.php');?> -->

<!--       I hope you achieve the best, I believe in that  (:    
    A. from technical team  . -->       