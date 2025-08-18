<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif
    <form method="POST" action="{{ route('login.submit') }}">
        @csrf
        <label>Username:</label>
        <input type="text" name="username" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
