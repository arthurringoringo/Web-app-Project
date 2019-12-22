<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lending-Library</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/menu.js"></script>
    <link href="J:\bootstrap\bootstrap-3.3.6-dist\css\bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="J:\bootstrap\bootstrap-3.3.6-dist\css\cutom.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"</script>
    <script src="J:\bootstrap\bootstrap-3.3.6-dist\js\bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script src="includes/verify.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />


</head>

<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <?php include ("includes/sidebar.php") ?>
    </div>

    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-dark" id="menu-toggle"><i class="fa fa-bars"></i>  Menu</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </nav>
        <!--General div for main page-->
        <div class="container-fluid mt-4 justify-content-center ">
            <h2 class="text-center">CHECK IN </h2>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                require('processes/in-process.php');
            }
            ?>
            <form action="checkin.php" id="regform" method="POST" name="regform"  enctype="multipart/form-data" onsubmit="return checked();">


                <div class="form-group row">
                    <label for="id" class="col-sm-1 col-form-label">ID:</label>
                    <div class="col-5 sm-5 ">
                        <select class="form-control " required id="id" name="id">
                            <option value=""><-- Please Select Item --></option>
                            <?php

                            require ('includes/db.inc.php');
                            $sql = "SELECT ID_number,Item FROM Assets WHERE Status ='Unavailable'";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                echo '<option value="'. $row['ID_number'] .'">'.$row['ID_number'].$row['Item'].'</option>';

                            }
                            ?>
                        </select>
                    </div>
                </div>




                <div class="form-group row">
                    <label for="condition" class="col-sm-1 col-form-label">Check in Condition:</label>
                    <div class="col-5 sm-5 ">
                        <select class="form-control "  required id="condition" name="condition">
                            <option value="Good">(1)Good</option>
                            <option value="Bad">(2)Bad</option>
                            <?php if (isset($_POST['condition']))  echo $_POST['condition'];  ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="notes" class="col-sm-1 col-form-label">Notes:</label>
                    <div class="col-5 sm-5">
                        <textarea class="form-control" required id="notes" rows="3" name="notes" value="<?php if (isset($_POST['notes']))  echo $_POST['notes'];  ?>"></textarea>
                    </div>
                </div>






                <div class="form-group row">
                    <div class="col-auto my-1">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Check In</button>
                    </div>


                </div>






            </form>




        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>
