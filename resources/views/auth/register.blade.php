<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Link to the external CSS file -->
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>

    <div class="register-container">
        <h2>Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name input -->
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email input -->
            <div class="form-group">
                <label for="email">Email Address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password input -->
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Confirm Password input -->
            <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn-primary">Register</button>

            <!-- Login Link -->
            <div class="auth-links">
                <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
            </div>
        </form>
    </div>

</body>
</html>
