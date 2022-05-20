<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sbadmin\css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-info">

    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}

                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">quiz!</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="">Title</label>
                                                <input type="text" name="title" class="form-control form-control-user"
                                                    id="" placeholder="Title">
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="">Summary</label>
                                                <textarea name="summary" col="20" rows="1" class="form-control form-control-user" id="summary"
                                                    placeholder="Summary"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="">Technology Id</label>
                                                <select name="tech_id" class="form-control form-control-user" id="">
                                                    <option>Tech id</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="">Image</label>
                                                <input type="file" name="image" class="form-control form-control-user"
                                                    id="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="">Status</label>
                                                <select name="staus" class="form-control form-control-user" id="">
                                                    <option value="active">active</option>
                                                    <option value="inactive">Inactive</option>
                                                    <option value="pending..">Pending..</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6  mb-3 mb-sm-0">
                                                <label for="">Level</label>
                                                <select name="level" class="form-control form-control-user" id="">
                                                    <option value="low">Low</option>
                                                    <option value="medium">Medium</option>
                                                    <option value="high">High..</option>
                                                </select>
                                            </div>
                                        </div>
                                        <a href="" class="btn btn-primary btn-user btn-block">
                                            Submit Question
                                        </a>
                                        <hr>

                                    </form>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sbadminvendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sbadmin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
