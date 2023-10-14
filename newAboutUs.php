<!DOCTYPE html style="font-size: 100% !important;">
<html lang="ar" dir="rtl" class="rtl">
<head>
    <?php include_once("header/headerHead.php"); ?>

    <style type="text/css">
        /* Add your custom styles here */
        /* Adjustments for the layout */
        .about-us {
            display: flex;
            flex-direction: row-reverse; /* Change to 'row' for left-side tabs */
        }

        .nav-tabs {
            flex: 0 0 200px; /* Set the width of the tabs */
            margin-right: 20px; /* Adjust spacing */
        }

        .tab-content {
            flex: 1;
        }

        /* Adjustments for the image with text overlay */
        .tab-content .tab-pane {
            position: relative;
        }

        .tab-content .tab-pane img {
            width: 100%;
            height: auto;
            display: block;
        }

        .tab-content .tab-pane .overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>

<body class="bg-white">
    <?php include_once("header/headerBody.php"); ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-us">
                        <!-- Project Tabs -->
                        <ul class="nav nav-tabs flex-column" id="projectTabs">
                            <!-- Title -->
                            <h2 class="text-center mt-4 mb-4" style="font-size: 24px;">نادي رؤية ٢٠٣٠</h2>
                            <li class="nav-item">
                                <a class="nav-link active" id="tab1" data-toggle="tab" href="#project-item-1">Project 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab2" data-toggle="tab" href="#project-item-2">Project 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab3" data-toggle="tab" href="#project-item-3">Project 3</a>
                            </li>
                        </ul>

                        <!-- Project Content -->
                        <div class="tab-content">
                            

                            <!-- Project 1 -->
                            <div id="project-item-1" class="tab-pane fade show active">
                                <img src="media/1wtnhuf3/copy-of-jean-marie-del-moral_dsc2123_bajdah_rgb-hires_tourism.jpeg" alt="Project 1 Image">
                                <div class="overlay-text">Text overlay for Project 1</div>
                            </div>

                            <!-- Project 2 -->
                            <div id="project-item-2" class="tab-pane fade">
                                <img src="media/1wtnhuf3/copy-of-jean-marie-del-moral_dsc2123_bajdah_rgb-hires_tourism.jpeg" alt="Project 2 Image">
                                <div class="overlay-text">Text overlay for Project 2</div>
                            </div>

                            <!-- Project 3 -->
                            <div id="project-item-3" class="tab-pane fade">
                                <img src="media/1wtnhuf3/copy-of-jean-marie-del-moral_dsc2123_bajdah_rgb-hires_tourism.jpeg" alt="Project 3 Image">
                                <div class="overlay-text">Text overlay for Project 3</div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once("footer/footerBody.php"); ?>
</body>
</html>
