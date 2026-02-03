# Medica – Universal Healthcare Management System

[![PHP](https://img.shields.io/badge/PHP-Backend-blue)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-Database-orange)](https://www.mysql.com/)
[![HTML5](https://img.shields.io/badge/HTML5-Frontend-red)](https://html.spec.whatwg.org/)

> A centralized web-based healthcare management system connecting patients, doctors, hospitals, caregivers, and blood donors on a unified platform. Developed as the capstone project for CSE-402: System Analysis, Design & Development Sessional.

## ⚠️ Warning

> **This is an academic prototype project and is not production-ready.**
> 
> - **Not Polished**: This project was developed as a course capstone with time constraints and may contain incomplete features, bugs, and unoptimized code
> - **Raw SQL Queries Only**: As per course requirements, this project uses **ONLY raw SQL queries** without any ORM or framework abstractions (no Laravel Eloquent, no Doctrine, etc.)
> - **Security Considerations**: The use of raw SQL queries requires extra caution for SQL injection prevention. Review all database interactions before any production use
> - **Deprecated Dependencies**: Some libraries and packages may be outdated and could have known security vulnerabilities or compatibility issues
> - **Use with Caution**: The codebase may require significant updates to dependencies, security hardening, and testing before any practical use
> - **Limited Support**: As this is a completed academic project, active maintenance and support are not guaranteed
> 
> **We recommend using this project for educational reference only.** If you plan to build upon this work, please thoroughly review and update all dependencies, implement proper prepared statements for all SQL queries, and conduct comprehensive security testing before deployment.

## 📋 Overview

Medica addresses the critical gap in Bangladesh's healthcare system where patients struggle to find proper medical information, leading to reliance on rumors and referrals instead of verified data. This has contributed to cases of undocumented malpractice and poor healthcare access.

Our solution provides a centralized platform that:
- Connects all stakeholders in the healthcare ecosystem
- Eliminates data redundancy through shared databases
- Enables location-specific medical service recommendations
- Promotes transparency through doctor reviews and ratings
- Facilitates emergency services like ambulance dispatch and blood donation

## ✨ Key Features

### For Patients
- **Medical History Access**: View complete medical records, prescriptions, and lab reports
- **Doctor Appointments**: Book consultations with doctors based on specialty, location, and availability
- **Online Medicine Orders**: Order medicines with home delivery
- **Emergency Ambulance**: Request ambulances during emergencies with location tracking
- **Blood Transfusion Support**: Find and request blood donors nearby
- **Doctor Reviews**: Read and write reviews for medical practitioners

### For Doctors
- **Schedule Management**: Maintain and manage daily appointment schedules
- **Digital Prescriptions**: Create and manage patient prescriptions digitally
- **Patient History**: Access complete medical history of patients with consent
- **Profile Management**: Maintain professional profiles with qualifications and specialties

### For Hospitals
- **Administrative Portal**: Manage hospital profiles, services, and facilities
- **Recruitment System**: Post job openings for doctors, nurses, and technicians
- **Centralized Database**: Share patient data securely across the healthcare network
- **Employee Management**: Track hospital staff and their access permissions

### For Caregivers
- **Job Management**: View and accept residential caregiving requests
- **Schedule Tracking**: Manage daily commitments and contracts
- **Profile System**: Maintain professional credentials and availability

### For Blood Donors
- **Donation Requests**: Receive notifications when nearby hospitals need blood
- **Donor Network**: Join a centralized blood donor registry
- **Emergency Alerts**: Get real-time alerts for urgent blood requirements

## 🎯 Project Objectives

1. Create a centralized database system for healthcare management
2. Modernize health records to minimize data redundancy
3. Digitize all formalities required for accessing health services
4. Provide location-based emergency medical assistance
5. Enable transparency and quality improvement through user reviews

## 🏗️ System Architecture

### Database Design
- **Centralized Cloud Database**: All hospitals share a common database
- **Data Normalization**: Eliminates redundancy while maintaining data integrity
- **Role-Based Access Control**: Different access levels for patients, doctors, hospitals, and staff

### Application Architecture
- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP (Raw SQL queries only - no ORM as per course requirements)
- **Database**: MySQL with cloud storage
- **Server**: Amazon EC2 or similar cloud hosting service

## 🛠️ Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP
- **Database**: MySQL (Raw SQL queries - no Laravel Eloquent, no ORM frameworks)
- **Cloud Storage**: Amazon EBS / Aurora (recommended)
- **Server**: Apache/Nginx web server
- **Hosting**: Cloud-based (AWS EC2 recommended)

## 📊 System Requirements

### Hardware Requirements
- **Server**: Quad-core processor, 16GB RAM minimum
- **Storage**: 100GB+ cloud storage (Amazon EBS or equivalent)
- **Bandwidth**: High-speed internet connection for real-time updates

### Software Requirements
- **Web Server**: Apache 2.4+ or Nginx
- **PHP**: Version 7.4 or higher
- **MySQL**: Version 8.0 or higher
- **Browser**: Modern web browsers (Chrome, Firefox, Safari, Edge)

## 📱 Getting Started

### Prerequisites

- PHP 7.4 or higher installed
- MySQL 8.0 or higher installed
- Apache/Nginx web server
- Composer (for dependency management if any)

### Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/medica.git
cd medica
```

2. Set up the database:
```bash
mysql -u root -p
CREATE DATABASE medica;
```

3. Import the database schema:
```bash
mysql -u root -p medica < database/schema.sql
```

4. Configure database connection:
```php
// config/database.php
define('DB_HOST', 'localhost');
define('DB_NAME', 'medica');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
```

5. Set up the web server:
   - Point document root to the `public/` directory
   - Enable PHP and MySQL modules
   - Restart the web server

6. Access the application:
```
http://localhost/medica
```

### Usage

1. **Register as a User**: Choose your role (Patient/Doctor/Hospital/Caregiver/Donor)
2. **Complete Profile**: Fill in required information for your role
3. **Explore Features**: Access role-specific features from your dashboard
4. **Book Services**: Patients can book appointments, order medicines, request ambulances
5. **Provide Services**: Doctors and caregivers can manage their schedules and commitments

## 🔒 Security Considerations

Since this project uses raw SQL queries instead of an ORM, special attention must be paid to:

- **SQL Injection Prevention**: All user inputs must be properly sanitized
- **Prepared Statements**: Use MySQLi prepared statements for all queries
- **Input Validation**: Validate all data on both client and server side
- **Authentication**: Implement secure login with password hashing
- **Authorization**: Role-based access control for sensitive operations

**Example of safe SQL query:**
```php
// ❌ UNSAFE - Vulnerable to SQL injection
$query = "SELECT * FROM users WHERE email = '$email'";

// ✅ SAFE - Using prepared statement
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
```

## 💰 Cost Analysis

### Development Cost
- Domain Name: $10/year
- Cloud Hosting (AWS EC2): $61.54/month
- Cloud Storage (Amazon EBS): $10/month for 100GB
- Database (Amazon Aurora): $160.91/month for 1TB with high performance
- Maintenance: $400-500/year

**Total Estimated Annual Cost**: ~$3,000-3,500

### Benefits
- Centralized data eliminates redundancy across hospitals
- Improved healthcare accessibility for patients
- Enhanced transparency and quality control
- Emergency service optimization
- Cost-effective compared to building individual hospital systems

## 📈 System Evaluation

### Functional Requirements Met
✅ Distinguishing UI for each user category  
✅ Doctor schedule and prescription management  
✅ Patient medical history and appointment booking  
✅ Hospital administrative portal and recruitment system  
✅ Ambulance and blood donation emergency services  
✅ Online medicine ordering with home delivery  

### Non-Functional Requirements Met
✅ Secure system following information security protocols  
✅ Centralized database reducing data redundancy  
✅ Confidentiality of sensitive hospital data  
✅ Scalable cloud-based architecture  

## ⚠️ Limitations

- **No Real-Time Video Consultancy**: System doesn't support WebRTC-based video calls
- **Manual Data Migration**: Existing hospital data needs manual migration to the central database
- **Internet Dependency**: Requires constant internet connectivity
- **Adoption Challenge**: Requires cooperation from hospitals to adopt the centralized system
- **Raw SQL Only**: Course constraint prevents use of modern ORM tools for better code maintainability

## 🚀 Future Extensions

- Integrate WebRTC for real-time video consultations
- Mobile applications (iOS and Android) for better accessibility
- AI-powered symptom checker and diagnosis assistant
- Integration with wearable health devices
- Multilingual support for wider accessibility
- Advanced analytics for healthcare insights
- Blockchain integration for immutable medical records
- Migrate to modern frameworks (Laravel, Django) with ORM support

## 📚 Academic Context

This project was completed as the capstone project for **CSE-402: System Analysis, Design & Development Sessional**. The project demonstrates practical application of:
- System analysis and design methodologies
- Database design and normalization
- Feasibility analysis and cost-benefit evaluation
- User-centered design principles
- Raw SQL query optimization (course requirement)

**Special Course Constraint**: This project exclusively uses raw SQL queries without any ORM frameworks (Laravel Eloquent, Doctrine, etc.) as per the course requirements to demonstrate fundamental database interaction skills.

## 📄 Project Documentation

- **Feasibility Report**: Complete system analysis and candidate evaluation
- **DFD Diagrams**: Data flow diagrams at multiple levels
- **Decision Trees**: Logic flow for key features
- **Decision Tables**: Comprehensive condition-action mapping
- **Cost-Benefit Analysis**: Detailed financial evaluation

## 🙏 Acknowledgments

- Course instructors and teaching assistants of CSE-402
- Hospital executives who participated in our interviews
- Survey respondents (doctors, patients, and healthcare workers)
- The open-source community for various tools and libraries used

## 📧 Contact

For questions or collaboration opportunities, please reach out to the team members or open an issue in this repository.

---

**Note**: This is an academic project developed for educational purposes. For commercial deployment, significant security hardening, comprehensive testing, migration to modern frameworks with ORM support, and compliance with healthcare regulations (HIPAA, etc.) would be necessary.

