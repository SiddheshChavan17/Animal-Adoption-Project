<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>

.close-btn img {
    max-width: 30px;
}

/* Admin Login Section Styles */
.admin-login {
    margin: 50px auto;
    width: 30%;
}

.container {
    background-color: #f2f2f2;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.container h2 {
    text-align: center;
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 20px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.login-btn {
    display: block;
    width: 30%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #deb887;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.login-btn:hover {
    background-color: #c19a6b;
}

	</style>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Admin Login Section -->
    <section class="admin-login">
        <div class="container">
            <h2>Admin Login</h2>
            <form action="animals.php" method="POST" onsubmit="return validateForm()">
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="login-btn">Login</button>
            </form>
        </div>
    </section>

    <script>
        function validateForm() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            // Check if username and password match
            if (username !== 'AdopTails' || password !== 'Adopt123') {
                alert('Invalid username or password.');
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }
    </script>

</body>

</html>
