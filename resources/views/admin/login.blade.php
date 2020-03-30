<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <title>Sign in</title>
</head>
<body>
    <form method="POST" action="{{ route('admin.post_login') }}">
        @csrf
        <h4>Sign in</h4>
        <div class="form-group">
            <label class="required">Email</label>
            <input type="email" class="form-control" name="email" autocomplete="off">
        </div>
        <div class="form-group">
            <label class="required">Password</label>
            <input type="password" class="form-control" name="password" autocomplete="off">
        </div>
        <div class="form-group">
            <button type="submit">Sign In</button>
            <button><a href="{{ route('admin.signup') }}">Sign up</a></button>
        </div>
    </form>
    <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
