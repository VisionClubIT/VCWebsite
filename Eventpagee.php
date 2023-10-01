<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <?php include_once  'Header/headerhead.php'; ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style type="text/css">
        .item{
            transition: .5s ease-in-out;
        }
        .item:hover{
            filter: brightness(80%);
        }
    </style>
</head>
<body>
    <?php include_once  'Header/headerbody.php'; ?>
    <div class="container-fluid">
        <div class="row mt-4">

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="Img/EventImg.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="Img/EventImg.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="Img/endSem.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="Img/endSem.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="Img/EventImg.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="Img/EventImg.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="Img/endSem.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="Img/endSem.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="Img/EventImg.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="Img/EventImg.jpg" width="100%" height="100%">
                </a>
            </div>

            <div class="item col-sm-6 col-md-4 mb-3">
                <a href="Img/endSem.jpg" class="fancybox" data-fancybox="gallery1">
                    <img src="Img/endSem.jpg" width="100%" height="100%">
                </a>
            </div>

        </div>
    </div>
    <?php include_once  'Footer/footerbody.php'; ?>

</body>
</html>