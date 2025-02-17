# tatkaal.v1.0
First version of tatkaal prototype application

# Job Search Application - LAMP Stack Prototype

This repository contains the prototype build of a **job search application** that leverages **distance metrics** to recommend candidates for job roles within a specified radius. The application supports small job roles such as **plumbing** as well as permanent positions like **software development**.

## Project Overview

This project is built on the **LAMP (Linux, Apache, MySQL, PHP) stack** and utilizes **vanilla JavaScript** for frontend interactivity along with **basic HTML and CSS** for UI rendering. The system runs on **XAMPP** for local development and database handling.

## Features

- **Job Matching Algorithm**: Uses a distance-based metric to recommend job seekers within a given radius.
- **User Registration & Authentication**: Allows users to create accounts and manage profiles.
- **Job Posting System**: Employers can post job listings.
- **Candidate Search**: Users can search for candidates based on skills and proximity.
- **Responsive UI**: Basic frontend with HTML, CSS, and vanilla JS.
- **Database Management**: Stores job listings, user profiles, and match history using MySQL.

## Tech Stack

- **Backend**: PHP (Procedural & Object-Oriented Programming)
- **Frontend**: HTML, CSS, JavaScript (Vanilla JS)
- **Database**: MySQL
- **Server**: Apache (via XAMPP for local development)
- **Development Environment**: XAMPP

## Project Structure

```
├── connect_db/        # Database connection scripts
├── controllers/       # Backend logic for job posting, search, authentication
├── css/               # Stylesheets for UI
├── database_file/     # SQL files for database schema and sample data
├── images/            # Image assets
├── js/                # JavaScript files for frontend interactivity
├── models/            # PHP models for database interaction
├── public_html/       # Main application files (index.php, dashboard, job listings, etc.)
├── views/             # UI templates for job listings, user profiles, etc.
└── README.md          # Project documentation
```

## Installation & Setup

1. **Download and Install XAMPP**
   - Download XAMPP from [Apache Friends](https://www.apachefriends.org/index.html) and install it.

2. **Clone the Repository**
   ```bash
   git clone <repo-url>
   cd job-search-app
   ```

3. **Move Files to XAMPP's htdocs Directory**
   - Copy the project folder to `C:/xampp/htdocs/` (Windows) or `/opt/lampp/htdocs/` (Linux/Mac).

4. **Start Apache & MySQL in XAMPP**
   - Open XAMPP Control Panel and start **Apache** and **MySQL**.

5. **Import Database**
   - Open **phpMyAdmin** (`http://localhost/phpmyadmin/`)
   - Create a new database (e.g., `job_search_db`).
   - Import the SQL file from `database_file/`.

6. **Run the Application**
   - Open a web browser and navigate to:
     ```
     http://localhost/job-search-app/public_html/
     ```

## Usage

1. **User Registration & Login**
   - Users create an account and log in.
   - Employers can post job listings.

2. **Search for Jobs or Candidates**
   - The system recommends job seekers based on distance metrics.
   - Users can search for candidates with specific skills.

3. **Apply for Jobs**
   - Job seekers can apply for job listings.
   - Employers can view applications and contact candidates.

## Future Enhancements

- **Google Maps API**: For enhanced location-based job recommendations.
- **Chat System**: Real-time messaging between job seekers and employers.
- **Role-based Authentication**: Different permissions for users and administrators.

## Conclusion

This project provides a **prototype** for a job search application using a **LAMP stack** with a focus on **proximity-based recommendations**. The system is designed for easy deployment on **XAMPP** and can be extended for production environments.

Contributions are welcome! 🚀

