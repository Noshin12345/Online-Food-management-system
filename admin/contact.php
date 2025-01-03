<?php include('partials/menu_font.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Restaurant Management System</title>
    <style>
        /* Add your CSS styles here */

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        #contact-container {
            background-color: white;
            padding: 40px;
            display: flex;
            flex-direction: column; /* Stack elements vertically */
            align-items: center; /* Center items horizontally */
            text-align: center;
        }

        #contact-info {
            max-width: 600px;
            margin-top: 20px; /* Add some spacing */
        }

        #contact-info h2 {
            font-size: 24px;
        }

        #contact-form {
            max-width: 600px;
            margin-top: 20px; /* Add some spacing */
        }

        #contact-form form {
            width: 100%;
        }

        #contact-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        #contact-form input[type="text"],
        #contact-form input[type="email"],
        #contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        #contact-form textarea {
            resize: vertical;
        }

        #contact-form input[type="submit"] {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        #map-container {
            flex: 1;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 20px; /* Add some spacing */
        }

        #map {
            width: 100%;
            height: 300px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
        
        /* Add styling for the left image */
        #left-image {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px; /* Decrease the distance below the image */
        }

        #left-image img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <ul>
                
            </ul>
        </nav>
    </header>

    <section id="contact-container">
        <!-- Left Image Section -->
        <div id="left-image">
            <img src="OIP.jpg" alt="Restaurant Image" style="max-width: 100%; height: auto;">
        </div>

        <!-- Contact Information -->
        <div id="contact-info">
            <h2>Contact Information</h2>
            <p>Address: Johirul Islam Road, Aftab Nagar</p>
            <p>Phone: 01859015670</p>
            <p>Email: admin@gmail.com</p>
        </div>

        <!-- Contact Form -->
        <div id="contact-form">
            <h2>Contact Form</h2>
            <form action="#" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <input type="submit" value="Submit">
            </form>
        </div>
    </section>

    <section id="map-container">
        <h2>Our Location</h2>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14606.130651413634!2d90.4147449554199!3d23.764039200000024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7807e0650fb%3A0x75e2a26564af8eac!2sLake%20Green%20Lounge%20%26%20Restaurant!5e0!3m2!1sen!2sbd!4v1694892366809!5m2!1sen!2sbd"
            width="100%"
            height="300"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
    </section>

    <footer>
        <p>&copy; 2023 Restaurant Management System</p>
    </footer>
</body>
</html>
