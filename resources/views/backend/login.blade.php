<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aashwi Hospital</title>
    <link href="{{ asset('logo1.png') }}" rel="shortcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, rgb(181, 178, 231), rgb(102, 168, 241));
            height: 100vh;
            display: flex;
            align-items: center;
        }

        .login-wrapper {
            background: rgba(255, 255, 255, 0.14);
            border-radius: 20px;
            /* box-shadow: 0 10px 30px rgba(0, 123, 255, 0.1); */
            overflow: hidden;
            display: flex;
            width: 50%;
            max-width: 950px;
            margin: auto;
            height: 500px;
            /* fix height for layout */
        }

        .login-left {
            flex: 1;
            /* background: url('https://images.unsplash.com/photo-1588776814546-b47a13f9b360?fit=crop&w=800&q=80') center center / cover no-repeat; */
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Logo in center of left panel with subtle white background & padding */
        .login-left img.logo {
            width: 60%;
            /* background: rgba(255, 255, 255, 0.85); */
            padding: 20px;
            /* border-radius: 15px; */
            /* box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15); */
            object-fit: contain;
        }

        .login-right {
            flex: 1;
            padding: 50px 40px;
        }

        .login-right h2 {
            color: #0d4468;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .form-label {
            color: #333;
            font-weight: 500;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            border-color: #007bff;
        }

        .btn-login {
            background: #0d4468;
            color: white;
            padding: 12px;
            font-weight: 600;
            border-radius: 12px;
            width: 100%;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background: #093759;
        }

        .footer-text {
            font-size: 13px;
            color: black;
            margin-top: 30px;
        }

        .spanTag {
            color: #0d4468;
            font-weight: 600;
            font-size: 12px;
        }

        @media (max-width: 768px) {
            .login-wrapper {
                flex-direction: column;
                height: auto;
            }

            .login-left {
                height: 200px;
            }
        }
    </style>
</head>

<body>
    <div class="login-wrapper">
        <div class="login-left">
            <img src="{{ url('logo1.png') }}" alt="Hospital Logo" class="logo" />
        </div>
        <div class="login-right">
            <h2>Welcome Back</h2>
            @include('flash-message')
            <form action="{{ url('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="jack@gmail.com"
                        required>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="••••••••"
                        required>
                </div>
                <button type="submit" class="btn btn-login">Login</button>
            </form>
            <p class="footer-text text-center">&copy; {{ date('Y') }} Aashwi Hospital. All rights reserved. <br>
                <span class="spanTag">Design & Develop by Baadam Info Services Pvt. Ltd.</span>
            </p>
        </div>
    </div>
</body>

</html>