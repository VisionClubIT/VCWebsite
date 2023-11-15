<?php include_once 'Header/header.php'?>
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contactUs2.css">


</head>

<!--contact us page-->

<body>
<br>
<br>

    <div class="Contact-container">
        <form  method="POST">
            <h3 class="title">تواصل معنا</h3>
            <p>لأي استفسارات او اقتراحات</p>
            <input type="text" name="name" placeholder="اسمك" required>
            <input type="email" name="email" placeholder="ايميلك" required>
            <input type="text" name="subject" placeholder="الموضوع" required>
            <textarea name="message" row="4" placeholder="تفضل، كلنا اذان صاغية لك" ></textarea>
            <button type="submit" name="submit">إرسال</button>
    
    
        </form>
    </div>
    <br>
    <br>
  
<!--faq section-->

<div id="faq" class="faq-body">
 

  <div class="faq-header">
    <h3 class="faq-title">أسئلة متكررة</h3>
    <div class="seperator"></div>
  </div>
  <div class="faq-list">
      <div>
        <details open>
          <summary title="كيف يمكنني أن انظم اليكم؟"> كيف يمكنني الأنضمام لكم؟</summary>
          <p class="faq-content">.عن طريق وسائل التواصل الأجتماعي</p>
        </details>
        </div>
      <div>
        <details>
          <summary title="متى موعد التقديم">متى موعد التقديم ؟</summary>
          <p class="faq-content">.في بداية كل فصل الدراسي</p>
        </details>
        </div>
      <div>
        <details>
          <summary title="2">كيفية التواصل؟</summary>
          <p class="faq-content">عن طريق الموقع الالكتروني او اي من وسائل التواصل الأجتماعي</p>
        </details>
        </div>
      <div>
        <details>
          <summary title="3">هل يجب أن أكون طالب في جامعة الملك سعود</summary>
          <p class="faq-content">نعم، ولكننا نرحب بأي مشاركه أو تعاون من قبل الجميع</p>
        </details>
        </div>
      <div>
        <details>
          <summary title="4">هل هنالك رسوم للأشتراك</summary>
          <p class="faq-content">لا، لايوجد رسوم للأشتراك</p>
      </details> 
        </div>
      <div>
            <details>
                <summary title="5">انا خريج هل يمكنني الأنضمام لكم؟</summary>
                <p class="faq-content">نعم بالتأكيد</p>
            </details>
        </div>
  </div>

</div>
  <section class="location">
    <h3 class="title">موقعنا</h3><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.226765359617!2d46.61193709999999!3d24.719093999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f1d8e83474d95%3A0x877f5274c3150d9f!2sCollege%20of%20Tourism%20and%20Archaeology!5e0!3m2!1sen!2ssa!4v1694766232268!5m2!1sen!2ssa" 
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>


</body>
</html>
<?php include_once 'Footer/footer.php'?>
