<?php include("functions/init.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $call['school'] ?> | Student Portal</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $call['school'] ?>">
    <meta name="keywords" content="<?php echo $call['school'] ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="icon" href="dist/img/logo.png" type="image/png" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <a href="<?php echo $call['website'] ?>"><b><?php echo $call['school'] ?></b></a>
        </div>
        <!-- User name -->
        <div class="lockscreen-name">Invalid QR Code.. Try Rescanning!</div>
        <!-- START LOCK SCREEN ITEM -->
        <div class="lockscreen-item">
            <!-- lockscreen image -->

            <!-- /.lockscreen-image -->

            <!-- lockscreen credentials (contains the form) -->

        </div>
        <!-- /.lockscreen-item -->
        <div class="help-block text-center">

        </div>

        <div class="lockscreen-footer text-center">
            Copyright &copy; <?php echo date("Y"); ?> <b><a href="<?php echo $call['website'] ?>"
                    class="text-black"><?php echo $call['school'] ?></a></b><br>
            Developed by <a target="_blank"
                href="https://www.google.com/search?client=opera&q=doteightplus&sourceid=opera&ie=UTF-8&oe=UTF-8"
                class="text-black"> DotEightPlus.</a>
        </div>
    </div>
    <!-- /.center -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>