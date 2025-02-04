<?php
// Include database connection
include('includes/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Website</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Optional: FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <div class="logo">
                <h1><a href="index.php">Website</a></h1>
            </div>
            <!-- Navbar with Login/Signup -->
            <nav>
                <ul>
                    <li><a href="modules/shares.php">Shares</a></li>
                    <li><a href="modules/remotask.php">Remotask</a></li>
                    <li><a href="modules/games.php">Games</a></li>
                    <li><a href="modules/blogs.php">Blogs</a></li>
                    <li><a href="modules/forex.php">Forex</a></li>
                    <li><a href="modules/online-writing.php">Online Writing</a></li>
                    <li><a href="modules/hookups.php">Hookups</a></li>
                    <li><a href="modules/shop.php">Shop</a></li>
                    <li><a href="modules/loans.php">Loans</a></li>
                    <li><a href="modules/whatsapp-marketing.php">WhatsApp Marketing</a></li>
                    <li><a href="modules/reward-center.php">Reward Center</a></li>
                    <li><a href="#" class="btn-login" onclick="openLoginModal()">Login</a></li>
                    <li><a href="#" class="btn-signup" onclick="openSignupModal()">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Section -->
    <main>
        <div class="container">
            <h2>Welcome to Our Website</h2>
            <p>Explore the various modules and services available on our platform. Get started by logging in or signing up!</p>

            <!-- Module Overview -->
            <section class="module-overview">
                <div class="card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Shares</h3>
                    <p>Buy and sell shares from various companies.</p>
                    <a href="modules/shares.php" class="btn">Explore</a>
                </div>
                <div class="card">
                    <i class="fas fa-tasks"></i>
                    <h3>Remotask</h3>
                    <p>Complete online tasks and earn money.</p>
                    <a href="modules/remotask.php" class="btn">Explore</a>
                </div>
                <div class="card">
                    <i class="fas fa-gamepad"></i>
                    <h3>Games</h3>
                    <p>Play games and win rewards.</p>
                    <a href="modules/games.php" class="btn">Explore</a>
                </div>
            </section>

            <!-- Call-to-Action Section -->
            <section class="cta-section">
                <h3>Ready to Start?</h3>
                <p>Log in or sign up to access all the features and start exploring!</p>
                <a href="#" class="cta-btn" onclick="openLoginModal()">Login</a>
                <a href="#" class="cta-btn" onclick="openSignupModal()">Sign Up</a>
            </section>
        </div>
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Website. All rights reserved.</p>
        </div>
    </footer>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeLoginModal()">&times;</span>
            <h3>Login</h3>
            <form action="login_process.php" method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <!-- Signup Modal -->
    <div id="signupModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeSignupModal()">&times;</span>
            <h3>Sign Up</h3>
            <form action="signup_process.php" method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>

    <!-- Chat Assistant -->
    <div id="chatAssistant" class="chat-assistant">
        <div class="chat-header">
            <h4>AI Chat Assistant</h4>
            <span class="close-chat" onclick="closeChat()">×</span>
        </div>
        <div class="chat-body">
            <p>Hello! How can I assist you today?</p>
        </div>
        <input type="text" id="chatInput" placeholder="Ask me anything...">
        <button id="chatSend" onclick="sendChatMessage()">Send</button>
    </div>

    <!-- Chat Assistant Button -->
    <div id="chatBtn" class="chat-btn" onclick="openChat()">
        <i class="fas fa-comment-dots"></i> Chat with us
    </div>

    <script src="assets/js/script.js"></script>
</body>

</html>
