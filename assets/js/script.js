// Open and close Login Modal
function openLoginModal() {
    document.getElementById('loginModal').style.display = "block";
}

function closeLoginModal() {
    document.getElementById('loginModal').style.display = "none";
}

// Open and close Signup Modal
function openSignupModal() {
    document.getElementById('signupModal').style.display = "block";
}

function closeSignupModal() {
    document.getElementById('signupModal').style.display = "none";
}

// Open and close Chat Assistant
function openChat() {
    document.getElementById('chatAssistant').style.display = "block";
}

function closeChat() {
    document.getElementById('chatAssistant').style.display = "none";
}

// Send message in Chat Assistant (for now, just show a message)
function sendChatMessage() {
    var userMessage = document.getElementById('chatInput').value;
    if (userMessage) {
        var chatBody = document.querySelector('.chat-body');
        chatBody.innerHTML += "<p><strong>You:</strong> " + userMessage + "</p>";
        document.getElementById('chatInput').value = ""; // Clear input after sending
        chatBody.innerHTML += "<p><strong>AI Assistant:</strong> I'm here to help!</p>";
    }
}
