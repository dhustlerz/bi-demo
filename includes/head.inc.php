 <!-- META SECTION -->
        <title>Flexxia  Demo App</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->
        <link type="text/css" href="css/calender-date-picker/cangas.datepicker.css" rel="stylesheet">
        <?php
            $request_URI = "$_SERVER[REQUEST_URI]";
           if ($request_URI == '/bi-demo/index.php?concept=1' || $request_URI == '/bi-demo/index.php' || $request_URI == '/bi-demo/'  ) {
                echo '<link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>';
             }
             elseif ($request_URI == '/bi-demo/index.php?concept=2') {
                echo'<link rel="stylesheet" type="text/css" id="theme" href="css/theme-default-c2.css"/>';
             }
             elseif ($request_URI == '/bi-demo/index.php?concept=3') {
                echo'<link rel="stylesheet" type="text/css" id="theme" href="css/theme-default-c3.css"/>';
             }
        ?>

        <style>

        .nvd3.nv-pie .nv-slice text {
          fill: #fff !important;
        }


        </style>
        <!-- EOF CSS INCLUDE -->
