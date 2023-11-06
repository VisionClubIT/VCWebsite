<?php
    // require  'config/database.php';
    // require  'config/app.php';
    // $q1 =  $con->query('select * from media order by id ')->fetch_all(MYSQLI_ASSOC);
    // $events = $con->query('select * from events order by id ')->fetch_all(MYSQLI_ASSOC);
    include('Header/HeaderVideoIndex.php');
?>
<div>
<?php
include('homeBody/body.php');
?> 
</div>
<meta name="description" content="نادي طلابي طموح تأسس عام ٢٠١٨، تحت اشراف مكتب إدارة التحول والمبادرات بجماعة الملك سعود، يهدف إلى التعريف ونشر الوعي برؤية المملكة ودور الشباب في تحقيقها، من خلال دعم الطاقات وتحفيزها لتكوين مجتمع ريادي متوافق مع أهداف رؤيتنا الغالية رؤية ٢٠٣٠" />
    <link rel="stylesheet" href="css/main-166.css">
    <link rel="stylesheet" href="css/vendors-166.css">
    <link rel="stylesheet" href="css/master.min.css">
    <link rel="stylesheet" href="css/header1.css">
    <title>الرئيسية</title>


<?php
include('Dynamic/Alert.php');
?>

<section>
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
                         
                          </div>
                        </div>
                      </article>
                
        </section> 

    <style>

   .b-heade .op{
   width: 10%;
   display: flex;
   margin-bottom: 18rem;
    }
    .b-heade .oo{
    width: 20%;
    margin-top: -300px;
    margin-right: 20px;
    }

    .b-heade .uu{
    width: 20%;
    margin-top: -200px;
    margin-left: 20px;
    }
    @media screen and (max-width: 768px) {
        .b-heade .op{
        width: 10%;
        display: flex;
        margin-bottom: 15rem;
        }

        .b-heade .oo{
        width: 20%;
        margin-top: -200px;
        margin-right: 20px;
        }

        .b-heade .uu{
        width: 20%;
        margin-top: -45px;
        margin-left: 20px;
        }
    }

   </style>
</section>
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
                                                +١٠٠
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
<section>
    <?php include('homeBody/sponsors.php');?>
</section>
</body>
</html>
<link rel="stylesheet" href="css/reset.css">
<?php include('Footer/footer.php');?>


<!--       
    I hope you achieve the best, I believe in that  (:    
    A. from technical team  . 
-->       