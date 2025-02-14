<html>
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