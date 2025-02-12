
# Employee Management Database System

## Project Overview
The **Employee Management Database System** (EMDS) is a comprehensive solution designed to automate and streamline various aspects of employee data management. The system addresses the challenges faced by organizations with scattered employee records, manual attendance tracking, and decentralized payroll processing. With a centralized MySQL database, the EMDS ensures efficient tracking, data standardization, and report generation.

### Key Features:
- **Employee Information Management**: Centralized employee data including personal details, contact information, job titles, qualifications, etc.
- **Payroll Module**: Automates salary computation, deductions, taxes, and bonus calculations.
- **Time and Attendance Management**: Tracks employee attendance, overtime, and leave requests.
- **Performance Module**: Monitors employee performance, feedback, and goals.

## System Architecture
The system uses MySQL for database management and incorporates the following modules:
1. **Employee Information Module**
2. **Payroll Module**
3. **Time and Attendance Module**
4. **Performance Module**

## Technology Stack
- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript

## Modules Overview
### 1. Employee Information Module
- Manages essential employee details like name, job title, gender, date of birth, qualifications, etc.
- Includes functions to add, update, or delete employee records.
  
### 2. Payroll Module
- Tracks employee salary, bonus, deductions, and taxes.
- Allows for easy generation of payroll reports.

### 3. Time and Attendance Module
- Records employee attendance, overtime, and leave requests.
- Generates reports based on attendance data.

### 4. Performance Module
- Stores performance reviews, goals, and feedback.
- Allows managers to evaluate employee performance based on defined metrics.

## Installation
### Prerequisites:
1. **PHP 7.4+**
2. **MySQL 5.7+**

### Steps to Set Up:
1. Clone the repository:
   ```bash
   git clone https://github.com/ElzobeirM/employee-management-database.git
   ```

2. Import the MySQL database schema:
   ```bash
   mysql -u yourusername -p yourdatabase < path/to/database.sql
   ```

3. Configure the `config.php` file to set up database connection:
   ```php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'yourusername');
   define('DB_PASSWORD', 'yourpassword');
   define('DB_DATABASE', 'yourdatabase');
   ```

4. Start the PHP server:
   ```bash
   php -S localhost:8000
   ```

5. Access the system via `http://localhost:8000`.

## Usage
- Users can register or log in to access the employee management system.
- Admins can manage employee data, track attendance, calculate payroll, and assess performance.

## Conclusion
This system automates many of the tasks that were previously done manually, reducing errors and saving time. It is designed to support efficient management of employee data, streamline payroll processes, track attendance, and provide performance analytics.

## Future Work
- **Mobile Accessibility**: Improve mobile accessibility for better flexibility.
- **Machine Learning**: Integrate machine learning for performance analytics.
- **Predictive Analytics**: Use predictive analytics to optimize workforce management.
