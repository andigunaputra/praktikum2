<?php include 'header.php'; ?>

<div class="login-card">
    <h2>Login to ReShare</h2>

    <form action="proses_login.php" method="POST">
        <label>Email / Username</label>
        <input type="text" name="username" placeholder="Enter your email or username.." required />

        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password.." required />

        <div class="remember">
            <label>
                <input type="checkbox" name="remember" />
                <span>Remember me</span>
            </label>
        </div>

        <button type="submit">Log In</button>
    </form>

    <p class="signup-text">
        Don't have account? <a href="signup.php">Sign Up</a>
    </p>
</div>

<?php include 'footer.php'; ?>