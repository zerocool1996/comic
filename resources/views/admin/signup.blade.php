<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <title>Sign up</title>
</head>
<body>
    <form method="POST" action="{{ route('admin.post_signup') }}">
        @csrf
        <h4>Sign up</h4>
        <div class="form-group">
            <label class="required">Email</label>
            <input type="email" class="form-control" name="email" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label class="required">Password</label>
            <input type="password" class="form-control" name="password" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label class="required">First name</label>
            <input type="text" class="form-control" name="firstname" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label class="required">Last name</label>
            <input type="text" class="form-control" name="lastname" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label class="required">Address</label>
            <input type="text" class="form-control" name="address" autocomplete="off">
        </div>
        <div class="form-group">
            <label class="required">Tel</label>
            <input type="text" class="form-control" name="tel" autocomplete="off">
        </div>
        <div class="form-group">
            <label class="required">Sex:  </label><br>
            <label class="required">male</label>
            <input type="radio" class="form-control" name="sex" value="1">
            <label class="required">female</label>
            <input type="radio" class="form-control" name="sex" value="2">
        </div>
        <div class="form-group">
            <button type="submit">Sign Up</button>
            <button><a href="{{ route('admin.login') }}">Sign In</a></button>
        </div>
    </form>
    <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
