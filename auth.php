<?php
include 'config.php';

// Check if user is logged in
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// Redirect if not logged in
function checkAuth() {
    if (!isLoggedIn()) {
        header("Location: login.php");
        exit();
    }
}

// Login function
function login($email, $password) {
    global $pdo;
    
    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_balance'] = $user['balance'];
            $_SESSION['user_role'] = $user['role'];
            
            // Update last login
            $updateStmt = $pdo->prepare("UPDATE users SET last_login = NOW() WHERE id = ?");
            $updateStmt->execute([$user['id']]);
            
            return true;
        }
        return false;
    } catch(PDOException $e) {
        error_log("Login error: " . $e->getMessage());
        return false;
    }
}

// Register function
function register($name, $email, $password, $phone) {
    global $pdo;
    
    try {
        // Check if email already exists
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        
        if ($stmt->rowCount() > 0) {
            return 'email_exists';
        }
        
        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        // Insert new user
        $insertStmt = $pdo->prepare("INSERT INTO users (name, email, password, phone, balance, created_at) VALUES (?, ?, ?, ?, 0, NOW())");
        $insertStmt->execute([$name, $email, $hashedPassword, $phone]);
        
        // Get referral code if exists
        $referralCode = isset($_GET['ref']) ? $_GET['ref'] : null;
        if ($referralCode) {
            // In a real app, you would validate the referral code and update referral records
        }
        
        return 'success';
    } catch(PDOException $e) {
        error_log("Registration error: " . $e->getMessage());
        return 'error';
    }
}

// Logout function
function logout() {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
?>