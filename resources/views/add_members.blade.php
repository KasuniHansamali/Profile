<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal Details</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
</head>

    <style>

        .btn{
            line-height: 1.2!important;
        }

        /* Full-width input fields */
        .form-container input[type=text], .form-container input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

        /* When the inputs get focus, do something */
        .form-container input[type=text]:focus, .form-container input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit/login button */
        .form-container .btn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom:10px;
            opacity: 0.8;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover {
            opacity: 1;
        }
    </style>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Insert Personal Details</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">

                                <form style="width: 100%;" method="POST" action="{{url('add_new_member')}}">
                                    @csrf

                                    <label for="name"> Name </label><br>
                                    <input class="form-control" name="name" type="text" id="name" required="required"><br>

                                    <label for="email"> Email </label><br>
                                    <input class="form-control" name="email" type="email" id="email" required="required"><br>

                                    <label for="phone_number"> Phone Number </label><br>
                                    <input class="form-control" name="phone_number" type="tel" id="phone_number" required="required"><br>

                                    <label for="address"> Address </label><br>
                                    <input class="form-control" name="address" type="text" id="address" required="required"><br>

                                    <br>

                                    <input type="submit" name="Register" class="btn btn-primary" style="float: right">

                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
</div>
<!-- ./wrapper -->

</body>

