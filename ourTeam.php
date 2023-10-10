<?php
include_once  'Header/header.php';
require_once ('config/database.php');//db
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type"content="text/html; charset=utf-8"/>
		<meta name="viewport"content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
		<title>Binary Tree Structure</title>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/ourTeam.css">
	</head>
	<body class="all" class="bodyTeam">
       <!-- Background block with text and overlay -->
    <div class="background-block" style="background-image: url('uploads/ourTeam.jpeg')">
        <div class="overlay"></div> <!-- Transparent grey overlay -->
        <div class="background-content">
            <h1>Welcome to Our Tree Structure</h1>
            <p>Explore our organization's hierarchy below.</p>
        </div>
    </div>
		<div class="container">
			<div class="row">
				<div class="tree">
					<ul>
						<li> <a href="#"><img src="uploads/profilePicDefault.webp">رئيس النادي<span>عبدالعزيز الحماد</span></a>
						<ul>
							<li><a href="#"><img src="uploads/profilePicDefault.webp">نائب الرئيس<span>البندري المقيّل</span></a>
							  <ul>
                  <li> <a href="#"><img src="uploads/profilePicDefault.webp"><span>Great Grand Child</span></a> </li>
                  <li> <a href="#"><img src="uploads/profilePicDefault.webp"><span>Great Grand Child</span></a> </li>
                  <li> <a href="#"><img src="uploads/profilePicDefault.webp"><span>Great Grand Child</span></a> </li>
                  <li> <a href="#"><img src="uploads/profilePicDefault.webp"><span>Great Grand Child</span></a> </li>
                  <li> <a href="#"><img src="uploads/profilePicDefault.webp"><span>Great Grand Child</span></a> </li>
                  <li> <a href="#"><img src="uploads/profilePicDefault.webp"><span>Great Grand Child</span></a> </li>
                  <li> <a href="#"><img src="uploads/profilePicDefault.webp"><span>Great Grand Child</span></a> </li>
                  <li> <a href="#"><img src="uploads/profilePicDefault.webp"><span>Great Grand Child</span></a> </li>
							  </ul>
						</li>
					</li>
				</ul>
	</div>
</div>
</div>
<hr>

   <!-- Horizontal line to separate the main team hierarchy -->
<div class="separator"></div>

<!-- Four horizontal blocks at the bottom of the page -->
<div class="horizontal-blocks">
    <!-- Block 1 -->
    <div class="block">
        <span class="year">2022</span>
        <ul class="tree">
                <li> <a href="#"><img src="uploads/profilePicDefault.webp">رئيس النادي<span>عبدالعزيز الحماد</span></a>
                    <ul>
                        <li><a href="#"><img src="uploads/profilePicDefault.webp">نائب الرئيس<span>البندري المقيّل</span></a>
                            
                        </li>
                    </ul>
                </li>
        </ul>
    </div>

    <!-- Block 2 -->
    <div class="block">
        <span class="year">2021</span>
        <ul class="tree">
                <li> <a href="#"><img src="uploads/profilePicDefault.webp">رئيس النادي<span>عبدالعزيز الحماد</span></a>
                    <ul>
                        <li><a href="#"><img src="uploads/profilePicDefault.webp">نائب الرئيس<span>البندري المقيّل</span></a>
                           
                        </li>
                    </ul>
                </li>
        </ul>
    </div>

    <!-- Block 3 -->
    <div class="block">
        <span class="year">2020</span>
        <ul class="tree">
                <li> <a href="#"><img src="uploads/profilePicDefault.webp">رئيس النادي<span>عبدالعزيز الحماد</span></a>
                    <ul>
                        <li><a href="#"><img src="uploads/profilePicDefault.webp">نائب الرئيس<span>البندري المقيّل</span></a>
                         
                        </li>
                    </ul>
                </li>
         </ul>
    </div>

    <!-- Block 4 -->
    <div class="block">
        <span class="year">2019</span>
        <ul class="tree">
                <li> <a href="#"><img src="uploads/profilePicDefault.webp">رئيس النادي<span>عبدالعزيز الحماد</span></a>
                    <ul>
                        <li><a href="#"><img src="uploads/profilePicDefault.webp">نائب الرئيس<span>البندري المقيّل</span></a>
                     
                        </li>
                    </ul>
                </li>
    </ul>
    </div>
</div>

</body>
</html>

<?php include_once 'Footer/footer.php'?>