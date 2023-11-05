<style>

	*{
	  margin: 0;
	  padding: 0;
	  box-sizing: border-box;
	}
	
	body{
	  width: 100%;
	  height: 100vh;
	  background: rgb(156, 154, 194);
	  font-family: 'roboto', sans-serif;
	  display: flex;
	  justify-content: center;
	  align-items: center;
	}
	
	
	.card {
	  width: 320px;
	  height: 500px;
	  border-radius: 20px;
	  overflow: hidden;
	  border: 8px solid #fff;
	  position:relative;
	  left: 20%;
	}
	
	.card-img {
	  width: 100%;
	  height: 100%;
	object-fit: cover;
	border-radius: 15px;
	}
	
	.card-body{
	  width: 100%;
	  height: 100%;
	  top: 0;
	  right: -100%;
	  position: absolute;
	  background: #1f3d4738;
	  backdrop-filter: blur(5px);
	  border-radius: 15px;
	  color: #fff;
	  padding: 30px;
	  display: flex;
	  flex-direction: column;
	  justify-content: center;
	  transition: 2s;
	}
	
	.card:hover .card-body{
	right: 0;
	}
	
	.card-title{
	text-transform: uppercase;
	font-size: 50px;
	font-weight: 500;
	}
	
	.card-sub-title{
	  text-transform: capitalize;
	  font-size: 14px;
	  font-weight: 300;
	}
	
	.card-info{
	  font-size: 16px;
	  line-height: 25px;
	  margin: 40px 0;
	  font-weight: 400;
	}
	
	.card-btn{
	  color: #1f3d47;
	  background: #8fabba;
	  padding: 10px 20px;
	  width: 120px;
	  border-radius: 5px;
	  text-transform: capitalize;
	  border: none;
	  outline: none;
	  font-weight: 500;
	  cursor: pointer;
	}
	</style>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>card hover effect</title>

	<!-- roboto google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
	



</head>

<body>

	<div class="card">
		<img src="images/images/img-musim_files/museum.jpeg" class="card-img" alt="">
		<div class="card-body"> 
			<h1 class="card-title">MUSIM</h1>
			<P class="card-sub-title">THE NATIONAL MUSIM</P>
			<P class="card-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vero neque impedit aliquam omnis id porro beatae adipisci hic, eum eveniet reprehenderit nulla voluptatem ratione iste facere alias possimus! Amet.</P>

			<button class="card-btn">MORE</button>
		</div>
	</div>

</body>

</html>
