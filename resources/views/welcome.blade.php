<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Your App</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #333;
            color: white;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 20px;
            color:white;
        }

        header {
            background-image: url('../images/cafe.jpg');
            background-size: cover;
            text-align: center;
            color: white;
            padding: 100px;
            margin: 0;
        }

        main {
            background-color: #f5f5f5;
            padding: 20px;
        }

        .intro {
            text-align: center;
        }

        .intro h2 {
            font-size: 24px;
        }

        .features {
            margin-top: 30px;
        }

        .features h2 {
            font-size: 24px;
        }

        .features ul {
            list-style-type: disc;
        }

        .btn {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
        }

        .footer-content p {
            margin: 0;
        }

        .footer-content ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .footer-content ul li {
            display: inline;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/products">Products</a></li>
            <li><a href="/product_detail">Macchiato</a></li>
        </ul>
    </nav>
    <header>
        <h1>Welcome to our Cafe</h1>
        <p>Get your daily dose of caffeine</p>
        <a href="/about" class="btn">Learn More</a>
    </header>
    <main>
        <section class="features">
            <h2>Why Choose Us?</h2>
            <ul>
                <li>Feature 1</li>
                <li>Feature 2</li>
                <li>Feature 3</li>
            </ul>
        </section>
        <section class="testimonial">
            <h2>What Our Customers Say</h2>
            <div class="quote">
                <p>"Your app is amazing! It saved me so much time and effort."</p>
                <p class="author">- Happy Customer</p>
            </div>
        </section>
        <section class="newsletter">
            <h2>Subscribe to Our Newsletter</h2>
            <form>
                <input type="email" placeholder="Enter your email">
                <button type="submit" class="btn">Subscribe</button>
            </form>
        </section>
    </main>
    <footer>
        <div class="footer-content">
            <p>&copy; 2023 Your App. All rights reserved.</p>
            <ul>
                <li><a href="/privacy">Privacy Policy</a></li>
                <li><a href="/terms">Terms of Service</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
