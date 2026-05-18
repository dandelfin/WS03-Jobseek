# WS03 Black & White Version – README

## Project Overview
WS03 JOBSEEK is a PHP-based Job Portal website named **Jobseek**.
The project follows a simple MVC (Model–View–Controller) structure and is designed
to help users search for jobs, view job details, and post new job listings.
The website uses a clean black and white theme for a professional appearance.

---

## Features
- Modern black and white user interface
- Responsive layout for desktop and mobile devices
- Homepage with navigation bar and hero section
- Search form for job keywords and locations
- Career promotion banner
- Recent Jobs section displaying job listings
- Job Details page
- Post a Job form
- Custom PHP Router
- MVC folder structure
- Reusable helper functions
- Sample job data included

---

## Pages Included

### Home Page
- Navigation bar with Jobseek logo
- Login and Register links
- Post a Job button
- Hero section with "Find Your Dream Job"
- Search form
- Career banner
- Recent Jobs section

### Recent Jobs Section
Each job card displays:
- Job title
- Description
- Salary
- Location
- Skill tags
- Details button

### Job Details Page
- Full job title and description
- Salary information
- Location
- Skill tags
- Back to Home link

### Post a Job Page
Form fields:
- Job Title
- Description
- Salary
- Location
- Submit button

---

## Project Structure
WS03/
├── App/
│   ├── controllers/
│   └── views/
├── Framework/
│   └── Router.php
├── public/
│   ├── css/
│   └── index.php
├── config/
│   └── config.php
├── helpers.php
├── routes.php
├── composer.json
└── .gitignore

---

## Technologies Used
- PHP
- HTML5
- CSS3
- MVC Architecture
- XAMPP / Apache
- phpMyAdmin (optional)

---

## Database Setup (Optional)
1. Open phpMyAdmin.
2. Create a new database named `ws03_jobseek`.
3. Import the SQL script.

---

## Installation Steps
1. Download and extract `WS03.zip`.
2. Copy the `WS03` folder into the `htdocs` directory in XAMPP.
3. Start Apache from the XAMPP Control Panel.
4. Open the following URL in your browser:

   http://localhost/WS03/public/

---

## Available Routes
- Home Page: /
- Job Listings: /listings
- Job Details: /listings/show?id=1
- Post a Job: /listings/create

---

## Author
Developed as part of the WS03 PHP assignment to demonstrate:
- MVC architecture
- PHP routing
- Dynamic page rendering
- Professional web design

---

## Notes
- Sample job data is stored in `config/config.php`.
- The database is optional and not required for the basic version.
- This README file provides installation and usage instructions.
