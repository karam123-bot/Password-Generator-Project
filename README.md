# Password Generator with Strength Indicator in PHP

This is a simple PHP-based password generator that allows users to generate a random password with a specified length. It also provides an indication of whether the password is strong or weak, based on certain criteria like length, uppercase letters, lowercase letters, digits, and special characters.

## Features

- Generate a random password with a specified length (between 8 and 20 characters).
- Displays the generated password.
- Indicates the strength of the password: Weak, Medium, or Strong.
- Password strength is based on criteria such as length, uppercase letters, lowercase letters, numbers, and special characters.
- Green indicator for strong passwords and red indicator for weak passwords.

## Project Structure


## Installation

To run this project locally, follow these steps:

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/password-generator-php.git
cd password-generator-php
http://localhost/password-generator-php/index.php

---

### **Explanation:**

- **index.php**: Contains a form for the user to enter the desired password length. It also generates a random password and displays its strength based on a set of criteria.
- **style.css**: Styles the page and adds color indicators to show password strength.
- **Password Strength Criteria**:
  - Password is considered **strong** if it has:
    - At least 8 characters.
    - At least one uppercase letter.
    - At least one lowercase letter.
    - At least one digit.
    - At least one special character.
  - Password is considered **weak** if it fails to meet these criteria, and **medium** if it partially meets them.
- **README.md**: Provides an overview of the project and installation instructions.

---

This is a simple and effective password generator and checker project in PHP, and you can expand it further by adding features like password complexity suggestions or saving generated passwords in a secure way.
