<!-- <html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hospital</title>
    <meta name="description" content="Hospital management system">
    <link rel="icon" href="logo1.png" type="image/png">
    <link href="{{ asset('backend/admin/logo1.png') }}" rel="shortcut icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <link rel="stylesheet" type="text/css" href="https://hms.infyom.com/assets/css/third-party.css">
    <link rel="stylesheet" type="text/css" href="https://hms.infyom.com/assets/css/style.css">
    <link href="/assets/css/custom-auth.css?id=df9be2c268bab8359b38" rel="stylesheet" type="text/css">
</head>
<body class="" style="background-color: #0d4468;">
    <div class="">
        <div class="d-flex flex-column flex-column-fluid align-items-center justify-content-top p-4">
            <div class="col-12 text-center">
                <a href="#" class="image mb-7 mb-sm-10" data-turbo="false">
                    <img alt="Logo" src="{{ url('logo1.png') }}" class="img-fluid logo-fix-size" style="margin-bottom: 100px; margin-top: 100px;">
                </a>
            </div>
            <div class="container">
                <div class="row text-right">
                    <div class="col-md-4 col-lg-6 mb-4 col-12 ">
                        <a class="btn btn-primary w-150px mb-5 indicator m-3" data-bs-toggle="dropdown" href="{{url('login')}}"
                            role="button" aria-expanded="false" style="background-color: #ef8013;">Dr Panal</a>
                    </div>

                    <div class="col-md-4 col-lg-6 mb-4 col-12">
                        <a class="btn btn-primary w-150px mb-5 indicator m-3" data-bs-toggle="dropdown" href="/nursing"
                            role="button" aria-expanded="false" style="background-color: #ef8013;">Nurshing</a>
                    </div>


                    <div class="col-md-4 col-lg-2 mb-4 col-4">

                        <a class="btn btn-primary w-150px
                                        mb-5 indicator m-3" data-bs-toggle="dropdown" href="{{ url('admin') }}" role="button"
                            aria-expanded="false" style="background-color: #ef8013;">Admin</a>
                    </div>
                    <div class="col-md-4 col-lg-2 mb-4 col-4">
                        <a class="btn btn-primary w-150px mb-5 indicator m-3" data-bs-toggle="dropdown"
                            href="/accounting" role="button" aria-expanded="false"
                            style="background-color: #ef8013;">Account</a>
                    </div>
                    <div class="col-md-4 col-lg-2 mb-4 col-4">
                        <a class="btn btn-primary w-150px mb-5 indicator m-3" data-bs-toggle="dropdown"
                            href="/bedmanager" role="button" aria-expanded="false"
                            style="background-color: #ef8013;">Bed Manager</a>
                    </div>

                    <div class="col-md-4 col-lg-2 mb-4 col-4">
                        <a class="btn btn-primary w-150px mb-5 indicator m-3" data-bs-toggle="dropdown"
                            href="/clinic" role="button" aria-expanded="false"
                            style="background-color: #ef8013;">Clinic</a>
                    </div>

                    <div class="col-md-4 col-lg-3 mb-4 col-4">
                    </div>
                    <div class="col-md-4 col-lg-2 mb-4 col-4">
                        <a class="btn btn-primary w-150px mb-5 indicator m-3" data-bs-toggle="dropdown"
                            href="/evaluation" role="button" aria-expanded="false"
                            style="background-color: #ef8013;">Evalution</a>
                    </div>
                    <div class="col-md-4 col-lg-2 mb-4 col-4">
                        <a class="btn btn-primary w-150px mb-5 indicator m-3" data-bs-toggle="dropdown"
                            href="{{ url('login') }}" role="button" aria-expanded="false"
                            style="background-color: #ef8013;">Reception</a>
                    </div>

                    <div class="col-md-4 col-lg-2 mb-4 col-4">
                        <a class="btn btn-primary w-150px mb-5 indicator m-3" data-bs-toggle="dropdown"
                            href="/ipd-reception" role="button" aria-expanded="false"
                            style="background-color: #ef8013;">IPD Reception</a>
                    </div>

                    <div class="col-md-4 col-lg-2 mb-4 col-4">
                        <a class="btn btn-primary w-150px mb-5 indicator m-3" data-bs-toggle="dropdown"
                            href="/staff-login" role="button" aria-expanded="false"
                            style="background-color: #ef8013;">Staff Login</a>
                    </div>

                    <div class="col-md-4 col-lg-3 mb-4 col-4">

                        <a class="btn btn-primary w-150px mb-5 indicator m-3" data-bs-toggle="dropdown"
                            href="{{ url('login') }}" role="button" aria-expanded="false"
                            style="background-color: #ef8013;">Telecaller</a>
                    </div>

                    <div class="col-md-4 col-lg-3 mb-4 col-4">
                        <a class="btn btn-primary w-150px mb-5 indicator m-3" data-bs-toggle="dropdown" href="/dr-panel-2" role="button" aria-expanded="false" style="background-color: #ef8013;">Doctor penal 2</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
 -->

 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ashwi Hospital</title>
  <link rel="icon" href="{{ asset('backend/admin/logo1.png') }}" type="image/png" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500;700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Nunito', sans-serif;
      background: linear-gradient(to right top, #09203f, #537895);
      min-height: 100vh;
      color: #fff;
    }

    .logo {
      width: 120px;
      margin-bottom: 20px;
      filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.2));
    }

    .main-title {
      font-size: 32px;
      font-weight: 700;
      margin-bottom: 30px;
      color: #fdfdfd;
      text-align: center;
    }

    .group-title {
      font-size: 20px;
      font-weight: 700;
      margin: 40px 0 20px;
      color: #ffc107;
      text-align: center;
    }

    .role-card {
      background: rgba(255, 255, 255, 0.08);
      border-radius: 15px;
      backdrop-filter: blur(10px);
      padding: 20px 10px;
      text-align: center;
      text-decoration: none;
      color: #fff;
      font-weight: 600;
      font-size: 15px;
      transition: all 0.3s ease;
      border: 1px solid rgba(255, 255, 255, 0.15);
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .role-card:hover {
      background: #ef8013;
      color: #fff;
      transform: scale(1.03);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
    }

    @media (max-width: 576px) {
      .main-title {
        font-size: 24px;
      }

      .group-title {
        text-align: center;
      }
    }
  </style>
</head>

<body>
  <div class="container-fluid px-4 py-5">
    <div class="text-center">
      <img src="{{ url('logo1.png') }}" alt="Hospital Logo" class="logo" />
      <h1 class="main-title">Ashwi Hospital</h1>
    </div>

    <!-- Medical Staff -->
    <div class="group-title">👨‍⚕️ Medical Staff</div>
    <div class="row g-4 justify-content-center">
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
        <a href="{{ url('login') }}" class="role-card w-100">Dr Panel</a>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
        <a href="/dr-panel-2" class="role-card w-100">Doctor Panel 2</a>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
        <a href="/nursing" class="role-card w-100">Nursing</a>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
        <a href="/clinic" class="role-card w-100">Clinic</a>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
        <a href="/evaluation" class="role-card w-100">Evaluation</a>
      </div>
    </div>

    <!-- Administration -->
    <div class="group-title">🧑‍💼 Administration</div>
    <div class="row g-4 justify-content-center">
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
        <a href="{{ url('admin') }}" class="role-card w-100">Admin</a>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
        <a href="/accounting" class="role-card w-100">Account</a>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
        <a href="/bedmanager" class="role-card w-100">Bed Manager</a>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
        <a href="/staff-login" class="role-card w-100">Staff Login</a>
      </div>
    </div>

    <!-- Reception & Support -->
    <div class="group-title">🛎 Reception & Support</div>
    <div class="row g-4 justify-content-center">
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
        <a href="{{ url('login') }}" class="role-card w-100">Reception</a>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
        <a href="/ipd-reception" class="role-card w-100">IPD Reception</a>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex">
        <a href="{{ url('login') }}" class="role-card w-100">Telecaller</a>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

