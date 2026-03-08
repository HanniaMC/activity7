# Homework 6 - Activity7 Robotics Platform

## Project Name
Activity7 - Robotics Learning Platform

## Project Description
This project was developed using Laravel to manage a robotics learning platform.  
The system allows the management of users, groups, courses, and robotics kits.

For Homework 6, the database was populated using seeders and factories to simulate production data.

## Technologies Used
- Laravel
- PHP
- MySQL
- Faker (for generating test data)

## Database Entities
The system is composed of the following entities:

- Users
- Groups
- Courses
- Robotics Kits
- Course_Group

## Seeders Implemented
The following seeders were created to populate the database:

- **UsersSeeder**
  - Creates three users:
    - Admon
    - Tecmilenio
    - Student

- **RoboticsKitSeeder**
  - Creates three robotics kits:
    - Starter Robotics Kit
    - Advanced Robotics Kit
    - AI Robotics Kit

## Factory Implemented
A **CourseFactory** was created to generate **100 fake courses** using Faker.


## GitHub Repository
This repository contains:

- Models
- Controllers
- Migrations
- Seeders
- Factories
- Laravel project configuration
