<?php
// Function to generate a random password
function generatePassword($length = 12) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';
    $password = '';
    $charactersLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }
    return $password;
}

// Function to check password strength
function checkPasswordStrength($password) {
    $strength = 0;
    
    if (strlen($password) >= 8) $strength++;
    if (preg_match('/[A-Z]/', $password)) $strength++;
    if (preg_match('/[a-z]/', $password)) $strength++;
    if (preg_match('/[0-9]/', $password)) $strength++;
    if (preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password)) $strength++;

    if ($strength == 5) {
        return "strong";
    } elseif ($strength >= 3) {
        return "medium";
    } else {
        return "weak";
    }
}

$password = '';
$passwordStrength = '';

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = isset($_POST['length']) ? $_POST['length'] : 12;
    $password = generatePassword($length);
    $passwordStrength = checkPasswordStrength($password);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Password Generator</h2>
        <form method="POST" action="index.php">
            <label for="length">Password Length (8-20):</label>
            <input type="number" id="length" name="length" min="8" max="20" value="12" required>

            <button type="submit">Generate Password</button>
        </form>

        <?php if ($password): ?>
            <div class="password-container">
                <h3>Generated Password:</h3>
                <input type="text" value="<?php echo htmlspecialchars($password); ?>" readonly>
            </div>
            
            <div class="password-strength <?php echo $passwordStrength; ?>">
                Password Strength: <?php echo ucfirst($passwordStrength); ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
