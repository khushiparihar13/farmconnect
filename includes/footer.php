<!-- includes/footer.php -->
    <footer>
        <div class="container footer-container">
            <div class="footer-left">
                <h2>Farm Connect</h2>
                <p>Empowering farmers through technology. Your bridge to a better agricultural future.</p>
            </div>
            <div class="footer-middle">
                <h3>Quick Links</h3>
                <ul style="list-style:none; padding:0;">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="marketplace.php">Marketplace</a></li>
                    <li><a href="shop.php">Materials</a></li>
                    <li><a href="jobs.php">Jobs</a></li>
                </ul>
            </div>
            <div class="footer-right">
                <h3>Contact Us</h3>
                <p>Email: info@farmconnect.com</p>
                <p>Phone: +123 456 7890</p>
                <div class="social-icons" style="margin-top:10px;">
                    <a href="#"><img src="assets/images/Facebook-Logosu.png" alt="Facebook" onerror="this.src='https://via.placeholder.com/30?text=F'"></a>
                    <a href="#"><img src="assets/images/Insta-Logo.png" alt="Instagram" onerror="this.src='https://via.placeholder.com/30?text=I'"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date("Y"); ?> Farm Connect. All rights reserved.</p>
        </div>
    </footer>

    <!-- Smart Farm Assistant (AI Chatbot Simulation) -->
    <div class="chatbot-toggle" id="chatbotToggle" onclick="toggleChatbot()">💬</div>
    <div id="ai-chatbot">
        <div class="chatbot-header">
            <h3>🌱 Smart Farm Assistant</h3>
            <span style="cursor:pointer;" onclick="toggleChatbot()">✖</span>
        </div>
        <div class="chatbot-body" id="chatbotBody">
            <div class="chat-message bot">
                Hello! I'm your AI Farm Assistant. How can I help you with crop diseases, yield predictions, or farming advice today?
            </div>
        </div>
        <div class="chatbot-input">
            <input type="text" id="chatInput" placeholder="Ask something..." onkeypress="handleChat(event)">
            <button onclick="sendChat()">Send</button>
        </div>
    </div>

    <script src="js/chatbot.js"></script>
</body>
</html>
