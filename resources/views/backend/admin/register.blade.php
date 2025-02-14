<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
    </style>
</head>

<body>
    <div class="card" style="width: 100%; max-width: 400px; padding: 20px;">
        <div class="card-body">
            <h2 style="text-align: center;">Register</h2>
            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" style="display: block; text-align: left;">Name</label>
                    <input type="text" class="form-control mb-3" id="name" name="name" required
                        placeholder="Enter Your Name">
                </div>

                <div class="form-group">
                    <label for="email" style="display: block; text-align: left;">Email</label>
                    <input type="email" class="form-control mb-3" id="email" name="email" required
                        placeholder="Enter Your Email Id">
                </div>

                <div class="form-group">
                    <label for="password" style="display: block; text-align: left;">Password</label>
                    <input type="password" class="form-control mb-3" id="password" name="password" required
                        placeholder="Enter Your Password">
                </div>

                <div class="form-group">
                    <label for="password_confirmation" style="display: block; text-align: left;">Confirm Password</label>
                    <input type="password" class="form-control mb-3" id="password_confirmation"
                        name="password_confirmation" required placeholder="Enter Your Confirm Password">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
        </div>
    </div>
</body>

</html>
