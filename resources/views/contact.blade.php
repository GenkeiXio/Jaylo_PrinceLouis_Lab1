<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <title>Contact Us</title>

    <script>
        function showConfirmation(event) {
            event.preventDefault(); // Prevent form from submitting
            document.getElementById("confirmationModal").style.display = "block";

            // Redirect after 2 seconds
            setTimeout(function() {
                window.location.href = "{{ route('welcome', ['username' => $username]) }}";
            }, 2000); // Adjust time as needed
        }

        function closeModal() {
            document.getElementById("confirmationModal").style.display = "none";
        }
    </script>
</head>
<body>
    <header class="site-header">
        <nav class="nav">
            <a href="{{ route('welcome', ['username' => $username]) }}" class="logo">Robiel Prince Cafe</a>
            <b>
                <ul class="nav-list">
                    <li class="nav-item"><a href="{{ route('welcome', ['username' => $username]) }}">Home</a></li>
                    <li class="nav-item"><a href="{{ route('about', ['username' => $username]) }}">About Us</a></li>
                    <li class="nav-item"><a href="{{ route('content', ['username' => $username]) }}">Content</a></li>
                    <li class="nav-item"><a href="{{ route('contact', ['username' => $username]) }}">Contact</a></li>
                </ul>
            </b>
        </nav>
    </header>
    
    <main class="site-main">
        <form action="/welcome" method="POST" onsubmit="showConfirmation(event)">
            @csrf
            <h1>CONTACT US</h1>
            <input type="text" id="name" placeholder="Your name" required>
            <input type="email" id="email" placeholder="Email Address" required>
            <textarea id="message" cols="30" rows="10" placeholder="Write your message here" required></textarea>
            <input type="submit" value="Send Message" class="send-btn">
        </form>
    </main>

    <!-- Modal Popup -->
    <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <p>Your message has been sent! Thank you!</p>
        </div>
    </div>

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
