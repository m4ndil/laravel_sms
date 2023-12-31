<!DOCTYPE html>
<html>
a
<head>
    <meta http-equiv="refresh" content="15">
    <title>Login NCCS</title>
    <!-- Styles -->
    <link href="/css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>

<body>
    <div class="container">
        <div class="login-box login-form">
            <div class="header">
                <img class="logo" src="/images/logo.png" alt="NCCS Logo">
            </div>
            <h2>Login</h2>
            <form id="login-form">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <label for="password">
                    Password           
                    <i class="fas fa-eye" id="togglePassword"></i>
                </label>
                <input type="password" id="password" name="password" required>

                <label for="role">Select Role:</label>
                <select id="role" name="role" class="dropdwn">
                    <option value="" disabled selected>* Mandatory *</option>
                    <option value="admin">Admin</option>
                    <option value="teacher">Teacher</option>
                    <option value="student">Student</option>
                    <option value="parent">Parent</option>
                </select>

                <button type="submit">Submit</button>
            </form>
            <div class="forgot-password">
                <a href="#">Forgot Password</a>
            </div>
        </div>

        <div class="images-container">
            <img class="image-slideshow" src="images/1.jpg" alt="NCCS Facilites">
        </div>
    </div>

    <div class="footer">
        &copy; NCCS (update this)
    </div>
    <!-- Slideshow in js -->
    <script src="/js/login.js"></script>
</body>

</html>
