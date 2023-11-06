# Laravel Login and Registration Project (proovitöö)

## Overview

This is a simple web application built with Laravel that provides user registration and login functionality. It's styled with Bootstrap for a clean and modern design.

## Prerequisites

Before you start, make sure you have the following:

- A code editor (e.g., Visual Studio Code)
- PHP and Composer installed
- Docker installed for the MySQL database
- **Note! If you don't want to use Docker, you can also use your local database, and I've created a script called create_database_and_table.sql to simplify the process.**
  **In that case, dont forgot to change database properties in .env file.**

## Setup

1. **Clone the Project**:

   ```bash
   git clone <repository-url>
   cd <project-directory>
2. **Create Environment File**:

    ```bash
    cp .env.example .env

3. **Start MySQL Docker Container**:
    ```bash
   docker-compose up -d db
   
4. **Access PHP Container Shell**:
    ```bash
    docker-compose exec php bash

5. **Start Laravel Development Server**:
    ```bash
    php artisan serve
Access Web Application: Visit http://localhost:8000 in your web browser.
