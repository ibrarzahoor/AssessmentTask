<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{ asset('/css/signin.css') }}" rel="stylesheet">
    
    <style>
        /* Reset some default styles */
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
        }

        /* Center the form vertically */
        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Style the form container */
        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            text-align: center;
        }

        /* Style the form header */
        .form-signin h1 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        /* Style the form inputs and labels */
        .form-floating input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
        }

        .form-floating label {
            font-size: 0.875rem;
            color: #555;
        }

        /* Style the error messages */
        .invalid-feedback {
            color: #d9534f;
            font-size: 0.875rem;
            text-align: left;
        }

        /* Style the remember me checkbox */
        .checkbox {
            text-align: left;
            margin-bottom: 10px;
        }

        /* Style the submit button */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            font-size: 1rem;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* Style the copyright text */
        .text-muted {
            font-size: 0.875rem;
            margin-top: 1rem;
        }
    </style>
</head>
<body class="text-center">
    <main class="form-signin">
        <form id="registration-form" action="{{ route('auth.register') }}" method="POST">
            @csrf
            <img class="mb-4" src="{{ asset('img/bootstrap-logo.svg') }}" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Register</h1>

            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="name@example.com">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" name="name" placeholder="Your Name">
                <label for="name">Your Name</label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <!-- Add your registration form fields here -->

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="button" id="register-button">Register</button>
            <p class="mt-3">
                Already have an account? <a href="{{ route('login') }}">Log in</a>
            </p>
            <p class="mt-5 mb-3 text-muted">&copy; CODE BY IBRAR</p>
        </form>
    </main>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const registerButton = document.getElementById('register-button');
            const registrationForm = document.getElementById('registration-form');

            registerButton.addEventListener('click', function () {
                // Modify the form's action to redirect to the login page
                registrationForm.action = '{{ route('login') }}';
                registrationForm.submit(); // Submit the form
            });
        });
    </script>
</body>
</html>
