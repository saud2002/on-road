
    <style>

        .login-container {
            width: 300px;
            margin: auto;
            background: #fff;
            padding: 25px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .login-danger {
            color: red;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .profile-views {
            position: absolute;
            top: 35px;
            right: 10px;
            color: #888;
            font-size: 16px;
        }

        .toggle-password {
            position: absolute;
            top: 35px;
            right: 10px;
            cursor: pointer;
            color: #888;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #5cb85c;
            border: none;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #4cae4c;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

<div class="login-container">
    <form method="POST" action="{{ route('login.submit') }}">
        @csrf
        <div class="form-group">
            <label>Email <span class="login-danger">*</span></label>
            <input type="text" name="email" placeholder="Email">
            <span class="profile-views"></span> <!-- User icon -->
        </div>
        <div class="form-group">
            <label>Password <span class="login-danger">*</span></label>
            <input class="pass-input" type="password" name="password" placeholder="Password" id="password-field">
            <span class="toggle-password"></span>
        </div>
        <button type="submit">Login</button>

        <a href="/register">Register</a>
    </form>
</div>
