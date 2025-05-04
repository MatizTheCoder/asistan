# 🌤 PWA Assistant

A **Progressive Web App (PWA)** combining **live weather**, **currency rates**, and **breaking news** for personal daily use. Built with simplicity and performance in mind using **free APIs** and modern web technologies.

> 📱 Add to your mobile home screen to use it like a native app!

---

## ✨ Features

- 📍 **Current Weather** based on user location  
- ⏱️ **Hourly Forecasts**
- 📈 **Live Exchange Rates** (USD, EUR, Gold, and Turkish Lira variations)
- 📰 **Latest Headlines** from Turkish news
- 🗺️ **Route Planner** with:
  - Distance & estimated drive time
  - Weather at every 50km step on your route
  - Location names and estimated time of arrival at each checkpoint

---

## 🔧 Tech Stack

- ⚡ HTML5 + TailwindCSS  
- ☁️ Open-Meteo API for weather data  
- 💸 Truncgil API for exchange rates  
- 🧭 OpenRouteService API for routing  
- 📄 Simple PHP proxy for breaking news via NTV sitemap

---

## 🚀 Getting Started

> You can use the code as you like — this was built for **personal needs**, but feel free to fork, modify, and extend.

1. Clone the repository:
   ```bash
   git clone https://github.com/MatizTheCoder/asistan
2. Create your own API keys:

Open-Meteo

OpenRouteService

(Optional) Use your own PHP server for news proxy

Replace your API keys in the respective places in index.html and rota.html.

Deploy on GitHub Pages or any static site hosting.

⚠️ API Keys & Usage
This app uses free public APIs with limited quotas.
Please use your own keys by editing the following:

const apiKey = 'YOUR_OPENROUTESERVICE_KEY';

Weather API needs no key but is rate-limited.

🔐 Respect quota limits. Using my keys may result in unexpected API blocks or disabled features.

🛠 Disclaimer
This is a personal-use project built to explore PWA, geolocation, and live API integration.
It's constantly evolving as new ideas are added — features may break or be experimental.

Please report issues or contribute improvements! 🧪

📄 License
MIT License
