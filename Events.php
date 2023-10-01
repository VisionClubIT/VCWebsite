<?php
require_once ('config/database.php');
include_once  'header/header.php';
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl>
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/Event11.css"/>
	<link rel="stylesheet" href="css/events.css?v=<?php echo time(); ?>">
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
    <script src="js/filterEv.js" ></script>
    
</head>
<body> 

             <!-- <div id="myBtnContainer">
                <button class="btn active" onclick="filterSelection('_2022')">2022</button>
                <button class="btn" onclick="filterSelection('_2021')">2021</button>
                <button class="btn" onclick="filterSelection('_2020')">2020</button>
                <button class="btn" onclick="filterSelection('_2019')">2019</button>
                <button class="btn" onclick="filterSelection('_2018')">2018</button>
            </div>-->
       <!-- <div class = "body2">      
       <?php
       $result = mysqli_query($con,"SELECT * FROM `events`"); 
	//    while($row = mysqli_fetch_assoc($result)) {   
      
    //     $tweet= $row['tweet'];
    //     echo "
	// 	<div class='card'>

	// 	  <div  style='background-image: url( ".$row['image_events']."  );'  class='card-image'>  </div>
	// 	  <div class='card-text'>
	// 	  <span class='date'>   ".$row['date']." </span>
	// 	  <h2> ".$row['name']." <br>  </h2>
    //       <h4> ".$row['description']." </h4>
	// 	  </div>

	// 	  <div class='card-stats'>
	//       <div class='stat border'>
	//       <a  class='value' href= '$tweet' >".$row['buttonText']."</a>
	// 	  </div>
	// 	  </div>
	// 	  </div>";
	// 	}
		?>

	</div>-->

	<div class = "row eventsPage">      
	<?php
       $result = mysqli_query($con,"SELECT * FROM `events`"); 
	    while($row = mysqli_fetch_assoc($result)) {   
      
         $tweet= $row['tweet'];
         echo "
        <div class='column'>
	 	<div class='card2'>

	 	  <div  style='background-image: url( ".$row['image_events']."  );'  class='card-image'>  </div>
	 	  <div class='card-text'>
	 	  <span class='date'>   ".$row['date']." </span>
		  <br>
		  <br>
	 	  <h2> ".$row['name']." <br>  </h2>
		  <br>
           <p> ".$row['description']." </p>
	 	  </div>

	 	  <div class='card-stats'>
	       <div class='stat border'>
	       <a  class='value' href= '$tweet' >".$row['buttonText']."</a>
	 	  </div>
	 	  </div>
	 	  </div>
          </div>";
	 	}
		?>
	</div>
	<?php include_once 'Footer/footerbody.php'?>

</body>
</html>