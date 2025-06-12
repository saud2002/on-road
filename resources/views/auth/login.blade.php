<form method="POST" action="{{ route('login.submit') }}">
    @csrf
    <div class="form-group">
        <label>Email <span class="login-danger">*</span></label>
        <input class="form-control" type="text" name="email" placeholder="Email">
        <span class="profile-views"><i class="fas fa-user-circle"></i></span>
    </div>
    <div class="form-group">
        <label>Password <span class="login-danger">*</span></label>
        <input class="form-control pass-input" type="password" name="password" placeholder="Password">
        <span class="profile-views feather-eye toggle-password"></span>
    </div>
    <button type="submit">Login</button>

    <a href="/register">register</a>

</form>