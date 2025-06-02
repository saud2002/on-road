
  <style>
    /* Reset and base */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      height: 100vh;
      background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container {
      width: 100%;
      max-width: 400px;
      padding: 20px;
    }

    .login-box {
      background: #ffffff;
      border-radius: 15px;
      padding: 30px 25px;
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
    }

    .login-box h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #2c5364;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 6px;
      color: #333;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
      transition: 0.3s;
    }

    .input-group input:focus {
      outline: none;
      border-color: #2c5364;
      box-shadow: 0 0 5px #2c5364;
    }

    button {
      width: 100%;
      padding: 12px;
      background: #2c5364;
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #1a2e3b;
    }

    .signup {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }

    .signup a {
      color: #2c5364;
      text-decoration: none;
    }

    .signup a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-box">
      <h2>Breakdown Assistance</h2>
      <form action="/auth/login" method="get">
        <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required />
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>
        <button type="submit">Login</button>
        <p class="signup">Don't have an account? <a href="#">Register</a></p>
      </form>
    </div>
  </div>
