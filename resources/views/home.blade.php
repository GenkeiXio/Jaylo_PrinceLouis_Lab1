<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>HomePage</title>
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
                    <li class="nav-item"><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </b>
        </nav>
    </header>
    <main class="site-main">
        <section class="hero">
            <h1>Welcome to Robiel Prince Cafe</h1>
            <b>
                <p>
                    Where we serve light meals and delicious snacks
                </p>
            </b>
        </section>
        
        <section class="features">
            <h2>We are here to Offer:</h2>
            <div class="feature">
                <i class="fas fa-coffee"></i>
                <h3>BREAKFAST/SNACK STAPLES</h3>
                <p>
                    Start your day with the comforting flavors of our breakfast classics, or indulge in a quick bite to keep you energized 
                    throughout the day. At Robiel Prince Cafe, we believe in offering a selection of delicious and satisfying meals that 
                    cater to every craving. Whether you're in the mood for something light and nutritious or a hearty treat, our carefully 
                    crafted menu promises the perfect balance of taste and quality. Dive into our staples and discover your new favorite way 
                    to enjoy a moment of peace and deliciousness.
                </p>
            </div>
            <div class="feature">
                <i class="fas fa-pizza-slice"></i>
                <h3>LUNCH/DINNER WITH FREE SOUP OF THE DAY</h3>
                <p>
                    Here at Robiel Prince Cafe, we make every meal an experience to remember. Our lunch and dinner offerings are crafted with the 
                    freshest ingredients, bringing together flavors that are both comforting and exciting. And as a special treat, every order 
                    comes with a complimentary Soup of the Day, made fresh daily to warm your soul and start your meal on a delightful note. 
                    Whether you're looking for a quick bite or a leisurely meal, our menu is designed to satisfy your hunger and elevate your 
                    dining experience. Come and enjoy a delicious journey with us.
                </p>
            </div>
            <div class="feature">
                <i class="fas fa-wifi"></i>
                <h3>DRINKS/BEVERAGES</h3>
                <p>
                    Here at Robiel Prince Cafe, our beverage menu is crafted to complement every meal and enhance your visit. From invigorating 
                    coffees and teas to refreshing smoothies and indulgent shakes, we offer a diverse selection of drinks designed to suit every 
                    taste and occasion. Whether you're seeking a revitalizing start to your day, a mid-afternoon pick-me-up, or a perfect pairing 
                    for your meal, our carefully curated beverages provide the ideal balance of flavor and refreshment. Explore our drink menu and 
                    find your favorite way to unwind and savor each moment.
                </p>
            </div>
        </section>
    </main>
    <footer class="site-footer">
        <b>
            <p>&copy; 2024 Robiel Prince Cafe. All Rights Reserved.</p>
            <ul class="social-links">
                <li><a href="https://www.facebook.com/princelouis.jaylo.1">Facebook</a></li>
                <li><a href="https://www.instagram.com/genkeiyoshi/">Instagram</a></li>
                <li><a href="https://x.com/LouisJaylo">Twitter</a></li>
            </ul>
        </b>
    </footer>
</body>
</html>