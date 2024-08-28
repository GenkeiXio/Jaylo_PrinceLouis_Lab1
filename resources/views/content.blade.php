<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/content.css') }}">
    <title>ContentPage</title>
</head>
<body>
    <header class="site-header">
        <nav class="nav">
            <a href="{{ route('home') }}" class="logo">Robiel Prince Cafe</a>
            <b>
                <ul class="nav-list">
                    <li class="nav-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}">About Us</a></li>
                    <li class="nav-item"><a href="{{ route('content') }}">Content</a></li>
                </ul>
            </b>
        </nav>
    </header>

    <main class="content-main">
        <section class="menu-section">
            <h1>Cafe Menu</h1>
        </section>

        <section class="features">
            <div class="feature">
                <i class="fas fa-coffee"></i>
                <h3>BREAKFAST/SNACK STAPLES</h3>
                <ul>
                    <li>Pancakes/Crepes with toppings - ₱35.00</li>
                    <li>Egg Sandwiches - ₱25.00</li>
                    <li>Yummy Burgers - ₱40.00</li>
                    <li>Ground Beef Cheesy Tacos - ₱75.00</li>
                    <li>Small Pansit/Bihon Guisado - ₱50.00</li>
                </ul>
            </div>
            <div class="feature">
                <i class="fas fa-pizza-slice"></i>
                <h3>LUNCH/DINNER WITH FREE SOUP OF THE DAY</h3>
                <h3>Steamed rice with buttered vegetables to go in:</h3>
                <ul>
                    <li>Longganisa - ₱60.00</li>
                    <li>Embutido - ₱80.00</li>
                    <li>Chicken Cordon Bleu - ₱80.00</li>
                    <li>Burger Steaks - ₱70.00</li>
                </ul>
            </div>
            <div class="feature">
                <i class="fas fa-wifi"></i>
                <h3>DRINKS/BEVERAGES</h3>
                <ul>
                    <li>Hot Coffee - 20.00</li>
                    <li>Wintermelon Tea with black pearl - ₱50.00</li>
                    <li>Cold Caramel Coffee - ₱50.00</li>
                    <li>Fruit Smoothies - ₱60.00</li>
                    <li>Soda Drinks - ₱20.00</li>
                </ul>
            </div>
        </section>
    </main>
    <footer class="site-footer">
        <div class="footer-content">
            <b>
                <p>&copy; 2024 Robiel Prince Cafe. All Rights Reserved.</p>
                <ul class="social-links">
                    <li><a href="https://www.facebook.com/princelouis.jaylo.1">Facebook</a></li>
                    <li><a href="https://www.instagram.com/genkeiyoshi/">Instagram</a></li>
                    <li><a href="https://x.com/LouisJaylo">Twitter</a></li>
                </ul>
            </b>
        </div>
    </footer>
</body>
</html>