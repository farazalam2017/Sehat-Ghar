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
        <section class="section-registration">
            <div class="container">
                <span class="subheading">Registration</span>
                <h2 class="heading-secondary">Create an Account</h2>
                <form action="register.php" method="post" class="registration-form">
                    <div class="form-group">
                        <label for="full-name">Full Name</label>
                        <input type="text" id="full-name" name="full_name" placeholder="Enter your full name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn--form">Sign Up</button>
                </form>
            </div>
        </section>
    </main>
    <footer class="footer">
        <!-- Your footer content -->
    </footer>
</body>
</html>
