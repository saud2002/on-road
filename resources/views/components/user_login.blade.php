<style>
    body {
      background: #f1f3f6;
      font-family: 'Segoe UI', sans-serif;
    }

    .login-box {
      max-width: 400px;
      margin: 60px auto;
      padding: 30px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .login-box h2 {
      margin-bottom: 30px;
      font-weight: bold;
      text-align: center;
      color: #007bff;
    }

    .form-control {
      border-radius: 10px;
    }

    .btn-primary {
      border-radius: 10px;
    }

    .brand-logo {
      width: 50px;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="login-box">
      <div class="text-center">
        <img src="/photos/logo.png" alt="Logo" class="brand-logo">
        <h2>Vehicle Breakdown Login</h2>
      </div>

      <form method="post" action="/login">
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="email" required placeholder="example@mail.com">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password" required placeholder="Enter password">
        </div>

        <div class="d-flex justify-content-between mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember">
            <label class="form-check-label" for="remember">Remember me</label>
          </div>
          <a href="/forgot-password" class="text-decoration-none">Forgot password?</a>
        </div>

        <div class="d-grid">
         <a href="/user_index" class="btn btn-primary">login</a>
        </div>

        <div class="text-center mt-3">
          <p class="mb-0">Don't have an account? <a href="/user_index" class="text-decoration-none">Register here</a></p>
        </div>
      </form>
    </div>
  </div>