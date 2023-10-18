<!DOCTYPE html>
<html>
<head>
    <title>All Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        nav {
            background-color: #333;
            color: #fff;
        }
        
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-around;
        }
        
        nav li {
            margin: 10px;
        }
        
        nav a {
            text-decoration: none;
            color: #fff;
        }
        
        h1 {
            text-align: center;
            padding: 20px;
        }
        
        .products {
            text-align: center;
            padding: 20px;
        }
        
        .products h2 {
            margin: 0;
        }
        
        .product-list {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .product-list li {
            width: 300px;
            margin: 10px;
            border: 1px solid #ccc;
            padding: 10px;
            background-color: #fff;
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
            <li><a href="/product_details">Macchiato</a></li>
        </ul>
    </nav>
    <h1>All Products</h1>

    <div class="products">
        <h2>Our Products</h2>
        <ul class="product-list">
            <li>
                <h3>Espresso</h3>
                <p>A shot of pure energy, rich and robust.</p>
            </li>
            <li>
                <h3>Cappuccino</h3>
                <p>Espresso with steamed milk and frothy foam.</p>
            </li>
            <li>
                <h3>Latte</h3>
                <p>Espresso with steamed milk and a touch of velvety foam.</p>
            </li>
            <li>
                <h3>Mocha</h3>
                <p>Espresso and rich chocolate with steamed milk.</p>
            </li>
            <li>
                <h3>Croissant</h3>
                <p>Flaky and buttery, a perfect companion to your coffee.</p>
            </li>
            <li>
                <h3>Blueberry Muffin</h3>
                <p>A delightful burst of blueberry goodness.</p>
            </li>
        </ul>
    </div>
</body>
</html>
<?php /**PATH C:\capstone\penasa-php course\phpcourse\resources\views/products.blade.php ENDPATH**/ ?>