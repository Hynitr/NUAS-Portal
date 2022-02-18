<?php
include("functions/init.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $call['school'] ?> | Admin Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $call['school'] ?> | Admin Login">
    <meta name="keywords" content="<?php echo $call['school'] ?>, School">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="icon" href="dist/img/logo.png" type="image/ico" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <link rel="manifest" href="manifest.json">
</head>
<style>
body {
    background-image: url('dist/img/res.png');
}
</style>

<body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <a href="<?php echo $call['website'] ?>"><b><?php echo $call['school'] ?></b></a>
        </div>
        <!-- User name -->
        <div class="lockscreen-name">Admin Login</div>


        <!-- START LOCK SCREEN ITEM -->
        <div class="lockscreen-item">
            <!-- lockscreen image -->
            <div class="lockscreen-image">
                <img src="dist/img/logo.png" alt="<?php echo $call['school'] ?>">
            </div>
            <!-- /.lockscreen-image -->

            <!-- lockscreen credentials (contains the form) -->

            <form method="post" class="lockscreen-credentials">
                <div class="input-group">
                    <input type="password" name="password" id="pword" class="form-control" placeholder="password">

                    <div class="input-group-append">
                        <button type="button" name="submit" id="submit" class="btn"><i
                                class="fas fa-arrow-right text-muted"></i></button>
                    </div>
                </div>
            </form>
            <!-- /.lockscreen credentials -->

        </div>
        <!-- /.lockscreen-item -->
        <div class="help-block text-center">
            Enter your password to retrieve your session
        </div>

        <div class="lockscreen-footer text-center">
            &copy; <b><a href="<?php echo $call['website'] ?>"
                    class="text-black"><?php echo $call['school'] ." ". date("Y") ?></a></b><br>
            Developed by <a target="_blank" href="https://hynitr.com" class="text-black"> Hynitr</a>
        </div>
    </div>
    <!-- /.center -->


    <!-- Modal -->
    <div class="modal fade" id="ModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">

        </div>
    </div>


    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="plugins/toastr/toastr.min.js"></script>
    <script type="text/javascript">
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
    });
    </script>
    <script src="ajax.js"></script>
    <script>
    if ('serviceWorker' in navigator) {
        console.log("Will the service worker register?");
        navigator.serviceWorker.register('service-worker.js')
            .then(function(reg) {
                console.log("Yes, it did.");
            }).catch(function(err) {
                console.log("No it didn't. This happened: ", err)
            });
    }
    </script>
    <script src="service-worker.js">
    // Service worker for Progressive Web App
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('service-worker.js', {
            scope: '.' // THIS IS REQUIRED FOR RUNNING A PROGRESSIVE WEB APP FROM A NON_ROOT PATH
        }).then(function(registration) {
            // Registration was successful
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
        });
    }
    </script>
</body>

</html>