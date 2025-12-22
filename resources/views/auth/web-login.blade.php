<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<h2>Login</h2>

<form method="POST" action="{{ route('login.submit') }}">
    @csrf

    <div>
        <label>Mobile / Username</label><br>
        <input
            type="text"
            name="username"
            value="{{ old('username') }}"
            required
            autofocus
        >
    </div>

    <br>

    <div>
        <label>Password</label><br>
        <input
            type="password"
            name="password"
            required
        >
    </div>

    <br>

    @if ($errors->any())
        <div style="color:red;">
            {{ $errors->first() }}
        </div>
    @endif

    <br>

    <button type="submit">Login</button>
</form>

</body>
</html>
