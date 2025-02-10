<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
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
                <h1><a href="dashboard.php">Website</a></h1>
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
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Section -->
    <main>
        <div class="container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <p>Enjoy our services.</p>
            <!-- Module Overview -->
           <!-- Module Overview -->
<section class="module-overview">
    <div class="module-card">
        <i class="fas fa-chart-line"></i>
        <h3>Shares</h3>
        <p>Buy and sell shares from various companies.</p>
        <a href="modules/shares.php" class="btn">Explore</a>
    </div>
    <div class="module-card">
        <i class="fas fa-tasks"></i>
        <h3>Remotask</h3>
        <p>Complete online tasks and earn money.</p>
        <a href="modules/remotask.php" class="btn">Explore</a>
    </div>
    <div class="module-card">
        <i class="fas fa-gamepad"></i>
        <h3>Games</h3>
        <p>Play games and win rewards.</p>
        <a href="modules/games.php" class="btn">Explore</a>
    </div>
    <div class="module-card">
        <i class="fas fa-pen"></i>
        <h3>Blogs</h3>
        <p>Read and write blogs on various topics.</p>
        <a href="modules/blogs.php" class="btn">Explore</a>
    </div>
    <div class="module-card">
        <i class="fas fa-dollar-sign"></i>
        <h3>Forex</h3>
        <p>Trade forex and maximize profits.</p>
        <a href="modules/forex.php" class="btn">Explore</a>
    </div>
    <div class="module-card">
        <i class="fas fa-keyboard"></i>
        <h3>Online Writing</h3>
        <p>Earn by writing articles online.</p>
        <a href="modules/online-writing.php" class="btn">Explore</a>
    </div>
    <div class="module-card">
        <i class="fas fa-heart"></i>
        <h3>Hookups</h3>
        <p>Connect with new people online.</p>
        <a href="modules/hookups.php" class="btn">Explore</a>
    </div>
    <div class="module-card">
        <i class="fas fa-store"></i>
        <h3>Shop</h3>
        <p>Buy and sell products online.</p>
        <a href="modules/shop.php" class="btn">Explore</a>
    </div>
    <div class="module-card">
        <i class="fas fa-hand-holding-usd"></i>
        <h3>Loans</h3>
        <p>Apply for quick online loans.</p>
        <a href="modules/loans.php" class="btn">Explore</a>
    </div>
    <div class="module-card">
        <i class="fas fa-bullhorn"></i>
        <h3>WhatsApp Marketing</h3>
        <p>Grow your business via WhatsApp ads.</p>
        <a href="modules/whatsapp-marketing.php" class="btn">Explore</a>
    </div>
    <div class="module-card">
        <i class="fas fa-gift"></i>
        <h3>Reward Center</h3>
        <p>Earn points and redeem rewards.</p>
        <a href="modules/reward-center.php" class="btn">Explore</a>
    </div>
</section>

            <!-- Call-to-Action Section -->
            
        </div>
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Website. All rights reserved.</p>
        </div>
    </footer>
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
