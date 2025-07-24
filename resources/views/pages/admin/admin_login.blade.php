<style>
    /* General Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    /* Background Image */
    body {
        background: url('12.png') no-repeat center center/cover;
        display: flex;
        flex-direction: column;
        /* Changed to column to stack header and login box */
        align-items: center;
        justify-content: center;
        height: 100vh;
        text-align: center;
    }

    /* Container */
    .container {
        background: rgba(0, 0, 0, 0.5);
        padding: 30px;
        border-radius: 10px;
        width: 90%;
        max-width: 400px;
        margin-top: 20px;
        /* Added margin to separate from header */
    }

    /* Header */
    header {
        text-align: center;
        margin-bottom: 20px;
        /* Reduced margin to keep closer to login box */
    }

    .logo {
        width: 80px;
        height: auto;
    }

    h1 {
        color: white;
        font-size: 50px;
    }

    /* Login Box */
    .login-box {
        background: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .login-box h2 {
        margin-bottom: 15px;
    }

    .login-box input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        width: 100%;
        padding: 10px;
        background: #007BFF;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background: #0056b3;
    }

    .go-to-website {
        display: block;
        margin-top: 10px;
        text-decoration: none;
        color: #007BFF;
    }

    .go-to-website:hover {
        text-decoration: underline;
    }
</style>
<div class="container">
    <div class="login-box">
        <h2>Login</h2>
        <form action="admin_dashboard.html" method="POST">
            <input type="text" name="username" placeholder="Username" required />
            <input
                type="password"
                name="password"
                placeholder="Password"
                required />
            <button type="submit">Sign In</button>
        </form>
        <a href="index.html" class="go-to-website">Go to Website</a>
    </div>
</div>