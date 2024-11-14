<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Koperasi Untung Bareng</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('public/admin/template') }}/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{ asset('public/admin/template') }}/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('public/admin/template') }}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('public/admin/template') }}/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('public/admin/template') }}/images/logokop.png" />
</head>

<body>
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="text-center my-5">
                        <img src="{{ asset('public/admin/template') }}/images/logokop.png" alt="logo"
                            width="300">
                    </div>
                    @include('message.flash')
                    <form class="card" method="POST" action="{{ route('reset.password') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="token" value="{{ $id }}">
                        <input type="hidden" name="email" value="{{ $Email }}">
                        <div class="card-body p-6">
                            <h4>Atur Ulang Kata Sandi</h4>                            
                            <div class="form-group">
                                <label class="form-label">Alamat Email</label>
                                <input  disabled type="email" class="form-control" 
                                    value="{{ $Email }}" >
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    Kata Sandi <small class="text-danger">Min. 6 karakter</small>

                                </label>
                                <input id="password" type="password" class="form-control" name="password" required autofocus>
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    Konfirmasi Kata Sandi 
                                </label>
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autofocus>
                            </div>
                            <div class="form-footer">
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block">Atur Ulang Kata Sandi</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('public/admin/template') }}/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('public/admin/template') }}/js/off-canvas.js"></script>
    <script src="{{ asset('public/admin/template') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('public/admin/template') }}/js/template.js"></script>
    <script src="{{ asset('public/admin/template') }}/js/settings.js"></script>
    <script src="{{ asset('public/admin/template') }}/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>