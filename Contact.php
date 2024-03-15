<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Keithan High School</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Contact.css">
</head>
<body>
    <header>
    <?php include_once ('nav.html') ?>
    </header>

    <section class="contact-section">
        <div class="container">
            <h2 style="text-align: center; border-radius: 5px;" class="text-bg-light">Contact Us</h2>
            <form class="contact-form">
                <input type="text" name="name" placeholder="Your Name">
                <input type="email" name="email" placeholder="Your Email">
                <textarea name="message" placeholder="Your Message"></textarea>
                <button type="submit">Send Message</button>
            </form>
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
