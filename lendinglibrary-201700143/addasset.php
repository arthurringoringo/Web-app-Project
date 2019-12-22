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
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                require('processes/addasset-process.php');
            }
            ?>
            <form action="addasset.php" id="regform" method="POST" name="regform"  enctype="multipart/form-data" onsubmit="return checked();">

                <div class="form-group row">
                    <label for="id"  class="col-sm-1 col-form-label">Item ID:</label>
                    <div class="col-5 sm-5 ">
                        <input type="text" class="form-control"   id="id" placeholder="Item Name" required name="id" value="<?php if (isset($_POST['id']))  echo $_POST['id'];  ?>">
                    </div>
                </div>



                <div class="form-group row">
                    <label for="item"  class="col-sm-1 col-form-label">Item Name:</label>
                    <div class="col-5 sm-5 ">
                        <input type="text" class="form-control"   id="item" placeholder="Item Name" name="item" required value="<?php if (isset($_POST['item']))  echo $_POST['item'];  ?>">
                    </div>
                </div>



                <div class="form-group row">
                        <label for="category" class="col-sm-1 col-form-label">Category:</label>
                    <div class="col-5 sm-5 ">
                        <select class="form-control " id="category" name="category" required>
                            <option value="Category 1">(1)Category</option>
                            <option value="Category 2">(2)Category</option>
                            <option value="Category 3">(3)Category</option>
                             <?php if (isset($_POST['category']))  echo $_POST['category'];  ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="manufacture"  class="col-sm-1 col-form-label">Manufacturer:</label>
                    <div class="col-5 sm-5 ">
                        <input type="text" class="form-control" id="manufacture" placeholder="Manufacturer" required name="manufacture" value="<?php if (isset($_POST['manufacture']))  echo $_POST['manufacture'];  ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="model"  class="col-sm-1 col-form-label">Model:</label>
                    <div class="col-5 sm-5 ">
                        <input type="text" class="form-control" id="model" placeholder="Model" name="model"  required value="<?php if (isset($_POST['model']))  echo $_POST['model'];  ?>">
                    </div>
                </div>


                <div class="form-group row">
                    <label  class="col-sm-1 col-form-label" for="acquiredDate">Acquired date:</label>
                    <div class="col-5 sm-5 " >
                        <input id="acquiredDate"  placeholder="acquired Date" maxlength="40" name="acquiredDate"required  value="<?php if (isset($_POST['acquiredDate']))  echo $_POST['acquiredDate'];  ?>">
                    </div>
                    <script>
                        $('#acquiredDate').datepicker({
                            uiLibrary: 'bootstrap4',
                            format: 'yyyy-mm-dd'
                        });
                    </script>
                </div>

                <div class="form-group row">
                    <label for="c2"  class="col-sm-1 col-form-label">Purchase Price:</label>
                    <div class="col-5 sm-5">
                        <input type="number" value="1000" required min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="c2" name="c2" value="<?php if (isset($_POST['c2']))  echo $_POST['c2'];  ?>" />
                    </div>
                </div>


                <div class="form-group row">
                    <label for="c3"  class="col-sm-1 col-form-label">Current Value:</label>
                    <div class="col-5 sm-5">
                        <input type="number" value="1000" required min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="c3" name="c3" value="<?php if (isset($_POST['c3']))  echo $_POST['c3'];  ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="condition" class="col-sm-1 col-form-label">Condition:</label>
                    <div class="col-5 sm-5 ">
                        <select class="form-control " id="condition" required name="condition">
                            <option value="Good">(1)Good</option>
                            <option value="Bad">(2)Bad</option>
                            <?php if (isset($_POST['condition']))  echo $_POST['condition'];  ?>
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="location" class="col-sm-1 col-form-label">Location:</label>
                    <div class="col-5 sm-5 ">
                        <select class="form-control " id="location" required name="location">
                            <option value="Location-1">(1)Location</option>
                            <option value="Location-2">(2)Location</option>
                            <?php if (isset($_POST['location']))  echo $_POST['location'];  ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="owner" class="col-sm-1 col-form-label">Owner:</label>
                    <div class="col-5 sm-5 ">
                        <select class="form-control " id="owner" name="owner" required>
                            <option value=""><-- Please Select Item --></option>
                            <?php

                            require('includes/db.inc.php');

                            $sql = "SELECT ID,Company FROM Contacts";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                echo '<option value="'. $row['ID'] .'">'.$row['ID'].$row['Company'].'</option>';

                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label  class="col-sm-1 col-form-label" for="retiredDate">Retired Date:</label>
                    <div class="col-5 sm-5 " >
                        <input id="retiredDate"  placeholder="Retired Date" maxlength="40" name="retiredDate" required value="<?php if (isset($_POST['retiredDate']))  echo $_POST['retiredDate'];  ?>">
                    </div>
                    <script>
                        $('#retiredDate').datepicker({
                            uiLibrary: 'bootstrap4',
                            format: 'yyyy-mm-dd'
                        });
                    </script>
                </div>



                <div class="form-group row">
                    <label for="description" class="col-sm-1 col-form-label">Description:</label>
                    <div class="col-5 sm-5">
                        <textarea class="form-control" id="exampleFormControlTextarea1" required rows="3" name="description" value="<?php if (isset($_POST['description']))  echo $_POST['description'];  ?>" ></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="picture" class="col-sm-1 col-form-label">Picture</label>
                <div class="col-5 sm-5">
                    <input type="file" class="form-control-file" id="picture" name="picture">
                </div>
                </div>

                <div class="form-group row">
                    <label for="comment" class="col-sm-1 col-form-label">Comment:</label>
                    <div class="col-5 sm-5">
                        <textarea class="form-control" id="comment" rows="3" required name="comment" value="<?php if (isset($_POST['comment']))  echo $_POST['comment'];  ?>"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-auto my-1">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Add new</button>
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
