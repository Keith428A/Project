<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keithan High School</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Home.css">


        <style>

  .carousel-item img {
    width: 100%;
    height: auto;
    max-height: 700px; /* Adjust the maximum height as needed */
    object-fit: cover;
    margin: auto; /* Center the images horizontally */
}

.carousel-item {
    text-align: center; /* Center the images vertically */
    
    justify-content: center;
    align-items: center;
}


.overlay-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(39, 33, 33, 0.5); /* Black with 50% opacity */
    color: rgb(248, 231, 231);
    border-radius: 5px;
    padding: 10px;
    text-align: center;
    width: 80%; /* Adjust the width as needed */
    
}

.overlay-text h2 {
    margin: 0;
    font-size: 24px;
}

.overlay-text p {
    margin: 10px 0;
    font-size: 18px;
}

.container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 10px;
}

.row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.column {
    flex-basis: calc(33.33% - 20px); /* 33.33% width with 20px margin */
    background-color: #f0f0f0;
    padding: 20px;
    box-sizing: border-box;
}

        </style>

</head>
<body>
<?php include_once ('nav.html') ?>

    <section class="hero">
        <div id="carouselExample" class="carousel slide" data-bs-interval="5000" data-bs-ride="carousel">
		<center>
		<div class="carousel-inner ">
		  <div class="carousel-item active">

        <img src="Images/desola-lanre-ologun-IgUR1iX0mqM-unsplash.jpg" alt="GFG" class="d-block  " alt="...">
		  </div>
		  <div class="carousel-item">

        <img src="Images/erika-fletcher-MZxqc6n9qCw-unsplash.jpg" alt="GFG" class="d-block  " alt="...">
		  </div>
		  <div class="carousel-item">
	
			<img src="Images/ivan-aleksic-PDRFeeDniCk-unsplash.jpg" alt="GFG"  class="d-block " alt="...">
		  </div>
		</div>


        <div class="overlay-text">
            <H1 class="display-3">Welcome To <br>Keithan High School</H1>
            <p>We Push For Greatness</p>
            
           
    
          </div>


		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		</button>

		</center>
	  </div>      
      </div>
      
      <br>

      <div class="container">
        <div class="row">
            <div class="column">
                <h1 class="text-dark">About Section</h1>
                <p></p>
            </div>
            <div class="column">
                Column 2
            </div>
            <div class="column">
                Column 3
            </div>
        </div>
        <div class="row">
            <div class="column">
                Column 4
            </div>
            <div class="column">
                Column 5
            </div>
            <div class="column">
                Column 6
            </div>
        </div>
    </div>

    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Keithan High School. All Rights Reserved.</p>
        </div>

    </footer>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
