<style>
  @import url('https://fonts.googleapis.com/css2?family=Amiri:ital@1&display=swap');

    /* Reset default margins and paddings */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Global styles for the entire page */
html, body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

/* Component styles */
.component {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
/* Component header styles */
.component-header {
  margin-bottom: 30px;
  font-family: "bukra bold";
  text-align: center;
}
.component-header p{
  color: #333;
}
/* Box styles */
.box {
  width: 30%;
  margin: 5px;
  background-color: rgba(4, 59, 92, 0.5);
  text-align: center;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Box content styles */
.box-content {
  padding: 20px;
}

/* Image styles */
.box img {
  max-width: 100%;
  height: auto;
}
.box-title {
  font-size: 25px;
  color: #fff;
}

.box-description {
  font-size: 20px;
  color: #fff;
}

/* Header styles */
h2 {
  font-style: bold;
  font-family: "bukra bold";
  font-size: 25px;
  color: #fff;
  margin-bottom: 10px;
}

/* Text styles */
p {
  font-style: bold;
  font-family: "bukra bold";
  font-size: 20px;
  color: #fff;
}

/* Media Query for responsiveness */
@media screen and (max-width: 768px) {
  .box {
    width: 45%;
  }
}

</style>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Component</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="component-header">
      <h1>نادي رؤية ٢٠٣٠</h1>
      <p>بطموحنا نحقق رؤيتنا</p>
    </div>
  <div class="component">
    
    <div class="box box1">
      <div class="box-content">
        <h2 class="box-title">الرؤية</h2>
        <p class="box-description">تمكين طلاب وطالبات جامعة الملك سعود للمشاركة في تحقيق رؤية المملكة العربية السعودية ٢٠٣٠</p>
      </div>
    </div>
    <div class="box box2">
      <img src="uploads/events/event3.jpeg" alt="Image 1">
    </div>
    <div class="box box3">
      <div class="box-content">
        <h2 class="box-title">الرسالة</h2>
        <p class="box-description">دعم الطاقات وتحفيزها لتكوين مجتمع ريادي متوافق مع اهداف رؤية المملكة العربية السعودية ٢٠٣٠</p>
      </div>
    </div>
    <div class="box box4">
        <img src="Img/endSem.jpg" alt="Image 1">
    </div>
    <div class="box box5">
        <div class="box-content">
        <h2 class="box-title">الهدف</h2>
        <p class="box-description">تفعيل دور الشباب بما يتوافق مع سوق العمل حالياً ومستقبلياً
                        عن طريق إقامة برامج وورش عمل تدريبية و مجالس حوارية التي تسهم في تطوير مهاراتهم</p>
                      
      </div>
    </div>
    <div class="box box6">
        <img src="uploads/events/mockInt.jpeg" alt="Image 1">
    </div>
  </div>

  <br>
  <br>
</body>
</html>
