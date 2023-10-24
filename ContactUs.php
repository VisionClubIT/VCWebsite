<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "ksuvc2030@gmail.com";
    $Headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name." ,email address: ".$mailFrom."\n\n".$message;

    if (mail($mailTo, $subject, $txt, $Headers)){
        echo '<script> alert("تم الارسال!، شكراً لتواصلكم معنا")</script>';
        echo "<script>location.href='index.php';</script>";
        
  
    }
    else{
    echo '<script>alert("حصل خطأ عند الارسال، حاول مرة اخرى")</script>';
    echo "<script>location.href='index.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تواصل معنا</title>
    
    <!-- Header Head-->
    <?php include_once  'Header/headerHead.php'; ?>
    
    <link rel="stylesheet" href="css/contactUs.css">
</head>
<body>
    <!-- Header Body-->
    <?php include_once  'Header/headerBody.php'; ?>

    <div class="Contact-container">
        <form  method="POST">
            <h3>تواصل معنا</h3>
            <p>لأي استفسارات او اقتراحات</p>
            <input type="text" name="name" placeholder="اسمك" required>
            <input type="email" name="email" placeholder="ايميلك" required>
            <input type="text" name="subject" placeholder="الموضوع" required>
            <textarea name="message" row="4" placeholder="تفضل، كلنا اذان صاغية لك" ></textarea>
            <button type="submit" name="submit">إرسال</button>
        </form>
    </div>

    <!-- Footer -->
    <?php include_once 'Footer/footerBody.php'?>
</body>

</html>



