<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Keithan High School</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="About.css">

    <style>
        .row {
    display: flex;
}

.column {
    text-align: center;
    flex: 1;
    padding: 20px;
    background-color: rgba(0, 0, 0, 0.5); /* Transparent black background */
    color: white; /* White text */
}
    </style>
</head>
<body>
    <header>
    <?php include_once ('nav.html') ?>
    </header>

    <section class="hero-section">
        <div class="hero-overlay">
            <div class="container">
                <h2>About Us</h2>
                <p>Get to know more about Keithan High School and our mission.</p>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container-fluid">
            <div class="row ">
                <div class="column " style="border-radius: 5px;" >
                    <h3>Our Mission</h3>
                    <p>At Keithan High School, our mission is to empower students to reach their 
                        full potential and become lifelong learners, critical thinkers, and 
                        responsible citizens. We strive to cultivate a nurturing and inclusive 
                        learning environment that encourages intellectual curiosity, creativity, 
                        and personal growth.</p>
                </div>
                <div class="column " style="border-radius: 5px;">
                    <h3>Our Vision</h3>
                    <p>Our vision at Keithan High School is to be recognized as a premier educational 
                        institution committed to academic excellence, innovation, and social 
                        responsibility. We aspire to equip our students with the knowledge, skills, 
                        and values needed to thrive in a rapidly changing world and make positive 
                        contributions to society.</p>
                </div>
                

                <div class="column " style="border-radius: 5px;">
                    <h3>Our Approach</h3>
                    <p>At Keithan High School, we offer a comprehensive and well-rounded education that combines rigorous academic programs with a diverse range of extracurricular activities and enrichment opportunities. Our dedicated faculty members are committed to providing personalized attention and support to each student, ensuring their success and wellbeing.</p>
                </div>
            

                <div class="column " style="border-radius: 5px;">
                    <h3>Community Engagement</h3>
                    <p>We believe in the importance of community engagement and actively collaborate with parents, alumni, local organizations, and other stakeholders to create meaningful learning experiences and contribute to the greater good.</p>
                </div>
            </div>
        </div>
        <br>  
    </section>
        <div class="row">

        </div>
    

    <footer>
        <div class="container">
            <p>&copy; 2024 Keithan High School. All Rights Reserved.</p>
        </div>
    </footer>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
