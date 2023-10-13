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
        echo "<script>alert('تم الارسال! ، شكرًا لتواصلكم معنا')</script>";
        echo "<script>location.href='index.php';</script>";
        
        
  
    }
    else{
    echo '<script>alert("حصل خطأ عند الارسال، حاول مرة اخرى")</script>';
    echo "<script>location.href='index.php';</script>";
    
    }

}



?>