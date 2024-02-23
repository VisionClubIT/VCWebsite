<?php
require_once('config/database.php'); // Include your database configuration
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <?php include_once 'Header/HeaderHead.php';?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سجل</title>
    <style>
  body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .regContainer {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            text-align: right;
        }
        .Imgcard{
            margin-bottom: 20px;
            border-radius: 8px;  
        }
        .Imgcard img {
            max-width: 100%;
            height: auto;
        }
        .card p {
            margin-top: 10px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        } 
        .card label {
        display: inline-block;
        vertical-align: middle;
        margin-right: 5px;
    }
        button[type="submit"] {
            background-color: #987554;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }
        button[type="submit"]:hover {
            background-color: #664229;
        }
    </style>
</head>

<body class="bg-white" style="margin:0">
    <?php include_once 'Header/HeaderBody.php';?>

    <!--
        Content Here
    -->
    <div class="regContainer">
        <div class="Imgcard">
            <img src="img\\EventImg.jpg" alt="Event Image">
        </div>

        <div class="card">
            <h2>خطة "مع فيصل المنصور"</h2>
            <p>جلسة حوارية عن التخطيط للمسار الوظيفي مع أ. فيصل المنصور<br>
            الموقع : مركز الملك عبدالعزيز للتواصل الحضاري<br>
            التاريخ: الاربعاء، ٢١/٠٢/٢٠٢٤<br>
            الوقت : ٧- ٩ مساء<br>
            </p>
        </div>

        <form action="#" method="post">
            <div class="card" >
                <label for="regFirstName">الاسم الثنائي</label>
                <input type="text" id="regFirstName" name="regFirstName" required>
            </div>

            <div class="card">
                <label for="regEmail">البريد الالكتروني</label>
                <input type="email" id="regEmail" name="regEmail" required>
            </div>

            <div class="card">
                <label for="regPhoneNumber">رقم الجوال</label>
                <input type="tel" id="regPhoneNumber" name="regPhoneNumber" required>
            </div>
            
            <div class="card">
        <label>هل انت عضو في نادي رؤية 2030؟</label>
        <div>
            <input type="radio" id="attendYes" name="attend" value="yes" required>
            <label for="attendYes">نعم</label>
        </div>
        <div>
            <input type="radio" id="attendNo" name="attend" value="no" required>
            <label for="attendNo">لا</label>
        </div>
    </div>

    <div class="card">
        <label>مؤكد حضورك؟</label>
        <div>
            <input type="radio" id="attendYes" name="attend" value="yes" required>
            <label for="attendYes">نعم</label>
        </div>
        <div>
            <input type="radio" id="attendNo" name="attend" value="no" required>
            <label for="attendNo">لا</label>
        </div>
    </div>

            <button type="submit">Submit</button>
        </form>
    </div>


    <?php include_once 'Footer/footerBody.php' ?>
</body>

</html>
