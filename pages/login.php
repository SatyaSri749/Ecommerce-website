<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(to right, #141e30, #243b55);
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    background: rgba(255, 255, 255, 0.1);
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    width: 100%;
    max-width: 400px;
    text-align: center;
    backdrop-filter: blur(10px);
}

h2 {
    color: #ffffff;
    font-size: 1.8em;
    margin-bottom: 20px;
}

label {
    font-size: 1.1em;
    color: #ddd;
    display: block;
    text-align: left;
    margin-bottom: 8px;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: none;
    border-radius: 5px;
    font-size: 1em;
    background: rgba(255, 255, 255, 0.2);
    color: #ffffff;
    outline: none;
}

input::placeholder {
    color: #ddd;
}

button {
    width: 100%;
    padding: 12px;
    background: linear-gradient(to right, #ff416c, #ff4b2b);
    color: white;
    font-size: 1.2em;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: linear-gradient(to right, #ff4b2b, #ff416c);
}

.error-message {
    color: #ff6b6b;
    font-size: 1em;
    margin-top: 10px;
}
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST">
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <?php if (isset($error_message)): ?>
            <p class="error-message"><?= htmlspecialchars($error_message); ?></p>
        <?php endif; ?>
    </div>
</body>
</html>