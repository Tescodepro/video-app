# Laravel Project

## 📦 Setup Instructions

1. **Clone the repository**
   ```bash
   https://github.com/Tescodepro/video-app.git
   cd your-project
   ```
2. **Install dependencies**  
    ```bash
    composer install
    npm install
    ```

3. **Set up environment variables**  
    Copy the `.env.example` file to `.env` and update the necessary configuration values:  
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Run migrations**  
    ```bash
    php artisan migrate
    ```

5. **Start the development server**  
    ```bash
    php artisan serve
    ```

## ✨ Features Implemented

- User authentication (registration, login, logout)
- Video upload 
- Video streaming functionality
- API endpoints for video related operations

## 🛠️ Technologies Used

- **Backend**: Laravel
- **Frontend**: Vue.js 
- **Database**: MySQL
- **Communication**: RESTful API

## 🏗️ Key Architecture Decisions

- **RESTful API Design**: Ensured clear separation of concerns between frontend and backend.
- **Database Schema**: Designed to optimize video storage and retrieval.
- **Security**: Implemented Laravel's Sanctum authentication .

## 🚧 Incomplete Features
### How I Would Complete Them

- **Video Analytics**: Use a combination of Laravel events and a reporting database table to track metrics.
- **Advanced Search**: Integrate Elasticsearch or Algolia for full-text search capabilities.
- **Live Streaming**: Leverage WebRTC or a third-party service like Wowza for real-time streaming.
- **Individual User Dashboard**: The dashboard allow user to upload videos and view all the activies on thier videos 
