<!DOCTYPE html>
<html lang="ar" dir="rtl" class="rtl">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
    
    <title>
       نادي رؤية 2030
    </title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1" />
    <meta name="description" content="تقدم وانجازات نادي رؤية 2030    ">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:locale" content="ar-SA" />
    <meta property="og:title" content="الصفحة الرئيسية" />
    <meta property="og:description" content="    تقدم وانجازات نادي رؤية 2030 " />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="2030 رؤية نادي">
    
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    
    <style>
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;

         }
         .btn1 {
            font-size: 15px;
          text-decoration: none;
          padding: 20px 45px;
          background-color: rgb(209, 215, 111);
          color: rgb(0, 72, 135);
          border-radius: 40px;
          font-family: "Bukra Bold";
          font-weight: bolder;
         }
         .video-container{
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          z-index: 99999;
          background-color: rgba(114, 139, 116, 0.915);
          display: flex;
          justify-content: center;
          align-items: center;
          opacity: 0;
          pointer-events: none;
          transition: all 0.3s;
         }
         .video-container .close{
          position: absolute;
          top: 15%;
          right: 25px;
          font-size: 25px;
          cursor: pointer;
          color: rgb(217, 53, 25);

         }
         .video-container video{
          width: 90%;
          max-width: 800px;
          transform: scale(0);
          box-shadow: 0 20px 20px rgba(0, 0, 0, 0.4);
          outline: none;
          transition: all 0.3;
         }
         .video-container.show{
          pointer-events: all;
          opacity: 1;
         }
         .video-container.show video{
          transform: scale(1);
         }
        .mobile-menu-social .aaa  {
            font-size: 21px;
            background-color: rgb(200, 186, 97);
        }
         .headerTextSize{
            font-size: 13px !important;
         }
    </style>
    
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "GovernmentOrganization",
            "name": "Saudi Vision 2030",
            "url": "https://www.vision2030.gov.sa/",
            "logo": "https://www.vision2030.gov.sa/img/colored-logo.png",
            "sameAs": ["https://www.facebook.com/Saudi2030/", "https://twitter.com/saudivision2030", "https://www.instagram.com/saudivision2030/", "https://www.youtube.com/channel/UC3pvQeDObhT0nGC58txGnzg"]
        }
    </script>

    
    <link rel="apple-touch-icon" sizes="180x180" href="img/VCLogo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/VCLogo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/VCLogo.png">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="img/VCLogo.png">
    <link rel="stylesheet" href="css/main-166.css">
    <link rel="stylesheet" href="css/vendors-166.css">
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="stylesheet" href="css/header1.css">
    <link rel="stylesheet" href="css/ssss.css">
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/ionicons/ionicons.js"></script>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>


<body class="body-home">

    <header class="bg-white-header" style="position:relative;">
<!--Navigation Bar logo-->
        <div class="nav-left" style="z-index: 1000;">
            <a href="#">
                <img class="logo" src="img/VCLogo.png" alt="شعار نادي 2030">
                <!-- <div class="bottom-line"></div> -->
            </a>
            <ul class="lang-selection-list">
                <li class="lang-selection-item">
                    <a class="lang-selection-link" href="javascript:;">
                    <!-- AR <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 6"> -->
                    <path d="M1212.078,103.984l4,4,4-4" transform="translate(-1211.371 -103.277)" fill="none" stroke="#fff" stroke-width="2" />
                    </svg>
                    <!-- <div class="bottom3-line"></div> -->
                    </a>
                    <ul>
                        <li></li> 
                        <li><!-- <a href="/">EN</a> --></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="nav-right">
            <nav>
                <ul class="navbar-nav mr-auto">
                    <!-- Menu Items -->
                    <li class="nav-item dropdown">
                        <a class="nav-link headerTextSize" href="index.php">
                        الصفحة الرئيسية
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link headerTextSize" href="aboutus.php">
                            عن النادي
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link headerTextSize dropdown-toggle" href="Events.php" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            الفعاليات والأنشطة
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <a class="dropdown-item" href="Events.php">الفعاليات الحالية</a>
                            <a class="dropdown-item" href="Events.php">الفعاليات القادمة</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link headerTextSize" href="#">
                            تواصل معنا
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link headerTextSize dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            التواصل
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <a class="dropdown-item" href="ContactUs.php">تواصل معنا</a>
                            <a class="dropdown-item" href="https://forms.gle/1kPdPC4cBMiDhBuw7">التقييم</a>
                        </div>
                    </li>
                </ul>

                <ul class="mobile-menu-social">
                    <li>
                        <a href="https://www.linkedin.com/company/visionclub2030/" target="_blank">
                            <ion-icon class="aaa"  name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="https://twitter.com/ksuvc2030" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="19" viewBox="0 0 24 19">
                                <path d="M743.942,396.365a13.931,13.931,0,0,1-21.44,11.728,10.167,10.167,0,0,0,1.181.06,9.8,9.8,0,0,0,6.076-2.091,4.9,4.9,0,0,1-4.575-3.394,6.184,6.184,0,0,0,.924.076,5.167,5.167,0,0,0,1.288-.167,4.895,4.895,0,0,1-3.924-4.8v-.06a4.926,4.926,0,0,0,2.212.621,4.9,4.9,0,0,1-1.515-6.546,13.915,13.915,0,0,0,10.09,5.122,5.584,5.584,0,0,1-.121-1.121,4.9,4.9,0,0,1,8.47-3.349,9.631,9.631,0,0,0,3.106-1.182,4.881,4.881,0,0,1-2.152,2.7,9.816,9.816,0,0,0,2.818-.758,10.512,10.512,0,0,1-2.454,2.531C743.942,395.94,743.942,396.152,743.942,396.365Z" transform="translate(-722.502 -390.895)" fill="#d4b264fe" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/ksuvc2030" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 22 22">
                                <path d="M829.034,404.733a5.792,5.792,0,0,1-6.068,6.069c-1.726.1-6.9.1-8.623,0a5.79,5.79,0,0,1-6.068-6.069c-.1-1.726-.1-6.9,0-8.623a5.779,5.779,0,0,1,6.068-6.063c1.725-.1,6.9-.1,8.623,0a5.789,5.789,0,0,1,6.068,6.068C829.132,397.839,829.132,403.007,829.034,404.733Zm-1.81-4.31c0-1.52.126-4.785-.42-6.161a3.525,3.525,0,0,0-1.987-1.987c-1.371-.541-4.64-.42-6.161-.42s-4.785-.127-6.162.42a3.528,3.528,0,0,0-1.986,1.987c-.541,1.372-.42,4.64-.42,6.161s-.127,4.785.42,6.161a3.528,3.528,0,0,0,1.986,1.987c1.372.541,4.641.42,6.162.42s4.785.126,6.161-.42a3.527,3.527,0,0,0,1.987-1.987C827.35,405.214,827.224,401.944,827.224,400.424Zm-3.209,0a5.359,5.359,0,1,1-5.359-5.359A5.35,5.35,0,0,1,824.015,400.424Zm-1.875,0a3.484,3.484,0,1,0-3.484,3.484A3.487,3.487,0,0,0,822.14,400.424Zm2.095-4.329a1.25,1.25,0,1,1,1.25-1.249A1.247,1.247,0,0,1,824.235,396.1Z" transform="translate(-808.201 -389.973)" fill="#d4b264fe" />
                            </svg>
                        </a>
                    </li>
                </ul>
                <p class="mobile-menu-copy" style="margin-top: 0.5rem; font-size:20px">&copy;2030 نادي الرؤية </p>
            </nav>

<!-- Search Part-->            
            <div class="search-container shown">
                <a class="search-link" href="javascript:;">
                    <svg class="search-icon" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22.7714C17.9489 22.7714 22.7714 17.9489 22.7714 12C22.7714 6.05113 17.9489 1.22862 12 1.22862C6.05114 1.22862 1.22863 6.05113 1.22863 12C1.22863 17.9489 6.05114 22.7714 12 22.7714Z" stroke="white" stroke-width="2" />
                        <path d="M20 20L23.4553 23.1908" stroke="white" stroke-width="2" stroke-linecap="round" />
                    </svg>
                    <svg class="close-icon" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                        <g id="Kapat" transform="translate(-1704.189 -111.728)">
                            <path d="M1318.475-2573.151l-22,22" transform="translate(409.836 2687)" fill="none" stroke="#d4b264fe" stroke-linecap="round" stroke-width="3" />
                            <path d="M22,0,0,22" transform="translate(1706.311 135.849) rotate(-90)" fill="none" stroke="#d4b264fe" stroke-linecap="round" stroke-width="3" />
                        </g>
                    </svg>
                </a>
            </div>
<!-- Mobile Menu Part-->
            <div class="mobile-menu-icon">
                <a href="javascript:;">
                    <span>
                        <strong>القائمة</strong>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g id="Menu" transform="translate(-316 -147)">
                            <g transform="translate(316 147)">
                                <circle cx="2" cy="2" r="2" fill="#fff" />
                                <circle cx="2" cy="2" r="2" transform="translate(0 10)" fill="#fff" />
                                <circle cx="2" cy="2" r="2" transform="translate(0 20)" fill="#fff" />
                                <circle cx="2" cy="2" r="2" transform="translate(10)" fill="#fff" />
                                <circle cx="2" cy="2" r="2" transform="translate(10 10)" fill="#fff" />
                                <circle cx="2" cy="2" r="2" transform="translate(10 20)" fill="#fff" />
                                <circle cx="2" cy="2" r="2" transform="translate(20)" fill="#fff" />
                                <circle cx="2" cy="2" r="2" transform="translate(20 10)" fill="#fff" />
                                <circle cx="2" cy="2" r="2" transform="translate(20 20)" fill="#fff" />
                            </g>
                            </g>
                        </svg>
                    </span>
                    <span class="close-text">
                        <strong>أغلق</strong>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="3" viewBox="0 0 24 3">
                            <rect width="24" height="3" rx="1.5" fill="#d4b264fe" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <div class="search-opened-container">
            <div class="inner-container">
                <div class="top">
                    <input id="keyword" type="text" placeholder="البحث" val="" maxlength="100" data-ajax-method="POST" data-ajax-url="/search">
                    <button>
                    ابحث
                    <svg xmlns="http://www.w3.org/2000/svg" width="85" height="84" viewBox="0 0 85 84">
                        <g transform="translate(3 2.385)">
                            <g id="Next-Low" transform="translate(-1193 -866.168)">
                                <g id="Group_51" data-name="Group 51" transform="translate(1183.943 862.494)">
                                    <g id="Group_14" data-name="Group 14" transform="translate(48.864 3.592) rotate(45)" opacity="1">
                                        <path id="Path_28" data-name="Path 28" d="M0,55.425,55.642,0" transform="translate(0.058 0.928)" fill="none" stroke="#d4b264fe" stroke-linecap="round" stroke-width="3" />
                                        <path id="Path_29" data-name="Path 29" d="M1.7.683,45.968,0V43.374" transform="translate(10.859 0.058)" fill="none" stroke="#d4b264fe" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    </button>
                    <p class="search-result-text"></p>
                </div>
                <div class="bottom">
                    <div class="search-results">
                        <ul>
                            <li>
                                <a href="javascript:;" data-json-property="All" class="active">
                                    الكل (<span class="count count-all"></span>)
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-json-property="Vision2030">
                                    رؤية 2030 (<span class="count count-vision-2030"></span>)
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-json-property="AboutTheKingdom">
                                    محتوى(<span class="count count-about-the-kingdom"></span>)
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-json-property="NewsAndMedia">
                                    (<span class="count count-news-and-media"></span>)
                                </a>
                            </li>
                        </ul>
                        <ol>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="search-close-layer">
            </div>
        </div>
    </header>