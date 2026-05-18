# FarmConnect 🌱

**Tagline:** "Connecting Farms, Workers & Markets Digitally."

## 📖 Project Overview
FarmConnect is a smart digital platform designed to bridge the gap between farmers, consumers, and agricultural workers within a single ecosystem. By utilizing modern technology, AI, and community-driven design, FarmConnect makes agriculture more efficient, accessible, and profitable.

## 🎯 Objective
FarmConnect aims to digitally empower agriculture by:
- **Increasing farmers’ profits** via direct-to-consumer sales.
- **Reducing middlemen dependency** in the agricultural supply chain.
- **Creating rural employment opportunities** through localized job postings.
- **Providing access to resources & schemes** to ensure farmers receive government benefits.
- **Encouraging smart farming practices** using AI and modern meteorological data.

## 🚀 Core Features 

### 🛒 Marketplace (`marketplace.php`)
A digital marketplace where farmers can directly sell crops, tools, and agricultural products to consumers at fair prices without unnecessary middlemen.
- Buy & sell agricultural products.
- Product listings with images and fair pricing system.
- Farmer-to-consumer connection.

### 👨‍🌾 Farm Jobs (`jobs.php`)
A dedicated agricultural employment section connecting workers with farmers.
- Post and find jobs (Full-time, Part-time, Seasonal).
- Categories include: Tractor Driver, Harvesting Worker, Irrigation Specialist, etc.
- Location-based listings and clear salary details.

### 🌦️ Smart Farming (`smartfarming.php`)
Modern AI-powered tools to improve farming decisions and productivity.
- **AI Crop Recommendation:** Personalized suggestions based on local data.
- **Weather Forecast & Alerts:** Real-time updates to protect harvests.
- **Pest/Disease Detection:** AI-driven diagnosis of crop issues.
- **Irrigation Guidance:** Smart scheduling for water conservation.
- **Seasonal Farming Tips:** Expert advice for year-round preparation.

### 🏛️ Government Schemes (`govscheme.php`)
A simplified section providing awareness about government programs for farmers and agricultural workers.
- Subsidy schemes, loan programs, and equipment support.
- Links to official portals (e.g., PM-KISAN, PMFBY).

### 🌐 Multilingual Accessibility
Designed for rural accessibility with built-in Google Translate support across the entire platform, providing multiple languages and a simple farmer-friendly UI.

---

## 📂 File & Directory Structure

- **`index.php`**: The main homepage and entry point. Displays the core pillars, tagline, and platform overview.
- **`marketplace.php`**: The marketplace module where farmers list yields and consumers browse products.
- **`jobs.php`**: The agricultural job portal for job seekers and farm owners.
- **`smartfarming.php`**: The hub for AI tools, weather forecasts, pest detection, and farming tips.
- **`govscheme.php`**: Information on relevant government agricultural schemes.
- **`includes/`**: Reusable PHP components.
  - `header.php`: Navigation bar, logo, and Google Translate widget.
  - `footer.php`: Global footer links and copyright info.
  - `dbconnect.php`: Database connection configuration.
- **`css/style.css`**: The main stylesheet utilizing a modern, earthy green/yellow design system with responsive layouts and hover animations.
- **`js/`**: Contains client-side logic.
  - `chatbot.js`: Controls the AI Assistant toggle and messaging interface.
  - `seach.js`: Global search functionality script.
- **`assets/`**: Contains static resources like images (`farmerog.png`, `worker.png`, etc.) and icons.
- **`auth/`**: Future/current folder for authentication scripts.
- **Authentication Pages**: `signin.php`, `login_sign.html`.
- **Other Pages**: `about.html`, `FAQ'S.html`, `blog.html`, `community.html`.

---

## 💡 Future Scope
- AI Plant Disease Detection using Computer Vision (Image Uploads).
- Live Chat with Agricultural Experts.
- Advanced Crop Price Prediction Models.
- Logistics & Delivery Integration for the Marketplace.
- Community Farming Network and Discussion Forums.
