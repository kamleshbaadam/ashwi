<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #0d4468;
            background-image: url('/backend/admin/img/duplo4.jpg'); 
            background-size: cover;
            background-position: center;
            color: #fff; 
        }

        .card {
            background-color: rgba(0, 0, 0, 0.7); 
            border: none; 
        }

        .card-body h2 {
            margin-bottom: 20px;
        }

        .form-check-label {
            display: block;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="card" style="width: 100%; max-width: 400px; padding: 20px;">
        <div class="card-body">
            <h2 style="text-align: center;">Admin Login</h2>
            <form action="{{ url('admin/login-store') }}" method="POST">
                @csrf
                @include('flash-message')
                <div class="form-group">
                    <label for="email" style="display: block; text-align: left;">Email</label>
                    <input type="email" class="form-control mb-3" id="email" name="email"
                        placeholder="Enter Your Email Id" required>
                </div>

                <div class="form-group">
                    <label for="password" style="display: block; text-align: left;">Password</label>
                    <input type="password" class="form-control mb-3" id="password" name="password"
                        placeholder="Enter Your Password" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
