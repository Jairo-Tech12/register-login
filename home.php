<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JK-Tech Hospital - Home</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
        }

        h1, h2, h3 {
            color: #333;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #fff;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #333;
        }

        /* Navbar Styles */
        nav {
            background-color: #007bff;
            padding: 10px 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            font-size: 18px;
        }

        /* Header Section */
        header {
            background-image: url('hospital-banner.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 0;
        }

        header h1 {
            font-size: 3em;
        }

        header p {
            font-size: 1.2em;
            margin: 20px 0;
        }

        header .btn {
            padding: 10px 20px;
            background-color: #007bff;
            font-size: 16px;
            border-radius: 5px;
        }

        /* About Section */
        #about-hospital {
            background-color: #fff;
            padding: 40px 20px;
        }

        #about-hospital p {
            font-size: 1.1em;
            line-height: 1.6;
        }

        /* Services Section */
        #services {
            padding: 40px 20px;
            background-color: #e9ecef;
        }

        #services .service {
            background-color: #fff;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        #services .service h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        #services .service p {
            font-size: 1em;
            color: #555;
        }

        /* Testimonials Section */
        #testimonials {
            background-color: #fff;
            padding: 40px 20px;
            text-align: center;
        }

        #testimonials blockquote {
            font-size: 1.2em;
            font-style: italic;
            color: #555;
            margin-bottom: 20px;
        }

        #testimonials footer {
            font-size: 1em;
            color: #007bff;
        }

        /* Contact Section */
        #contact {
            padding: 40px 20px;
            background-color: #f8f9fa;
            text-align: center;
        }

        #contact ul {
            list-style-type: none;
            padding: 0;
        }

        #contact ul li {
            font-size: 1.1em;
            margin: 10px 0;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        footer p {
            margin: 0;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2em;
            }

            header p {
                font-size: 1em;
            }

            nav ul li {
                display: block;
                margin: 10px 0;
            }

            #services .service {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>

    <!-- Header Section -->
    <header>
        <h1>Welcome to JK-Tech Hospital</h1>
        <p>Your health is our priority. Providing top-notch medical care to our community.</p>
        <a href="services.php" class="btn">Explore Our Services</a>
    </header>

    <!-- Hospital Introduction -->
    <section id="about-hospital">
        <div class="container">
            <h2>About JK-Tech Hospital</h2>
            <p>At JK-Tech Hospital, we are committed to offering world-class healthcare services with a focus on patient satisfaction. Our team of skilled doctors and healthcare professionals ensures you receive the best care available.</p>
        </div>
    </section>

    <!-- Our Services -->
    <section id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service">
                <h3>Emergency Care</h3>
                <p>24/7 emergency care with trained staff ready to assist with critical conditions.</p>
            </div>
            <div class="service">
                <h3>Outpatient Services</h3>
                <p>Consult with our specialists for various medical conditions without staying overnight.</p>
            </div>
            <div class="service">
                <h3>Surgery</h3>
                <p>State-of-the-art surgery facilities and experienced surgeons for various medical procedures.</p>
            </div>
            <a href="services.php" class="btn">Learn More About Our Services</a>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials">
        <div class="container">
            <h2>What Our Patients Say</h2>
            <blockquote>
                "JK-Tech Hospital provided me with exceptional care. The staff was friendly, and the doctors were very professional. I felt safe and well taken care of."
                <footer>- Patient, John Doe</footer>
            </blockquote>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>If you have any questions or need to book an appointment, feel free to contact us.</p>
            <ul>
                <li>Email: <a href="mailto:info@jktechhospital.com">info@jktechhospital.com</a></li>
                <li>Phone: +254 712 345 678</li>
                <li>Location: JK-Tech Hospital, Nairobi, Kenya</li>
            </ul>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 JK-Tech Hospital. All Rights Reserved.</p>
    </footer>

</body>
</html>

