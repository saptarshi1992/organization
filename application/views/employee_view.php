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
    <nav class="navbar navbar-inverse ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>.
                </button>
                <a class="navbar-brand" href="#">ORGANIZATION</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-right">

                    <li> <a class="nav-link" href="<?php echo base_url(); ?>employee/logout">Logout</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <form>
            <div class="form-group">

                <label name="firstname">FirstName</label>
                <input type="text" class="form-control" placeholder="firstname" name="firstname" value="<?php echo $employee_data['emp_firstname']; ?>" required readonly>

            </div>
            <div class="form-group">
                <label name="middlename">MiddleName</label>
                <input type="text" class="form-control" placeholder="middlename" name="middlename" value="<?php echo $employee_data['emp_middlename']; ?>" required readonly>
            </div>
            <div class="form-group">
                <label name="lastname">LastName</label>
                <input type="text" class="form-control" placeholder="lastname" name="lastname" value="<?php echo $employee_data['emp_lastname']; ?>" required readonly>

            </div>
            <div class="form-group">
                <label name="DOB">DOB</label>
                <input type="text" class="form-control" name="DOB" value="<?php echo $employee_data['emp_DOB']; ?>" required readonly>

            </div>
            <div class="form-group">
                <label name="age">AGE</label>
                <input type="text" class="form-control" name="age" value="<?php echo $employee_data['emp_age']; ?>" required readonly>

            </div>
            <div class="form-group">
                <label name="email">Emailid</label>
                <input type="text" class="form-control" name="email" value="<?php echo $employee_data['emp_emailid']; ?>" required readonly>

            </div>
            <div class="form-group">
                <label name="mobile">mobile</label>
                <input type="text" class="form-control" name="mobile" value="<?php echo $employee_data['emp_mobilenum']; ?>" required readonly>

            </div>
            <div class="form-group">
                <label name="mobile">Gender</label>
                <input type="text" class="form-control" name="gender" value="<?php echo $employee_data['emp_gender']; ?>" required readonly>

            </div>
            <div class="form-group">
                <label name="mobile">Employee-code</label>
                <input type="text" class="form-control" name="emp_code" value="<?php echo $employee_data['emp_code']; ?>" required readonly>

            </div>




    </div>

    </div>

</body>

</html>