<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

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
    
    <h1>Contact Us</h1>
    <form action="/submit-contact" method="POST">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>