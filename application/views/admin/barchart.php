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
                <ul class="nav navbar-nav">
                    <li><?php echo anchor('admin', 'Dashboard', 'title="dashboard home"'); ?></li>



                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <li><a class="nav-link" href="<?php echo base_url(); ?>admin/admin_login/logout">Logout</a></li>


                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <ul class="list-group">

                    <li class="list-group-item"><?php echo anchor('admin/employee/add', 'Add New employee'); ?></li>
                    <li class="list-group-item"><?php echo anchor('admin/barchart', 'Show Barchart Gender-wise'); ?></li>
                </ul>
            </div>
            <div class="col-md-8">


            </div>
            <?php $gender_data; ?>
            <div class="chart-container">
                <div class="bar-chart-container">
                    <canvas id="bar-chart"></canvas>
                </div>
            </div>

        </div>


    </div>
</body>

</html>
<script>
    $(function() {
        //get the bar chart canvas
        var cData = JSON.parse('<?php echo $chart_data; ?>');
        //console.log(cData.emp_gender);
        var ctx = $("#bar-chart");

        //bar chart data
        var data = {
            labels: cData.gender,
            datasets: [{
                label: cData.gender,
                data: cData.num_of_time,
                backgroundColor: [
                    "#DEB887",
                    "#A9A9A9",
                    "#DC143C",
                    "#F4A460",
                    "#2E8B57",
                    "#1D7A46",
                    "#CDA776",
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                ],
                borderColor: [
                    "#CDA776",
                    "#989898",
                    "#CB252B",
                    "#E39371",
                    "#1D7A46",
                    "#F4A460",
                    "#CDA776",
                    "#DEB887",
                    "#A9A9A9",
                    "#DC143C",
                    "#F4A460",
                    "#2E8B57",
                ],
                borderWidth: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
            }]
        };
        //console.log(data);
        //options
        var options = {
            responsive: true,
            title: {
                display: true,
                position: "top",
                text: "Gender-wise Registered Employee Count",
                fontSize: 18,
                fontColor: "#111"
            },
            legend: {
                display: true,
                position: "bottom",
                labels: {
                    fontColor: "#333",
                    fontSize: 16
                }
            }
        };

        //create bar Chart class object
        var chart1 = new Chart(ctx, {
            type: "bar",
            data: data,
            options: options
        });

    });
</script>