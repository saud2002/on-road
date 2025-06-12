<!-- <form method="POST" action="{{ route('register.submit') }}">
    @csrf

    <input type="text" name="name" placeholder="Name" required />
    <input type="email" name="email" placeholder="Email" required />

    <input type="password" name="password" placeholder="Password" required />
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required />

    <select name="role" required>
        <option value="">Select Role</option>
        <option value="user">User</option>
        <option value="admin">Admin</option>
        <option value="service_provider">Service Provider</option>
    </select>

    <button type="submit">Register</button>
    <a href="/login">Login</a>
</form> -->


<style>
    * {
        box-sizing: border-box;
    }

    html {
        height: 100%;
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .register-container {
        width: 320px;
        background: #fff;
        padding: 30px 20px;
        border-radius: 6px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .register-container input,
    .register-container select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
    }

    .register-container button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        border: none;
        color: white;
        font-size: 15px;
        border-radius: 4px;
        cursor: pointer;
    }

    .register-container button:hover {
        background-color: #0056b3;
    }

    .register-container a {
        display: block;
        text-align: center;
        margin-top: 12px;
        text-decoration: none;
        color: #007bff;
        font-size: 14px;
    }

    .register-container a:hover {
        text-decoration: underline;
    }
</style>

<div class="register-container">
    <form method="POST" action="{{ route('register.submit') }}">
        @csrf

        <input type="text" name="name" placeholder="Name" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required />

        <select name="role" required>
            <option value="">Select Role</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
            <option value="service_provider">Garages</option>
        </select>

        <button type="submit">Register</button>
        <a href="/login">Login</a>
    </form>
</div>