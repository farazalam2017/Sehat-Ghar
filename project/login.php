<?php
// Start or resume the session
session_start();

// After successful login, store user information in the session
$_SESSION["user_id"] = $user_id; // Replace with the actual user ID
$_SESSION["user_email"] = $email; // Replace with the actual user's email

// Redirect to the user dashboard or another protected page
header("Location: dashboard.php");
exit();

// Store User-Agent and IP address in the session
$_SESSION["user_agent"] = $_SERVER["HTTP_USER_AGENT"];
$_SESSION["user_ip"] = $_SERVER["REMOTE_ADDR"];

// On subsequent requests, check if User-Agent and IP address match
if ($_SESSION["user_agent"] !== $_SERVER["HTTP_USER_AGENT"] || $_SESSION["user_ip"] !== $_SERVER["REMOTE_ADDR"]) {
    // Possible session hijacking attempt; invalidate the session
    session_unset();
    session_destroy();
    // Redirect to a login page or show an error message
    header("Location: login.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your existing head content -->
</head>
<body>
    <header class="header">
        <!-- Your header content -->
    </header>
    <main>
        <section class="section-login">
            <div class="container">
                <span class="subheading">Login</span>
                <h2 class="heading-secondary">Log into Your Account</h2>
                <form action="authenticate.php" method="post" class="login-form">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn--form">Log In</button>
                </form>
            </div>
        </section>
    </main>
    <footer class="footer">
        <!-- Your footer content -->
    </footer>
</body>
</html>
