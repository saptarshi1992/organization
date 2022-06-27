<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/starter-template/">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">


    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=LcoqQyEroV-BuQfHoYLmJA2TY2vbBneUztLEihZKUWH8s8UjNsnqaaTchE_8ujU95zu63Fb0vzbsl5SYjj_VbGa5Bg2OSsvDdQFCyrwJ1sg" charset="UTF-8"></script>
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <!-- Include Required Prerequisites -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3.4.1/css/bootstrap.css" />

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>



</head>

<body>
    <div class="container">
        <?php echo validation_errors(); ?>
        <?php echo form_open('admin/admin_login/login'); ?>
        <form>
            <div class="row" style="width:800px; margin:0 auto;">
                <div class="col-md-4 offset-md-4" style="width:800px; margin:0 auto;">
                    <h1 class="text-center"> Admin-Login </h1>

                    <div class="form-group">
                        <label name="name">Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                        <label name="name">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Admin-Login</button>


                    </div>
                </div>
            </div>
        </form>
        <div class="row" style="width:800px; margin:0 auto;">
            <div class="col-md-4 offset-md-4"><a class="btn btn-warning pull-left" href="<?php echo base_url(); ?>employee">Employee-Login</a>
            </div>
</body>

</html>