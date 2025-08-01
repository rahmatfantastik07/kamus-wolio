<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <style>
    body {
        background: linear-gradient(to right, #f9f9f9, #f0f0f0);
        font-family: 'Segoe UI', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .login-container {
        background: white;
        padding: 2rem;
        border-radius: 16px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        width: 320px;
        position: relative;
    }

    h2 {
        text-align: center;
        margin-bottom: 1.5rem;
        color: #333;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-sizing: border-box;
        margin-bottom: 1rem;
        font-size: 14px;
    }

    button {
        width: 100%;
        padding: 12px;
        border: none;
        background-color: #f53d2d;
        color: white;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s;
    }

    button:hover {
        background-color: #e0291b;
    }

    .toggle-password {
        position: absolute;
        top: 180px;
        right: 40px;
        cursor: pointer;
        font-size: 14px;
        color: #888;
    }

    .toggle-password:hover {
        color: #f53d2d;
    }
    </style>
</head>

<body>

    <div class="login-container">
        <form method="POST" action="proses_login.php">
            <h2>Login Admin</h2>
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <span class="toggle-password" onclick="togglePassword()">Hiden</span><br><br>
            <button type="submit" name="login">Login</button>
        </form>
    </div>

    <script>
    function togglePassword() {
        const password = document.getElementById('password');
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
    }
    </script>

</body>

</html>