// js/chatbot.js

function toggleChatbot() {
    const chatbot = document.getElementById('ai-chatbot');
    chatbot.classList.toggle('active');
}

function handleChat(event) {
    if (event.key === "Enter") {
        sendChat();
    }
}

function sendChat() {
    const inputField = document.getElementById('chatInput');
    const message = inputField.value.trim();
    if (message === "") return;

    appendMessage(message, 'user');
    inputField.value = "";

    // Simulate AI thinking and response
    setTimeout(() => {
        const botResponse = getSimulatedAIResponse(message);
        appendMessage(botResponse, 'bot');
    }, 1000);
}

function appendMessage(text, sender) {
    const chatBody = document.getElementById('chatbotBody');
    const msgDiv = document.createElement('div');
    msgDiv.classList.add('chat-message', sender);
    msgDiv.innerText = text;
    chatBody.appendChild(msgDiv);
    chatBody.scrollTop = chatBody.scrollHeight;
}

function getSimulatedAIResponse(query) {
    const lowerQuery = query.toLowerCase();

    if (lowerQuery.includes('disease') || lowerQuery.includes('yellow')) {
        return "It sounds like a nutrient deficiency or fungal infection. Ensure proper drainage and consider a nitrogen-rich fertilizer or contact an agronomist.";
    } else if (lowerQuery.includes('yield') || lowerQuery.includes('price')) {
        return "Current market trends show a 5% increase in wheat prices. It's a good time to list your yield on our Marketplace!";
    } else if (lowerQuery.includes('scheme') || lowerQuery.includes('government')) {
        return "You can check the 'Gov-Schemes' tab for the latest PM-Kisan updates and subsidies.";
    } else if (lowerQuery.includes('weather') || lowerQuery.includes('rain')) {
        return "Based on general forecasts, expect moderate rainfall next week. Good for sowing seeds!";
    } else {
        return "That's an interesting question! While I'm still learning, you might find more detailed information in our community forums or by contacting local experts.";
    }
}
